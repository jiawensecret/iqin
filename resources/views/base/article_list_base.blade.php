<article>
  <header class="col-md-3">
    <a href="">
      <img src="" alt="">
    </a>
  </header>
  <div class="col-md-9">
    <div class="article-content">
      <h4><a href="{{url('/article/'.$article['id'])}}">{{$article['title']}}</a></h4>
    </div>
    <p class="introduction">{{$article['introduction']}}</p>
  </div>
</article>