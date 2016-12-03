<!DOCTYPE html>
<head>
  {!! Html::style('css/bootstrap.min.css') !!}
  {!! Html::style('css/bootstrap-theme.min.css') !!}
  {!! Html::style('css/wangEditor.min.css') !!}
  {!! Html::style('css/iqin.css') !!}
  {!! Html::script('js/vendor/jquery-3.1.0.min.js') !!}
  {!! Html::script('js/vendor/bootstrap.min.js') !!}
  {!! Html::script('js/vendor/wangEditor.min.js') !!}
  <title>jw</title>
</head>
<body>
<header class="container header">
  <div class="col-md-4 brand">
    <div class="logo-header">
      <a href="/">IQin</a>
    </div>
  </div>
  @if(!$this_user)
    <div class="col-md-2 brand pull-right login-header">
      <a class="a-login" href="{{url('login')}}"><span class="glyphicon glyphicon-home"></span>登录</a>
      <a class="a-register" href="{{url('register')}}"><span class="glyphicon glyphicon-user"></span>注册</a>
    </div>
  @else
    @include('base.user_nav',['user'=>$this_user])
  @endif
</header>
<div class="navbar navbar-primary">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a href="/">首页</a></li>
      <li><a href="">站长</a></li>
      <li><a href="{{url('/article-list')}}">文章</a></li>
      <li><a href="{{url('/hot')}}">热门</a></li>
      <li><a href="{{url('/member/article-list')}}">个人</a></li>
      <li><a href="">工具</a></li>
      <li><a href="">资源</a></li>
      <li><a href="{{url('/notice')}}">笔记共享</a></li>
      <li><a href="{{url('/create')}}">创作</a></li>
      <li><a href="{{url('/about')}}">关于</a></li>
    </ul>
    <form action="{{url('search')}}" class="navbar-form navbar-right input-group" method="get">
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
<div class="container container-body">
  @yield('contain')
</div>
<footer class="container ">
  <div class="row foot-content">
    <div class="col-md-6">
      <h4>IQin </h4>
      <p>热爱文字，分享快乐，享受生活 。 Tomorrow is another day!</p>
    </div>
    <div class="col-md-2">
      <h4>关于</h4>
    </div>
    <div class="col-md-2">
      <h4>联系方式</h4>
    </div>
    <div class="col-md-2">
      <h4>友情链接</h4>
    </div>
  </div>
</footer>
</body>