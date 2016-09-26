@extends('base.base')

@section('contain')

  <div class="register col-md-offset-3 col-md-6">
    <form action="{{url('/register')}}" method="post" {{--novalidate="novalidate"--}}>
      <div class="form-group">
        <label for="" class="col-md-3">帐号</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="username" placeholder="用以登录的用户名">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-md-3">邮箱</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="email" placeholder="有效邮箱地址">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-md-3">密码</label>
        <div class="col-md-9">
          <input type="password" class="form-control" name="password" placeholder="6~16位密码，区分大小写">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-md-3">重复密码</label>
        <div class="col-md-9">
          <input type="password" class="form-control" name="repassword" placeholder="重复密码">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-md-3">QQ</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="qq">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-md-3">昵称</label>
        <div class="col-md-9">
          <input type="text" class="form-control" name="name">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-md-3">性别</label>
        <div class="col-md-9">
          <select type="text" class="form-control" name="sex">
            <option value="0">保密</option>
            <option value="1">男</option>
            <option value="2">女</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        {{ csrf_field() }}
        <button class="btn btn-primary" type="submit">确定</button>
        <button class="btn btn-success" type="reset">取消</button>
      </div>

    </form>
  </div>


@endsection