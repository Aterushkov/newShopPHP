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
    $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?",[$product->id]);
    
    //галерея
    $gallery = \R::findAll('gallery','product_id = ?',[$product->id]);
    // Просмотренные товары запись в кукки
    // модификаторы цвета
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related', 'gallery'));
  }
}