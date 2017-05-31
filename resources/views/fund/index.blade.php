@extends('fund.fund')
@section('menu-left')
    <div class="c-menu-left-img">
        <span style="background-image: url(../img/arrows.png);"></span>
        <a href="{{route('funds')}}">基金产品</a>
    </div>
@stop
@section('text-content')
    <h3>2009-2017 成功项目</h3>                     
    <img src="../img/history01.png" alt=""  class="img-responsive center-block" style="">
    <h3 style="margin-top: 60px;">2013-2017 基金产品</h3>
    <img src="../img/history02.jpg" alt=""  class="img-responsive center-block">
 @stop