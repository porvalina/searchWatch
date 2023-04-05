<?php

class UserController {
    public $templates;
    public $entityManager;

    function __construct($entityManager) {
        $this->entityManager = $entityManager;
        $this->templates = new League\Plates\Engine(PROJECT_ROOT . "src/views");
    }

    public function registration()
    {   
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (strlen( $email ) > 0 && strlen( $password ) > 0) {
            $user = new User();
            $user->setEmail($email);
            $user->setPassword(md5($password));
            $this->entityManager->persist($user);
            try {
                $this->entityManager->flush();
                header("Location: index.php?page=Users&action=login");
            }
            catch(Exception $e) {
                echo $this->templates->render('registration', ['error' => [$e->getMessage()]]);
            }
            
        } else {
            echo $this->templates->render('registration', ['error' => []]);
        }
    }
    
    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (strlen( $email ) > 0 && strlen( $password ) > 0) {
            $user = $this->entityManager->getRepository(User::class)
                         ->findOneBy(['email' => $email, 'password' => md5($password)]);

            if ($user == null) {
                echo $this->templates->render('login', [
                    'email' => $email,
                    'error' => 'wrong email or password'
                ]);
            } else {
                $_SESSION['user'] = $user->getId();
                header("Location: index.php");
            }
        } else {
            echo $this->templates->render('login', [
                'email' => $email,
                'error' => ''
            ]);
        }
        
    }

    public function render()
    {
        $someValue = 'hello Alina from UserController !';
        echo $this->templates->render('user', ['someValue' => $someValue]);
    }
}
