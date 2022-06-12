<?php
//include_once('./models/product.php');
class ProductController {

    private $productModel;
    private $categoryModel;
    private $producerModel;
    private $connection;


    public function __construct()
    {
        $this->productModel = new Product();
        $this->categoryModel = new Category();
        $this->producerModel = new Producer();
        $this->connection = DB::getConnection();

    }
    public function actionIndex()
    {
        $title = 'Товары';
        $products = $this->productModel->getAll();
        include_once('./views/product/index.php');
    }

    public function actionAdd()
    {
        $title = 'Добавить товар';
        $errors = [];

        if (isset($_POST['product_name'])) {
            $name = htmlentities($_POST['product_name']);
            $name = mysqli_real_escape_string($this->connection, $name);
            $sku = htmlentities($_POST['product_sku']);
            $desc = htmlentities($_POST['product_desc']);
            $count = htmlentities($_POST['product_count']);
            $price = htmlentities($_POST['product_price']);
            $weight = htmlentities($_POST['product_weight']);
            $category = htmlentities($_POST['product_category']);
            $producer = htmlentities($_POST['product_producer']);
            if (empty($errors)) {
                $this->productModel->addProduct(array(
                    'name' => $name,
                    'sku' => $sku,
                    'desc' => $desc,
                    'count' => $count,
                    'price' => $price,
                    'weight' => $weight,
                    'category' => $category,
                    'producer' => $producer
                ));
            }
            header('Location:  ' . FULL_SITE_ROOT . 'products');

       }
        $categories = $this->categoryModel->getAll();
        $producers= $this->producerModel->getAll();
        include_once('./views/product/form.php');
    }

    public function actionEdit($id)
    {
        $title = 'Редактировать товар';
        $errors = [];
        $product = $this->productModel->getById($id);
        if (isset($_POST['product_name'])) {
            $name = htmlentities($_POST['product_name']);
            $name = mysqli_real_escape_string($this->connection, $name);
            $sku = htmlentities($_POST['product_sku']);
            $desc = htmlentities($_POST['product_desc']);
            $count = htmlentities($_POST['product_count']);
            $price = htmlentities($_POST['product_price']);
            $weight = htmlentities($_POST['product_weight']);
            $category = htmlentities($_POST['product_category']);
            $producer = htmlentities($_POST['product_producer']);
            if (empty($errors)) {
                $this->productModel->editProduct(array(
                    'name' => $name,
                    'sku' => $sku,
                    'desc' => $desc,
                    'count' => $count,
                    'price' => $price,
                    'weight' => $weight,
                    'category' => $category,
                    'producer' => $producer
                ), $product, $id);
            }
            header('Location:  ' . FULL_SITE_ROOT . 'products');

        }

        $categories = $this->categoryModel->getAll();
        $producers= $this->producerModel->getAll();
        include_once('./views/product/form.php');
    }

    public function actionView($id)
    {
        $title = " Просмотр";
        $product = $this->productModel->getById($id);
        include_once('./views/product/view.php');
    }

}
