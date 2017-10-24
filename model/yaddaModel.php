<?php
    require_once './model.php';

    class yadda extends model{
    protected $yaddaId;
    protected $text;
    protected $image;
    protected $tags;
    protected $last;
    protected $created;
    protected $uid;


    public function getYId(){
        return $this->yaddaId;
    }
    public function getUId(){
            return $this->uid;
    }
    public function getImage(){
            return $this->image;
    }
    public function getTags(){
            return $this->tags;
    }
    public function getCreated(){
            return $this->created;
    }
    public function getLast(){
            return $this->last;
    }
    public function getText(){
            return $this->text;
    }
    public function create(){
        // create function goes here
    }
    public function update(){
        // update function goes here
    }
    public function delete(){
        //delete function goes here
    }
    }