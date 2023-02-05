<?php include_once("./views/common/header.php"); ?>
<div class="container cust-container-category">
<h1>Категория</h1>
<ul class="list-group list-group-flush">
    <?php foreach ($categories as $category): ?>
        <li class="list-group-item cust-list-item-category">
            <div class="row">
                <div class="col cust-item-category">
                    <p class="cust-heading-category"><?= $category['category_name']; ?></p>
                    <div class="cust-buttons-category">
                        <a class="btn btn-warning cust-btn-edit" href="<?= FULL_SITE_ROOT . 'category/edit/' . $category['category_id']; ?>">Редактировать</a>
                        <button class="btn btn-danger cust-btn-delete" onclick="remove('<?= "product"; ?>', <?= $category['category_id']; ?>)">Удалить</button>
                    </div>
                </div>
            </div>
        </li>
    <?php endforeach; ?>
</ul>
</div>
<?php include_once("./views/common/footer.php"); ?>
