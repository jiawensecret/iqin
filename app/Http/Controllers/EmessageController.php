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


//todo
    public function view($id) {
        $this->data['the_emessage'] = $the_message = Emessage::where('receive_user',$this->_user->id)->where('id',$id)->first()->toArray();
        if(!$the_message) {
            abort(404);
        }
        Emessage::where('receive_user',$this->_user->id)->where('id',$id)->update(['status'=>1]);
        if($the_message['type'] == 0) {
            $this->data['send_user'] = '系统消息';
        } else {
            $this->data['send_user'] = User::where('id',$the_message['send_user'])->first()->name;
        }

        $this->data['title'] = '查看信件';
        return $this->_view('root.emessages.view');
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
