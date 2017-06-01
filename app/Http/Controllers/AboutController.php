<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //公司简介
    public function index()
    {
    	return view('about.company');
    }

    //核心优势
    public function core()
    {
        return view('about.core');
    }

    //管理团队
    public function team()
    {
    	return view('about.team');
    }

    //企业文化
    public function culture()
    {
        return view('about.culture');
    }

    //大事记
    public function history()
    {
        return view('about.history');
    }
}
