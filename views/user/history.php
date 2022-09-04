<?php include_once("./views/common/header.php"); ?>


    <div class="cust-main">

        <div class="wrapper">
            <ul>
                <?php foreach ($orders as $order): ?>
                    <li>
                        <a href="<?= FULL_SITE_ROOT . 'order/view/' . $order['order_name'] ?>" ><?= $order['order_name']; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php include_once("./views/common/footer.php"); ?>