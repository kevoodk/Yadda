<?php
require_once '/model/modelIF.php';

abstract class model implements modelIF{

    abstract public function create();
    abstract public function delete();
    abstract public function update();
}