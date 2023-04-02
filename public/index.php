<?php
define("PROJECT_ROOT", dirname(__DIR__) . "/");

require_once '../vendor/autoload.php';
require_once '../bootstrap.php';
session_start();

if (isset($_SESSION['user'])) {
  require_once('../src/models/User.php');
  $loggeduser = $entityManager->find("User", $_SESSION['user']);
} else {
  $loggeduser = NULL;
}

$request = $_SERVER['REQUEST_URI'];
$query = parse_url($request)['query'];
$page = explode("=", $query);

switch ($page[1]) {
    case 'Users':
        require_once('../src/controllers/UserController.php');
        $controller = new UserController();
        $controller->render();
        break;
    case 'SearchWatch':
      require_once('../src/controllers/SearchWatchController.php');
      $controller = new SearchWatchController();
      $controller->render();
      break;
    default:
      $templates = new League\Plates\Engine(PROJECT_ROOT . "src/views");
      echo $templates->render('notfound');
}
#echo "Alina i Igor molodec";

