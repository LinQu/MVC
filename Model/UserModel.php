<?php
class UserModel
{
  private $userList = array();

  public function __construct()
  {
    $storage = isset($_COOKIE['user']) ? $_COOKIE['user'] : null;
    if (!$storage || ($storage && empty($this->userList = unserialize($storage)))) {
    }
  }

  public function getAll()
  {
    return $this->userList;
  }

  public function get($id)
  {
    return isset($this->userList[$id]) ? $this->userList[$id] : null;
  }

  public function add($data)
  {
    $this->userList[] = $data;
    $this->saveto();
  }

  public function delete($id)
  {
    unset($this->userList[$id]);
    $this->saveto();
  }


  public function edit($id, $data)
  {
    $this->userList[$id] = $data;
    $this->saveto();
  }

  private function saveto()
  {
    setcookie('user', serialize($this->userList));
  }

  public function __destruct()
  {
    $this->saveto();
  }
}
