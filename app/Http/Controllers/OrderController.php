<?php

namespace App\Http\Controllers;

use App\Bank;
use App\Department;
use App\Language;
use App\Order;
use App\OrderStatus;
use App\Payment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use nusoap_client;
use App\TranslationField;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\DeclareDeclare;


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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $languages = Language::all();
        $translation_fields = TranslationField::all();
        return view('vazhenegar.DashboardElements.Customer.DashboardCustomerNewOrder',
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
            'OrderFile' => ['required', 'max:49999', 'mimes:rar,zip'],
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
            $uploaded->storeAs('public\Orders\\' . $CurrentUser->id, $filename);
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
     * @param Order $Order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $Order)
    {
        $Order->SourceLanguage = Language::where('id', $Order->SourceLanguage)->value('LanguageName');
        $Order->DestLanguage = Language::where('id', $Order->DestLanguage)->value('LanguageName');

        //to show related translators list in admin page of order specs (array)
        $MatchedTranslators = TranslatorsList($Order->TranslationField, $Order->SourceLanguage, $Order->DestLanguage);

        $Order->RegisterDate = DateTimeConversion($Order->RegisterDate, 'J');
        $Order->DeliveryDate = DateTimeConversion($Order->DeliveryDate, 'J');
        $Order->TranslationField = TranslationField::where('id', $Order->TranslationField)->value('FieldName');

        $TranslatorsList = [];
        $RelatedCustomer = User::where('id', $Order->user_id)->first();
        foreach ($MatchedTranslators as $matchedTranslator) {
            $TranslatorsList[] = [
                'id' => $matchedTranslator,
                'FirstName' => User::where('id', $matchedTranslator)->value('FirstName'),
                'LastName' => User::where('id', $matchedTranslator)->value('LastName'),
            ];
        }

        $OrderStatus = OrderStatus::where('id', $Order->status_id)->value('Status');

//        if translator is determined for an order, this will extract that translator's specifications and show in new order's page
//        if($Order->ResponsibleUserId)
        $ResponsibleTranslator = User::where('id', Order::where('id', $Order->id)->value('ResponsibleUserId'))->first();


        return view('vazhenegar.DashboardElements.SharedParts.DashboardNewOrderSpecs',
            compact('Order', 'RelatedCustomer', 'TranslatorsList', 'OrderStatus', 'ResponsibleTranslator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $Order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $Order)
    {
        return view('vazhenegar.DashboardElements.Admin.DashboardAdminOrderEdit', compact('Order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Order $Order
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Order $Order)
    {
        $request->has('OrderSubject') ? $Order->OrderSubject = $request->input('OrderSubject') : null;
        $request->has('Description') ? $Order->Description = $request->input('Description') : null;
        session()->flash('OrderStatus', 'Updated');

        if ($request->has('WordCount') && $request->has('TotalPrice')) {
            $Order->Amount = $request->input('WordCount');
            $Order->TotalPrice = $request->input('TotalPrice');
            $Order->status_id = 2;
            session()->flash('OrderStatus', 'PriceAdded');
        }
        $Order->save();
        return redirect(route('Order.show', [$Order->id]));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }


    /**
     * show orders depending on user role and list type (all orders, newly registered orders, etc)
     * run get orders function in helpers file
     * @param string $UserRole_id
     * @param string $StatusId
     * @param string $UserId
     * @return mixed
     */
    public function Orders(int $UserRole_id, string $UserId = '', string $StatusId = '')
    {
        return OrdersList($UserRole_id, $UserId, $StatusId);
    }


    /**
     * get list of orders and show in a table
     * @param int $UserRole_id
     * @param string $StatusId
     * @param string $UserId
     * @return mixed
     */
    public function ShowOrdersList(int $UserRole_id, string $UserId = '', string $StatusId = '')
    {
        $List = $this->Orders($UserRole_id, $UserId, $StatusId);
        return view('vazhenegar.DashboardElements.SharedParts.List', compact('List', 'UserId', 'StatusId'));
    }

    public function InvoiceAcceptance($order_id)
    {
        Order::where('id', $order_id)->update(['status_id' => 4]);
        return back();

    }


    /**
     * get translator id from new order admin specs and set responsible user id of specific order to that user id
     * if value of translator id is 0, then this order will be shown to all translators, that match the orders
     * field and languages
     * @param Request $request
     * @param $order_id
     */
    public function AssignToTranslator(Request $request, $order_id)
    {

        if ($request->MatchedTranslator) {
            //one of translators is selected from list
            Order::where('id', $order_id)->update(['ResponsibleUserId' => $request->MatchedTranslator]);

        } else {
            //this order will send to all translators matched to it.

            $TranslatorsList = session('TranslatorsList');

        }
        return back();

    }


    /**
     * get translator id from new order admin specs and set responsible user id of specific order to that user id
     * if value of translator id is 0, then this order will be shown to all translators, that match the orders
     * field and languages
     * @param $order_id
     * @return RedirectResponse
     */
    public function AcceptOrderByTranslator($order_id)
    {
        Order::where('id', $order_id)->update(['status_id' => 5]);

        return back();
    }

    /**
     * upload translated file by translator
     *
     * @param Request $request
     * @param $order_id
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function UploadTranslation(Request $request, $order_id)
    {

        $Order =Order::find($order_id);
        $OrderFileName=explode('.',$Order->OrderFile)[0]; //extract order file name of that order and pick just the filename without extension

        $rules = [
            'TranslatedOrder' => ['required', 'max:49999', 'mimes:rar,zip'],
        ];
        $this->validate($request, $rules);

        $TranslatedFilename = '';
        if ($request->hasFile('TranslatedOrder')) {
            $uploaded = $request->file('TranslatedOrder');
            $TranslatedFilename = $OrderFileName . 'TR' . '.' . $uploaded->getClientOriginalExtension();  //FirstName-LastName-timestamps.extension
            $uploaded->storeAs('public\Orders\\' . $Order->user_id, $TranslatedFilename);
        }

        $Order->status_id = 6;
        $Order->TranslatedOrderFile = $TranslatedFilename;
        $Order->save();

        //return to dashboard home page with success message
        session()->flash('status', 'Translation Stored');
        return redirect('/dashboard');

    }


    /**
     * test payment for customer page of invoice
     * @param $order_id
     * @param $StatusId
     * @return RedirectResponse
     */
    public function StatusUpdate($order_id, $StatusId)
    {
        $Order=Order::find($order_id);
        Order::where('id', $order_id)->update(['status_id' => $StatusId, 'TranslatorPayablePrice' =>$Order->TotalPrice/2]);
        return back();

    }



    /**
     * test payment for customer page of invoice
     * @param $order_id
     * @param $TotalPrice
     * @return RedirectResponse
     */
    public function tstpay($order_id, $TotalPrice)
    {
        Order::where('id', $order_id)->update(['status_id' => 3, 'PaidPrice' => $TotalPrice, 'TrackingCode' => $order_id]);
        return back();

    }

    public function download($user_id, $File)
    {
        return response()->download(storage_path("app/public/Orders/{$user_id}/{$File}"));
    }

    /**
     * Get the response from bank portal.
     *
     * @param Request $request
     */
    public function response(Request $request)
    {
        $order = new Order;
        $MerchantID = Bank::where('BankName', session('Client'))->value('MerchantCode');
        $Authority = $request->get('Authority');
        //get from new order specs customer
        $Amount = session('Amount');

        $data = array('merchant_id' => $MerchantID, 'authority' => $Authority, 'amount' => $Amount);
        $jsonData = json_encode($data);
        $ch = curl_init('https://api.zarinpal.com/pg/v4/payment/verify.json');
        curl_setopt($ch, CURLOPT_USERAGENT, 'ZarinPal Rest Api v1');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ));

        $result = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        $result = json_decode($result, true);
        if ($result['errors']) {

            session()->flash('bank_response', 'انصراف از پرداخت وجه');

        } else {

            if ($result['data']['code'] == 100) {
                $order->where('id', session('OrderId'))->update(['status_id' => 3, 'PaidPrice' => $Amount, 'TrackingCode' => $result ['data']['ref_id']]);
                session()->flash('bank_response', 'پرداخت با موفقیت انجام شد.');


            } else {
                echo 'Transation failed. code:' . $result ['data']['code'];
                session()->flash('bank_response', 'خطا در پرداخت وجه');

            }
        }
//        run show method in this controller
        return redirect(route('Order.show', [session('OrderId')]));
    }

    /**
     * Send Invoice info's to bank portal.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function pay(Request $request)
    {
        $payment = new Payment();
        $invoice = $payment->pay(session('Client'), $request->Amount, $request->Email, $request->Mobile, $request->OrderId);
        return redirect('https://www.zarinpal.com/pg/StartPay/' . $invoice['data']["authority"]);
    }

}
