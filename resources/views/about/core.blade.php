@extends('about.about')
@section('menu-left')
	<div class="c-menu-left-img">
		<span style="background-image: url(/img/arrows.png);"></span>
   	    <a href="{{route('core')}}" class="nav-active">{{$about->title}}</a>
    </div>
@stop
@section('text-content')
	<!-- <div class="c-about">
   <img src="../img/core1.gif" alt=""  class="img-responsive center-block" style="">
   <p>
      <span>项目获取</span>
        依托自身强大经济硬实力以及行业资源，评估优质项目，判断介入时机。
      <br />
      <span>融资渠道</span>
        根据项目资金需求，提供专业的资金解决方案，主要通过金融服务机构获得融资，以及发行基金产品获得民间资本。
      <br />
      <span>价值提升</span>
        拥有专业的项目运营团队、工程团队，具备丰富的项目改造升级、项目管理运营实战经验。
      <br />
      <span>资金退出</span>
        项目增值溢价退出，运营管理，代理租售退出
   </p>
	</div>
	<div class="c-about">
      <img src="../img/core2.gif" alt=""  class="img-responsive center-block" style="">
      <p>
        传承基金专注不动产投资领域近十年，已成功为近20个项目提供资本运营服务，为超过1000位高净值投资客户提供专业资产配置服务，得到了客户与社会各界的广泛赞誉，在行业内积累了良好的口碑和业绩。传承基金充分发挥自身行业资源整合能力，积极与各专业机构密切合作，迅速扩大公司资产管理规模，不断提高在国内投资界的影响力。
      </p>
	</div>                     
	
	<div class="c-about">
    <img src="../img/core3.gif" alt=""  class="img-responsive center-block" style="">
    <p>
      传承基金历经多年运作沉淀，以其雄厚的资质背景及良好的企业氛围，吸引了一大批曾在银行、投行、证券、信托、基金、保险等各大金融机构以及地产行业从业数年的优秀人才，成功锻造一支卓越的优秀团队，以保证业务发展的专业性。
      团队成员主要来自：
      金融行业：平安银行、中融信托、广发证券、平安保险等
      地产行业：中原地产、招商地产等
    </p>
	</div>  

	<div class="c-about">
    <img src="../img/core4.jpg" alt=""  class="img-responsive center-block" style="">
    <p>
      投资项目从立项、评估、决策等环节实施有效的风险管理和内部控制，保障项目的风险在可控范围，为投资人获取优越的回报。
  		①获得项目信息→②调研分析→③投资委员会批准→④尽职调查→⑤投资决定→⑥谈判签约→⑦履约阶段→⑧监督阶段→⑨运营阶段→⑩投资退出
    </p>
	</div>             -->
  {!!$about->content!!}
 @stop