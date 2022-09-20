<?php

class CartController {

    private $cartModel;
    private $userModel;
    public $isAuthorized;
    public $isAdmin;
    public $item;

    public function __construct()
    {
        $this->cartModel = new Cart();
        $this->userModel = new User();
        $this->isAuthorized = (new User())->userIsAuthorized();
        $this->isAdmin = (new User())->userIsAdmin();
        $this->item = (new Cart())->getTotalprice();
    }

    public function actionIndex()
    {
        $title = 'Корзина';
        $items = $this->cartModel->getAll();
        include_once('./views/cart/index.php');
    }

    public function actionCheckout()
    {
        $title = 'Оформление заказа';
        include_once('./views/cart/checkout.php');
    }


    public function actionDelivery()
    {
        $title = 'Доставка';
        $userId = $this->userModel->getId();
        if (isset($_POST['product_id'])) {
            $id = htmlentities($_POST['product_id']);
            $address = htmlentities($_POST['delivery-pickpoint']);
            $comment = htmlentities($_POST['order-comment']);
            $this->cartModel->addOrder($userId,$address, $id, $comment);
            header('Location:  ' . FULL_SITE_ROOT . 'checkout');
        }

        $items = $this->cartModel->getAll();
        $addresses = $this->cartModel->getAddresses();

        $user = $this->userModel->getById($userId);


        include_once('./views/cart/delivery.php');
    }

//    public function actionEdit($id)
//    {
//
//        if (!isset($id)) {
//            echo 'Страница не найдена!';
//            exit();
//        }
//        if (isset($_POST['category_name'])) {
//            $name = htmlentities($_POST['category_name']);
//            $this->categoryModel->editCategory($name, $id);
//            header('Location:  ' . FULL_SITE_ROOT . 'categories');
//        }
//
//        $title= 'Изменить категорию';
//        $category =  $this->categoryModel->getById($id);
//        include_once('./views/category/form.php');
//    }


}
