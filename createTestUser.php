<?php
require_once(__DIR__.'/bootstrap.php');
require_once(__DIR__.'/src/models/User.php');
$testUser = new User();
$testUser->setEmail("test@gmail.com");
$testUser->setPassword(md5("qwerty"));
$entityManager->persist($testUser);
$entityManager->flush();
