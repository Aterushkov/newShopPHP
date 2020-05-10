<?
namespace app\controllers;

use tavshop\Cache;

class MainController extends AppController{


  public function indexAction(){   

    $this->setMeta('Главная страница', 'Описание главное страницы', 'Ключи главной страницы');
      $brands = \R::find('brand', 'LIMIT 3');
      $this->set(compact('brands'));

  }
  
}