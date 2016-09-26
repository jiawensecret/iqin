@extends('base.base')

@section('contain')
@foreach($articles as $article)
  <article>
    <a href="{{url('/article/'.$article['id'])}}" class="text-primary">{{$article['title']}}</a>
  </article>
@endforeach

  <div class="page">{!! $links !!}</div>
@endsection