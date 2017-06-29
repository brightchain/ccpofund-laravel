<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Menu;
use App\Model\Recruit;

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
    	$recruit=Recruit::orderBy('order')->orderBy('updated_at', 'DESC')->get();
        $title='招贤纳士';
        return view('contact.recruit',compact('recruit','title'));
    }
}
