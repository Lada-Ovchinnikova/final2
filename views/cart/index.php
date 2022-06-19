<? include_once("./views/common/header.php"); ?>

<form action="C:\xampp\htdocs\final\controllers\cartcontroller.php" method="post">
    <div class="cart-table">
        <div class ="actionss">
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
            <div class="item" >
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
                    <span class="item-del js-del" product_id="<?= $item['id']; ?>">Удалить</span>
                </div>
                <div class="item-price">
                    <span class="item-price  price-for-<?= $item['id']; ?>"><?= $item['price']; ?></span> <span>p.</span>
                </div>
                <div class="item-amount">
                    <div class="qty counter-control">
                        <span class="qty-minus qty-id cart-qty-minus" product_id="<?= $item['id']; ?>">-</span>
                        <input class="item-amount-qty qty-value add-itm-cart"
                               product_id="<?= $item['id']; ?>" product_sku="<?= $item['img']; ?>" product_img="product_<?= $item['img']; ?>.jpg" product_price="<?= $item['price']; ?>" product_name="<?= $item['name']; ?>" product_weight="<?= $item['weight']; ?>"
                               type="text" value="<?= $item['qty']; ?>" id="counter_input" readonly>
                        <span class="qty-plus qty-id cart-qty-plus" product_id="<?= $item['id']; ?>">+</span>
                    </div>
                </div>
                <div class="item-final">
                    <span class="item-final-price final-price-for-<?= $item['id']; ?>"><?= $item['final']; ?></span> <span>p.</span>
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
            <span class="cart-total-sum"> 1500</span> <span>p.</span>
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