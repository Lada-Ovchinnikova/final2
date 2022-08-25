<?php
class UserController {

    private $userModel;
    private $connection;
    public $isAuthorized;
    public $isAdmin;

    public function __construct()
    {
        $this->userModel = new User();
        $this->connection = DB::getConnection();
        $this->isAuthorized = (new User())->userIsAuthorized();
        $this->isAdmin = (new User())->userIsAdmin();
    }

    public function actionReg()
    {
        $title = 'Регистрация нового пользователя';
        $errors = [];
        if (isset($_POST['user_login'])) {
            //$connect = getConnection();

            $login = htmlentities($_POST['user_login']);
            $login = mysqli_real_escape_string($this->connection, $login);
            $name = htmlentities($_POST['user_name']);
            $name = mysqli_real_escape_string($this->connection, $name);
            $email = htmlentities($_POST['user_email']);
            $email = mysqli_real_escape_string($this->connection, $email);
            $password = htmlentities($_POST['user_password']);
            $password = mysqli_real_escape_string($this->connection, $password);
            $repeatPassword = htmlentities($_POST['user_repeat_password']);
            $repeatPassword = mysqli_real_escape_string($this->connection, $repeatPassword);

//            if (!preg_match('/^[a-z0-9\_\-]{5,30}$/iu', $login)) {
//                $loginError = "Логин. Допустимые символы - буквы латинского алфавита, цифры, символы «-» и «_». Длина строки - 8 до 30 символов.<br />";
//                array_push($errors, $loginError);
//            }
//            if (!preg_match('/^[0-9a-z]([0-9a-z_\-])*@((?1)|[0-9а-яa-z])*\.((?1)|[0-9а-яa-z]){2,10}$/iu', $email )) {
//                $emailError = "E-mail. Строка должна начинаться с буквы или цифры. Допустимые буквы (латиница), символы (_ и -).Электронная почта должна быть в формате test@mail.ru <br />";
//                array_push($errors, $emailError);
//            }
//            if (!preg_match('/^([a-zA-Z0-9\-\_\+\#\$]+)$/i', $password )) {
//                $passwordError = "Пароль должен содержать по одной заглавной и малой букве латинского алфавита, цифру и спец символ (-, _, +, #, $). Длина строки - 8 до 30 символов.<br />";
//                array_push($errors, $passwordError);
//            }
            if ($password !== $repeatPassword) {
                $repPasswordError = "Пароли должны совпадать.<br />";
                array_push($errors, $repPasswordError);
            }

            if (empty($errors)) {
                $countRows = $this->userModel->checkIfLoginExists($login);
                if ($countRows == 1) {
                    $errors[] = 'Пользователь с таким login есть';
                }
                $countRows = $this->userModel->checkIfEmailExists($email);

                /*$query = "SELECT * FROM `users` WHERE `user_login` = '$login' ";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) === 1) {
                    $errors[] = 'Пользователь с таким логином есть';
                }
                $query = "SELECT * FROM `users` WHERE `user_email` = '$email' ";
                $result = mysqli_query($connect, $query);*/
                if ($countRows == 1) {
                    $errors[] = 'Пользователь с таким email есть';
                }
                if (empty($errors)) {
                    $password = md5($password);
                    $userId = $this->userModel->register($name, $login, $email, $password);
                    $userStatus = $this->userModel->getStatus($userId);
                    $this->userModel->auth($userId, $userStatus);
                    $this->userModel->userIsAdmin($userStatus);
                    header('Location:  ' . FULL_SITE_ROOT . 'reg');
                }

            }

        }
        require_once('./views/user/reg.php');
    }

    public function actionAuth ()
    {
        $title = 'авторизация';
        $errors =[];

        if (isset($_POST['user_login'])) {
            $login = htmlentities($_POST['user_login']);
            $login = mysqli_real_escape_string($this->connection, $login);
            $password = htmlentities($_POST['user_password']);
            $password = mysqli_real_escape_string($this->connection, $password);
            $password = md5($password);
            $userId = $this->userModel->checkUserByLoginAndPassword($login, $password);
            $userStatus = $this->userModel->getStatus($userId);
            if ($userId > 0) {
                $this->userModel->auth($userId, $userStatus);
                header('Location: ' . FULL_SITE_ROOT . 'catalogues');
            } else {
                $errors[] = "Такой связки login / password не найдено";
            }
        }
        require_once('./views/user/auth.php');
    }

    public function actionEdit($id)
    {
        $title = 'Личный кабинет';
        $errors = [];
        $user = $this->userModel->getById($id);
        if (isset($_POST['user_name'])) {
            $name = htmlentities($_POST['user_name']);
            $name = mysqli_real_escape_string($this->connection, $name);
            $email = htmlentities($_POST['user_email']);
            $login = htmlentities($_POST['user_login']);
            $phone = htmlentities($_POST['user_phone']);
            $dob = htmlentities($_POST['user_dob']);
            if (empty($errors)) {
                $this->userModel->editUser(array(
                    'name' => $name,
                    'email' => $email,
                    'login' => $login,
                    'phone' => $phone,
                    'dob' => $dob
                ), $user, $id);
            }
            header('Location:  ' . FULL_SITE_ROOT . 'carts');

        }

        include_once('./views/user/index.php');
    }

    public function actionHistory()
    {
        $title = 'История заказов';

        $userId = $this->userModel->getId();
        $userStatus = $this->userModel->getStatus($userId);
        $orders= $this->userModel->getOrders($userId, $userStatus);
        include_once('./views/user/history.php');
    }

    public function actionView($orderName)
    {
        $title = 'Заказ ' . $orderName;
        $userId = $this->userModel->getId();
        $userStatus = $this->userModel->getStatus($userId);
        $products = $this->userModel->getProductsByOrderName($orderName, $userStatus);
        include_once('./views/user/view.php');
    }
    public function actionLogout()
    {
        $title = 'Выход';
        $this->userModel->logout();
        header('Location:  ' . FULL_SITE_ROOT . 'catalogues');
        include_once('./views/user/logout.php');
    }

    public function actionAgreement()
    {
        $title = '';
        include_once('./views/user/agreement.php');
    }

}

