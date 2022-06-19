<?php

class user
{
    private $connection;

    public Function __construct()
    {
        $this->connection = DB::getConnection();
    }

    public function checkIfLoginExists($login)
    {
        $query = (new Select(('users')))
            ->what(['COUNT' => 'COUNT(*)'])
            ->where("WHERE `user_login` = '$login'")
            ->build();
        $result = mysqli_query($this->connection, $query);
        return mysqli_fetch_assoc($result)['COUNT'];
    }

    public function checkIfEmailExists($email)
    {
        $query = (new Select(('users')))
            ->what(['COUNT' => 'COUNT(*)'])
            ->where("WHERE `user_email` = '$email'")
            ->build();
        $result = mysqli_query($this->connection, $query);
        return mysqli_fetch_assoc($result)['COUNT'];
    }

    public function register($login, $email, $password)
    {
        $query = "
            INSERT INTO `users`
                SET `user_login` = '$login',
                `user_email` = '$email',
                `user_password` = '$password',
                `user_status` = 1;
        ";
        mysqli_query($this->connection, $query);
        $id = mysqli_insert_id($this->connection);
        return $id;
    }

    public function getStatus($userId)
    {

        $query = "
            SELECT `user_status` FROM `users` WHERE `user_id` = '$userId'
        ";
        $result = mysqli_query($this->connection, $query);
        $arr = mysqli_fetch_all($result, MYSQLI_ASSOC);

       return $arr[0]['user_status'];
    }

    public function auth($userId, $userStatus)
    {
        $helper = new Helper();
        $token = $helper->generateToken();
        $tokenTime = time() + 30 * 60;
        setcookie('uid', $userId, time() +2 * 24 * 60 * 60, '/');
        setcookie('ustatus', $userStatus, time() +2 * 24 * 60 * 60, '/');
        setcookie('token', $token, time() +2 * 24 * 60 * 60, '/');
        setcookie('t_token', $tokenTime, time() +2 * 24 * 60 * 60, '/');
        $query = "
            INSERT INTO `connects`
                SET `connect_user_id` = $userId,
                    `connect_token` = '$token',
                    `connect_token_time` = FROM_UNIXTIME($tokenTime),
                    `connect_status` = '$userStatus'
                  ;
        ";
        mysqli_query($this->connection, $query);
    }

    public function checkUserByLoginAndPassword($login, $password)
    {
        $query = (new Select('users'))
            ->what(['user_id'])
            ->where("WHERE `user_login` = '$login' AND `user_password` = '$password'")
            ->build();
        $result = mysqli_query($this->connection, $query);
        //return mysqli_fetch_assoc($result)['user_id'];
        return mysqli_fetch_assoc($result)['user_id'] ?? 0;
    }

    public function getById($id)
    {
        $query = "
            SELECT * 
            FROM `users`
            WHERE `user_id` = $id;
            ";
        //echo $query;
        $result = mysqli_query($this->connection, $query);
        return mysqli_fetch_assoc($result);
    }

    public function editUser( $data, $oldData, $id)
    {

        $query = "
                UPDATE `users`
                SET `user_name` = '$data[name]',
                    `user_login` = '$data[login]',
                    `user_email` = '$data[email]',
                    `user_phone` = '$data[phone]',
                    `user_dob` = '$data[dob]]'
                WHERE `user_id` = $id;
            ";
        return mysqli_query($this->connection, $query);
    }

    public function userIsAuthorized()
    {
        $isAuthorized = false;
        if (isset($_COOKIE['uid']) && isset($_COOKIE['token']) && isset($_COOKIE['t_token']) && isset($_COOKIE['ustatus'])) {
            $userId = $_COOKIE['uid'];
            $token = $_COOKIE['token'];
            $tokenTime = $_COOKIE['t_token'];
            $userStatus = $_COOKIE['ustatus'];
            $query = "
            SELECT `connect_id`
            FROM `connects`
            WHERE `connect_user_id` = $userId AND `connect_token` = '$token' AND `connect_status` = '$userStatus';
            ";
            $result = mysqli_query($this->connection, $query);
            if (mysqli_num_rows($result) > 0) {
                $isAuthorized = true;
                if ($tokenTime < time()) {
                    $helper = new Helper();
                    $newToken = $helper->generateToken();
                    $newTokenTime = time() + 30 * 60;
                    setcookie('uid', $userId, time() +2 * 24 * 60 * 60, '/');
                    setcookie('ustatus', $userStatus, time() +2 * 24 * 60 * 60, '/');
                    setcookie('token', $newToken, time() +2 * 24 * 60 * 60, '/');
                    setcookie('t_token', $newTokenTime, time() +2 * 24 * 60 * 60, '/');
                    $connectId = mysqli_fetch_assoc($result)['connect_id'];
                    $query = "
                UPDATE `connects`
                    SET `connect_token` = '$newToken',
                        `connect_token_time` = FROM_UNIXTIME($newTokenTime),
                        `connect_status` = '$userStatus'
                WHERE `connect_id` = $connectId;
                ";
                    mysqli_query($this->connection, $query);
                }
            }
        }
        return $isAuthorized;
    }
    public function userIsAdmin()
    {
        $isAdmin = 0;
        //echo "изначально я здесь";
        if (isset($_COOKIE['ustatus'])) {
            $statusId= $_COOKIE['ustatus'];
            echo $statusId;
            if ($statusId == 2) {
                $isAdmin = 2;
                //echo ($_COOKIE['ustatus']);
                //echo 'опустился сюда';
            } else if (isset($_COOKIE['ustatus']) == 1) {
                $isAdmin = 1;
                //echo 'а теперь опустился сюда админ равен одному';
            }
        }
        return $isAdmin;
    }
    public function getOrders($userId, $userStatus)
    {
        if ($userStatus == 1)
        {
            $query = "
            SELECT `order_name` 
            FROM `orders`
            WHERE  `order_user_id` = '$userId';
            ";
        } else {

            $query = "
            SELECT `order_name`, `order_user_id` 
            FROM `orders`
            GROUP BY `order_name`;
            ";
        }
        $result = mysqli_query($this->connection, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function getId()
    {
        $userId= $_COOKIE['uid'];
        return $userId;
    }



    public function getProductsByOrderName($orderName, $userStatus)
    {
        if ($userStatus == 1) {
            $query = "
            SELECT * 
            FROM `orders`
            WHERE  `order_name` = '$orderName';
            ";
        } else {
            $query = "
            SELECT * 
            FROM `orders`
            LEFT JOIN  `users` ON `user_id`=`order_user_id`
            WHERE  `order_name` = '$orderName'   
;
            ";
        }
        $result = mysqli_query($this->connection, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function logout()
    {
        setcookie('uid', '', time() - 3600, '/');
        setcookie('ustatus', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');
        setcookie('t_token', '', -3600, '/');
        setcookie('t_token', '', -3600, '/');
        if (isset($_COOKIE['items'])) {
            setcookie('items', '', -3600, '/');
        }

    }

}