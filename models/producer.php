<?php
//include_once('./components/db.php');
class Producer
{
    private $connect;
    public function __construct()
    {
        $this->connect = DB::getConnection();
    }
    public function getAll()
    {
            $query = "
            SELECT `producer_id`, `producer_name` 
            FROM `producers`;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    public function addProducer($name)
    {
        $name = mysqli_real_escape_string($this->connect, $name);

        $query = "
            INSERT INTO `producers`
            SET `producer_name` = '$name';
            ";

        return  mysqli_query($this->connect, $query);
    }

    public function getById($id)
    {
        $query = "
                SELECT * FROM `producers`
                WHERE `producer_id` = $id;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_assoc($result);
    }

    public function editProducer($name, $id)
    {
        $name = mysqli_real_escape_string($this->connect, $name);
        $query = "
                UPDATE `producers`
                    SET `producer_name` = '$name'
                    WHERE `producer_id` = '$id';
            ";
        return mysqli_query($this->connect, $query);
    }
}
