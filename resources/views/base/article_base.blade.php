<div class="article">
  <h1>{{$article['title']}}</h1>
  <blockquote>{{$article['introduction']}}</blockquote>
  @if($article['md'] == 1)
    {!! $aricle_content !!}
    @else
    {{$article_content}}
  @endif
</div>