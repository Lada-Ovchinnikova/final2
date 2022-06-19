<?php

class CartController {

    private $cartModel;
    public $isAuthorized;
    public $isAdmin;
    public $item;

    public function __construct()
    {
        $this->cartModel = new Cart();
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

    public function actionEdit($id)
    {


    }


}
