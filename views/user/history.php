<?php include_once("./views/common/header.php"); ?>


    <div class="container cust-container-orders">

        <div class="">
            <h1>Список заказов</h1>
            <ul class="list-group list-group-flush">
                <?php foreach ($orders as $order): ?>
                    <li class="list-group-item">
                        <a class="cust-link-orders"href="<?= FULL_SITE_ROOT . 'order/view/' . $order['order_name'] ?>" ><?= $order['order_name']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php include_once("./views/common/footer.php"); ?>