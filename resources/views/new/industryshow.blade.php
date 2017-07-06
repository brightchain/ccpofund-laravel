@extends('common.layouts')
@section('title','行业资讯')

    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
      <img src="http://www.ccpofund.com/img/social.jpg" alt="Image-1" width="100%" height="auto">
    </div>       
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   	<div class="row c-menu-left">
                     	<div class="c-menu-left-img">
                            <span style="background-image: url(http://www.ccpofund.com/img/home.png);"></span>
                     	    <a href="{{url('/')}}">首页</a>
                        </div>
                     	<div class="c-menu-left-img">
                            <span style="background-image: url(http://www.ccpofund.com/img/arrows.png);"></span>
                            <a href="{{route('inheritance')}}">新闻中心</a>
                        </div>
                   	</div>
                </div>
                <div class="col-md-6">
                   	<div class="row">
                     	<div class="c-menu-right">
                     	
                     	</div>
                   	</div>
                </div>
            </div>
        </div>              
    </div>
    <div class="c-content-box c-bg-white" style="padding-top: 15px;">
        <div class="container" >
            <div class="col-md-12" >
                <div class="row" style="border-top: 1px solid #c9caca;">   
                    <div class="c-text-content">
                        <div class="c-title-center">
                            <h1>{{$news->title}}</h1>
                            <p>{{$news->created_at}}</p>
                        </div>
                      
                        <p style="font-size: 12.5px;color: #727171;text-align: center;">
                         {!!$news->content!!}</p>
                                 
                    </div>
                            
                           
                       
                    </div>
                </div>
            </div>
        </div>       
    </div>
    @stop