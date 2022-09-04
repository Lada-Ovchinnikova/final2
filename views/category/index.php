<?php include_once("./views/common/header.php"); ?>

<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Категория</th>
        <?php if ($this->isAuthorized): ?>
            <th>
                Действия
            </th>
        <?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['category_id']; ?></td>
            <td><?= $category['category_name']; ?></td>
            <?php if ($this->isAuthorized): ?>
            <td>
                <a class="btn btn-warning" href="<?= FULL_SITE_ROOT . 'category/edit/' . $category['category_id']; ?>">Edit</a>
                <button class="btn btn-danger" onclick="remove('<?= "product"; ?>', <?= $category['category_id']; ?>)">Delete</button>
            </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php include_once("./views/common/footer.php"); ?>
