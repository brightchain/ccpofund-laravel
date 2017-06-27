@extends('common.layouts')
@section('title',$title)
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="css/socicon.css" rel="stylesheet" type="text/css" /> -->
    <link href="../../css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="../css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="../css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="../css/settings.css" rel="stylesheet" type="text/css" />
    <link href="../css/layers.css" rel="stylesheet" type="text/css" />
    <link href="../css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="../css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="../css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="../css/ilightbox.css" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="../css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="../css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="../css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="../css/custom.css" rel="stylesheet" type="text/css" />
    @stop
    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="../img/funds.png" alt="Image-1" width="100%" height="auto">
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
							<a href="{{route('funds')}}">{{$title}}</a>
						</div>
	               	    @section('menu-left')
	               	    @show
	               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span><a href="{{route('issues')}}">基金概况</a></span>
               			<span><a href="{{route('funds')}}">基金产品</a></span>
               			
               		</div>
               	</div>
              </div>
            </div>
        </div>              
    </div>
    <div class="c-content-box c-bg-white" style="padding-top: 15px;">
        <div class="container" >
            <div class="col-md-3" >
                <div class="row" style="border-top: 1px solid #c9caca;"> 
              
                    
                    <ul style="border-right: 1px solid #c9caca;margin:0;padding:0" class="fundac">
                      <h3 style="background-color: #dab866;text-align: center;color: #fff;margin-top: 45px;font-size: 16.6px;line-height: 35px;height: 35px;margin-bottom: 0" >所有产品</h3>
                    	<!-- <li style="border:1px solid #d3d3d3;border-right:none;background:#efefef;color: #fff;height: 35px;line-height: 35px;font-size: 12.5px;text-align:center;   ">
                    		传承汇宝6号地产并购私募投资基金（一期）
                    	</li>
                    	<li style="border:1px solid #d3d3d3;border-top:none;border-right:none;height: 35px;line-height: 35px;font-size: 12.5px;text-align:center;  ">
                    		传承汇宝6号地产并购私募投资基金（一期）
                    	</li>
                    	<li style="border:1px solid #d3d3d3;border-top:none;border-right:none;height: 35px;line-height: 35px;font-size: 12.5px;text-align:center;  ">
                    		传承汇宝6号地产并购私募投资基金（一期）
                    	</li> -->
                      @foreach($funds as $fund)
                      <li style="border:1px solid #d3d3d3;border-right:none;border-top:none;height: 35px;line-height: 35px;font-size: 12.5px;text-align:center;">
                        {{$fund->title}}
                      </li>
                    	@endforeach
                    </ul>
               
                </div>
            </div>
            <div class="col-md-9" >
	            <div class="row" style="border-top: 1px solid #c9caca;"> 
	                <div class="text-content">
                        <table   width="100%" class="funds-table">
                      <caption style="font-size: 16.6px;line-height: 35px;color: #dab866" >{{$fundf->title}}</caption>
                      <tr >
                        <td class="funds-tables-left">基金名称</td>
                        <td>{{$fundf->title}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">基金编号</td>
                        <td>{{$fundf->number}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">成立时间</td>
                        <td>{{$fundf->setup}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">备案时间</td>
                        <td>{{$fundf->recore}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">基金备案阶段</td>
                        <td>{{$fundf->stage}}</td>
                      </tr>
                       <tr>
                        <td class="funds-tables-left">基金类型</td>
                        <td>{{$fundf->type}}</td>
                      </tr>
                       <tr>
                        <td class="funds-tables-left">币种</td>
                        <td>{{$fundf->currency}}</td>
                      </tr>
                       <tr>
                        <td class="funds-tables-left">基金管理人名称</td>
                        <td>{{$fundf->name}}</td>
                      </tr>
                       <tr>
                        <td class="funds-tables-left">管理类型</td>
                        <td>{{$fundf->mantype}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">托管人名称</td>
                        <td>{{$fundf->trustee}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">主要投资领域</td>
                        <td>{{$fundf->field}}</td>
                      </tr>
                      <tr>
                        <td class="funds-tables-left">运作状态</td>
                        <td>{{$fundf->status}}</td>
                      </tr>
                       <tr>
                        <td class="funds-tables-left">基金信息最后更新时间</td>
                        <td>{{$fundf->changetime}}</td>
                      </tr>
                       <tr>
                        <td class="funds-tables-left">基金协会特别提示(针对基金)</td>
                        <td>{{$fundf->prompt}}</td>
                      </tr>
                    </table>
                    </div>
                </div>
            </div> 
        </div>       
    </div>
    @stop