<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\ArticleRepository;
use GrahamCampbell\Markdown\Facades\Markdown;


class ArticleController extends Controller
{
    //
    protected $articleRepository;

    protected $parser;

    public function __construct(ArticleRepository $articleRepository)
    {
        parent::__construct();
        $this->articleRepository = $articleRepository;
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 文章页
     */
    public function index($id) {
        $articles = $this->articleRepository->getArticle($id);


        if ($articles['article']['md'] == 1) {
            $articles['article_content']['content'] = Markdown::convertToHtml($articles['article_content']['content']);
        } else {

        }
        return $this->render('article.article',$articles);
    }
}
