<?
namespace app\controllers;


class MainController extends AppController{


  public function indexAction(){   
    $posts = \R::findAll('test');
    $this->setMeta('Главная страница', 'Описание главное страницы', 'Ключи главной страницы');
    $this->set(compact(['posts']));
  }
  
}