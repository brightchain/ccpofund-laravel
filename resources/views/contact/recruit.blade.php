@extends('contact.contact')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(../img/arrows.png);"></span>
   	    <a href="{{route('contactus')}}" class="nav-active">{{$title}}</a>
    </div>
@stop
@section('text-content')

<!-- <ul style="margin:0;padding:0;">
    <li style="padding-bottom: 25px;">
        <h3 style="background-color: #c3222c;color: #fff;font-size: 14.58px;line-height: 37.5px;padding-left: 30px;">项目拓展</h3>
        <p style="font-size: 12.5px;line-height: 21px;padding-left: 30px;">
            关键职责描述：进行市场研究，开拓渠道，寻找优质盘源 <br /><br />

            岗位职责：<br />
            1、市场研究<br />
            ◆ 负责市场信息收集、整理、分析、处理，保证企业及时获取土地市场相关信息<br />
            ◆ 负责客户渠道维护，定期拜访，新增渠道，获取信息资源<br />
            ◆ 配合建立、更新土地信息数据库，保证各项信息的完备性及有效性。<br />
            ◆ 负责项目市调、研讨、筛选、结果跟进<br /><br />

            2、项目分析、获取、成本控制<br />
            ◆ 负责项目调研、配合完成测算、投资可行性分析，组织项目谈判<br />
            ◆ 配合收集、整理、市场分析，把控项目风险要点、难点，梳理问题并落实<br />
            ◆ 负责项目现场考察，根据公司决策，组织项目购买，完成各项收购手续工作。<br />
            3、完成领导交给的其他任务<br /><br />
             
            岗位要求：<br />
            1、具备丰富的社会资源和政府资源<br />
            2、3年以上房地产、投资相关行业经验<br />
            3、良好的沟通、协调和资源整合能力<br />
            4、年龄要求25岁以上
        </p>
    </li>
    <li style="padding-bottom: 25px;">
        <h3 style="background-color: #c3222c;color: #fff;font-size: 14.58px;line-height: 37.5px;padding-left: 30px;">项目拓展</h3>
        <p style="font-size: 12.5px;line-height: 21px;padding-left: 30px;">
            关键职责描述：进行市场研究，开拓渠道，寻找优质盘源 <br /><br />

            岗位职责：<br />
            1、市场研究<br />
            ◆ 负责市场信息收集、整理、分析、处理，保证企业及时获取土地市场相关信息<br />
            ◆ 负责客户渠道维护，定期拜访，新增渠道，获取信息资源<br />
            ◆ 配合建立、更新土地信息数据库，保证各项信息的完备性及有效性。<br />
            ◆ 负责项目市调、研讨、筛选、结果跟进<br /><br />

            2、项目分析、获取、成本控制<br />
            ◆ 负责项目调研、配合完成测算、投资可行性分析，组织项目谈判<br />
            ◆ 配合收集、整理、市场分析，把控项目风险要点、难点，梳理问题并落实<br />
            ◆ 负责项目现场考察，根据公司决策，组织项目购买，完成各项收购手续工作。<br />
            3、完成领导交给的其他任务<br /><br />
             
            岗位要求：<br />
            1、具备丰富的社会资源和政府资源<br />
            2、3年以上房地产、投资相关行业经验<br />
            3、良好的沟通、协调和资源整合能力<br />
            4、年龄要求25岁以上
        </p>
    </li>
    <li style="padding-bottom: 25px;">
        <h3 style="background-color: #c9caca;color: #fff;font-size: 14.58px;line-height: 37.5px;padding-left: 30px;">项目拓展</h3>
        <p style="font-size: 12.5px;line-height: 21px;padding-left: 30px;">
            关键职责描述：进行市场研究，开拓渠道，寻找优质盘源 <br /><br />

            岗位职责：<br />
            1、市场研究<br />
            ◆ 负责市场信息收集、整理、分析、处理，保证企业及时获取土地市场相关信息<br />
            ◆ 负责客户渠道维护，定期拜访，新增渠道，获取信息资源<br />
            ◆ 配合建立、更新土地信息数据库，保证各项信息的完备性及有效性。<br />
            ◆ 负责项目市调、研讨、筛选、结果跟进<br /><br />

            2、项目分析、获取、成本控制<br />
            ◆ 负责项目调研、配合完成测算、投资可行性分析，组织项目谈判<br />
            ◆ 配合收集、整理、市场分析，把控项目风险要点、难点，梳理问题并落实<br />
            ◆ 负责项目现场考察，根据公司决策，组织项目购买，完成各项收购手续工作。<br />
            3、完成领导交给的其他任务<br /><br />
             
            岗位要求：<br />
            1、具备丰富的社会资源和政府资源<br />
            2、3年以上房地产、投资相关行业经验<br />
            3、良好的沟通、协调和资源整合能力<br />
            4、年龄要求25岁以上
        </p>
    </li>
</ul> -->
<ul style="margin:0;padding:0;">
@foreach($recruit as $recruit)
    <li style="padding-bottom: 25px;">
    @if($recruit->status==1)
        <h3 style="background-color: #ea5504;color: #fff;font-size: 14.58px;line-height: 37.5px;padding-left: 30px;">{{$recruit->title}}</h3>
        @else
        <h3 style="background-color: #c9caca;color: #fff;font-size: 14.58px;line-height: 37.5px;padding-left: 30px;">{{$recruit->title}}</h3>
        @endif
        <p style="font-size: 12.5px;line-height: 21px;padding-left: 30px;padding-top: 20px">
            {!!$recruit->content!!}
        </p>
    </li>
   @endforeach
    
</ul> 
 @stop