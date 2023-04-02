<?php

class UserController {
    public function render()
    {
        $templates = new League\Plates\Engine(PROJECT_ROOT . "src/views");
        if ($templates->exists('user')) {
            $someValue = 'hello Alina from UserController !';
            echo $templates->render('user', ['someValue' => $someValue]);
        }
        echo $someValue;
    }
}