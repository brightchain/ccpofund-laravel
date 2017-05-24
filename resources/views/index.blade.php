@extends('common.layouts')
@section('title','首页')
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <!--<link href="css/socicon.css" rel="stylesheet" type="text/css" /> -->
    <link href="css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="css/settings.css" rel="stylesheet" type="text/css" />
    <link href="css/layers.css" rel="stylesheet" type="text/css" />
    <link href="css/navigation.css" rel="stylesheet" type="text/css" />
    <link href="css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="css/slider.css" rel="stylesheet" type="text/css" />
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="css/ilightbox.css" rel="stylesheet" type="text/css" />
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" />
    @stop
@section('banner')
    <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
            <section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
                <div class="tp-banner-container c-theme">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
                            <!--BEGIN: SLIDE #1 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="img/bg1.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                    <h3 class="c-main-title-circle c-font-27 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> 传承基金,不动产投资专家
                                         </h3>
                                </div>
                            </li>
                            <!--END -->
                            <!--BEGIN: SLIDE #2 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="img/bg-20.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                    <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> JANGO IS OPTIMIZED
                                        <br>TO EVERY DEVELOPMENT </h3>
                                </div>
                                <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="110" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-lg c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn More</a>
                                </div>
                            </li>
                            <!--END -->
                            <!--BEGIN: SLIDE #3 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000" data-thumb="">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                                <img alt="" src="img/bg-19.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="visible-xs" />
                                <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="assets/base/media/video/video-2.mp4" data-videopreload="preload" data-videoloop="none"
                                data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"> </div>
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                    <h3 class="c-main-title-square c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> Let us show you
                                        <br>Unlimited possibilities </h3>
                                </div>
                                <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900" data-start="2000" data-transform_idle="o:1;" data-transform_in="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;"
                                data-transform_out="x:100;y:100;rX:120;scaleX:0.75;scaleY:0.75;o:0;s:900;e:Back.easeInOut;">
                                    <a href="http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314" class="c-action-btn btn btn-lg c-btn-square c-btn-border-2x c-btn-white c-btn-bold c-btn-uppercase">Purchase</a>
                                </div>
                            </li>
                            <!--END -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
    @stop
    @section('content')
     <!-- BEGIN: CONTENT/FEATURES/FEATURES-1 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container ">
                    <div class="row c-bg-grey-1">
                        <div class="col-sm-3 ">
                            <div class="text-center c-bg-white1">
                                <a href="" class="">
                                <p class="c-img-01 c-img">
                                <h3>基金产品</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="text-center c-bg-white1" data-wow-delay="0.2s">
                                <a href="" class="">
                                <p class="c-img-02 c-img">
                                <h3>投资方向</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="text-center c-bg-white1" data-wow-delay="0.4s">
                                <a href="" class="">
                                <p class="c-img-03 c-img">
                                <h3>投资流程</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 c-card ">
                            <div class="text-center c-bg-white1" data-wow-delay="0.6s">
                                <a href="" class="">
                                <p class="c-img-04 c-img">
                                <h3>团队风采</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
            <!-- END: CONTENT/FEATURES/FEATURES-1 -->
            <!--BEGIN:NEWS -->
          <div class="c-content-box c-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="c-content-tile-1 ">
                            <h3 class="c-font-uppercase c-center">传承动态</h3>
                                <div class="c-line-center"></div>
                                <div class="row c-bg-gray"> 
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-content-overlay">
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/new01.png); height: 325px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-content-v-center" data-height="height" style="height: 325px;">
                                            <div class="c-wrapper">
                                                <div class="c-body">
                                                    <h3>“飞扬7载·飞YOUNG传承”海岛生存体验活动圆满收官</h3>
                                                    <p style="padding-top: 10px;font-size: 13px;line-height: 22px;">
                                                        2016年07月28日-29日，我们传承全体员工前往深圳大甲岛进行了为期两天的海岛生存体验活动。此次活动意在让大家通过两天一夜同在一个完全陌生环境中的相处，创造一次“传承集团”独有的文化体验，凝聚团队，升华情感，共庆传承集团走过的七载风雨，喜迎下一财年。
                                                    </p>
                                                    <div style="text-align: right;"><a href="" style="font-size: 13px;">更多》》</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="c-content-tile-1 ">
                            <h3 class="c-font-uppercase c-center">项目动态</h3>
                                <div class="c-line-center"></div>
                                <div class="row c-bg-gray"> 
                                    <div class="col-sm-6 ">
                                        <div class="c-tile-content c-content-overlay">
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/new02.jpg); height: 325px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="c-tile-content c-content-v-center" data-height="height" style="height: 325px;">
                                            <div class="c-wrapper">
                                                <div class="c-body">
                                                    <h3>传承爱心，情聚田东</h3>
                                                    <p style="padding-top: 10px;font-size: 13px;line-height: 22px;">
                                                        你给我远在    千里之外最无私的爱
                                                        用心灌溉    让梦盛开在美好的未来
                                                        你给我远在    千里之外最暖的关怀
                                                        不负期待    做有用之才让珍珠绽放光彩
                                                                                       ——吴斌《千里之爱》 （改编）
                                                    </p>
                                                    <div style="text-align: right;"><a href="" style="font-size: 13px;">更多》》</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>       
            </div>
            <!--END:NEWS -->
            <!--BIGEN:COMPANYS -->
           
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    
                        <div class="col-md-8">
                             <div class="row">  
                            <div class="c-content-media-2-slider" data-slider="owl">
                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(img/company.png); height: 350px;"></div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="row">   
                            <div   style="height: 350px;background-color: #efefef;font-size: 13px;line-height: 22px; display: table-cell;vertical-align: middle;padding:0 30px;">
                                <p>传承基金成立于2012年，是集基金管理与投资运营为一体的专业化金融机构。专注于私募基金的发行与管理以及优质不动产项目的投融资服务，基金业务涉及存量物业并购、城市更新、地产开发、资产管理等领域。依托于集团的雄厚实力，以及集团在地产、金融领域多年积累的优质资源及投资经验，汇集了一批来自银行、信托、私募、证券等领域的业内精英共同组建管理团队执行基金业务。</p>
                                <div style="text-align: right;"><a href="" style="font-size: 13px;">更多》》</a></div>
                            </div>
                            
                           </div> 
                        </div>
                    
                </div>
            </div>
            
          
                  
    @stop


