<?php

namespace Models;


// access layer interface for Item.
class Item {
    protected $todo;
    protected $dm;

    //inject necessary class.
    public function __construct(){
        //Get object document Mapper manager instance $dm.
        $this->dm = require_once __DIR__ . '/../bootstrap.php';
        $this->todo = new \Documents\TodoItem();
    }

    public function insert($message, $dueDate, $status){

        $this->todo->setMessage($message);
        $this->todo->setCreateDate();
        $this->todo->setDueDate($dueDate);
        $this->todo->setStatus($status);

        $this->dm->persist($this->todo);
        $this->dm->flush();
    }

    //get by status or get all.
    public function get($status = NULL){

    }

    public function updateStatus($id, $status){

    }

    public function edit($id, $msg, $dueDate){

    }

    public function destroy($id){

    }


}



?>
