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
        $items = json_decode($_COOKIE['items'], true);
        return $items;
    }

    public function addOrder ($id)
    {
        $id = mysqli_real_escape_string($this->connect, $id);
        $orderName = mt_rand(333, 1556);
        $items = json_decode($_COOKIE['items'], true);
        $dbValues = '';
        foreach ($items as $item) {
            $dbValues .=  "( " . $orderName . ", '" . $item['name'] . "', " . $id . ", " . $item['price'] . ", " . $item['final'] . "),";
        }
        $dbValues = substr($dbValues,0,-1);
        $query = "
            INSERT INTO `orders`( `order_name`, `order_product_name`, `order_product_qty`,  `order_product_price`, `order_product_total_price` )
	    VALUES
	        $dbValues
	    ";
        return  mysqli_query($this->connect, $query);
}
}

