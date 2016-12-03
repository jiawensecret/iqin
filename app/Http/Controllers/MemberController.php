<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories;

class MemberController extends Controller
{
    //
    protected $memberRepository;

    public function __construct(Repositories\MemberRepository $memberRepository)
    {
        parent::__construct();
        $this->memberRepository = $memberRepository;
    }

    public function articleList() {
        $user_id = $this->user['id'] ?: 0;
        $articles = $this->memberRepository->getArticleList($user_id);
        $categories = $this->memberRepository->getCategories($user_id);
        $this->title = $this->user['name'].'的笔记';

        return $this->render('note.list',compact('articles','categories'));
    }

    public function categoryArticle($id) {
        $user_id = $this->user['id'] ?: 0;
        $articles = $this->memberRepository->getArticleList($user_id,$id);
        $categories = $this->memberRepository->getCategories($user_id);
        $this->title = $this->user['name']."【{$categories['id']['name']}】列表";

        return $this->render('note.list',compact('articles','categories'));

    }

    public function setting() {

    }

    public function postSetting() {

    }
}
