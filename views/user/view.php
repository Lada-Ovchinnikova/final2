<?php include_once("./views/common/header.php"); ?>
<div class="container">
    <?php if ($this->isAuthorized==true and $this->isAdmin ==2): ?>
        <div class="">
            <h2>Данные клиента</h2>
            <ul class="list-group list-group-flush order-list-client">
                <li class="list-group-item order-item-client">
                    <span class="order-heading-client">Клиент</span>
                    <span class="order-content-client"><?php echo $products[0]['user_name']; ?></span>
                </li>
                <li class="list-group-item order-item-client">
                    <span class="order-heading-client">Телефон</span>
                    <span class="order-content-client"><?php echo $products[0]['user_phone']; ?></span>
                </li>
                <li class="list-group-item order-item-client">
                    <span class="order-heading-client">Email</span>
                    <span class="order-content-client"><?php echo $products[0]['user_email']; ?></span>
                </li>
            </ul>
        </div>
    <?php endif; ?>
    <h2>Заказ №<?php echo $products[0]['order_name']; ?></h2>
    <table class="table table-order">
        <thead>
            <tr>
                <th class="col table-heading">Название</th>
                <th scope="col">Цена</th>
                <th scope="col">Кол-во</th>
                <th scope="col">Итого</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr class="table-rows-order">
                <td><?= $product['order_product_name']; ?></td>
                <td><?= $product['order_product_price']; ?></td>
                <td><?= $product['order_product_qty']; ?></td>
                <td><?= $product['order_product_total_price']; ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php include_once("./views/common/footer.php"); ?>

