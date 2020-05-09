<?
namespace app\controllers;

use tavshop\Cache;

class MainController extends AppController{


  public function indexAction(){   
    $posts = \R::findAll('test');
    $this->setMeta('Главная страница', 'Описание главное страницы', 'Ключи главной страницы');
    
    $names =['Fyr','Ryf','myd'];
    $cache = Cache::instance();
    // $cache->delite('test');
    $data = $cache->get('test');
    if(!$data){
      $cache->set('test', $names);
    }
    
    debug($data);

    $this->set(compact(['posts']));
  }
  
}