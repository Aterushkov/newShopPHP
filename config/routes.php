<?php

use tavshop\Router;

// default routes admin
Router::add('^admintav$',['controller' =>'Main', 'action' => 'index', 'prefix' =>'admintav']);
Router::add('^admintav/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' =>'admintav']);
// default routes
Router::add('^$',['controller' =>'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');