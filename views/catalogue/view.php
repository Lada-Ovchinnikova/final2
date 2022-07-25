
<? include_once("./views/common/header.php"); ?>
<!--<div class="card" style="width: 18rem;">-->
<!--    <img src="../../assets/img/product_--><?//= $productItem['product_sku']; ?><!--.jpg" class="card-img-top rounded cust-main-img" alt="...">-->
<!--    <div class="card-body">-->
<!--        <h5 class="card-title">--><?//= $productItem['product_name'] ; ?><!--</h5>-->
<!---->
<!--        <p class="card-text">--><?//= $productItem['product_price']; ?><!--</p><span>Руб.</span>-->
<!--        <p class="card-text">--><?//= $productItem['product_weight']; ?><!--</p><span>Гр.</span>-->
<!---->
<!--    </div>-->
<!--</div>-->
<div>
    <div class="container cust-container cart-table">
        <img src="../../assets/img/<?= $productItem['product_img']; ?>" class="rounded cust-card-img" alt="...">
        <div>
            <h5 class="card-title cust-card-title"><?= $productItem['product_name']; ?></h5>
            <div class="cust-card-price">
                <p class="card-text"><?= $productItem['product_price']; ?></p>
                <span>Руб.</span>
            </div>
            <div class="cust-card-act actions actions">


                <div class="item-amount">
                    <div class="qty counter-control">
                        <span class="qty-minus qty-id" product_id="<?= $productItem['product_id']; ?>">-</span>

                        <input class="item-amount-qty qty-value add-itm-cart"
                               product_id="<?= $productItem['product_id']; ?>" product_sku="<?= $productItem['product_sku']; ?>" product_img="product_<?= $productItem['product_sku']; ?>.jpg" product_price="<?= $productItem['product_price']; ?>" product_name="<?= $productItem['product_name']; ?>" product_weight="<?= $productItem['product_weight']; ?> "
                               type="text" value="1" id="counter_input" readonly>
                        <span class="qty-plus qty-id" product_id="<?= $productItem['product_id']; ?>">+</span>
                    </div>
                </div>

                <div class="qty">
                    <span class="qty-minus">-</span>

                    <input class="qty-value" type="text" value="1" id="counter_input" product_id="<?= $productItem['product_id']; ?>" product_sku="<?= $productItem['product_sku']; ?>" product_img="product_<?= $productItem['product_sku']; ?>.jpg" product_price="<?= $productItem['product_price']; ?>" product_name="<?= $productItem['product_name']; ?>" product_weight="<?= $productItem['product_weight']; ?> "
                    >
                    <span class="qty-plus">+</span>
                </div>
                <!--<button type="button" class="cart-add">
                    Добавить в корзину
                </button>-->

                <button product_id="<?= $productItem['product_id']; ?>" product_sku="<?= $productItem['product_sku']; ?>" product_img="product_<?= $productItem['product_sku']; ?>.jpg" product_price="<?= $productItem['product_price']; ?>" product_name="<?= $productItem['product_name']; ?>" product_weight="<?= $productItem['product_weight']; ?>" type="button" class="cart-add" id="">
                    Добавить в корзину
                </button>
            </div>
            <div class="cust-card-weight">
                <p class="card-text"><?= $productItem['product_weight']; ?></p>
                <span>Гр.</span>
            </div>

        </div>
    </div>

</div>

<? include_once("./views/common/footer.php"); ?>

