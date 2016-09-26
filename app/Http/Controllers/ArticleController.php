<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\ArticleRepository;

class ArticleController extends Controller
{
    //
    protected $articleRepository;

    protected $parser;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 文章页
     */
    public function index($id) {
        $articles = $this->articleRepository->getArticle($id);


        if ($articles['article']['md'] == 1) {
            $articles['article_content'] =($articles['article_content']);
            var_dump($articles['article_content']);exit;
        } else {

        }
        return view('article.article',$articles);
    }
}
