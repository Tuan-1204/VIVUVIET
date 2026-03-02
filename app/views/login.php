<?php
// view: login.php
// expects $errors variable
?>
<div class="login_form_container">
    <h2>Login</h2>
    <?php if ($errors): ?>
        <ul class="errors">
            <?php foreach ($errors as $e): ?><li><?= escape($e) ?></li><?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post" action="">
        <label>Username <input type="text" name="username" value="<?= escape($_POST['username'] ?? '') ?>"></label><br>
        <label>Password <input type="password" name="password"></label><br>
        <button type="submit">Login</button>
    </form>
</div>
