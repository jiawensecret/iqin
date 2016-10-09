<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/29
 * Time: 15:17
 */

namespace App\Repositories;


use App\Model\EMessage;

class EmessageRepository extends BaseRepository
{

    public function __construct(EMessage $emessage)
    {
        $this->model = $emessage;
    }


    /**
     * 获取消息列表
     *
     * @param $user_id
     * @param bool $send true为发送列表 默认为收信列表
     * @return mixed
     */
    public function getMessageList($user_id,$send =false) {
        if ($send) {
            return $this->model->where('send_user',$user_id)
                ->orderBy('status','ASC')
                ->orderBy('send_time','DESC')
                ->paginate(10);
        }
        return $this->model->where('recipient',$user_id)
            ->orderBy('status','ASC')
            ->orderBy('send_time','DESC')
            ->paginate(10);
    }

    /**
     * 获取信息详情
     *
     * @param $user_id
     * @param $id
     * @param bool $send true为发送的message false为收取的
     * @return mixed
     */
    public function getMessage($user_id,$id,$send = false) {
        if ($send) {
            return $this->model->where('send_user',$user_id)->where('id',$id)->first()->toArray();
        }

        return $this->model->where('recipient',$user_id)->where('id',$id)->first()->toArray();

    }

    public function readMessage($user_id ,$id) {
        return $this->model->where('recipient',$user_id)->where('id',$id)->update(['status'=>1]);
    }
}