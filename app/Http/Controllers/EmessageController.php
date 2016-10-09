<?php

namespace App\Http\Controllers;

use App\Model\EMessage;
use App\Repositories\EmessageRepository;
use App\Repositories\RelationRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class EmessageController extends Controller
{
    protected $emessage;
    protected $relation;


    public function __construct(EmessageRepository $emessage, RelationRepository $relation)
    {
        parent::__construct();

        $this->emessage = $emessage;
        $this->relation = $relation;

    }


    //
    public function index() {

        $message_list = $this->emessage->getMessageList($this->user['id']);

        $friend_list = $this->relation->getFriends($this->user['id']);

        return $this->render('user.emessage',compact('message_list','friend_list'));

    }



    public function view($id) {
        $send = request('send',false);
        $the_message = $this->emessage->getMessage($this->user['id'],$id,$send);
        if(!$the_message) {
            abort(404);
        }
        if($the_message['status'] == 0 && !$send) {
            $this->emessage->readMessage($this->user['id'],$id);
        }

        $friend_list = $this->relation->getFriends($this->user['id']);

        return $this->render('user.emessages_info',compact('the_message','friend_list'));
    }

    //发送页面
    public function send(){

    }

    //发送保存页面
    public function postSend(){

    }

    //获取收件人
    private function getUser(){

    }
}
