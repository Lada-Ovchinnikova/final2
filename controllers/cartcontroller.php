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

    public function actionAdd()
    {

        $title = 'Корзина';
        $items = $this->cartModel->getAll();
        echo 'hhhh';
        if (isset($_POST['product_id'])) {
            $id = htmlentities($_POST['product_id']);
            $this->cartModel->addOrder($id);

            //header('Location:  ' . FULL_SITE_ROOT . 'categories');
        }
        include_once('./views/cart/index.php');
    }

//    public function actionCheckout()
//    {
//        $title = 'Заказ размещен';
//        include_once('./views/cart/сheckout.php');
//
//    }
    public function actionDelivery()
    {
        $title = 'Доставка';
        $items = $this->cartModel->getAll();
        $addresses = $this->cartModel->getAddresses();
        $userId = $this->userModel->getId();
        $user = $this->userModel->getById($userId);


        include_once('./views/cart/delivery.php');
    }

    public function actionEdit($id)
    {

        if (!isset($id)) {
            echo 'Страница не найдена!';
            exit();
        }
        if (isset($_POST['category_name'])) {
            $name = htmlentities($_POST['category_name']);
            $this->categoryModel->editCategory($name, $id);
            header('Location:  ' . FULL_SITE_ROOT . 'categories');
        }

        $title= 'Изменить категорию';
        $category =  $this->categoryModel->getById($id);
        include_once('./views/category/form.php');
//        echo "Вызван метод ActionEdit с параметром $id";
    }


}
