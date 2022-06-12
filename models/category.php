<?php
//include_once('./components/db.php');
class Category
{
    private $connect;
    public function __construct()
    {
        $this->connect = DB::getConnection();
    }
    public function getAll()
    {
            $query = "
            SELECT `category_id`, `category_name` 
            FROM `categories`;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    public function addCategory($name)
    {
        $name = mysqli_real_escape_string($this->connect, $name);

        $query = "
            INSERT INTO `categories`
            SET `category_name` = '$name';
            ";

        return  mysqli_query($this->connect, $query);
    }

    public function getById($id)
    {
        $query = "
                SELECT * FROM `categories`
                WHERE `category_id` = $id;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_assoc($result);
    }

    public function editCategory($name, $id)
    {
        $name = mysqli_real_escape_string($this->connect, $name);
        $query = "
                UPDATE `categories`
                    SET `category_name` = '$name'
                    WHERE `category_id` = '$id';
            ";
        return mysqli_query($this->connect, $query);
    }
}
