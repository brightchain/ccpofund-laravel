@extends('common.layouts')
@section('title','社会责任')
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
      <img src="../img/social.jpg" alt="Image-1" width="100%" height="auto">
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
                     	    <a href="{{url('/')}}">首页</a>
                        </div>
                     	<div class="c-menu-left-img">
                            <span style="background-image: url(../img/arrows.png);"></span>
                            <a href="{{route('socials')}}">社会责任</a>
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
            <div class="col-md-8" >
                <div class="row" style="border-top: 1px solid #c9caca;">   
                    <div class="text-content">
                    	<ul class="social-ul">
                        @foreach($socials as $social)
                            <li style="padding: 20px 0;margin-bottom: 20px;">
                                <div class="row">
                                    <div class="col-md-3">
                                    <a href="{{url('socials',$social->id)}}">
                                        <img src="../upload/{{$social->thumbnail}}" alt="" class="img-responsive"></a>
                                    </div>
                                    <div class="com-md-9">
                                        <h3 class="c-social-date">{{$social->updated_at->format('Y-m-d')}}</h3>
                                        <a href="{{url('socials',$social->id)}}" class="c-social-title">
                                            <h3 >{{$social->title}}</h3>
                                        </a>
                                        <p style="font-size: 12.5px;color: #727171">
                                            {{strip_tags(str_limit($social->content,400))}}
                                            </p>
                                    </div>
                                </div>
                            </li>
                           @endforeach
                           
                        </ul>
                        {{ $socials->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="row" style="border-top: 1px solid #c9caca;"> 
                    <div class="case-img" style="background-image: url('../img/social02.jpg');min-height: 1013px;padding:45px 45px;">
                        <h3 style="color: #c3222c">深圳市传承爱心基金会</h3>
                        <p style="font-size: 12.5px;padding-top: 10px;line-height: 21px;">
                           成立于2014年10月20日，本基金会是由本公司创立、接受员工自愿入会的互助互济性组织，对特困员工实施救助，面向社会开展爱心捐助等活动的爱心救助、非营利性的企业公益性组织，配合社会基本医疗保险的，及时扶助患重大疾病患者家庭,因工残疾导致家庭突发性经济困难，秉承“一方有难多方支援”的传统美德，增强企业凝聚力和向心力。
                        </p>
                    </div>
                </div>
            </div> 
        </div>       
    </div>
    @stop