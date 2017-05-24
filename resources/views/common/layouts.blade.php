
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
    <meta charset="utf-8" />
    <title>{{Admin::title()}} | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />  
   @section('style')
   @show
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