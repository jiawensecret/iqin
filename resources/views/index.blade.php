@extends('base.base')

@section('contain')

  <script>
    var parser = new HyperDown,
        html = parser.makeHtml( '## 系统基本介绍### 绩效目标设定的基本流程： >hr设定考核周期 -> hr设定正态分布 -> 负责人给下属分配考核 ->下属确认 -> 负责人评分/员工自评 -> 员工确认 -> 总结反馈 ->负责人汇总提交到上级 **指标管理：** 负责人可以通过指标管理来管理通用的指标考核');
    $(".a").html =html;
  </script>
<div class="a"></div>



@endsection