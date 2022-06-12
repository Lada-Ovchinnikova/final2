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
