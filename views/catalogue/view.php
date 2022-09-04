<?php include_once("./views/common/header.php"); ?>
<div>
    <div class="cart-table">
        <div class="holder cart-table">
            <div class="content-page">
                <div class="row cust-view-card">
                    <div class="col-12 col-md-6">
                        <h5 class="card-title cust-card-title_mobile"><?= $productItem['product_name']; ?></h5>
                        <img src="../../assets/img/<?= $productItem['product_img']; ?>" class="rounded cust-card-img" alt="...">
                    </div>
                    <div class="col-12 col-md-6 cust-card-content">
                        <h5 class="card-title cust-card-title_desc"><?= $productItem['product_name']; ?></h5>
                        <div class="cust-card-price">
                            <p class="card-text cust-card-text"><?= $productItem['product_price']; ?></p>
                            <span>Руб.</span>
                        </div>
                        <div class="cust-card-act actions row">
                            <div class="item-amount cust-item-amount col-sm-6">
                                <div class="qty counter-control cust-card-counter">
                                    <span class="qty-minus qty-id" product_id="<?= $productItem['product_id']; ?>">-</span>
                                    <input class="item-amount-qty qty-value add-itm-cart cust-qty-value"
                                           product_id="<?= $productItem['product_id']; ?>" product_sku="<?= $productItem['product_sku']; ?>" product_img="product_<?= $productItem['product_sku']; ?>.jpg" product_price="<?= $productItem['product_price']; ?>" product_name="<?= $productItem['product_name']; ?>" product_weight="<?= $productItem['product_weight']; ?> "
                                           type="text" value="1" id="counter_input" readonly>
                                    <span class="qty-plus qty-id" product_id="<?= $productItem['product_id']; ?>">+</span>
                                </div>
                            </div>
                            <div class=" col-sm-6">
                                <button product_id="<?= $productItem['product_id']; ?>" product_sku="<?= $productItem['product_sku']; ?>" product_img="product_<?= $productItem['product_sku']; ?>.jpg" product_price="<?= $productItem['product_price']; ?>" product_name="<?= $productItem['product_name']; ?>" product_weight="<?= $productItem['product_weight']; ?>" type="button" class="cart-add cust-card-add" id="">
                                    Добавить в корзину
                                </button>
                            </div>

                        </div>
                        <div class="cust-description">
                            <ul>
                                <li>
                                    <h6>Описание</h6>
                                    <p><?= $productItem['product_desc']; ?></p>
                                </li>
                            </ul>
                            <ul class="row a">
                                <li class="col-12 col-sm-6 cust-card-feature b">
                                    <span class="cust-card-feature-title">Вес:</span>
                                    <p><?= $productItem['product_weight']; ?> г</p>
                                </li>
                                <li class="col-12 col-sm-6 cust-card-feature b">
                                    <span class="cust-card-feature-title">Срок годности:</span>
                                    <p> 48 часов</p>
                                </li>
                                <li class="col-12 col-sm-6 cust-card-feature b">
                                    <span class="cust-card-feature-title">Температура храниения:</span>
                                    <p>от +2ºС до +6ºС </p>
                                </li>
                                <li class="col-12 col-sm-6 cust-card-feature b">
                                    <span class="cust-card-feature-title">Производитель:</span>
                                    <p><?= $productItem['producer_name']; ?></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php include_once("./views/common/footer.php"); ?>

    </body>
    </html>

