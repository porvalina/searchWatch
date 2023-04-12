<?php
define("PROJECT_ROOT", dirname(__DIR__) . "/");

require_once '../vendor/autoload.php';
require_once '../bootstrap.php';
require_once('../src/models/User.php');
require_once('../src/models/SearchWatch.php');
require_once('../src/controllers/UserController.php');
require_once('../src/controllers/SearchWatchController.php');
session_start();

if (isset($_SESSION['user'])) {
  $loggeduser = $entityManager->getRepository(User::class)
            ->findOneBy(['id' => $_SESSION['user']]);
  if (!$loggeduser) {
    $_SESSION['user'] = null;
    header("Location: index.php?page=Users&action=login");
  }
} else {
  $loggeduser = NULL;
}

$request = $_SERVER['REQUEST_URI'];
parse_str(parse_url($request)['query'], $params);
$userController = new UserController($entityManager);
$searchWatchController = new SearchWatchController($entityManager);

switch ($params['page']) {
    case 'Users':
      if ($params['action'] == 'login') {
        $userController->login();
      }
      if ($params['action'] == 'registration') {
        $userController->registration();
      }
      break;
    case 'SearchWatch':
      if ($params['action'] == 'add') {
        $searchWatchController->addSearchWatch($loggeduser);
      }
      break;
    default:
      if ($loggeduser) {
        $searchWatchController->list($loggeduser);
      } else {
        header("Location: index.php?page=Users&action=login");
      }
}
