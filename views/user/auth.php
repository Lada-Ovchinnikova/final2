<? include_once("./views/common/header.php"); ?>

<?if (count($errors) > 0) : ?>
    <div class="errors" style="color: red">
        <? foreach ($errors as $error): ?>
            <p><?= $error; ?></p>
        <? endforeach; ?>
    </div>
<? endif; ?>
<div class="container-auth">
    <p>Пожалуйста, авторизуйтесь:</p>
    <form  method="POST">

        <div class="mb-3 row">
            <label for="inputLogin" class="col-sm-2 col-form-label">Логин</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" name="user_login" placeholder="Логин" id="inputLogin">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Пароль</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="user_password" id="inputPassword">
            </div>
        </div>


<!--        <div class="mb-3">-->
<!--            <label  class="form-label">login</label>-->
<!--            <input type="text" class="form-control" name="user_login" placeholder="Логин">-->
<!--        </div>-->
<!---->
<!--        <div class="mb-3">-->
<!--            <label  class="form-label">password</label>-->
<!--            <input type="password" class="form-control" name="user_password" >-->
<!--        </div>-->

        <div class="col-auto">
            <button type="submit" class="btn btn-success">Авторизироваться</button>
        </div>

    </form>
</div>


<? include_once("./views/common/footer.php"); ?>