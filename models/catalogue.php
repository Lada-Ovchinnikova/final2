<?php
//include_once('./components/db.php');
class Catalogue
{
    private $connect;
    public function __construct()
    {
        $this->connect = DB::getConnection();
    }
    public function getAll()
    {
            $query = "
            SELECT  *
            FROM `products`;
            ";
        $result = mysqli_query($this->connect, $query);
        //print_r(mysqli_fetch_all($result, MYSQLI_ASSOC));
        return mysqli_fetch_all($result, MYSQLI_ASSOC);

    }

    public function getAllFilter()
    {
        if (!empty($_POST['producerId']) xor !empty($_POST['categoryId'])) {
            if (!empty($_POST['producerId'])) {
                $selectedProducers = $_POST['producerId'];
                $producersValues = '';
                foreach ($selectedProducers as $selectedProducer) {
                    $producersValues .= $selectedProducer . ",";

                }
                $producersValues = substr($producersValues,0,-1);
                $valuesSql = "WHERE `product_producer_id` IN (" . $producersValues . ")";
            } else {
                $selectedCategories = $_POST['categoryId'];
                $categoriesValues = '';
                foreach ($selectedCategories as $selectedCategory) {
                    $categoriesValues .= $selectedCategory . ",";
                }
                $categoriesValues = substr($categoriesValues,0,-1);
                $valuesSql = "WHERE `product_category_id` IN (" . $categoriesValues . ")";
            }
            $query = "
            SELECT  *
            FROM `products`
            $valuesSql;
            ";
            $result = mysqli_query($this->connect, $query);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        if (!empty($_POST['producerId']) and !empty($_POST['categoryId'])) {
            $selectedProducers = $_POST['producerId'];
            $selectedCategories = $_POST['categoryId'];
            $producersValues = '';
            $categoriesValues = '';
            foreach ($selectedProducers as $selectedProducer) {
                $producersValues .= $selectedProducer . ",";
            }
            foreach ($selectedCategories as $selectedCategory) {
                $categoriesValues .= $selectedCategory . ",";
            }
            $producersValues = substr($producersValues,0,-1);
            $categoriesValues = substr($categoriesValues,0,-1);
            $query = "
                SELECT  *
                FROM `products`
                WHERE `product_producer_id` IN ($producersValues)
                   AND `product_category_id` IN ($categoriesValues);
                ";
            $result = mysqli_query($this->connect, $query);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        if (empty($_POST['producerId']) and empty($_POST['categoryId'])) {
            $query = "
            SELECT  *
            FROM `products`;
            ";
            $result = mysqli_query($this->connect, $query);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);

        }
    }

    public function getById($id)
    {
        $query = "
                SELECT * FROM `products`
                WHERE `product_id` = $id;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_assoc($result);
    }

    public function getByParameters($producerId)
    {
       // $producerId = mysqli_real_escape_string($this->connect, $producerId);экранирование не надо скрее всего
        $query = "
                SELECT * FROM `products`
                WHERE `product_producer_id` = $producerId;

            ";

        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_assoc($result);

    }

    public function addItem($data)
    {

    }
}
