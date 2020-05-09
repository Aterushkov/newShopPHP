<?
namespace tavshop\base;

use tavshop\Db;

 abstract class Model{

  public $attributes =[];
  public $errors =[];
  public $rules =[];

  public function __construct(){
    Db::instance();
  }
 }