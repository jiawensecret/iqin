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
use App\Model\Category;


class MemberRepository extends BaseRepository
{

    protected $userCollect;

    protected $userCollectColumn;

    protected $noteContent;

    protected $note;

    protected $category;

    public function __construct(User $user, UserCollect $userCollect, UserCollectColumn $userCollectColumn, Note $note,
                                NoteContent $noteContent, Category $category)
    {
        $this->model = $user;
        $this->userCollect = $userCollect;
        $this->userCollectColumn = $userCollectColumn;
        $this->note = $note;
        $this->noteContent = $noteContent;
        $this->category = $category;
    }

    public function getArticleList($id, $category_id = 0 ,$pageSize = parent::PAGE_SIZE)
    {
        $query = $this->note->where('user_id',$id);
        if (!empty($category_id)) {
            $query = $query->where('category_id',$category_id);
        }
        $articleList = $query->paginate($pageSize);
        return $articleList;
    }

    public function getUserInfo($id) {

    }

    public function getCategories($user_id) {
        $categories = $this->category->where('user_id',$user_id)->get();
        $categories = $categories->keyBy('id')->all()->toArray();

        return $categories;
    }

}