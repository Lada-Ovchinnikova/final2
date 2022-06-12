<? include_once("./views/common/header.php"); ?>

<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Категория</th>
        <? if ($this->isAuthorized): ?>
            <th>
                Действия
            </th>
        <?endif; ?>
    </tr>
    </thead>
    <tbody>
    <? foreach ($categories as $category): ?>
        <tr>
            <td><?= $category['category_id']; ?></td>
            <td><?= $category['category_name']; ?></td>
            <? if ($this->isAuthorized): ?>
            <td>
                <a class="btn btn-warning" href="<?= FULL_SITE_ROOT . 'category/edit/' . $category['category_id']; ?>">Edit</a>
                <button class="btn btn-danger" onclick="remove('<?= "product"; ?>', <?= $category['category_id']; ?>)">Delete</button>
            </td>
            <?endif; ?>
        </tr>
    <? endforeach; ?>

    </tbody>
</table>

<? include_once("./views/common/footer.php"); ?>
