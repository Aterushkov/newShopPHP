<?
namespace app\controllers;

use app\models\AppModel;
use app\widgets\currency\Currency;
use tavshop\base\Controller;
use tavshop\App;
use tavshop\Cache;


class ProductController extends AppController{

  public function viewAction(){
    $alias = $this->route['alias'];
    $product =\R::findOne('product', "alias = ? AND status= '1'", [$alias]);
    if(!$product){
      throw new \Exception('Страница не найдена', 404);
    }

    // debug($product);
        // хлебные крошки
        // Связанные товары
        // Просмотренные товары запись в кукки
        // модификаторы цвета
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product'));
  }
}