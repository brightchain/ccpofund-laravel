<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="index.html" class="c-logo">
                        <img src="http://localhost/img/logo-3.png" alt="传承基金" height="47px;" class="c-desktop-logo">
                        <img src="http://localhost/img/logo-3.png" alt="传承基金" height="30px;" class="c-desktop-logo-inverse">
                        <img src="http://localhost/img/logo-3.png" alt="传承基金" height="30px;" class="c-mobile-logo"> </a>
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
                                    <a href="{{route('issues')}}">资产管理
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
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                <p>To recover your password please fill in your email address</p>
                <form>
                    <div class="form-group">
                        <label for="forget-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                <p>Please fill in below form to create an account with us</p>
                <form>
                    <div class="form-group">
                        <label for="signup-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-email" placeholder="Email"> </div>
                    <div class="form-group">
                        <label for="signup-username" class="hide">Username</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-username" placeholder="Username"> </div>
                    <div class="form-group">
                        <label for="signup-fullname" class="hide">Fullname</label>
                        <input type="email" class="form-control input-lg c-square" id="signup-fullname" placeholder="Fullname"> </div>
                    <div class="form-group">
                        <label for="signup-country" class="hide">Country</label>
                        <select class="form-control input-lg c-square" id="signup-country">
                            <option value="1">Country</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Signup</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM -->
<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                <p>Let's make today a great day!</p>
                <form>
                    <div class="form-group">
                        <label for="login-email" class="hide">Email</label>
                        <input type="email" class="form-control input-lg c-square" id="login-email" placeholder="Email"> </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Password</label>
                        <input type="password" class="form-control input-lg c-square" id="login-password" placeholder="Password"> </div>
                    <div class="form-group">
                        <div class="c-checkbox">
                            <input type="checkbox" id="login-rememberme" class="c-check">
                            <label for="login-rememberme" class="c-font-thin c-font-17">
                                <span></span>
                                <span class="check"></span>
                                <span class="box"></span> Remember Me </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Login</button>
                        <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                    </div>
                    <div class="clearfix">
                        <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                            <span>or signup with</span>
                        </div>
                        <ul class="c-content-list-adjusted">
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                    <i class="fa fa-twitter"></i> Twitter </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                    <i class="fa fa-facebook"></i> Facebook </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-google">
                                    <i class="fa fa-google"></i> Google </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Don't Have An Account Yet ?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM -->
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
                <a href="http://mail.ccpofund.com" target="_blank">
                    <i class="icon-envelope c-cart-icon"></i>
                    <span>企业邮箱登录</span>
                </a>
            </div>
        </div>
        <div class="c-section">
            <h3>联系我们</h3>
            <div class="c-settings">
                工作时间：09:00 ~ 16:00
            </div>
            <div class="c-settings">
                联系电话：0755-86895421
            </div>
            <div class="c-settings">
                地址：深圳市前海深港合作区前湾一路1号A栋201室
            </div>
        </div>
        <div class="c-section">
            <h3>微信公众号</h3>
            <div class="c-settings">
                <img src="http://localhost/img/weixin.png" width="180px;" alt="微信公众号">
                <div style="font-size:12px;padding-top: 5px;">
                    扫描二维码关注金砖华荣
                    <br/>获取我们的最新动态
                </div>
            </div>
        </div>
    </div>
</nav>