<?php
//include_once('./models/catalogue.php');
class ProducerController {

    private $producerModel;

    public function __construct()
    {
        $this->producerModel = new Producer();
    }
    public function actionIndex()
    {
        $title = 'Производители';
        //$userIsAuthorized =  true;
        $producers = $this->producerModel->getAll();
        include_once('./views/producer/index.php');
    }

    public function actionAdd()
    {

        $title = 'Добавить Производителя';

        if (isset($_POST['producer_name'])) {

            $name = htmlentities($_POST['producer_name']);

            $this->producerModel->addProducer($name);

            header('Location:  ' . FULL_SITE_ROOT . 'producers');
        }

        include_once('./views/producer/form.php');
    }

    public function actionEdit($id)
    {

        if (!isset($id)) {
            echo 'Страница не найдена!';
            exit();
        }
        if (isset($_POST['producer_name'])) {
            $name = htmlentities($_POST['producer_name']);
            $this->producerModel->editProducer($name, $id);
            header('Location:  ' . FULL_SITE_ROOT . 'producers');
        }

        $title= 'Изменить категорию';
        $producer =  $this->producerModel->getById($id);
        include_once('./views/producer/form.php');
//        echo "Вызван метод ActionEdit с параметром $id";
    }


}
