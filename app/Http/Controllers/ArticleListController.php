<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories;

class ArticleListController extends Controller
{
    //
    protected $articleListRepository ;

    public function __construct(Repositories\ArticleListRepository $articleList)
    {
        parent::__construct();
        $this->articleListRepository = $articleList;
    }

    public function index()
    {
        $articles = $this->articleListRepository->getArticleList();
        $links = $articles->render();
        $this->title = '文章列表';
//        dd($articles);
        return $this->render('article.list', compact('articles', 'links'));
    }
}
