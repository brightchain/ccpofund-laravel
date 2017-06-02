@extends('about.about')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="">管理团队</a>
    </div>
@stop
@section('text-content')

@foreach($team as $team)
    <div class="clearfix" style="padding-top: 20px;">
        <div class="c-img-fr imghover">
            <img src="../upload/{{$team->thumbs}}" alt="" class="img-responsive" >
        </div>
        <div  class="c-img-fl">        
            <h3>{{$team->name}}  {{$team->position}}</h3>
            <p style="font-size: 10.42px;line-height: 18.75px;">{{$team->introduce}}</p>
        </div>
    </div>

@endforeach   

    

   <!--  <div class="clearfix" style="padding-top: 20px;">
        <div class="c-img-fr imghover">
            <img src="../img/gao.png" alt="" class="img-responsive" >
        </div>
        <div  class="c-img-fl">        
            <h3>李新超  总经理</h3>
            <p>
                全面负责传承基金的战略规划及运营管理等。近20年金融行业从业经历，先后任职于友邦、平安及海康人寿等金融机构，专业从事不动产投资及公司运营管理，完成近百亿私募基金募集及投资管理，拥有丰富的金融操盘经验和金融机构管理运营经验，对宏观经济运行规律、房地产发展趋势及不动产投资领域资本市场运作均有深入研究。</p>
        </div>
    </div>  -->                            
 @stop