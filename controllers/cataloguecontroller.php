<?php
//include_once('./models/catalogue.php');
class CatalogueController {

    private $catalogueModel;
    private $categoryModel;
    private $producerModel;
    private $productModel;
    public $isAuthorized;
    public $isAdmin;


    public function __construct()
    {
        $this->catalogueModel = new Catalogue();
        $this->categoryModel = new Category();
        $this->producerModel = new Producer();
        $this->productModel = new Product();
        $this->isAuthorized = (new User())->userIsAuthorized();
        $this->isAdmin = (new User())->userIsAdmin();
    }
    public function actionIndex()
    {
        $title = 'Каталог';
        $catalogue = $this->catalogueModel->getAll();
        //$catalogue = $this->catalogueModel->getAllFilter()
        $categories = $this->categoryModel->getAll();
        $producers= $this->producerModel->getAll();
        include_once('./views/catalogue/index.php');
    }

    public function actionAdd()
    {

    }

    public function actionEdit($id)
    {
        var_dump($id);
        echo "dffhfh edit with paranetr $id";
    }

    public function actionView($id)
    {
        $title = " Просмотр";
        $productItem = $this->productModel->getById($id);
        include_once('./views/catalogue/view.php');
    }

    public function actionFilter($producerId)
    {
        if ($_GET['producerId']) {

            $producerId = (_GET['producerId']);

            $this->catalogueModel->getByParameters($producerId);
            include_once('./views/catalogue/test.php');

        }
    }
}
