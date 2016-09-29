<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/29
 * Time: 16:06
 */

namespace App\Repositories;


use App\Model\Relation;

class RelationRepository extends BaseRepository
{
    public function __construct(Relation $relations)
    {
        $this->model = $relations;
    }

    /**
     * 通过用户id获取其朋友
     *
     * @param $user_id
     */
    public function getFriends($user_id) {
        return $this->model->where('sponsor_id',$user_id)->orWhere('reply_user',$user_id)->get()->toArray();
    }
}