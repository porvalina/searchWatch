<?php

class SearchWatchController {
    public $templates;
    public $entityManager;

    function __construct($entityManager) {
        $this->entityManager = $entityManager;
        $this->templates = new League\Plates\Engine(PROJECT_ROOT . "src/views");
    }

    public function addSearchWatch($user)
    {
        $text = $_POST['text'];
        if (strlen( $text ) > 0) {
            $searchWatch = new SearchWatch();
            $searchWatch->setText($text);
            $searchWatch->setUser($user);
            $searchWatch->setCreated(new DateTime());
            $this->entityManager->persist($searchWatch);
            try {
                $this->entityManager->flush();
                header("Location: index.php");
            }
            catch(Exception $e) {
                echo $this->templates->render('list', ['error' => $e->getMessage()]);
            }
        } else {
            header("Location: index.php");
        }
    }

    public function list($user)
    {
        $watches = $this->entityManager->getRepository(SearchWatch::class)->findBy(['user' => $user]);
        echo $this->templates->render('list', ['watches' => $watches]);
    }
}