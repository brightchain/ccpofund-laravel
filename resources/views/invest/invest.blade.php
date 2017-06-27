@extends('common.layouts')
@section('title','投资运营')
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="css/socicon.css" rel="stylesheet" type="text/css" /> -->
    <link href="http://localhost/css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="http://localhost/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="http://localhost/css/ilightbox.css" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="http://localhost/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="http://localhost/css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="http://localhost/css/custom.css" rel="stylesheet" type="text/css" />
    @stop
    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="http://localhost/img/investbj.jpg" alt="Image-1" width="100%" height="auto">
            </div>
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
	               	<div class="row c-menu-left">
	               	    <div class="c-menu-left-img">
		               	    <span style="background-image: url(http://localhost/img/home.png);"></span>
							<a href="{{route('funds')}}">基金管理</a>
						</div>
	               	    @section('menu-left')
	               	    @show
	               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span><a href="{{route('property')}}">存量物业并购</a></span>
               			<span><a href="{{route('urban')}}">城市更新</a></span>
                        <span><a href="{{route('asset')}}">资产管理</a></span>
                        <span><a href="{{route('real')}}">地产开发</a></span>
                        <span><a href="{{route('cases')}}">成功案例</a></span>
               			
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