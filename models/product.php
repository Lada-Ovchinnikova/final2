<?php
//include_once('./components/db.php');
class Product
{
    private $connect;
    public function __construct()
    {
        $this->connect = DB::getConnection();
    }
    public function getAll()
    {
            $query = "
            SELECT * 
            FROM `products`
LEFT JOIN `producers` ON `producer_id` = `product_producer_id`
LEFT JOIN `categories` ON `category_id` = `product_category_id`;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }


    public function addProduct($data)
    {
        $query = "
            INSERT INTO `products`
            SET `product_name` = '$data[name]',
                `product_sku` = '$data[sku]',
                `product_desc` = '$data[desc]',
                `product_count` = '$data[count]',
                `product_price` = '$data[price]]',
                `product_weight` = '$data[weight]',
                `product_category_id` = '$data[category]',
                `product_producer_id` = '$data[producer]';
            ";
        return  mysqli_query($this->connect, $query);
    }

    public function getById($id)
    {
        $query = "
            SELECT * 
            FROM `products`
            LEFT JOIN `producers` ON `producer_id` = `product_producer_id`
            LEFT JOIN `categories` ON `category_id` = `product_category_id`
            WHERE `product_id` = $id;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_assoc($result);
    }

    public function editProduct( $data, $oldData, $id)
    {

        $query = "
                UPDATE `products`
                SET `product_name` = '$data[name]',
                    `product_sku` = '$data[sku]',
                    `product_desc` = '$data[desc]',
                    `product_count` = '$data[count]',
                    `product_price` = '$data[price]]',
                    `product_weight` = '$data[weight]',
                    `product_category_id` = '$data[category]',
                    `product_producer_id` = '$data[producer]'
                WHERE `product_id` = $id;
            ";
        return mysqli_query($this->connect, $query);
    }
}
