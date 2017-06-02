@extends('about.about')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('culture')}}">{{$about->title}}</a>
    </div>
@stop
@section('text-content')
	<!-- <h3>企业文化</h3>
	<h3>COMPANY CULTURE</h3>             
	<img src="../img/culture.jpg" alt=""  class="img-responsive center-block" style=""> -->
	{!!$about->content!!}
	
 @stop