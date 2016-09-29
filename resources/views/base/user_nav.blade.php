<div class="dropdown">
  <img class="image-circle" src="" alt="" >
  <span class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">
    {{$user['name']}}
  </span>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('emessage')}}">消息</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url('logout')}}">退出登录</a></li>
  </ul>
</div>