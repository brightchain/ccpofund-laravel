<?php

namespace App\Http\Controllers;

use App\Model\Invest;
use Illuminate\Http\Request;
use App\Model\Invent; 
use App\Model\Menu;

class InvestsController extends Controller
{
    /**
     * Display a listing of the resource.
     * 案例展示
     * @return \Illuminate\Http\Response
     */
    public function cases()
    {
        $invest11=Invent::orderBy('order')->orderBy('updated_at', 'DESC')->paginate(6);
        $title='案例展示';
        
        return view('invest.cases',compact('invest11','title'));
    }
    
    //案例展示内容页
    public function show($id)
    {
        $invest=Invent::findOrFail($id);
        $title='案例展示';

        return view('invest.casesshow',compact('invest','title'));
    }
    
    //存量物业并购
    public function property()
    {
       $property=Menu::where('name','property')->first();
       $title=$property->title;
       $invest=Invent::where('category',1)->get();

       return view('invest.property',compact('property','title','invest'));
    }
    
    //城市更新
    public function urban()
    {
        $urban=Menu::where('name','urban')->first();
        $title=$urban->title;
        $invest=Invent::where('category',2)->get();
       
        return view('invest.urban',compact('urban','title','invest'));
    }
    
    //资产管理
    public function asset()
    {
        $asset=Menu::where('name','asset')->first();
        $title=$asset->title;
        $invest=Invent::where('category',3)->get();
       
        return view('invest.asset',compact('asset','title','invest'));
    }
    
    //地产开发
    public function real()
    {
        $real=Menu::where('name','real')->first();
        $title=$real->title;
        $invest=Invent::where('category',4)->get();
       
        return view('invest.reales',compact('real','title','invest'));
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
