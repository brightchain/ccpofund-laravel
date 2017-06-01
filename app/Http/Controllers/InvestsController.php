<?php

namespace App\Http\Controllers;

use App\Model\Invest;
use Illuminate\Http\Request;

class InvestsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 案例展示
     * @return \Illuminate\Http\Response
     */
    public function cases()
    {
        
        return view('invest.cases');
    }
    
    //案例展示内容页
    public function show()
    {
        return view('invest.casesshow');
    }
    
    //存量物业并购
    public function property()
    {
        return view('invest.property');
    }
    
    //城市更新
    public function urban()
    {
        return view('invest.urban');
    }
    
    //资产管理
    public function asset()
    {
        return view('invest.asset');
    }
    
    //地产开发
    public function real()
    {
        return view('invest.reales');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function edit(Invest $invest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invest $invest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Invest  $invest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invest $invest)
    {
        //
    }
}
