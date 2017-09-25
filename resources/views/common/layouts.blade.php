
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
    <meta charset="utf-8" />
    <title>@yield('title')-{{Admin::title()}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="keywords" content="传承基金,传承财富,深圳传承基金,深圳传承基金管理管理有限公司,物业并购基金,房地产私募基金,深圳基金公司" />
    <meta name="description" content="深圳传承基金管理管理有限公司" />
    <meta content="" name="author" />  
      <link href="/css/bootstrap-social.css" rel="stylesheet" type="text/css" />
    <link href="/css/font-awesome.min.css"" rel="stylesheet" type="text/css" />
    <link href="/css/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="../css/animate.min.css" rel="stylesheet" type="text/css" /> -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="/css/settings.css" rel="stylesheet" type="text/css" />
    <!-- <link href="../css/layers.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../css/navigation.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../css/cubeportfolio.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="../css/slider.css" rel="stylesheet" type="text/css" /> -->
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <!-- <link href="../css/ilightbox.css" rel="stylesheet" type="text/css" /> -->
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="/css/default.css" rel="stylesheet" id="style_theme" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
    @include('common.header')
        <div class="c-layout-page">
    @section('banner')
        @show
    @section('content')
        @show
        </div>
    @include('common.footer')
        @show
    </body>
</html>