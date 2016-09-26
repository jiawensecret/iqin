@extends('base.base')

@section('contain')




{!! Form::open(['url' => '/login', 'class' => 'form-horizontal', 'role' => 'form']) !!}
<div class="form-group">
  {!! Form::label('id', '学号', ['class' => 'col-md-4 control-label']) !!}
  <div class="col-md-6">
    {!! Form::text('id', old('id'), ['class' => 'form-control', 'required']) !!}
  </div>
</div>
<div class="form-group">
  {!! Form::label('password', '密码', ['class' => 'col-md-4 control-label']) !!}
  <div class="col-md-6">
    {!! Form::password('password', ['class' => 'form-control', 'required']) !!}
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    <div class="checkbox">
      <label>
        <input type="checkbox" name="remember"> Remember Me
      </label>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-6 col-md-offset-4">
    {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
  </div>
</div>
{!! Form::close() !!}
@endsection
