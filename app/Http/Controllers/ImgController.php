<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * 编辑器图片上传保存功能
     */
    public function uploadImages(Request $request)
    {
        $file = $request->file('image');
            // 第一个参数代表目录, 第二个参数代表我上方自己定义的一个存储媒介
            $path = 'http://localhost/upload/'.$file->store('image', 'admin');
            
            return response($path);
    }
}