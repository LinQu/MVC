<?php

require 'Model\UserModel.php';
require 'controller\UserController.php';

$params = isset($_GET['controller']) ? $_GET['controller'] : null;
if (null === $params) {
  die('Page not found');
}

@list($controller, $method, $id) = explode('/', $params);
if (!class_exists($controller) || (class_exists($controller) && !method_exists($controller, $method))) {
  die('Page not foundp');
}



call_user_func_array(array(new $controller(), $method), array($id));
