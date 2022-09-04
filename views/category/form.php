<?php include_once("./views/common/header.php"); ?>
    <form  method="POST">
        <input
                type="text"
                class="form-control"
                placeholder="name"
                value="<?= isset($category['category_id']) ?  $category['category_name'] : '' ?>"
                name="category_name"/>
        <div class="col-auto">
            <button type="submit" class="btn btn-success">Сохранить</button>
        </div>

    </form>

<?php include_once("./views/common/footer.php"); ?>