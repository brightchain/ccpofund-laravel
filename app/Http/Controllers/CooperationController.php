<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Menu;

class CooperationController extends Controller
{
    //合作流程
    public function index()
    {
    	$cooper=Menu::where('name','cooper')->first();
    	$title=$cooper->title;
      
    	return view('cooper.ation',compact('cooper','title'));
    }

    //基金登记证明
    public function certify()
    {
    	$cooper=Menu::where('name','certify')->first();
    	$title=$cooper->title;
      
    	return view('cooper.ation',compact('cooper','title'));
    }

    
}
