<?php
require_once 'model.php';

class Follow extends model {
    public $uid;
    public $fid;
    public $tags;

    public function getUId(){
        return $this->uid;
    }

    public function getFid(){
        return $this->fid;
    }

    public function getTags(){
        return $this->tags;
    }

}