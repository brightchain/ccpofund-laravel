@extends('about.about')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('history')}}">{{$title}}</a>
    </div>
@stop
@section('text-content')
<!-- <h3>
	法律声明<br>
    LEGAL NOTICES
</h3>
<p class="t-indent">
	本网站（www.ccpofund.com）上为版权人所有的文件，在此并未作任何授权。本网站上的文件仅限于为信息和非商业或个人之目的使用，并且不得在任何网络计算机上复制或公布，也不得在任何媒体上传播。<br>
未经版权人许可，任何人不得擅自(包括但不限于：以非法的方式复制、传播、展示、镜像、上载、下载)使用。否则版权人将依法追究其法律责任。<br><br>

免责声明<br>
版权人拥有对本网站的内容进行随时更改之权利，是前将不会另行通知。版权人不保证或声明本网站展示的资料是否正确、全面或是最新数据。<br>
本网站内的所有图片(包括但不限于插图、透视图、设计图等)、模型、文字描述等，仅作为参考信息，非开发商的任何承诺或要约。<br>
<br>
开发商声明<br>
任何人因本网站或依赖其内容进行交易所引致的损失，版权人和开发商均不承担任何责任。</p> -->

	{!!$law->content!!}
 @stop