<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    //社会责任列表页
    public function index()
    {
    	return view('social.social');
    }


}
