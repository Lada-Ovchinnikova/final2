<?php include_once("./views/common/header.php"); ?>

<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Категория</th>
            <th>
                Действия
            </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($producers as $producer): ?>
        <tr>
            <td><?= $producer['producer_id']; ?></td>
            <td><?= $producer['producer_name']; ?></td>

            <td>
                <a class="btn btn-warning" href="<?= FULL_SITE_ROOT . 'producer/edit/' . $producer['producer_id']; ?>">Edit</a>
                <button class="btn btn-danger" onclick="remove('<?= "product"; ?>', <?= $producer['producer_id']; ?>)">Delete</button>
            </td>

        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<?php include_once("./views/common/footer.php"); ?>
