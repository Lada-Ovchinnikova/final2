<?php include_once("./views/common/header.php"); ?>


<div class="container">
    <div class="row">
        <div class="col-12 col-lg-4 col-xl-3">
            <button class="btn btn-success cust-filter mb-4" id="filterButton">Фильтр</button>
            <form   action="" method="post" class="filter" id="filterContent">
                <div class="filter-container">
                    <h2 class="filter-header">Категории</h2>
                    <?php foreach ($categories as $category): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $category['category_id']; ?>" id="flexCheckDefault" name="categoryId[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?= $category['category_name']; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="filter-container">
                    <h2 class="filter-header">Производители</h2>
                    <?php foreach ($producers as $producer): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="<?= $producer['producer_id']; ?>" id="flexCheckDefault" name="producerId[]">
                            <label class="form-check-label" for="flexCheckDefault">
                                <?= $producer['producer_name']; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="col-auto row filter-container just">
                    <div class="col-6 filter-btn">
                        <button type="submit" class="btn btn-success">Применить</button>
                    </div>
                    <div class="col-6 filter-btn">
                        <button type="" class="btn btn-success">Очистить</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col col-lg-8 col-xl-9">
            <div class="row mb-3">
                <?php foreach ($catalogue as $catalogueItem): ?>
                    <div class="col-12 col-sm-6 col-xl-4">
                        <div class="mb-4 cust-card">
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
                <?php endforeach; ?>
            </div>

        </div>

    </div>


</div>

<?php include_once("./views/common/footer.php"); ?>


<script src="<?= JS . 'filter.js'; ?>"></script>
</body>
</html>
