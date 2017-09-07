@extends('common.layouts')
@section('title',$title)

    @section('banner')
    <div class="c-subtitle c-fonts-uppercase c-fonts-bold c-bg-img-center" >
    <img src="/img/about-bj.jpg" alt="Image-1" width="100%" height="auto">
            </div>
    @stop
    @section('content')
    <div class="c-content-box  c-bg-white" style="padding-top: 45px;">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
	               	<div class="row c-menu-left">
	               	    <div class="c-menu-left-img">
		               	    <span style="background-image: url(/img/home.png);"></span>
							<a href="{{route('company')}}" >关于传承</a>
						</div>
	               	    <div class="c-menu-left-img">
		<span style="background-image: url(/img/arrows.png);"></span>
   	    <a href="" class="nav-active">{{$title}}</a>
    </div>
	               	</div>
               </div>
               <div class="col-md-6">
               	<div class="row">
               		<div class="c-menu-right">
               			<span><a href="{{route('company')}}" class="{{ Request::is('*company*') ? 'nav-active' : '' }}">公司简介</a></span>
                    <span><a href="{{route('core')}}" class="{{ Request::is('*core*') ? 'nav-active' : '' }}">核心优势</a></span>
                    <span><a href="{{route('team')}}" class="{{ Request::is('*team*') ? 'nav-active' : '' }}">管理团队</a></span>
                    <span><a href="{{route('culture')}}" class="{{ Request::is('*culture*') ? 'nav-active' : '' }}">企业文化</a></span>
                    <span><a href="{{route('history')}}" class="{{ Request::is('*history*') ? 'nav-active' : '' }}">大事记</a></span>
               		</div>
               	</div>
              </div>
            </div>
        </div>              
    </div>
    <div class="c-content-box c-bg-white" style="">
        <div class="container" style="padding:30px;border-top:1px solid #ccc;" >
            
            
            <div class="timeline">
                <div class="timelinetop">
                       <img src="/img/icon9.png" alt="">
                </div>
                <div class="timelinecontent">
                @foreach($history as $history)
                  @if($loop->index%2==0)
                  <dl>
                    <dt>
                      <h2>{{$history->title}}</h2>
                      {!!$history->cases!!}
                    </dt>
                    <dd>
                      <img src="/upload/{{$history->thumbs}}" alt="{{$history->title}}">
                      <h3>{{$history->thumbsdes}}</h3>
                    </dd> 
                  </dl>
                  @else
                  <dl class="right">
                    <dt>
                      <h2>{{$history->title}}</h2>
                      {!!$history->cases!!}
                    </dt>
                    <dd>
                      <img src="/upload/{{$history->thumbs}}" alt="{{$history->title}}">
                      <h3>{{$history->thumbsdes}}</h3>
                    </dd> 
                  </dl>
                  @endif
                  @endforeach
                  
                
                  
                </div>
           </div>
           {!!$about->content!!}
          
        </div>       
    </div>
    @stop