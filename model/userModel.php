<?php
class User extends model {
    public $uid;
    public $username;
    public $forname;
    public $picture;
    public $rank;
    public $active;

    public function getYId(){
        return $this->uid;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getForname(){
        return $this->forname;
    }

    public function getPicture(){
        return $this->picture;
    }

    public function getRank(){
        return $this->rank;
    }

    public function getActive(){
        return $this->active;
    }

}