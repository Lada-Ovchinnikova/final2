<?php include_once("./views/common/header.php"); ?>
<?php if (!empty($items)): ?>
<form action="C:\xampp\htdocs\final\controllers\cartcontroller.php" method="post">
     <div class="cart-table container-fluid">
         <div class="row cust-cart-items">
             <div class="col-12 col-lg-8 cust-cart-items-wrapper">
                 <div class="fd">
                     <?php foreach ($items as $item): ?>
                         <div class="cust-cart-item">
                             <div class="row">
                                 <div class="col-4">
                                     <img src="././assets/img/<?= $item['img']; ?>" alt="" class="img-cart-card">
                                 </div>
                                 <div class="col-8">
                                     <div class="cust-cart-item-content-container">
                                         <div class="cust-cart-item-content">
                                             <a href="<?= FULL_SITE_ROOT . 'catalogue/view/' . $item['id']; ?>" class="cust-cart-item-name"><?= $item['name']; ?></a>
                                             <div>
                                                 <span class="item-price  price-for-<?= $item['id']; ?>"><?= $item['price']; ?></span>
                                                 <span> p. / шт.</span>
                                             </div>
                                         </div>
                                         <div class="item-final cust-cart-item-final">
                                             <span class="item-final-price final-price-for-<?= $item['id']; ?>"><?= $item['final']; ?></span> <span>p.</span>
                                         </div>
                                     </div>
                                     <div class="qty counter-control cust-cart-counter">
                                         <span class="qty-minus qty-id cart-qty-minus" product_id="<?= $item['id']; ?>">-</span>
                                         <input class="item-amount-qty qty-value add-itm-cart cust-cart-amount"
                                                product_id="<?= $item['id']; ?>" product_sku="<?= $item['img']; ?>" product_img="product_<?= $item['img']; ?>.jpg" product_price="<?= $item['price']; ?>" product_name="<?= $item['name']; ?>" product_weight="<?= $item['weight']; ?>"
                                                type="text" value="<?= $item['qty']; ?>" id="counter_input" readonly>
                                         <span class="qty-plus qty-id cart-qty-plus" product_id="<?= $item['id']; ?>">+</span>
                                     </div>
                                     <div class="cust-cart-item-remove-container">
                                         <span class="item-del js-del cust-cart-item-remove-button" product_id="<?= $item['id']; ?>">Удалить</span>
                                     </div>
                                 </div>
                             </div>

                         </div>

                     <?php endforeach; ?>
                 </div>

             </div>
            <div class="col-12 col-lg-4">
                <div class="cust-cart-total">
                    <div class="cart-total-wrapper">
                        <p class="cust-cart-total-text">Ваша корзина</p>
                    </div>
                    <div class="cust-cart-total-final-wrapper">
                        <span class="cust-cart-total-final">Итого</span>
                        <div>
                            <span class="cart-total-sum"> <?= $this->item; ?></span>
                            <span>p.</span>
                        </div>
                    </div>
                    <div class="cust-cart-total-text-content">
                        <p>Варианты доставки будут указаны далее при оформлении заказа</p>
                    </div>
                    <div class="cust-cart-submit">
<!--                        <button class="cust-cart-submit-button" type="submit" name="submit">Оформить заказ</button>-->
                        <a class="cust-cart-submit-button" href="<?= FULL_SITE_ROOT . 'cart/delivery'; ?>">Оформить заказ</a>
                    </div>
                </div>
                <div class="cust-cart-back">
                    <a class="cust-cart-back-button" href="<?= FULL_SITE_ROOT . 'catalogues'; ?>">Перейти назад в магазин</a>
                </div>
            </div>
         </div>

</form>
<?php else: ?>
<span>Ваша корзина пуста</span>
<?php endif; ?>

<?php
// Вывести одно конкретное значение cookie
//echo $_COOKIE["TestCookie"];

// В целях тестирования и отладки может пригодиться вывод всех cookie
//print_r($_COOKIE);
?>

<?php include_once("./views/common/footer.php"); ?>