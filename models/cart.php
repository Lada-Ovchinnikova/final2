<?php
class Cart
{
    private $connect;
    public function __construct()
    {
        $this->connect = DB::getConnection();
    }
    public function getAll()
    {
        if (isset($_COOKIE['items'])){
            $items = json_decode($_COOKIE['items'], true);
            return $items;
        } else {
            //echo "Карзина пуста";
            return false;
        }

    }

    public function getTotalprice()
    {
        $item = 0;
        if (isset($_COOKIE['items'])) {

        $products = json_decode($_COOKIE['items'], true);

        foreach ($products as $product) {
            $item += $product['final'];
        }

        return $item;
            }
    }

    public function addOrder ($userId, $address, $id, $comment)
    {
        $id = mysqli_real_escape_string($this->connect, $id);
        $orderName = mt_rand(333, 1556);
        $items = json_decode($_COOKIE['items'], true);
        $dbValues = '';
        foreach ($items as $item) {
            $dbValues .=  "( ". $userId . ", " . $address . ", " . $orderName . ", '" . $item['name'] . "', " . $item['qty'] . ", " . $item['price'] . ", " . $item['final'] . ", '" . $comment . "'" . "),";
        }
        $dbValues = substr($dbValues,0,-1);
        print_r($items);
        echo $address;
        echo $dbValues;
        $query = "
            INSERT INTO `orders`( `order_user_id`, `order_address_id`, `order_name`, `order_product_name`, `order_product_qty`,  `order_product_price`, `order_product_total_price`, `order_comment` )
	    VALUES
	        $dbValues
	    ";
        echo $query;
        return  mysqli_query($this->connect, $query);
    }
    public function getAddresses()
    {
        $query = "
            SELECT  *
            FROM `addresses`;
            ";
        $result = mysqli_query($this->connect, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}

