@extends('common.layouts')
@section('title','首页')

@section('banner')
    <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
            <section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
                <div class="tp-banner-container c-theme">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
                        @foreach($slides as $slide)
                            <!--BEGIN: SLIDE #1 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="/upload/{{$slide->images}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="4000" data-start="500" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.35;scaleY:1.75;o:0;s:4000;e:Back.easeInOut;"
                                data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                                    <p class="c-main-title-circle c-font-37 c-font-bold c-font-center c-font-uppercase c-font-white c-block"> 
                                    {{$slide->state}}
                                         </p>
                                </div>
                            </li>
                            @endforeach
                            <!--END -->
                            <!--BEGIN: SLIDE #2 -->
                          <!--   <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
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
                            <!-- <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000" data-thumb="">
                                <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                               <!-- <img alt="" src="img/bg-19.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="visible-xs" />
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
                            </li> -->
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
                                <a href="{{route('funds')}}" class="">
                                <p class="c-img-01 c-img">
                                <h3>基金产品</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="text-center c-bg-white1" data-wow-delay="0.2s">
                                <a href="{{route('cases')}}" class="">
                                <p class="c-img-02 c-img">
                                <h3>投资方向</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 ">
                            <div class="text-center c-bg-white1" data-wow-delay="0.4s">
                                <a href="{{route('cooper')}}" class="">
                                <p class="c-img-03 c-img">
                                <h3>投资流程</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 c-card ">
                            <div class="text-center c-bg-white1" data-wow-delay="0.6s">
                                <a href="{{route('team')}}" class="">
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
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(upload/{{$new->thumbs}}); height: 325px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-content-v-center" data-height="height" style="height: 325px;">
                                            <div class="c-wrapper">
                                                <div class="c-body">
                                                    <h3>{{$new->title}}</h3>
                                                    <p style="padding-top: 10px;font-size: 13px;line-height: 22px;">
                                                        {{strip_tags(str_limit($new->content,400))}}
                                                    </p>
                                                    <div style="text-align: right;"><a href="{{route('show',$new->id)}}" style="font-size: 13px;">更多》》</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="c-content-tile-1 ">
                            <h3 class="c-font-uppercase c-center">社会责任</h3>
                                <div class="c-line-center"></div>
                                <div class="row c-bg-gray"> 
                                    <div class="col-sm-6 ">
                                        <div class="c-tile-content c-content-overlay">
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(upload/{{$social->thumbnail}}); height: 325px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="c-tile-content c-content-v-center" data-height="height" style="height: 325px;">
                                            <div class="c-wrapper">
                                                <div class="c-body">
                                                    <h3>{{$social->title}}</h3>
                                                    <p style="padding-top: 10px;font-size: 13px;line-height: 22px;">
                                                        {{strip_tags(str_limit($social->content,400))}}
                                                    </p>
                                                    <div style="text-align: right;"><a href="{{route('socialsshow',$social->id)}}" style="font-size: 13px;">更多》》</a></div>
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
                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(/img/company.jpg); height: 350px;"></div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        <div class="row">   
                            <div   style="height: 350px;background-color: #efefef;font-size: 13px;line-height: 22px; display: table-cell;vertical-align: middle;padding:0 30px;">
                                <p>传承基金成立于2012年，是集基金管理与投资运营为一体的专业化金融机构。专注于私募基金的发行与管理以及优质不动产项目的投融资服务，基金业务涉及存量物业并购、城市更新、地产开发、资产管理等领域。依托于集团的雄厚实力，以及集团在地产、金融领域多年积累的优质资源及投资经验，汇集了一批来自银行、信托、私募、证券等领域的业内精英共同组建管理团队执行基金业务。</p>
                                <div style="text-align: right;"><a href="{{route('company')}}" style="font-size: 13px;">更多》》</a></div>
                            </div>
                            
                           </div> 
                        </div>
                    
                </div>
            </div>
            
      <link href="../css/tishitankuang.css?" rel="stylesheet"
    type="text/css" />
<div class="tankuang_xinzeng" id="tstk" style="display: none">
    <div class="diceng">
        <div class="tankuang_xinzeng_1">
            
            <div class="tk_right">
                <div class="tankuang_xinzeng_1_top">
                    
                        <img src="../img/合格投资者认定.png" />
                </div>
                <div class="tankuang_xinzeng_2">
                    <div class="tk_xz_left">
                       <p> 基金投资具有一定风险，根据《中华人民共和国证券法》、《中华人民共和国证券投资基金法》、《私募投资基金监督管理暂行办法》、《私募投资基金信息披露管理办法》、《私募投资基金募集行为管理办法》等相关法律法规规定，在继续浏览本公司网站前，请您确认您或您所代表的机构是一名“合格投资者”。“合格投资者”指根据任何国家和地区的证券和投资法规所规定的有资格投资于私募投资基金的专业投资者。根据我国《私募投资基金监督管理暂行办法》的规定，合格投资者的标准如下：<br />
一、具备相应风险识别能力和风险承担能力，投资于单只私募基金的金额不低于100万元且符合下列相关标准的单位和个人：<br />
1、净资产不低于1000万元的单位；<br />
2、个人金融资产不低于300万元或者最近三年个人年均收入不低于50万元。（前款所称金融资产包括银行存款、股票、债券、基金份额、资产管理计划、银行理财产品、信托计划、保险产品、期货权益等。）<br />
二、下列投资者视为合格投资者：<br />
1、社会保障基金、企业年金、慈善基金；<br />
2、依法设立并受国务院金融监督管理机构监管的投资计划；<br />
3、投资于所管理私募基金的私募基金管理人及其从业人员；<br />
4、中国证监会规定的其他投资者。<br />
如果您进入、访问或使用本网站及其任何网页，即表明您已同意接受以下条款与条件的约束。下列条款与条件可能会做出变更。如您不同意下列条款与条件，请勿进入访问或使用本网站或其他信心“本网站”指深圳市传承基金管理有限公司（以下简称“本公司”）所有并发布的本网站（www.ccfmcy.com）及其网站内包含的所有信息及材料。<br />
本网站所载的各种信息和数据等仅供参考，并不构成广告或销售要约，或买入任何物业、基金或其它投资工具的建议。投资者应仔细审阅相关金融产品的合同文件等以了解其风险因素，或寻求专业的投资顾问的建议。<br />

投资产品净值可能会有较大的波动，并可能在短时间內大幅下跌，并造成投资者损失部分或全部投资金额。您应确保有关投资产品适合您的需要。如有怀疑，请咨询按中国内地法规注册的专业分析师的意见，并要求其确认有关投资产品适合并符合您的投资目标。<br />

投资产品的价格及其收益存在涨跌变动，而过往的产品业绩数据并不预示其未来的表现，投资者不应依赖本网站所提供的数据做出投资决策，否则由投资者自行承担所有风险。</p>
                        <h2 class="tk_xz_left_an" onclick="innerview()">
                            我知道了</h2>
                        <div class="tk_xz_left_inp">
                            <input type="checkbox" autocomplete="off" checked="checked" id="remember" />记住我的选择 不再提示
                        </div>
                    </div>
                    <div style="clear: both;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="beijing">
    </div>
</div>

<script type="text/javascript" src="../js/tishitankuang.js"></script>    
                  
    @stop


