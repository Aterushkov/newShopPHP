<?
namespace app\controllers;


class MainController extends AppController{


  public function indexAction(){   
    // $this->route;
    // $this->controller;
    $this->setMeta('Главная страница', 'Описание главное страницы', 'Ключи главной страницы');
    $this->set(['name'=>'Имя', 'age'=>30]);
  }
  
}