
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
    <div class="container cust-container">
        <img src="../../assets/img/product_<?= $productItem['product_sku']; ?>.jpg" class="rounded cust-card-img" alt="...">
        <div>
            <h5 class="card-title cust-card-title"><?= $productItem['product_name']; ?></h5>
            <div class="cust-card-price">
                <p class="card-text"><?= $productItem['product_price']; ?></p>
                <span>Руб.</span>
            </div>
            <div class="cust-card-act">
                <div class="qty">
                    <span class="qty-minus">-</span>
                    <input class="qty-value" type="text" value="1" id="counter_input">
                    <span class="qty-plus">+</span>
                </div>
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

