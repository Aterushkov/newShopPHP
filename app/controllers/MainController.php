<?
namespace app\controllers;

use tavshop\Cache;

class MainController extends AppController{


  public function indexAction(){   

    $this->setMeta('Главная страница', 'Описание главное страницы', 'Ключи главной страницы');
  
  }
  
}