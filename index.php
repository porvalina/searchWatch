<?php

session_start();

$request = $_SERVER['REQUEST_URI'];
echo $request;

// switch ($request) {
//     case '/':
//     case '/tapahtumat':
//       echo $templates->render('tapahtumat',['tapahtumat' => $tapahtumat]);
//       break;
//     default:
//     echo $templates->render('notfound');
// }
echo "Alina i Igor molodec";

