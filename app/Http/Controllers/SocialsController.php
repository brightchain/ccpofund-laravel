<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Social;

class SocialsController extends Controller
{
    //社会责任列表页
    public function index()
    {   
    	$socials=Social::orderBy('order')->orderBy('updated_at','desc')->paginate(4);
    	
    	return view('social.social',compact('socials'));
    }
    
    //社会责任内容页
    public function show($id)
    {
       $socials=Social::findOrFail($id);

       return view('social.list',compact('socials'));
    }

}
