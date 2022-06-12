<? include_once("./views/common/header.php"); ?>

<form action="C:\xampp\htdocs\final\controllers\cartcontroller.php" method="post">
    <div class="cart-table">
        <div>
            <div class="item-headings">
                <div class="item-img1">
                </div>
                <div class="item-desc">
                </div>
                <div class="item-price">
                    <span class="">Цена за шт.</span>
                </div>
                <div class="item-amount">
                    <span class="">Количесво</span>
                </div>
                <div class="item-final">
                    <span class="">Итого</span>
                </div>
            </div>

            <? foreach ($items as $item): ?>
            <div class="item" product_id="<?= $item['id']; ?>">
                <input
                        type="text"
                        class="form-control visually-hidden-cost"
                        placeholder="name"
                        value="<?= $item['id']; ?>"
                        name="product_id"/>
                <div class="item-img">
                    <img src="././assets/img/<?= $item['img']; ?>" alt="" class="img-sample">
                </div>
                <div class="item-desc">
                    <p class="item-title"><?= $item['name']; ?></p>
                    <span class="item-weight"><?= $item['weight']; ?> г.</span>
                    <span class="item-del">Удалить</span>
                </div>
                <div class="item-price">
                    <span class="item-weight"><?= $item['price']; ?> p.</span>
                </div>
                <div class="item-amount">
                    <div class="qty counter-control">
                        <span class="qty-minus">-</span>
                        <input class="item-amount-qty qty-value" type="text" value="<?= $item['qty']; ?>" id="counter_input">
                        <span class="qty-plus">+</span>
                    </div>
                </div>
                <div class="item-final">
                    <span class="item-final-price"><?= $item['final']; ?> p.</span>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
    <div class="cart-total">
        <div class="cart-total-wrapper">
            <p class="cart-total-text">Ваша корзина</p>
        </div>
        <div class="cart-total-final-wrapper">
            <span class="cart-total-final">Итого</span>
            <span class="cart-total-sum"> 1500 ₽</span>
        </div>
        <div class="cart-submit">
            <button type="submit" name="submit">Оформить заказ</button>
        </div>
    </div>
</form>
<!--    <form action="action.php" method="post">-->
<!--        <p>Ваше имя: <input type="text" name="name" /></p>-->
<!--        <p>Ваш возраст: <input type="text" name="age" /></p>-->
<!--        <p><input type="submit" /></p>-->
<!--    </form>-->

<?php
// Вывести одно конкретное значение cookie
//echo $_COOKIE["TestCookie"];

// В целях тестирования и отладки может пригодиться вывод всех cookie
//print_r($_COOKIE);
?>

<? include_once("./views/common/footer.php"); ?>