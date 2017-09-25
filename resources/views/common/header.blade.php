<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" >
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="#" class="c-logo">
                        <img src="/img/logo-3.png" alt="传承基金" height="47px;" class="c-desktop-logo">
                        <img src="/img/logo-3.png" alt="传承基金" height="30px;" class="c-desktop-logo-inverse">
                        <img src="/img/logo-3.png" alt="传承基金" height="30px;" class="c-mobile-logo"> </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <!--  <button class="c-cart-toggler" type="button">
                         <i class="icon-bubbles"></i>
                         <span class="c-cart-number c-theme-bg">2</span>
                     </button> -->
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="金汇2号..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-active">
                            <a href="/" class="c-link dropdown-toggle">首页
                                <span class="c-arrow c-toggler"></span>
                            </a>
                        </li>
                        <li >
                            <a href="{{route('company')}}" class="c-link dropdown-toggle">关于传承
                                <span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="{{route('company')}}">公司简介
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('core')}}">核心优势
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('team')}}">管理团队
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('culture')}}">企业文化
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('history')}}">大事记
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li> 
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('funds')}}" class="c-link dropdown-toggle">基金管理
                                <span class="c-arrow c-toggler"></span>
                            </a>
                           <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="{{route('funds')}}">基金产品
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('issues')}}">基金概况
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                              
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('cases')}}" class="c-link dropdown-toggle">投资运营
                                <span class="c-arrow c-toggler"></span>
                            </a>
                             <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="{{route('cases')}}">成功案例
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('property')}}">存量物业并购
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>               
                                <li class="dropdown-submenu">
                                    <a href="{{route('urban')}}">城市更新
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('asset')}}">资产管理
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('real')}}">地产开发
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>

                              
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('socials')}}" class="c-link dropdown-toggle">社会责任
                                <span class="c-arrow c-toggler"></span>
                            </a>
                        
                        </li>
                        <li>
                            <a href="{{route('inheritance')}}" class="c-link dropdown-toggle">新闻中心
                                <span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="{{route('inheritance')}}">传承动态
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('industry')}}">新闻资讯
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                              
                            </ul>
                            <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                        </li>
                        <li>
                            <a href="{{route('contactus')}}" class="c-link dropdown-toggle">联系我们
                                <span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="{{route('contactus')}}">联系我们
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="{{route('recruit')}}">招贤纳士
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                </li>
                              
                            </ul>
                            <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->
                        </li>
                        <li class="c-search-toggler-wrapper">
                            <a href="#" class="c-btn-icon c-search-toggler">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="c-quick-sidebar-toggler-wrapper">
                            <a href="#" class="c-quick-sidebar-toggler">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
        </div>
    </div>
</header>
<!-- END: HEADER -->

<!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
<nav class="c-layout-quick-sidebar">
    <div class="c-header">
        <button type="button" class="c-link c-close">
            <i class="icon-login"></i>
        </button>
    </div>
    <div class="c-content">
        <div class="c-section">
            <h3>员工入口</h3>
            <div class="c-settings">
                <a href="http://oa.szcctz.com" target="_blank">
                    <i class="icon-tag c-cart-icon"></i>
                    <span>OA协同办公</span>
                </a>
            </div>
            <div class="c-settings">
                <a href="http://mail.szcccf.com/" target="_blank">
                    <i class="icon-envelope c-cart-icon"></i>
                    <span>企业邮箱登录</span>
                </a>
            </div>
        </div>
        <div class="c-section">
            <h3>联系我们</h3>
            <div class="c-settings">
                工作时间：09:00 ~ 17:30
            </div>
            <div class="c-settings">
                联系电话：0755-22941400
            </div>
            <div class="c-settings">
                地址：深圳市福田区卓越时代广场4408室
            </div>
        </div>
        <div class="c-section">
            <h3>微信公众号</h3>
            <div class="c-settings">
                <img src="http://www.ccpofund.com/img/weixin.png" width="180px;" alt="微信公众号">
                <div style="font-size:12px;padding-top: 5px;">
                    扫描二维码关注传承基金
                    <br/>获取我们的最新动态
                </div>
            </div>
        </div>
    </div>
</nav>