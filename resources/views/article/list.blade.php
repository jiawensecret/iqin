@extends('base.base')

@section('contain')
<div class="article-list">
  @foreach($articles as $article)
    @include('base.article_list_base',['article'=>$article])
  @endforeach
</div>

<div class="page">{!! $links !!}</div>
@endsection
