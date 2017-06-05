<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Newcenter;

class NewsController extends Controller
{
    //传承动态列表页
    public function chuan()
    {
	    $news=Newcenter::where('menu','c')
	          ->orderBy('order')
	          ->orderBy('created_at','desc')
	          ->paginate(4);
	    $first=$news->first();
	    $news=array_except($news,[0]);
	    
	    return view('new.inheritance',compact('news','first'));
    }

    //传承动态内容页
    public function show($id)
    {
    	$news=Newcenter::findOrFail($id);

    	return view('new.inheritanceshow',compact('news'));

    }

    //行业资讯列表页
    public function industry()
    {
    	$news=Newcenter::where('menu','h')
    	      ->orderBy('order')
	          ->orderBy('created_at','desc')
	          ->paginate(4);
	    $first=$news->first();
	    $news=array_except($news,[0]);

	    return view('new.industry',compact('news','first'));
    }

    //行业资讯内容页
    public function industryshow($id)
    {
    	$news=Newcenter::findOrFail($id);

    	return view('new.industryshow',compact('news'));
    }
}
