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
        $this->articleListRepository = $articleList;
    }

    public function index()
    {
        $articles = $this->articleListRepository->getArticleList();
        $links = $articles->render();
        $title = 'articleList';
//        dd($articles);
        return view('article.list', compact('articles', 'links', 'title'));
    }
}
