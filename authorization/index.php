<?php
require_once __DIR__ . '/src/helpers.php';

checkGuest();
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">
<?php include_once __DIR__ . '/components/head.php'?>
<body>

<form class="card" action="/authorization/src/actions/login.php" method="post">
    <h2 style="text-align: center;">Вход</h2>

    <?php if(hasMessage('error')): ?>
        <div class="notice error"><?php echo getMessage('error') ?></div>
    <?php endif; ?>

    <label for="email">
        Имя
        <br><br>
        <input
            type="text"
            id="email"
            class="inp"
            name="email"
            placeholder="example@email.com"
            value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>
        ><br><br>
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>

    <label for="password">
        Пароль
        <br><br>
        <input
            type="password"
            id="password"
            class="inp"
            name="password"
            placeholder="******"
        ><br><br>
    </label>

    <button
        type="submit"
        id="submit"
    >Продолжить</button><br>

    <p style="text-align: center;"> Нет профиля? </p>
    <button 
    id="reg" 
    formaction = '/authorization/register.php'>Зарегистрироваться</button>
</form>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>