<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= CSS . 'style.css'; ?>" />
    <link rel="stylesheet" href="<?= LIBS . 'bootstrap/css/bootstrap.css'; ?>" />
    <script src="<?= LIBS . 'bootstrap/js/bootstrap.js'; ?>"></script>
</head>
<body>
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
                        <li><a class="dropdown-item  <?= $title === 'Товары' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'products'; ?>">Все товары</a></li>
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
                        <li><a class="dropdown-item  <?= $title === 'Личный кабинет' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'account'; ?>">Личный кабинет</a></li>
                        <li><a class="dropdown-item <?= $title === 'История заказов' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'orders'; ?>">История заказов</a></li>
                    </ul>
                </li>
                <?endif; ?>
                <li class="nav-item">
                    <a class="nav-link <?= $title === 'Корзина' ? 'active' : ''; ?>" aria-current="page" href="<?= FULL_SITE_ROOT . 'carts'; ?>">Корзина</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Войти/Выйти</a>
                    <ul class="dropdown-menu">
                        <? if (!$this->isAuthorized==true): ?>
                        <li><a class="dropdown-item  <?= $title === 'Регистрация' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'reg'; ?>">Регистрация</a></li>
                        <li><a class="dropdown-item <?= $title === 'История заказов' ? 'active' : ''; ?>" href="<?= FULL_SITE_ROOT . 'auth'; ?>">Авторизация</a></li>
                        <?else: ?>
                        <li><a class="dropdown-item  <?= $title === 'Выйти' ? 'active' : ''; ?>"  href="<?= FULL_SITE_ROOT . 'logout'; ?>">Выйти</a></li>
                        <?endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<h1> <?= $title; ?> </h1>
    
