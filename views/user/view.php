
<? include_once("./views/common/header.php"); ?>
<div>
    <? if ($this->isAuthorized==true and $this->isAdmin ==2): ?>
        <table >
            <thead>
            <tr>
                <th>Имя пользователя</th>
                <th>Номер телефона</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
                <td><? echo $products[0]['user_name']; ?></td>
                <td><? echo $products[0]['user_phone']; ?></td>
                <td><? echo $products[0]['user_email']; ?></td>
            </tbody>
        </table>
    <?endif; ?>
    <table >
        <thead>
        <tr>
            <th>Название товара</th>
            <th>Цена за шт.</th>
            <th>Кол-во</th>
            <th>Итого</th>
        </tr>
        </thead>
        <tbody>

        <? foreach ($products as $product): ?>
            <tr>
                <td><?= $product['order_product_name']; ?></td>
                <td><?= $product['order_product_price']; ?></td>
                <td><?= $product['order_product_qty']; ?></td>
                <td><?= $product['order_product_total_price']; ?></td>
            </tr>
        <? endforeach; ?>

        </tbody>
    </table>
</div>

<? include_once("./views/common/footer.php"); ?>

