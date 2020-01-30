<?php

namespace App\Http\Controllers;

use App\Department;
use App\Language;
use App\Order;
use App\TranslationField;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $Order->UserId = $CurrentUser->id;
        $Order->OrderSubject = $request->input('OrderSubject');
        $Order->DeliveryDate = $DeliveryDT;
        $Order->RelatedDepartment = Department::where('DepartmentName', 'ترجمه')->value('id');
        $Order->SourceLanguage = $request->input('source_lang');
        $Order->DestLanguage = $request->input('dest_lang');
        $Order->TranslationField = $request->input('TranslationField');
        $Order->TranslationParts = $TranslationParts;
        $Order->StatusId = 1; //در حال انتظار برای بررسی و تعیین قیمت
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
        $Order->RegisterDate=DateTimeConversion($Order->RegisterDate,'J');
        $Order->DeliveryDate=DateTimeConversion($Order->DeliveryDate,'J');
        $Order->TranslationField=TranslationField::where('id',$Order->TranslationField)->value('FieldName');
        $Order->SourceLanguage=Language::where('id',$Order->SourceLanguage)->value('LanguageName');
        $Order->DestLanguage=Language::where('id',$Order->DestLanguage)->value('LanguageName');
        return view('vazhenegar.DashboardNewOrderSpecs',compact('Order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
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
        $Order->Amount=$request->input('WordCount');
        $Order->TotalPrice=$request->input('TotalPrice');
        $Order->StatusId=2;
        $Order->save();
        session()->flash('OrderStatus', 'Updated');
        return back();


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
}
