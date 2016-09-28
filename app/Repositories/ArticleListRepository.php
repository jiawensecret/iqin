<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/5
 * Time: 13:52
 */
namespace App\Repositories;

use App\Model\Article;
use App\Model;

class ArticleListRepository extends BaseRepository
{

    const PAGE_SIZE = 3;
    private $_orderBy = [];

    public function __construct(Article $article)
    {
        $this->model = $article;

    }

    /**
     * 获取文章列表
     *
     * @author DJW 2016-08-25 10:37:55
     * @param array $params 限定条件
     * @param array $orderBy 排序方式 key=>value key为字段 value为方式 DESC或ASC
     * @param int $pageSize 分页每页条数
     * @param int $type 模式 默认0为分页展示 1为获取数据 返回数据数组
     */

    public function getArticleList($params = [], $orderBy = [], $pageSize = self::PAGE_SIZE, $type = 0)
    {
        foreach ($params as $value) {
            if ($value == 'hot') {
                $this->isHot();
            }
            if ($value == 'top') {
                $this->isTop();
            }
        }
        $this->_orderBy = $orderBy;
        $this->orderBy();

        if ($type == 0) {
            return $this->model->paginate($pageSize);
        } elseif ($type == 1) {
            return $this->model->get()->toArray();
        } else {//todo
            return $this->model->get()->toArray();
        }
    }

    protected function isHot()
    {
        $this->model = $this->model->where('hot', 1);
    }

    protected function isTop()
    {
        $this->model = $this->model->where('top', 1);
    }

    private function orderByDefault()
    {
        $this->model = $this->model->orderBy('hot', 'DESC')->orderBy('create_at','DESC');

    }

    private function validate_order()
    {
        $filter = ['created_at', 'click', 'love', 'click', 'updated_at'];
        $this->_orderBy = array_intersect_key($this->_orderBy, array_flip($filter));
    }

    private function orderBy()
    {
        $this->validate_order();
        if ($this->_orderBy) {
            foreach ($this->_orderBy as $key => $value) {
                $this->model = $this->model->orderBy($key, $value);
            }
        } else {
            $this->model = $this->model->orderBy('love', 'DESC')->orderBy('click', 'DESC');
        }
        $this->orderByDefault();
    }
}