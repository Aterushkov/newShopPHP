<?php


namespace app\controllers;


use app\models\Cart;

class CartController extends AppController
{
 public function addAction(){
     $id = !empty($_GET['id']) ? (int)($_GET['id']) : null;
     $gty = !empty($_GET['gty']) ? (int)($_GET['gty']) : null;
     $mod_id = !empty($_GET['mod']) ? (int)($_GET['mod']) : null;
     $mod = null;
     if($id){
         $product = \R::findOne('product', 'id=?', [$id]);
         if(!$product){
             return false;
         }
            if($mod_id){
                $mod = \R::findOne('modification', 'id=? AND product_id =?', [$mod_id,$id]);
            }

     }
     $cart =new Cart();
     $cart->addToCart($product,$gty, $mod);
     if($this->isAjax()){
         $this->loadView('cart_modal');
     }
     redirect();
//     debug($cart);
 }
 public function showAction(){
     $this->loadView('cart_modal');
 }
    public function deleteAction(){
        $id = !empty($_GET['id']) ? $_GET['id'] : null;
        if(isset($_SESSION['cart'][$id])){
            $cart =new Cart();
            $cart->deleteItem($id);
        }
        if($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function clearAction(){
        unset($_SESSION['cart']);
        unset($_SESSION['cart.gty']);
        unset($_SESSION['cart.sum']);
        unset($_SESSION['cart.currency']);
        if($this->isAjax()){
            $this->loadView('cart_modal');
        }
        redirect();
    }
}
