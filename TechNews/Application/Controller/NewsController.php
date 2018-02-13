<?php


namespace Application\Controller;


use Core\Controller\AppController;

class NewsController extends AppController
{
    public function indexAction() {
        $this->render('news/index');
        include_once PATH_VIEWS . '/news/index.php';
    }

    public function categorieAction() {
        echo 'JE SUIS CATEGORIE ACTION';
    }

    public function articleAction() {
        echo 'JE SUIS ARTICLE ACTION';
    }
}