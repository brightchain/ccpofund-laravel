<?php

namespace App\Http\Controllers;

use App\Model\Fund;
use Illuminate\Http\Request;

class FundsController extends Controller
{
    /**
     * 基金产品栏目
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index($id=1)
    {
        //
        return view('fund.index');
    }
    
    //基金发行栏目
    public function issues()
    {
        return view('fund.issue');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function show(fund $fund)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function edit(fund $fund)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fund $fund)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fund  $fund
     * @return \Illuminate\Http\Response
     */
    public function destroy(fund $fund)
    {
        //
    }
}
