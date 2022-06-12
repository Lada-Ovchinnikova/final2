<?php
$routes = array (
    'CatalogueController' => array (
        'catalogues' => 'index',
        'catalogue/add' => 'add',
        'catalogue/edit/([0-9]+)' => 'edit/$1',
        'catalogue/delete/([0-9]+)' => 'delete/$1',
        'catalogue/test' => 'test/$1',
        'catalogue/view/([0-9]+)' => 'view/$1'
    ),
    'CategoryController' => array(
        'categories' => 'index',
        'category/add' => 'add',
        'category/edit/([0-9]+)' => 'edit/$1',
        'category/delete/([0-9]+)' => 'delete/$1',
    ),
    'ProducerController' => array(
        'producers' => 'index',
        'producer/add' => 'add',
        'producer/edit/([0-9]+)' => 'edit/$1',
        'producer/delete/([0-9]+)' => 'delete/$1',
    ),
    'ProductController' => array (
        'products' => 'index',
        'product/add' => 'add',
        'product/edit/([0-9]+)' => 'edit/$1',
        'product/delete/([0-9]+)' => 'delete/$1',
        'product/view/([0-9]+)' => 'view/$1',
        'product/mark/([0-9]+)/([1-5])' => 'mark/$1/$2'
    ),
    'CartController' => array (
        'carts' => 'index',
        'cart/add' => 'add'
    ),
    'UserController' => array(
        'auth' => 'auth',
        'reg' => 'reg',
        'account/([0-9]+)' => 'edit/$1',
        'orders' => 'history',
        'order/view/([0-9]+)' => 'view/$1',
    )
);