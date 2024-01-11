<?php
require_once __DIR__ . '/src/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html>
<?php include_once __DIR__ . '/components/head.php'?>
<body>

<form class="card" action="/authorization/src/actions/register.php" method="post" enctype="multipart/form-data">
    <h2 style="text-align: center;">Регистрация</h2>

    <?php if(hasMessage('error')): ?>
        <div class="notice error"><?php echo getMessage('error') ?></div>
    <?php endif; ?>

    <label for="name">
        Имя
        <br><br>
        <input
            type="text"
            id="name"
            class="inp"
            name="name"
            placeholder="Иванов Иван"
            value="<?php echo old('name') ?>"
            <?php echo validationErrorAttr('name'); ?>
        >
        <?php if(hasValidationError('name')): ?>
            <small><?php echo validationErrorMessage('name'); ?></small>
        <?php endif; ?>
    </label>

    <br><br>
    <label for="email">
        E-mail
        <br><br>
        <input
            type="text"
            id="email"
            class="inp"
            name="email"
            placeholder="example@gmail.com"
            value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>

    <br><br>
    <label for="avatar">Изображение профиля
        <br><br>
        <input
            type="file"
            id="avatar"
            name="avatar"
            <?php echo validationErrorAttr('avatar'); ?>
        >
        <?php if(hasValidationError('avatar')): ?>
            <small><?php echo validationErrorMessage('avatar'); ?></small>
        <?php endif; ?>
    </label>

    <br><br>
    <div class="grid">
        <label for="password">
            Пароль
            <br><br>
            <input
                type="password"
                id="password"
                class="inp"
                name="password"
                placeholder="******"
                <?php echo validationErrorAttr('password'); ?>
            >
            <?php if(hasValidationError('password')): ?>
                <small><?php echo validationErrorMessage('password'); ?></small>
            <?php endif; ?>
        </label>
        
        <br><br>
        <label for="password_confirmation">
            Подтверждение
            <br><br>
            <input
                type="password"
                id="password_confirmation"
                class="inp"
                name="password_confirmation"
                placeholder="******"
            >
        </label>
    </div>

    <fieldset>
        <label for="terms">
            <input
                type="checkbox"
                id="terms"
                name="terms"
            >
            Я принимаю все условия пользования
        </label>
    </fieldset>

    <button
        type="submit"
        id="submit"
        disabled
    >Продолжить</button>
</form>

<p>У меня уже есть <a href="/">аккаунт</a></p>

<?php include_once __DIR__ . '/components/scripts.php' ?>
</body>
</html>