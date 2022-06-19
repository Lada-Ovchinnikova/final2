<? include_once("./views/common/header.php"); ?>


    <div class="cust-main">

        <div class="wrapper">
            <ul>
                <? foreach ($orders as $order): ?>
                    <li>
                        <a href="<?= FULL_SITE_ROOT . 'order/view/' . $order['order_name'] ?>" ><?= $order['order_name']; ?></a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
<? include_once("./views/common/footer.php"); ?>