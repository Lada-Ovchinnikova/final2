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
        if (!$_FILES['product_img']['tmp_name']) {
            $newName = "product_none.png";
        } else {
            $newName = "product_$data[sku]" . ".jpg";
        }

        $tmp_name = $_FILES['product_img']['tmp_name'];
        move_uploaded_file($tmp_name, "././assets/img/" . $newName);
        $query = "
            INSERT INTO `products`
            SET `product_name` = '$data[name]',
                `product_sku` = '$data[sku]',
                `product_desc` = '$data[desc]',
                `product_count` = '$data[count]',
                `product_price` = '$data[price]]',
                `product_weight` = '$data[weight]',
                `product_category_id` = '$data[category]',
                `product_producer_id` = '$data[producer]',
                `product_img` = '$newName';
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
        //$checkingImg = "$data[img]";
//        $n = preg_replace('/\..+$/u', '', $checkingImg);
//        $sku = "$data[sku]";

        print_r($data) ;
//        echo '<br/>';
//        echo $sku;
//        if (!$_FILES['product_img']['tmp_name']) {
//            if ($n === $sku) {
//                $newName = "product_$data[sku]" . ".jpg";
//            } else {
//                $newName = "product_none.png";
//            }
//            echo $newName;
//        } else {
//            $newName = "product_$data[sku]" . ".jpg";
//            echo $newName;
//        }
//        if ($_FILES['product_img']['tmp_name']) {
//
//
//            // = "product_$data[sku]";
//            //echo $checkingName;
//            //$filename = 'C:\\xampp\\htdocs\\final\\assets\\img\\' . $checkingName . '.jpg';
//            //echo $filename;
//            echo "временное имя существует и добавилась новая картинка";
//            //if ($filename) {
//                //unlink($filename);
//                //$newName = "product_$data[sku]";
//                //$tmp_name = $_FILES['product_img']['tmp_name'];
//                //move_uploaded_file($tmp_name, "././assets/img/" . $newName . ".jpg");
//           // }
//        } else {
//            echo " картинки не было и врем. имени тоже нет";
//        }

//        $newName = "product_$data[sku]";
//        $tmp_name = $_FILES['product_img']['tmp_name'];
//        move_uploaded_file($tmp_name, "././assets/img/" . $newName . ".jpg");



//        $query = "
//                UPDATE `products`
//                SET `product_name` = '$data[name]',
//                    `product_sku` = '$data[sku]',
//                    `product_desc` = '$data[desc]',
//                    `product_count` = '$data[count]',
//                    `product_price` = '$data[price]]',
//                    `product_weight` = '$data[weight]',
//                    `product_category_id` = '$data[category]',
//                    `product_producer_id` = '$data[producer]',
            //        `product_img` = '$newName';
//                WHERE `product_id` = $id;
//            ";
//        return mysqli_query($this->connect, $query);

    }
}
