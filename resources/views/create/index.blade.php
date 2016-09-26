@extends('base.base')

@section('contain')
  <div id="div1">
    <p>请输入内容...</p>
  </div>


  <!--这里引用jquery和wangEditor.js-->
  <script type="text/javascript">
    var editor = new wangEditor('div1');
    editor.create();
  </script>

@endsection