<?php

namespace App\Http\Controllers;

use App\Department;
use App\Language;
use App\Order;
use App\OrderStatus;
use App\TranslationField;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Integer;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        $translation_fields = TranslationField::all();
        return view('vazhenegar.DashboardCustomerNewOrder',
            compact('languages', 'translation_fields')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'OrderSubject' => ['required', 'max:200'],
            'source_lang' => ['required'],
            'dest_lang' => ['required'],
            'TranslationField' => ['required'],
            'OrderFile' => ['required', 'max:19999', 'mimes:rar,zip'],
            'NewOrderDeliveryDate' => ['required'],
            'NewOrderDeliveryDateAlt' => ['required'],
            'TranslationParts' => ['nullable', 'array'],
            'Description' => ['nullable', 'max:500'],
        ];


        $this->validate($request, $rules);

        $DeliveryDT = DateTimeConversion($request->input('NewOrderDeliveryDateAlt'), 'G');
        $TranslationParts = serialize($request->input('TranslationParts'));

        $Order = new Order;
        $CurrentUser = Auth::user();

        $filename = '';
        if ($request->hasFile('OrderFile')) {
            $uploaded = $request->file('OrderFile');
            $filename = time() . '.' . $uploaded->getClientOriginalExtension();  //FirstName-LastName-timestamps.extension
            $uploaded->storeAs('public\Orders\\'.$CurrentUser->id, $filename);
        }

        $Order->user_id = $CurrentUser->id;
        $Order->OrderSubject = $request->input('OrderSubject');
        $Order->DeliveryDate = $DeliveryDT;
        $Order->RelatedDepartment = Department::where('DepartmentName', 'ترجمه')->value('id');
        $Order->SourceLanguage = $request->input('source_lang');
        $Order->DestLanguage = $request->input('dest_lang');
        $Order->TranslationField = $request->input('TranslationField');
        $Order->TranslationParts = $TranslationParts;
        $Order->status_id = 1; //در حال انتظار برای بررسی و تعیین قیمت
        $Order->Description = $request->input('Description');
        $Order->OrderFile = $filename;

        $Order->save();

        //return to dashboard home page with success message
        session()->flash('status', 'Order Stored');
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Order $Order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $Order)
    {
        $Order->SourceLanguage=Language::where('id',$Order->SourceLanguage)->value('LanguageName');
        $Order->DestLanguage=Language::where('id',$Order->DestLanguage)->value('LanguageName');

        //to show related translators list in admin page of order specs (array)
        $MatchedTranslators=TranslatorsList($Order->TranslationField, $Order->SourceLanguage, $Order->DestLanguage);

        $Order->RegisterDate=DateTimeConversion($Order->RegisterDate,'J');
        $Order->DeliveryDate=DateTimeConversion($Order->DeliveryDate,'J');
        $Order->TranslationField=TranslationField::where('id',$Order->TranslationField)->value('FieldName');

        $TranslatorsList=[];
        $RelatedCustomer=User::where('id',$Order->user_id)->first();
        foreach ($MatchedTranslators as$matchedTranslator)
        {
            $TranslatorsList[]=[
                'id'=>$matchedTranslator,
                'FirstName'=>User::where('id',$matchedTranslator)->value('FirstName'),
                'LastName'=>User::where('id',$matchedTranslator)->value('LastName'),
            ];
        }

        return view('vazhenegar.DashboardNewOrderSpecs',compact('Order','RelatedCustomer','TranslatorsList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $Order)
    {
        return view('vazhenegar.DashboardAdminOrderEdit',compact('Order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $Order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $Order)
    {
        $request->has('OrderSubject') ? $Order->OrderSubject=$request->input('OrderSubject'): null;
        $request->has('Description') ? $Order->Description=$request->input('Description'): null;
        session()->flash('OrderStatus', 'Updated');

        if ($request->has('WordCount') && $request->has('TotalPrice')){
            $Order->Amount=$request->input('WordCount');
            $Order->TotalPrice=$request->input('TotalPrice');
            $Order->status_id=2;
            session()->flash('OrderStatus', 'PriceAdded');
        }
        $Order->save();
        return redirect('/dashboard/Order/'.$Order->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    //save user invoice payment in db
    public function payment($user_id, $order_id)
    {

    }

    // show list of orders that registered by specific user
    public function customerRegisteredOrders()
    {
        $CustomerId=Auth::user()->getAuthIdentifier();
        $CustomerOrders=CustomerRegisteredOrders($CustomerId);
        foreach ($CustomerOrders as $order)
        {
            $order->RegisterDate=DateTimeConversion($order->RegisterDate,'J');
            $order->DeliveryDate=DateTimeConversion($order->DeliveryDate,'J');
            $order->Status=OrderStatus::where('id',$order->status_id)->value('Status');
        }
        return view('vazhenegar.DashboardCustomerOrdersList',compact('CustomerOrders'));
    }

    public function InvoiceSubmit($order_id, $paid_price)
    {
        //here should save the price of invoice of an order to (paid price) field of that order in db.
        Order::where('id', $order_id)->update(['PaidPrice'=>$paid_price, 'status_id'=>3]);

    }

    public function PaidOrdersList()
    {
        $PaidOrdersList= PaidInvoices();
        foreach ($PaidOrdersList as $order)
        {
            $order->RegisterDate=DateTimeConversion($order->RegisterDate,'J');
            $order->DeliveryDate=DateTimeConversion($order->DeliveryDate,'J');
            $order->TranslationField=TranslationField::where('id',$order->TranslationField)->value('FieldName');
            $order->SourceLanguage=Language::where('id',$order->SourceLanguage)->value('LanguageName');
            $order->DestLanguage=Language::where('id',$order->DestLanguage)->value('LanguageName');
        }
        return view('vazhenegar.DashboardAdminPaidInvoicesOrdersList',compact('PaidOrdersList'));

    }

    public function InvoiceAcceptance($order_id)
    {
        Order::where('id', $order_id)->update(['status_id'=>4]);
        return back();

    }

    public function download($user_id,$OrderFile)
    {
        return response()->download(storage_path("app/public/Orders/{$user_id}/{$OrderFile}"));
    }

}
