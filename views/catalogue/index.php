<? include_once("./views/common/header.php"); ?>


<div class="">
    <div class="row">
        <div class="col col-lg-3">
            <form   action="" method="post" class="filter">
                <div class="filter-container">
                    <h2 class="filter-header">Категории</h2>
                    <? foreach ($categories as $category): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $category['category_id']; ?>" id="flexCheckDefault" name="categoryId[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?= $category['category_name']; ?>
                            </label>
                        </div>
                    <? endforeach; ?>
                </div>
                <div class="filter-container">
                    <h2 class="filter-header">Производители</h2>
                    <? foreach ($producers as $producer): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $producer['producer_id']; ?>" id="flexCheckDefault" name="producerId[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?= $producer['producer_name']; ?>
                            </label>
                        </div>
                    <? endforeach; ?>
                </div>

                <div class="col-auto row filter-container"">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">Применить</button>
                    </div>
                    <div class="col-6">
                        <button type="" class="btn btn-success">Очистить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col col-lg-9">
            <div class="row mb-3">
                <? foreach ($catalogue as $catalogueItem): ?>
                    <div class="col-6 col-xl-4">
                        <div class="mb-4">
                            <div>
                                <a href="<?= FULL_SITE_ROOT . 'catalogue/view/' . $catalogueItem['product_id']; ?>" class="">
                                    <img src="././assets/img/<?= $catalogueItem['product_img']; ?>" class="card-img-top" alt="...">
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="<?= FULL_SITE_ROOT . 'catalogue/view/' . $catalogueItem['product_id']; ?>" class="cust-card-title">
                                    <?= $catalogueItem['product_name']; ?>
                                </a>
                                <div class="row pt-2">
                                    <div class="col-6">
                                       <span class="cust-card-price"><?= $catalogueItem['product_price']; ?>&nbsp;₽</span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <span class="card-text cust-card-weight"><?= $catalogueItem['product_weight']; ?>&nbsp;гр.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>

        </div>

    </div>


</div>
<? include_once("./views/common/footer.php"); ?>
