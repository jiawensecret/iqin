<div class="article">
  <h1>{{$article['title']}}</h1>
  <blockquote>{{$article['introduction']}}</blockquote>
  @if($article['md'] == 1)
    {!! $article_content['content'] !!}
    @else
    {{$article_content['content']}}
  @endif
</div>