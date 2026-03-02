<?php
// admin edit_post view
// expects $post and $errors variables
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $post ? 'Edit' : 'New' ?> post</title>
</head>
<body>
<h1><?= $post ? 'Edit' : 'New' ?> post</h1>
<?php if ($errors): ?>
    <ul>
        <?php foreach ($errors as $e): ?><li><?= escape($e) ?></li><?php endforeach; ?>
    </ul>
<?php endif; ?>
<form method="post" action="index.php?page=admin&action=editPost<?= isset($post['id']) ? '&id='.$post['id'] : '' ?>">
    <label>Title<br><input type="text" name="title" value="<?= escape($post['title'] ?? '') ?>"></label><br>
    <label>Category<br><input type="text" name="category" value="<?= escape($post['category'] ?? '') ?>"></label><br>
    <label>Image URL<br><input type="text" name="image" value="<?= escape($post['image'] ?? '') ?>"></label><br>
    <label>Content<br><textarea name="content" rows="10" cols="50"><?= escape($post['content'] ?? '') ?></textarea></label><br>
    <button type="submit">Save</button>
</form>
<p><a href="index.php">Back</a></p>
</body>
</html>