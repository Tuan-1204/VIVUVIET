<?php
// view: register.php
// expects $errors variable
?>
<div class="login_form_container">
    <h2>Register</h2>
    <?php if ($errors): ?>
        <ul class="errors">
            <?php foreach ($errors as $e): ?><li><?= escape($e) ?></li><?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post" action="">
        <label>Username <input type="text" name="username" value="<?= escape($_POST['username'] ?? '') ?>"></label><br>
        <label>Email <input type="email" name="email" value="<?= escape($_POST['email'] ?? '') ?>"></label><br>
        <label>Password <input type="password" name="password"></label><br>
        <button type="submit">Register</button>
    </form>
</div>
