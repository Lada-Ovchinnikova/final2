<? include_once("./views/common/header.php"); ?>

<?if (count($errors) > 0) : ?>
    <div class="errors" style="color: red">
        <? foreach ($errors as $error): ?>
            <p><?= $error; ?></p>
        <? endforeach; ?>
    </div>
<? endif; ?>
<div class="container-reg">
    <p>Регистрация нового пользователя:</p>
    <form  method="POST">
        <div class="mb-3 row reg-line">
            <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" name="user_login" placeholder="Логин" id="inputLogin">
            </div>
        </div>

        <div class="mb-3 row reg-line">
            <label for="inputName" class="col-sm-2 col-form-label">Имя</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="user_name" placeholder="Степан" id="inputName">
            </div>
        </div>

        <div class="mb-3 row reg-line">
            <label for="inputPhone" class="col-sm-2 col-form-label">Телефон</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="user_phone" placeholder="name@example.com" id="inputEmail">
            </div>
        </div>

        <div class="mb-3 row reg-line">
            <label for="inputEmail" class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="user_email" placeholder="name@example.com" id="inputEmail">
            </div>
        </div>

        <div class="mb-3 row reg-line">
            <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="user_password" id="inputPassword">
            </div>
        </div>

        <div class="mb-3 row reg-line">
            <label for="inputPasswordRepeat" class="col-sm-2 col-form-label">Подтверждение пароля</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="user_repeat_password" id="inputPasswordRepeat">
            </div>
        </div>

        <div class="col-auto">
            <button type="submit" class="btn btn-success">Регистрация</button>
        </div>

    </form>
    <div>
        <p>
            Нажимая «Регистрация», вы подтверждаете, что ознакомились с нашей <a href="<?= FULL_SITE_ROOT . 'agreement'; ?>">Политикой конфиденциальности</a> и принимаете наше
            <a href="<?= FULL_SITE_ROOT . 'agreement'; ?>">Пользовательское соглашение</a>.
        </p>
    </div>
</div>


<? include_once("./views/common/footer.php"); ?>
