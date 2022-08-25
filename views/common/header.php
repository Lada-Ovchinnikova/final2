<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= CSS . 'all.min.css'; ?>" />
    <link rel="stylesheet" href="<?= CSS . 'style.css'; ?>" />
    <link rel="stylesheet" href="<?= LIBS . 'bootstrap/css/bootstrap.css'; ?>" />
    <script src="<?= LIBS . 'bootstrap/js/bootstrap.js'; ?>"></script>
</head>
<body>
<div class="container-fluid">
    <div class="header-top">
        <div class="header-top-content">
            <div class="row align-items-center no-gutters">
                <div class="col-3 col-md-4 col-lg-5">
                    <div class="row align-items-center">
                        <div class="header-phone col-auto pr-md-0">
                            <a href="" class="btn d-none d-md-inline-block btn-sm">8 (812) 333-33-33</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 d-flex justify-content-center">
                    <div class="header-logotype">
                        <a href="#">
                            <img class="logo-zaglushka" src="" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-3 col-md-4 col-lg-5 d-flex justify-content-end">
                    <div class="row align-items-center">
                        <? if (!$this->isAuthorized==true): ?>
                            <div class="header-login col-auto">
                                <a class="btn btn-sm btn-icon pl-0 pr-0 "  <?= $title === 'История заказов' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'auth'; ?>">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <span>Войти</span>
                                </a>
                            </div>
                            <div class="header-reg col-auto">
                                <a href="<?= FULL_SITE_ROOT . 'reg'; ?>" class="btn btn-sm btn-icon pl-0 pr-0 <?= $title === 'Регистрация' ? 'active' : ''; ?>">
                                    <i class="far fa-user"></i>
                                    <span>Регистрация</span>
                                </a>
                            </div>
                        <?else: ?>
                            <div class="header-logout col-auto">
                                <a href="<?= FULL_SITE_ROOT . 'logout'; ?>" class="btn btn-sm btn-icon pl-0 pr-0 <?= $title === 'Выйти' ? 'active' : ''; ?>">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <span>Выйти</span>
                                </a>
                            </div>
                        <?endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= $title === 'Каталог' ? 'active' : ''; ?>" aria-current="page" href="<?= FULL_SITE_ROOT . 'catalogues'; ?>">Каталог</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= $title === 'policy' ? 'active' : ''; ?>" aria-current="page" href="<?= FULL_SITE_ROOT . 'agreement'; ?>">policy</a>
                </li>

                <? if ($this->isAuthorized==true and $this->isAdmin ==2): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Категории</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  <?= $title === 'Категории' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'categories'; ?>">Все категории</a></li>
                        <li><a class="dropdown-item <?= $title === 'Добавить Категорию' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'category/add'; ?>">Добавить категорию</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Товары</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  <?= $title === 'Товары' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'products'; ?>">Редактировать товар</a></li>
                        <li><a class="dropdown-item <?= $title === 'Добавить Категорию' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'product/add'; ?>">Добавить товар</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Производители</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  <?= $title === 'Производители' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'producers'; ?>">Все производители</a></li>
                        <li><a class="dropdown-item <?= $title === 'Добавить Производителя' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'producer/add'; ?>">Добавить товар</a></li>
                    </ul>
                </li>
                <?endif; ?>
                <? if ($this->isAuthorized==true and $this->isAdmin ==1): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Пользователь</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item  <?= $title === 'Личный кабинет' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'account/' . $_COOKIE['uid']; ?>">Личный кабинет</a></li>
                        <li><a class="dropdown-item <?= $title === 'История заказов' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'orders'; ?>">История заказов</a></li>
                    </ul>
                </li>

                <?endif; ?>
                <? if ($this->isAuthorized==true and $this->isAdmin ==2): ?>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'История заказов' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'orders'; ?>" >История заказов</a>
                    </li>
                <?endif; ?>
<!--                --><?// if ($this->isAuthorized==true and $this->isAdmin ==1): ?>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link --><?//= $title === 'Корзина' ? 'active' : ''; ?><!--" aria-current="page" href="--><?//= FULL_SITE_ROOT . 'carts'; ?><!--">Корзина</a>-->
<!--                </li>-->
<!--                --><?//endif; ?>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Войти/Выйти</a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        --><?// if (!$this->isAuthorized==true): ?>
<!--                        <li><a class="dropdown-item  --><?//= $title === 'Регистрация' ? 'active' : ''; ?><!--"  href="--><?//= FULL_SITE_ROOT . 'reg'; ?><!--">Регистрация</a></li>-->
<!--                        <li><a class="dropdown-item --><?//= $title === 'История заказов' ? 'active' : ''; ?><!--" href="--><?//= FULL_SITE_ROOT . 'auth'; ?><!--">Авторизация</a></li>-->
<!--                        --><?//else: ?>
<!--                        <li><a class="dropdown-item  --><?//= $title === 'Выйти' ? 'active' : ''; ?><!--"  href="--><?//= FULL_SITE_ROOT . 'logout'; ?><!--">Выйти</a></li>-->
<!--                        --><?//endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h1> <?= $title; ?> </h1>
    
