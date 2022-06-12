<? include_once("./views/common/header.php"); ?>

<?if (count($errors) > 0) : ?>
    <div class="errors" style="color: red">
        <? foreach ($errors as $error): ?>
            <p><?= $error; ?></p>
        <? endforeach; ?>
    </div>
<? endif; ?>
<form  method="POST">
    <div class="mb-3">
        <label  class="form-label">login</label>
        <input type="text" class="form-control" name="user_login" placeholder="Логин">
    </div>

    <div class="mb-3">
        <label  class="form-label">Email address</label>
        <input type="email" class="form-control" name="user_email" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label  class="form-label">password</label>
        <input type="password" class="form-control" name="user_password" >
    </div>

    <div class="mb-3">
        <label  class="form-label">Repeat password</label>
        <input type="password" class="form-control" name="user_repeat_password" >
    </div>

    <div class="col-auto">
        <button type="submit" class="btn btn-success">Зарегистрироваться</button>
    </div>

</form>

<? include_once("./views/common/footer.php"); ?>
