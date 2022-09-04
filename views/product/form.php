<?php include_once("./views/common/header.php"); ?>
<div class="container container-md">

</div>
    <form  method="POST" enctype="multipart/form-data" class="product-form">
        <div class="mb-3 row">
            <label for="productName" class="form-label col-sm-2 col-form-label">Название</label>
            <div class="col-sm-10">
                <input
                        id="productName"
                        type="text"
                        class="form-control"
                        placeholder="Пирожное «Манго-маракуйя»"
                        value="<?= isset($product) ?  $product['product_name'] : '' ?>"
                        name="product_name"/>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="productSku" class="form-label col-sm-2 col-form-label">Артикул</label>
            <div class="col-sm-10">
                <input
                        id="productSku"
                        type="text"
                        class="form-control"
                        placeholder="cake001"
                        value="<?= isset($product['product_id']) ?  $product['product_sku'] : '' ?>"
                        name="product_sku"/>
            </div>

        </div>

        <div class="mb-3 row">
            <label for="productDescription" class="form-label col-sm-2 col-form-label">Описание</label>
            <div class="col-sm-10">
                <textarea
                        id="productDescription"
                        type="text"
                        class="form-control"
                        placeholder="Нежнейшее суфле из манго с сердцевиной..."
                        value="<?= isset($product['product_id']) ?  $product['product_desc'] : '' ?>"
                        name="product_desc"/><?= isset($product['product_id']) ?  $product['product_desc'] : '' ?></textarea>
            </div>

        </div>



        <div  class="row">
            <div class="col-md-4">
                <label for="productQty" class="form-label col-sm-2 col-form-label">Количество</label>
                <input
                        id="productQty"
                        type="text"
                        class="form-control"
                        placeholder="2"
                        value="<?= isset($product['product_id']) ?  $product['product_count'] : '' ?>"
                        name="product_count"/>
            </div>

            <div class="col-md-4">
                <label for="productPrice" class="form-label col-sm-2 col-form-label">Цена</label>
                <input
                        id="productPrice"
                        type="text"
                        class="form-control"
                        placeholder="690"
                        value="<?= isset($product['product_id']) ?  $product['product_price'] : '' ?>"
                        name="product_price"/>
            </div>

            <div class="col-md-4">
                <label for="productWeight" class="form-label col-sm-2 col-form-label">Вес</label>
                <input
                        id="productWeight"
                        type="text"
                        class="form-control"
                        placeholder="1300"
                        value="<?= isset($product['product_id']) ?  $product['product_weight'] : '' ?>"
                        name="product_weight"/>
            </div>
        </div>

<!--        <div class="mb-3 row">-->
<!--            <label for="productQty" class="form-label col-sm-2 col-form-label">Количество</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input-->
<!--                        id="productQty"-->
<!--                        type="text"-->
<!--                        class="form-control"-->
<!--                        placeholder="2"-->
<!--                        value="--><?php //= isset($product['product_id']) ?  $product['product_count'] : '' ?><!--"-->
<!--                        name="product_count"/>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="mb-3 row">-->
<!--            <label for="productPrice" class="form-label col-sm-2 col-form-label">Цена</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input-->
<!--                        id="productPrice"-->
<!--                        type="text"-->
<!--                        class="form-control"-->
<!--                        placeholder="690"-->
<!--                        value="--><?php //= isset($product['product_id']) ?  $product['product_price'] : '' ?><!--"-->
<!--                        name="product_price"/>-->
<!--            </div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="mb-3 row">-->
<!--            <label for="productWeight" class="form-label col-sm-2 col-form-label">Вес</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input-->
<!--                        id="productWeight"-->
<!--                        type="text"-->
<!--                        class="form-control"-->
<!--                        placeholder="1300"-->
<!--                        value="--><?php //= isset($product['product_id']) ?  $product['product_weight'] : '' ?><!--"-->
<!--                        name="product_weight"/>-->
<!--            </div>-->
<!--        </div>-->


        <div class="row">
            <div class="col-6">
                <label for="productCategory" class="form-label col-sm-2 col-form-label">Категория</label>
                <select name="product_category" class="form-select" id="productCategory">
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['category_id']; ?>"
                            <?= isset($product) ? (($category['category_id'] === $product['product_category_id']) ? 'selected' : '')  : '' ?>>
                            <?= $category['category_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6">
                <label for="productProducer" class="form-label col-sm-2 col-form-label">Производитель</label>
                <select name="product_producer" class="form-select" id="productProducer">
                    <?php foreach ($producers as $producer): ?>
                        <option value="<?= $producer['producer_id']; ?>"
                            <?= isset($product) ? (($producer['producer_id'] === $product['product_producer_id']) ? 'selected' : '')  : '' ?>>
                            <?= $producer['producer_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="mb-3 image-form">

            <input
                    type="text"
                    class="form-control visually-hidden-cust"
                    value="<?= isset($product['product_id']) ? $product['product_img'] : '' ?>"
                    name="product_img"/>


            <label for="formFile" class="form-label">Основное изображение</label>
            <input class="form-control fff" id="formFile"
                   type="file"
                   placeholder="Изображение"
                   value="<?= isset($product['product_id']) ? $product['product_img'] : '' ?>"
                   name="product_img_file"/>
            <p></p>
            <div class="gallery" id="formPreview">
                <img src="<?= isset($product['product_id']) ? "../../assets/img/" . $product['product_img'] : '' ?>"  alt="">
                <button type="button" class="btn btn-success ggg disabled" id="deleteImg" >Удалить выбранное изображение</button>
            </div>
        </div>


        <div class="col-auto">
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>

    </form>

<?php include_once("./views/common/footer.php"); ?>