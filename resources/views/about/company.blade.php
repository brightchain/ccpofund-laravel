@extends('common.layouts')
@section('title','公司简介')
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
    <img src="../img/c-bj.png" alt="Image-1" width="100%" height="auto">
            </div>
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
               	<div class="row c-menu-left">
               	    <div class="c-menu-left-img"><span style="background-image: url(../img/home.png);"></span>
               	    <a href="">关于传承</a></div>
               	    <div class="c-menu-left-img"><span style="background-image: url(../img/arrows.png);"></span>
               	    <a href="">公司简介</a></div>
               		
               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span><a href="">公司简介</a></span>
               			<span><a href="">核心优势</a></span>
               			<span><a href="">管理团队</a></span>
               			<span><a href="">企业理念</a></span>
               			<span><a href="">大记事</a></span>
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
                        	<h3>深圳市传承基金管理有限公司</h3>
                        	<h3>SHENZHENG INHERITANCE FUND MANAGEMENT CO.,LTD</h3>
                        	<p style="font-size: 14.5px;text-indent: 2em;padding-top:40px;">深圳市传承基金管理有限公司（简称传承基金）是一家专业从事基金发行与管理，以自有资金和委托资产进行投融资活动并提供资产管理服务的私募基金管理公司。专注于不动产投资领域，业务涵括存量物业并购、城市更新、地产开发、资产管理。在选择选择标的方面，传承基金主要聚焦于深圳及一线城市具有优质潜力的成熟标的，涉及商业、酒店、办公、住宅、工厂等。</p>
<p style="font-size: 14.5px;text-indent: 2em;padding-bottom: 40px;">
传承基金依托于母公司传承集团的雄厚实力、专业的投资精英团队以及集团在地产、金融领域多年积累的优质资源及投资经验，自成立以来发展迅速。截止2017年3月，传承基金累计管理资产规模超35亿，成功运作民生银行大厦、金丽豪苑、文华花园等近20个优质项目。对应发行汇宝、汇富、汇金三大系列基金产品逾25只，平均每月推出一只新产品，已成功兑付基金产品20只，到期安全退出资金达28亿，实现100%安全兑付。</p>
                            
                            <img src="../img/about.png" alt=""  class="img-responsive center-block">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4" >
                    <div class="row" style="border-top: 1px solid #c9caca;"> 
                        <div class="case-img">
                        <a href=""><img src="../img/case.png" alt=""  class="img-responsive "></a>
                        <a href=""><img src="../img/fund.png" alt=""  class="img-responsive "></a>
                        <a href=""><img src="../img/history.png" alt=""  class="img-responsive "></a>
                        </div>
                        </div>
                    </div>

                    
                </div>       
            
        </div>
    @stop