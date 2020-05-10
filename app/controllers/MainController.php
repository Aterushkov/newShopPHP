<?
namespace app\controllers;

use tavshop\Cache;

class MainController extends AppController{


  public function indexAction(){   

    $this->setMeta('Главная страница', 'Описание главное страницы', 'Ключи главной страницы');
      $brands = \R::find('brand', 'LIMIT 3');
      $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
      $this->set(compact('brands', 'hits'));
  }
  
}