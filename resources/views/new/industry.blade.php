@extends('new.new')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('industry')}}" class="nav-active">行业资讯</a>
    </div>
@stop
@section('text-content')
    <div class="row" style="border-bottom: 1px solid #ccc">
    	<div class="col-sm-8">
    		<h3 class="c-news-date">{{date_format($first['updated_at'],'M d,Y')}}</h3>
	        <h3 class="c-news-title">
		        <a href="{{route('indushow',$first['id'])}}">
		        	{{$first['title']}}
		        </a>
	        </h3>
	        <p class="t-color-gray t-font-12">{{strip_tags(str_limit($first['content'],200))}}</p>
    	</div>
    	<div class="col-sm-4">
    	<a href="{{route('indushow',$first['id'])}}">
    		<img src="../upload/{{$first['thumbs']}}" alt="" class="img-responsive"></a>
    	</div>
    </div>
    <ul class="new-each">
    @foreach($news as $new)
    	<li>
    		<div class="row">
		    	<div class="col-sm-2 n-date">
		    		<h3>
		    		   {{date_format($new->updated_at,'d')}}
		    		</h3>
		    		<p>
		    			{{date_format($new->updated_at,'M')}}
		    		</p>
		    		<p>
		    			{{date_format($new->updated_at,'Y')}}
		    		</p>	
		    	</div>
		    	<div class="col-sm-10">
		    		<h3 class="c-news-title">
	                    <a href="{{route('indushow',$new->id)}}">
	        	            {{$new->title}}
	                    </a>
	                </h3>
		            <p class="t-color-gray t-font-12">
		                {{str_limit(strip_tags($new->content),150)}}
		            </p>
		    	</div>
		    </div> 
    	</li>
    	 @endforeach
    </ul>
    {{ $news->links() }}
	
 @stop