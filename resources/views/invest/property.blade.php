@extends('invest.invest')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(http://www.ccpofund.com/img/arrows.png);"></span>
   	    <a href="{{route('property')}}" class="nav-active">{{$title}}</a>
    </div>
@stop
@section('text-content')
     <img src="http://www.ccpofund.com/img/property01.jpg" alt="" class="img-responsive center-block">
     <div style="margin-top: 30px;font-size: 12.5px;line-height: 21px;">
        <p style="text-indent: 2em;">
          <!-- 传承基金运用成熟的存量物业并购运作体系，精准判断收购时机，有效控制运作风险。在获得标的物业所有权后对标的物业进行更新优化（如产权拆分、立面翻新、环境美化）、整体改造、提升资产品质从而获得高溢价择机出售实现收益并退出。 -->
          {!!$property->content!!}
        </p>
        <img src="http://www.ccpofund.com/img/property02.jpg" alt="" class="img-responsive center-block">
          <p style="padding-top:80px;">
            成功案例: 
            <!-- <span>
              <a href="" style="padding-left: 20px;">文化花园</a>
            </span>
            <span>
              <a href="" style="padding-left: 20px">金丽豪苑</a>
            </span>
            <span>
              <a href="" style="padding-left: 20px">武汉爱家</a>
            </span> -->
            @foreach($invest as $invest)
            <span>
              <a href="{{route('invest',$invest->id)}}"  style="padding-left: 20px">{{$invest->title}}</a>
            </span>
            @endforeach
          </p>
     </div>          
	
 @stop