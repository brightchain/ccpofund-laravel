<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use App\Model\History;
use App\Model\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //公司简介
    public function index()
    {
    	$about=Menu::where('name','company')->first();
    	$title=$about->title;
      
    	return view('about.company',compact('about','title'));
    }

    //核心优势
    public function core()
    {
        $about=Menu::where('name','core')->first();
        $title=$about->title;

        return view('about.core',compact('about','title'));
    }

    //管理团队
    public function team()
    {
    	$team=Team::all();
        
        $title='管理团队';

    	return view('about.team',compact('team','title'));
    }

    //企业文化
    public function culture()
    {
        $about=Menu::where('name','culture')->first();
        $title=$about->title;
        
        return view('about.culture',compact('about','title'));
    }

    //大事记
    public function history()
    {
        $about=Menu::where('name','history')->first();
        $history=History::all();
        
        $title=$about->title;
        return view('about.history',compact('about','title','history'));
    }

    //法律申明
    public function law()
    {
        $law=Menu::where('name','law')->first();
        $title=$law->title;
      
        return view('about.law',compact('law','title'));
    }
}
