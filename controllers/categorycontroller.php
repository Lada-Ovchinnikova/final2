<?php
//include_once('./models/catalogue.php');
class CategoryController {

    private $categoryModel;
    public $isAuthorized;
    public $isAdmin;

    public function __construct()
    {
        $this->categoryModel = new Category();
        $this->isAuthorized = (new User())->userIsAuthorized();
        $this->isAdmin = (new User())->userIsAdmin();

    }
    public function actionIndex()
    {
        $title = 'Категории';
        $categories = $this->categoryModel->getAll();
        include_once('./views/category/index.php');
    }

    public function actionAdd()
    {

        $title = 'Добавить Категорию';

        if (isset($_POST['category_name'])) {

            $name = htmlentities($_POST['category_name']);

            $this->categoryModel->addCategory($name);

            header('Location:  ' . FULL_SITE_ROOT . 'categories');
        }

        include_once('./views/category/form.php');
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
