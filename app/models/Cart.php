<?php


namespace app\models;
use tavshop\App;

class Cart extends AppModel {
    public function addToCart($product, $gty=1, $mod=null){
        if(!isset($_SESSION['cart.currency'])){
            $_SESSION['cart.currency'] = App::$app->getProperty('currency');
        }
        if($mod){
            $ID = "{$product->id}-{$mod->id}";
            $title = "{$product->title} ({$mod->title})";
            $price = $mod->price;
        }else{
            $ID = $product->id;
            $title = $product->title;
            $price = $product->price;
        }
        if(isset($_SESSION['cart'][$ID])){
            $_SESSION['cart'][$ID]['gty'] += $gty;
        }else{
            $_SESSION['cart'][$ID] = [
                'gty' => $gty,
                '$title' => $title,
                'alias' => $product->alias,
                'price' => $price * $_SESSION['cart.currency']['value'],
                'img' => $product->img,
            ];
        }
        $_SESSION['cart.gty'] = isset($_SESSION['cart.gty']) ? $_SESSION['cart.gty'] + $gty : $gty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $gty * ($price * $_SESSION['cart.currency']['value']) : $gty * ($price * $_SESSION['cart.currency']['value']);
    }
}