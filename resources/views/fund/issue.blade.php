@extends('fund.fund')
@section('menu-left')
    <div class="c-menu-left-img">
        <span style="background-image: url(../img/arrows.png);"></span>
        <a href="{{route('issues')}}">基金发行</a>
    </div>
@stop
@section('text-content')
    <p>
      传承基金旨在不动产投资领域深根细作，根据不同投资方向与行业，分别设立专业化投资基金，围绕存量物业并购、城市更新、地产开发、资产管理等领域发行基金产品。
    </p>
    <p>
      截止2017年3月，传承基金已为近20个优质项目提供资金解决方案，对应发行汇宝、汇富、汇金三大系列基金产品逾25只，累计管理资产规模超35亿，平均每月推出一只新产品。已成功兑付基金产品20只，到期安全退出资金达28亿，实现100%安全兑付。
    </p>
    <table  class="c-fund-table" width="100%" id="c-tables">
      <caption >汇宝系列——物业并购类投资产品</caption>
      <tr >
        <td>已发行产品</td>
        <td>汇宝1~6号基金、长城大厦并购基金</td>
      </tr>
      <tr>
        <td>资金用途</td>
        <td>资金用于低价并购被基金管理人认可的深圳市优质物业</td>
      </tr>
      <tr>
        <td>发行结果</td>
        <td>汇宝1、2、3、5号已如期成功兑付，汇宝4、6号存续期</td>
      </tr>
      <tr>
        <td>标的项目</td>
        <td>文华花园、天经大厦、金丽豪苑、雅商会馆、中洲华府、皇都广场、武汉爱家、长城大厦</td>
      </tr>
    </table>
    <table  class="c-fund-table" width="100%" id="c-tables">
      <caption >汇富系列——房地产类投资产品</caption>
      <tr >
        <td>已发行产品</td>
        <td>汇富1~3号基金</td>
      </tr>
      <tr>
        <td>资金用途</td>
        <td>集团独立或合作投资建设的房地产开发项目</td>
      </tr>
      <tr>
        <td>发行结果</td>
        <td>已发行产品均已如期兑付</td>
      </tr>
      <tr>
        <td>标的项目</td>
        <td>荔馨国际公寓、留学生创业大厦二期、车公庙203栋厂房</td>
      </tr>
    </table>
    <table  class="c-fund-table" width="100%" id="c-tables">
      <caption >债权类融资产品</caption>
      <tr >
        <td>已发行产品</td>
        <td>汇金1~14号深圳优质资产基金、汇诚1号赎楼基金</td>
      </tr>
      <tr>
        <td>资金用途</td>
        <td>为深圳本地持有优质资产的企业提供融资渠道</td>
      </tr>
      <tr>
        <td>发行结果</td>
        <td>已如期成功兑付13期产品，1只存续期产品均按期支付利息，从无逾期</td>
      </tr>
      <tr>
        <td>标的项目</td>
        <td>荔馨国际公寓、留学生创业大厦二期、车公庙203栋厂房</td>
      </tr>
    </table>
 @stop