@extends('invest.invest')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(http://www.ccpofund.com/img/arrows.png);"></span>
   	    <a href="{{route('asset')}}">{{$title}}</a>
    </div>
@stop
@section('text-content')
     <img src="http://www.ccpofund.com/img/asset.jpg" alt="" class="img-responsive center-block">
     <div style="margin-top: 30px;font-size: 12.5px;line-height: 21px;"> 
          <p style="text-indent: 2em;">
            <!-- 利用传承基金在房地产基金领域各专业优势，为物业持有者提供融资金融服务、设计改造建议、出租运营管理、代理销售退出、物业管理服务等资产管理服务。 -->
            {!!$asset->content!!}
          </p>
          <p style="padding-top:200px;">
            成功案例: <!-- <span><a href="" style="padding-left: 20px;"></a></span> -->
            @foreach($invest as $invest)
            <span>
              <a href="{{route('invest',$invest->id)}}"  style="padding-left: 20px">{{$invest->title}}</a>
            </span>
            @endforeach
          </p>
     </div>          
	
 @stop