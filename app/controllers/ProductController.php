<?
namespace app\controllers;

use app\models\AppModel;
use app\models\Product;
use app\models\Breadcrumbs;
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

     // Связанные товары
     $related = \R::getAll("SELECT * FROM related_product JOIN product ON product.id = related_product.related_id WHERE related_product.product_id = ?",[$product->id]);
    // Просмотренные товары запись в кукки
    $p_model = new Product();
    $p_model->setRecentlyViewed($product->id);
     // Просмотренные товары
    $r_viewed = $p_model->getAllRecentlyViewed();
    $recentlyViewed = null;
    $r_viewed = str_split($r_viewed);
  
    if($r_viewed){
      
     $recentlyViewed = \R::find('product', 'id IN ('. \R::genSlots($r_viewed) .') LIMIT 3', $r_viewed);
    }

    // хлебные крошки
    $breadcrumbs = Breadcrumbs::getBreadcrumbs($product->category_id,$product->title);
    
    //галерея
    $gallery = \R::findAll('gallery','product_id = ?',[$product->id]);

    //Модификации
      $mods = \R::findAll('modification', 'product_id=  ?', [$product->id]);
    //debug($mods);

    // модификаторы цвета
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->set(compact('product', 'related', 'gallery', 'recentlyViewed', 'breadcrumbs','mods'));
  }
}