<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/14
 * Time: 10:24
 */

namespace App\Repositories;

use App\Model\Note;
use App\Model\NoteContent;
use App\Model\User;
use App\Model\UserCollect;
use App\Model\UserCollectColumn;


class MemberRepository extends BaseRepository
{

    protected $userCollect;

    protected $userCollectColumn;

    protected $noteContent;

    protected $note;

    public function __construct(User $user, UserCollect $userCollect, UserCollectColumn $userCollectColumn, Note $note, NoteContent $noteContent)
    {
        $this->model = $user;
        $this->userCollect = $userCollect;
        $this->userCollectColumn = $userCollectColumn;
        $this->note = $note;
        $this->noteContent = $noteContent;
    }

    public function getArticle($id, $category_id = 0 ,$pageSize = parent::PAGE_SIZE)
    {
        $query = $this->note->where('user_id',$id);
        if (!empty($category_id)) {
            $query = $query->where('category_id',$category_id);
        }
        $article = $query->paginate($pageSize);
        return $article;
    }

    public function getUserInfo($id) {

    }
}