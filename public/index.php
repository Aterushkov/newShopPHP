<?
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';

new \tavshop\App();
// debug(\tavshop\App::$app->getProperties());
// throw new Exception('Страница не найдена', 404);