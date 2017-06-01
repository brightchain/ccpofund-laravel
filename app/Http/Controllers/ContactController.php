<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //联系我们
    public function index()
    {
    	return view('contact.contactus');
    }

    public function recruit()
    {
    	return view('contact.recruit');
    }
}
