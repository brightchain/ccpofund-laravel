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

    //管理团队
    public function team()
    {
    	return view('about.team');
    }
}
