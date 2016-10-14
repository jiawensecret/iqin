<?php

namespace App\Repositories;

abstract class BaseRepository{

    const PAGE_SIZE = 3;
    protected $model;

    public function getById($id) {
        return $this->model->findOrFail($id);
    }

    public function destory($id) {
        return $this->model->delete($id);
    }

    public function vaildateEmpty($data) {
        if(is_array($data)) {
            foreach($data as $item) {
                if(empty($item)) {
                    abort('404');
                }
            }
        } else {
            if(empty($data)) {
                abort('404');
            }
        }
        return true;
    }
}