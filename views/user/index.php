<?php include_once("./views/common/header.php"); ?>
    <form  method="POST">
        <input
            type="text"
            class="form-control"
            placeholder="Имя"
            value="<?= isset($user) ?  $user['user_name'] : '' ?>"
            name="user_name"/>
        <input
            type="text"
            class="form-control"
            placeholder="Почта"
            value="<?= isset($user['user_id']) ?  $user['user_email'] : '' ?>"
            name="user_email"/>
        <input
            type="text"
            class="form-control"
            placeholder="Логин"
            value="<?= isset($user['user_id']) ?  $user['user_login'] : '' ?>"
            name="user_login"/>
        <input
            type="text"
            class="form-control"
            placeholder="Номер телефона"
            value="<?= isset($user['user_id']) ?  $user['user_phone'] : '' ?>"
            name="user_phone"/>
        <input
            type="text"
            class="form-control"
            placeholder="Дата рождения"
            value="<?= isset($user['user_id']) ?  $user['user_dob'] : '' ?>"
            name="user_dob"/>
           <div class="col-auto">
            <button type="submit" class="btn btn-success">Обновить</button>
        </div>

    </form>

<?php include_once("./views/common/footer.php"); ?>