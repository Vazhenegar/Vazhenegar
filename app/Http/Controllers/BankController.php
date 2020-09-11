<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BankController extends Controller
{

    public function GetBankList()
    {
        return Bank::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function index()
    {
        $BankList = $this->GetBankList();
        return view('vazhenegar.DashboardElements.Admin.BanksList', compact('BankList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $bank = new Bank();
        $filename = '';
        if ($request->hasFile('Logo')) {
            $uploaded = $request->file('Logo');
            $filename = $request->input('BankName') . '.' . $uploaded->getClientOriginalExtension();
            $uploaded->storeAs('public\images\site\\', $filename);
        }

        $bank->BankName = $request->input('BankName');
        $bank->Logo = $filename;
        $bank->MerchantCode = $request->input('MerchantCode');

        $bank->saveOrFail();

        return redirect('/dashboard/Bank');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Bank $bank
     * @return Response
     */
    public function show(Bank $bank)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bank $bank
     * @return Response
     */
    public function edit(Bank $bank)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Bank $bank
     * @return Response
     */
    public function update(Request $request, Bank $bank)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bank $bank
     * @return Response
     */
    public function destroy(Bank $bank)
    {
//
    }


}
