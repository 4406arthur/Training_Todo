<?php

namespace Documents;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/** @ODM\Document */
class TodoItem{
  /** @ODM\ID */
  private $id;
  /** @ODM\Field(type="string") */
  private $message;
  /** @ODM\Field(type="string") */
  private $createDate;
  /** @ODM\Field(type="string") */
  private $dueDate;
  /** @ODM\Field(type="string") */
  private $status;

  public function getID()
  {
	  return $this->id;
  }

  public function getMessage()
  {
	  return $this->message;
  }

  public function setMessage($msg)
  {
	$this->message = $msg;
  }

  public function getCreateData()
  {
	  return $this->createDate;
  }

  public function setCreateDate()
  {
	  $this->createDate = date('Y-m-d H:i');
  }

  public function getDueDate()
  {
	  return $this->dueDate;
  }

  public function setDueDate($date)
  {
	  $this->dueDate = $date;
  }

  public function getStatus()
  {
	  return $this->status;
  }

  public function setStatus($status)
  {
	  $this->status = $status;
  }

}

?>
