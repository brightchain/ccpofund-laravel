<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Newcenter;
use App\Model\Social;
use App\Model\Silde;

class HomepageController extends Controller
{
    public function index()
    {
    	$news=Newcenter::where('menu','c')
    	      ->where('top',1)
	          ->orderBy('order')
	          ->orderBy('created_at','desc');
	    $new=$news->first();
	    $socials=Social::orderBy('order')->orderBy('created_at','desc');
    	$social=$socials->First();
        $slides=Silde::orderBy('order')->get();
    	return view('index',compact('new','social','slides'));
    }
}
