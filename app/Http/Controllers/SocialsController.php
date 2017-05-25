<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialsController extends Controller
{
    //社会责任列表页
    public function index()
    {
    	return view('social.social');
    }
    
    //社会责任内容页
    public function show($id)
    {
       return $id;
    }

}
