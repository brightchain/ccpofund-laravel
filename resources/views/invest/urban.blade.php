@extends('invest.invest')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(http://www.ccpofund.com/img/arrows.png);"></span>
   	    <a href="{{route('urban')}}">{{$title}}</a>
    </div>
@stop
@section('text-content')
   <img src="http://www.ccpofund.com/img/urban.jpg" alt="" class="img-responsive center-block">
   <div style="margin-top: 30px;font-size: 12.5px;line-height: 21px;">
      <p style="text-indent: 2em;">
        <!-- 传承基金对城市中陈旧区域物业重新进行设计改造、投资建设、以全新的城市功能替换功能性衰败的物理空间，使之重新发展和繁荣。一方面进行建筑物等硬件设施的改造，另一方面对生态环境、公共空间、文化风貌等软性环境进行升级。 -->
        {!!$urban->content!!}
      </p>
      <p style="padding-top:200px;">
        成功案例: 
        <!-- <span>
          <a href="" style="padding-left: 20px;">老街新寓</a>
        </span>
        <span>
          <a href="" style="padding-left: 20px">荣村小区</a>
        </span> -->
        @foreach($invest as $invest)
            <span>
              <a href="{{route('invest',$invest->id)}}"  style="padding-left: 20px">{{$invest->title}}</a>
            </span>
            @endforeach
      </p>
   </div>          
	
 @stop