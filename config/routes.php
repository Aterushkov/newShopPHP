<?php

use tavshop\Router;

Router::add('^product/(?P<alias>[a-z0-9-]+)/?$',['controller' =>'Product', 'action' => 'view']);
Router::add('^category/(?P<alias>[a-z0-9-]+)/?$',['controller' =>'Category', 'action' => 'view']);

// default routes admin
Router::add('^admintav$',['controller' =>'Main', 'action' => 'index', 'prefix' =>'admintav']);
Router::add('^admintav/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$', ['prefix' =>'admintav']);
// default routes
Router::add('^$',['controller' =>'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');