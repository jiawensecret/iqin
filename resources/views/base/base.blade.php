<!DOCTYPE html>
<head>
  {!! Html::style('css/bootstrap.min.css') !!}
  {!! Html::style('css/bootstrap-theme.min.css') !!}
  {!! Html::style('css/wangEditor.min.css') !!}
  {!! Html::script('js/vendor/jquery-3.1.0.min.js') !!}
  {!! Html::script('js/vendor/bootstrap.min.js') !!}
  {!! Html::script('js/vendor/wangEditor.min.js') !!}
  <title>jw</title>
</head>
<body>
<header class="container header">
  <div class="col-md-3 brand">iqin</div>
  <div class="col-md-3 brand">todo 登录注册</div>

</header>
<div class="navbar navbar-primary">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="/">首页</a></li>
      <li><a href="">站长</a></li>
      <li><a href="{{url('/article-list')}}">文章</a></li>
      <li><a href="">热门</a></li>
      <li><a href="">个人</a></li>
      <li><a href="">工具</a></li>
      <li><a href="">资源</a></li>
      <li><a href="">笔记共享</a></li>
      <li><a href="{{url('/create')}}">创作</a></li>
      <li><a href="">关于</a></li>
    </ul>
    <form action="/search" class="navbar-form navbar-right input-group" method="get">
      <div class="input-group">
        <span class="input-group-addon">搜索</span>
        <input type="text" class="form-control">
          <span class="input-group-btn">
            <button class="btn" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
      </div>

    </form>
  </div>
</div>
<div class="container">
  @yield('contain')
</div>
<footer class="container navbar-fixed-bottom">
  <div class="row">
    <ul class="list-inline">
      <li>con</li>
      <li>link</li>
    </ul>
  </div>
</footer>
</body>