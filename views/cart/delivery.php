<?php include_once("./views/common/header.php"); ?>
<form method="post">
    <div class="order cart-table">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 cust-order-content">
                    <div class="cust-order-list-wrapper">
                        <div class="cust-order-top">
                            <p class="order-list-title">Товары в корзине</p>
                            <a class="cust-order-list-back-button" href="<?= FULL_SITE_ROOT . 'carts'; ?>">Изменить</a>
                        </div>
                        <div class="cust-order-list">
                            <?php foreach ($items as $item): ?>
                                <div class="cust-order-list-item">
                                    <input
                                            type="text"
                                            class="form-control visually-hidden-cust"
                                            placeholder="name"
                                            value="<?= $item['id'] ?? '' ?>"
                                            name="product_id"/>
                                    <a href="<?= FULL_SITE_ROOT . 'catalogue/view/' . $item['id']; ?>" class="cust-order-item-name"><?= $item['name']; ?></a>
                                    <div class="cust-order-item-info">
                                        <span class="cust-order-item-price"><?= $item['price']; ?> руб.</span>
                                        <span class="cust-order-item-count"><?= $item['qty']; ?> шт</span>
                                        <span class="cust-order-item-total final-price-for-<?= $item['id']; ?>"><?= $item['final']; ?> руб.</span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="cust-order-delivery">
                        <p class="order-list-title">Способ получения</p>
                        <p class="order-list-title">Самовывоз</p>
                        <div class="order-delivery-wrapper">
                            <?php foreach ($addresses as $address): ?>
                                <div class="order-delivery-item active" id="">
                                    <span class="check-block"></span>
                                    <input class="check-block-input" type="radio" name="delivery-pickpoint" value="<?= $address['address_id']; ?>" id="radio-<?= $address['address_id']; ?>">
                                    <label for="radio-<?= $address['address_id']; ?>"></label>
                                    <p class="order-delivery-name"><?= $address['address_name']; ?></p>
                                    <p class="order-delivery-schedule"><?= $address['address_schedule']; ?></p>
                                    <p class="order-delivery-address"><?= $address['address_location']; ?></p>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="order-customer">
                        <p class="order-list-title">Данные покупателя</p>
                        <div class="order-customer-form">
                            <div class="form-group">
                                <input class="" value="<?= isset($user['user_id']) ?  $user['user_name'] : '' ?>" type="text" placeholder="Имя" name="ORDER_PROP_1" id="ORDER_PROP_1">
                            </div>
                            <div class="form-group">
                                <input class="" value="<?= isset($user['user_id']) ?  $user['user_email'] : '' ?>" type="text" placeholder="E-Mail" name="ORDER_PROP_2" id="ORDER_PROP_2">
                            </div>
                            <div class="form-group">
                                <input class="" value="<?= isset($user['user_id']) ?  $user['user_phone'] : '' ?>" type="text" placeholder="Телефон" name="ORDER_PROP_3" id="ORDER_PROP_3">
                            </div>
                            <div class="form-group textarea">
                                <textarea class="" placeholder="Комментарий к заказу" name="order-comment" id="order-comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="order-pay">
                        <p class="order-list-title">Оплата</p>
                        <div class="order-pay-method">
                            <label for="ID_PAY_SYSTEM_ID_15">
                                <input type="radio" name="PAY_SYSTEM_ID" id="ID_PAY_SYSTEM_ID_15" data-cash="N" value="15" checked="">
                                <span class="radio"></span>
                                <span>Оплата при получении</span>
                            </label>
                        </div>
                    </div>
                    <div class="order-total-bottom">
                        <div class="check-callback">
                            <p class="active">Если у нас возникнут вопросы по заказу, мы позвоним вам для уточнения деталей</p>
                        </div>
                    </div>
                </div>
                <div id="" class="order-total-sticky col-lg-4 col-md-5">
                    <div class="cart-total bx-soa-cart-total-fixed">
                        <div class="cart-total-line">
                            <span class="cart-title">Ваш заказ:</span>
                            <a class="change-order" href="<?= FULL_SITE_ROOT . 'carts'; ?>">Изменить</a>
                        </div>
                        <div class="cart-total-line cart-total-line-total">
                            <span class="cart-text">Итого:</span>
                            <span class="cart-price"><?= $this->item; ?> руб.</span>
                        </div>
                        <div class="cart-total-button-container d-block d-sm-none">
                            <button type="submit" class="btn order-submit btn-lg" id="">
                                Оформить заказ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php include_once("./views/common/footer.php"); ?>

</body>
</html>
