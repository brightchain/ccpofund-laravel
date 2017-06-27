<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Menu;

class ContactController extends Controller
{
    //联系我们
    public function index()
    {
    	$us=Menu::where('name','us')->first();
    	$title=$us->title;
      
    	return view('contact.contactus',compact('us','title'));
    }

    public function recruit()
    {
    	return view('contact.recruit');
    }
}
