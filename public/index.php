<?
require_once dirname(__DIR__) . '/config/init.php';
require_once LIBS . '/functions.php';
require_once CONF . '/routes.php';

new \tavshop\App();

//  debug(\tavshop\App::$app->getProperties());
// debug(\tavshop\Router::getRoutes());
// throw new Exception('Страница не найдена', 404);