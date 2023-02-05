<?php include_once("./views/common/header.php"); ?>
<!--    <form  method="POST">-->
<!--        <input-->
<!--            type="text"-->
<!--            class="form-control"-->
<!--            placeholder="Имя"-->
<!--            value="--><?//= isset($user) ?  $user['user_name'] : '' ?><!--"-->
<!--            name="user_name"/>-->
<!--        <input-->
<!--            type="text"-->
<!--            class="form-control"-->
<!--            placeholder="Почта"-->
<!--            value="--><?//= isset($user['user_id']) ?  $user['user_email'] : '' ?><!--"-->
<!--            name="user_email"/>-->
<!--        <input-->
<!--            type="text"-->
<!--            class="form-control"-->
<!--            placeholder="Логин"-->
<!--            value="--><?//= isset($user['user_id']) ?  $user['user_login'] : '' ?><!--"-->
<!--            name="user_login"/>-->
<!--        <input-->
<!--            type="text"-->
<!--            class="form-control"-->
<!--            placeholder="Номер телефона"-->
<!--            value="--><?//= isset($user['user_id']) ?  $user['user_phone'] : '' ?><!--"-->
<!--            name="user_phone"/>-->
<!--        <input-->
<!--            type="text"-->
<!--            class="form-control"-->
<!--            placeholder="Дата рождения"-->
<!--            value="--><?//= isset($user['user_id']) ?  $user['user_dob'] : '' ?><!--"-->
<!--            name="user_dob"/>-->
<!--           <div class="col-auto">-->
<!--            <button type="submit" class="btn btn-success">Обновить</button>-->
<!--        </div>-->
<!---->
<!--    </form>-->


    <div class="container-login">
        <p>Данные пользователя</p>
        <form  method="POST">
            <div class="mb-3 row login-line">
                <label for="inputName" class="col-sm-3 col-form-label">Имя</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            placeholder="Иван"
                            value="<?= isset($user) ?  $user['user_name'] : '' ?>"
                            id="inputName"
                            name="user_name"/>
                </div>
            </div>

            <div class="mb-3 row login-line">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            placeholder="example@mail.ru"
                            value="<?= isset($user['user_id']) ?  $user['user_email'] : '' ?>"
                            id="inputEmail"
                            name="user_email"/>
                </div>
            </div>
            <div class="mb-3 row login-line">
                <label for="inputLogin" class="col-sm-3 col-form-label">Логин</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            placeholder="Иван234"
                            value="<?= isset($user['user_id']) ?  $user['user_login'] : '' ?>"
                            id="inputLogin"
                            name="user_login"/>
                </div>
            </div>
            <div class="mb-3 row login-line">
                <label for="inputPhone" class="col-sm-3 col-form-label">Номер телефона</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            placeholder="8-911-333-33-33"
                            value="<?= isset($user['user_id']) ?  $user['user_phone'] : '' ?>"
                            id="inputPhone"
                            name="user_phone"/>
                </div>
            </div>

            <div class="mb-3 row login-line">
                <label for="inputDob" class="col-sm-3 col-form-label">Дата рождения</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            class="form-control"
                            placeholder="25.05.2020"
                            value="<?= isset($user['user_id']) ?  $user['user_dob'] : '' ?>"
                            id="inputDob"
                            name="user_dob"/>
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success cust-btn">Обновить</button>
            </div>
        </form>
    </div>


<?php include_once("./views/common/footer.php"); ?>