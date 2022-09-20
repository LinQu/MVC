<?php

class UserController
{
  public function index()
  {
    $usermodel = new UserModel();
    $userList = $usermodel->getAll();
    require 'View\UserListView.php';
  }

  public function form($id)
  {
    $usermodel = new UserModel();
    $userData = $usermodel->get($id);


    if (isset($_POST['name']) && isset($_POST['age'])) {
      $usermodel->add(array("name" => $_POST['name'], "age" => $_POST['age']));
      header('Location: ?controller=UserController/index');
    }
    require 'View\UserFormView.php';
  }

  public function delete($id)
  {
    $usermodel = new UserModel();
    $usermodel->delete($id);
    header('Location: ?controller=UserController/index');
  }

  public function edit($id)
  {
    $usermodel = new UserModel();
    $userData = $usermodel->get($id);
    if (isset($_POST['name']) && isset($_POST['age'])) {
      $usermodel->save($id, array("name" => $_POST['name'], "age" => $_POST['age']));
      header('Location: ?controller=UserController/index');
    }
    require 'View\UserEditView.php';
  }
}
