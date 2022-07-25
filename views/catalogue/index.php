<? include_once("./views/common/header.php"); ?>


<div class="cust-main">
    <form   action="">
        <p>Фильтр</p>
        <!--    <h2>Категории</h2>-->
        <!--    --><?// foreach ($categories as $category): ?>
        <!--        <div class="form-check">-->
        <!--            <input class="form-check-input" type="checkbox" value="--><?//= $category['category_id']; ?><!--" id="flexCheckDefault">-->
        <!--            <label class="form-check-label" for="flexCheckDefault">-->
        <!--                --><?//= $category['category_name']; ?>
        <!--            </label>-->
        <!--        </div>-->
        <!--    --><?// endforeach; ?>
        <h2>Производители</h2>
        <? foreach ($producers as $producer): ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?= $producer['producer_id']; ?>" id="flexCheckDefault" name="producerId">
                <label class="form-check-label" for="flexCheckDefault">
                    <?= $producer['producer_name']; ?>
                </label>
            </div>
        <? endforeach; ?>


        <div class="col-auto">
            <button type="submit" class="btn btn-success">Show</button>
        </div>
    </form>
    <div class="wrapper">
        <? foreach ($catalogue as $catalogueItem): ?>
            <div class="card" style="width: 18rem;">
                <img src="././assets/img/<?= $catalogueItem['product_img']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $catalogueItem['product_name']; ?></h5>
                    <p class="card-text"><?= $catalogueItem['product_price']; ?></p><span>Руб.</span>
                    <p class="card-text"><?= $catalogueItem['product_weight']; ?></p><span>Гр.</span>
                    <a href="<?= FULL_SITE_ROOT . 'catalogue/view/' . $catalogueItem['product_id']; ?>" class="btn btn-primary">Просмотр</a>
                </div>
            </div>
        <? endforeach; ?>
    </div>
</div>
<? include_once("./views/common/footer.php"); ?>
