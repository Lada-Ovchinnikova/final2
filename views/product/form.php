<? include_once("./views/common/header.php"); ?>
    <form  method="POST" enctype="multipart/form-data">
        <input
                type="text"
                class="form-control"
                placeholder="Название"
                value="<?= isset($product) ?  $product['product_name'] : '' ?>"
                name="product_name"/>
        <input
                type="text"
                class="form-control"
                placeholder="Артикул"
                value="<?= isset($product['product_id']) ?  $product['product_sku'] : '' ?>"
                name="product_sku"/>
        <input
                type="text"
                class="form-control"
                placeholder="Описание"
                value="<?= isset($product['product_id']) ?  $product['product_desc'] : '' ?>"
                name="product_desc"/>
        <input
                type="text"
                class="form-control"
                placeholder="Кол-во"
                value="<?= isset($product['product_id']) ?  $product['product_count'] : '' ?>"
                name="product_count"/>
        <input
                type="text"
                class="form-control"
                placeholder="Цена"
                value="<?= isset($product['product_id']) ?  $product['product_price'] : '' ?>"
                name="product_price"/>
        <input
                type="text"
                class="form-control"
                placeholder="Вес"
                value="<?= isset($product['product_id']) ?  $product['product_weight'] : '' ?>"
                name="product_weight"/>
        <div>
            <p>Категория</p>
            <select name="product_category" class="form-select">
                <? foreach ($categories as $category): ?>
                    <option value="<?= $category['category_id']; ?>"
                        <?= isset($product) ? (($category['category_id'] === $product['product_category_id']) ? 'selected' : '')  : '' ?>>
                        <?= $category['category_name']; ?></option>
                <? endforeach; ?>
            </select>
        </div>

        <div>
            <p>Производитель</p>
            <select name="product_producer" class="form-select">
                <? foreach ($producers as $producer): ?>
                    <option value="<?= $producer['producer_id']; ?>"
                        <?= isset($product) ? (($producer['producer_id'] === $product['product_producer_id']) ? 'selected' : '')  : '' ?>>
                        <?= $producer['producer_name']; ?></option>
                <? endforeach; ?>
            </select>
        </div>


        <div class="mb-3">
            <label for="formFile" class="form-label">Основное изображение</label>
            <input class="form-control" id="formFile"
                   type="file"
                   placeholder="Изображение"
                   value="<?= isset($product['product_id']) ? $product['product_img'] : '' ?>"
                   name="product_img"/>
            <p></p>
            <div class="gallery" id="formPreview">
                <img src="<?= isset($product['product_id']) ? "../../assets/img/" . $product['product_img'] : '' ?>"  alt="">
                <button id="deleteImg">Удалить выбранное изображение</button>
            </div>
        </div>


        <div class="col-auto">
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>

    </form>

<? include_once("./views/common/footer.php"); ?>