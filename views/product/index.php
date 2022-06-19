<? include_once("./views/common/header.php"); ?>

<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Артикул</th>
        <th>Описание</th>
        <th>Кол-во</th>
        <th>Цена</th>
        <th>Вес</th>
        <th>Производитель</th>
        <th>Категория</th>

            <th>
                Действия
            </th>
    </tr>
    </thead>
    <tbody>
    <? foreach ($products as $product): ?>
        <tr>
            <td><?= $product['product_id']; ?></td>
            <td><?= $product['product_name']; ?></td>
            <td><?= $product['product_sku']; ?></td>
            <td><?= $product['product_desc']; ?></td>
            <td><?= $product['product_count']; ?></td>
            <td><?= $product['product_price']; ?></td>
            <td><?= $product['product_weight']; ?></td>
            <td><?= $product['producer_name']; ?></td>
            <td><?= $product['category_name']; ?></td>
                <td>
                    <a class="btn btn-warning" href="<?= FULL_SITE_ROOT . 'product/edit/' . $product['product_id']; ?>">Edit</a>
                    <button class="btn btn-danger" onclick="remove('<?= "product"; ?>', <?= $product['product_id']; ?>)">Delete</button>
                </td>
        </tr>
    <? endforeach; ?>

    </tbody>
</table>

<? include_once("./views/common/footer.php"); ?>
