@extends('common.layouts')
@section('title','投资运营')

    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="/img/investbj.jpg" alt="Image-1" width="100%" height="auto">
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
							<a href="{{route('funds')}}">基金管理</a>
						</div>
	               	    @section('menu-left')
	               	    @show
	               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span><a href="{{route('property')}}" class="{{ Request::is('*property*') ? 'nav-active' : '' }}">存量物业并购</a></span>
               			<span><a href="{{route('urban')}}" class="{{ Request::is('*urban*') ? 'nav-active' : '' }}">城市更新</a></span>
                    <span><a href="{{route('asset')}}" class="{{ Request::is('*asset*') ? 'nav-active' : '' }}">资产管理</a></span>
                    <span><a href="{{route('real')}}" class="{{ Request::is('*real*') ? 'nav-active' : '' }}">地产开发</a></span>
                    <span><a href="{{route('cases')}}" class="{{ Request::is('*cases*') ? 'nav-active' : '' }}">成功案例</a></span>
               			
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