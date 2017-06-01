@extends('invest.invest')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('cases')}}">成功案例</a>
    </div>
@stop
@section('text-content')
	<ul>
	    <li class="c-invest-case"> 
	        <img src="../img/case2.jpg" alt="" class="img-responsive">
	        <h3>
			    <a href="">民生银行大厦</a>
			</h3>    
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
		        <a href="">民生银行大厦</a>
	        </h3> 
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
	            <a href="">民生银行大厦</a>
	        </h3>   
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
		        <a href="">民生银行大厦</a>
	        </h3> 
	    </li>
	    <li class="c-invest-case"> 
	        <img src="../img/case1.jpg" alt="" class="img-responsive">
	        <h3>
		        <a href="">民生银行大厦</a>
	        </h3>
	    </li>  
	</ul>                
	
 @stop