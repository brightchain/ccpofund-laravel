@extends('common.layouts')
@section('title','联系我们')

    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="../img/contactbj.jpg" alt="Image-1" width="100%" height="auto">
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
							<a href="{{route('contactus')}}">联系我们</a>
						</div>
	               	    @section('menu-left')
	               	    @show
	               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span>
                            <a href="{{route('contactus')}}">联系我们</a></span>
               			<span>
                            <a href="{{route('recruit')}}">招贤纳士</a></span>
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
                    <div class="text-content" style="padding-right: 0">
                    	@section('text-content')
                    	@show
                    </div>
                </div>
            </div>
        </div>       
    </div>
    @stop