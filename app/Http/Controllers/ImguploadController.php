<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImguploadController extends Controller
{
    
    public function uploads(Request $request)
    {
    	  $file = $request->file('image');
             // 第一个参数代表目录, 第二个参数代表我上方自己定义的一个存储媒介
            $path = 'http://www.ccpofund.com/upload/'.$file->store('image', 'admin');
            
            return response($path);
       
        // 注意看下方模版代码
       
    }
}
