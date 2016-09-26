<?php

namespace App\Repositories;

use App\Model\Article;
use App\Model\Revert;
use App\Model\ArticleContent;
use App\Model\Comment;

class ArticleRepository extends BaseRepository
{

    protected $revert;//回复

    protected $articleContent;//文章内容

    protected $comment;//文章内容

    public function __construct(Article $article, Revert $revert, ArticleContent $articleContent, Comment $comment)
    {
        $this->model = $article;
        $this->revert = $revert;
        $this->articleContent = $articleContent;
        $this->comment = $comment;
    }

    /**
     * 获取文章所有内容 对外接口
     */
    public function getArticle($id = 0)
    {

        $article = $this->model->findOrFail($id);
        $article_content = $this->getArticleContent($article['id']);
        $comments = $this->getAllComments($article['id']);
        $reverts = $this->getAllReverts($article['id']);
        $reverts = collect($reverts)->groupBy('comment_id')->toArray();

        return compact('article', 'article_content', 'comments', 'reverts');

    }

    /**
     * 获取文章内容
     */
    public function getArticleContent($article_id)
    {
        $this->vaildateEmpty($article_id);
        return $this->articleContent->where('article_id', $article_id)->first();
    }

    /**
     * 获取文章信息
     */
    public function getArticleInfo()
    {

    }

    /**
     * 获取所有文章评论
     *
     * @param $article_id
     * @return mixed
     */
    public function getAllComments($article_id)
    {
        $this->vaildateEmpty($article_id);
        return $this->comment->where('article_id', $article_id)->get()->toArray();
    }

    public function getComment($id)
    {
        $this->vaildateEmpty($id);
        return $this->comment->find($id)->toArray();
    }

    /**
     * 获取这篇文章所有评论的回复
     *
     * @param $article_id
     * @return mixed
     */
    public function getAllReverts($article_id)
    {
        $this->vaildateEmpty($article_id);
        return $this->revert->where('article_id', $article_id)->get()->toArray();
    }

    /**
     * 获取某条评论的回复
     *
     * @param $comment_id
     * @return mixed
     */
    public function getReverts($comment_id)
    {
        $this->vaildateEmpty($comment_id);
        return $this->revert->where('comment_id', $comment_id)->get()->toArray();
    }

}