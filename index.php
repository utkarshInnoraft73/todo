<?php

$url = parse_url($_SERVER['REQUEST_URI']);
$path = $url['path'];

$query = '';
if (isset($url['query'])) {
  $query = $url['query'];
}
switch ($path) {
  case '/':
  case '/index':
    require './Home.php';
    break;

  case '/add-list':
    require './AddList.php';
    break;

  case '/edit-list':
    require './EditList.php';
    break;

  case '/done-list':
    require './DoneList.php';
    break;

  default:
    require('./404.php');
}
