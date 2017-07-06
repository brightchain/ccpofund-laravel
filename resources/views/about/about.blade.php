@extends('common.layouts')
@section('title',$title)

    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="../img/c-bj.png" alt="Image-1" width="100%" height="auto">
            </div>
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
	               	<div class="row c-menu-left">
	               	    <div class="c-menu-left-img">
		               	    <span style="background-image: url(../img/home.png);"></span>
							<a href="{{route('company')}}">关于传承</a>
						</div>
	               	    @section('menu-left')
	               	    @show
	               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span><a href="{{route('company')}}">公司简介</a></span>
               			<span><a href="{{route('core')}}">核心优势</a></span>
               			<span><a href="{{route('team')}}">管理团队</a></span>
               			<span><a href="{{route('culture')}}">企业文化</a></span>
               			<span><a href="{{route('history')}}">大事记</a></span>
               		</div>
               	</div>
              </div>
            </div>
        </div>              
    </div>
    <div class="c-content-box c-bg-white" style="padding-top: 15px;">
        <div class="container" >
            <div class="col-md-8" >
                <div class="row" style="border-top: 1px solid #c9caca;border-right: 1px solid #c9caca;">   
                    <div class="text-content">
                    	@section('text-content')
                    	@show
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
	            <div class="row" style="border-top: 1px solid #c9caca;"> 
		                @include('common.rightside')     
                </div>
            </div> 
        </div>       
    </div>
    @stop