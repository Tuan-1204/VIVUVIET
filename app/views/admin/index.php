<?php
// admin index view
// expects $posts and $contacts already prepared by controller
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Vivuviet</title>
</head>
<body>
<h1>Admin dashboard</h1>
<p>Welcome, <?= escape(currentUser()['username']) ?></p>
<h2>Latest posts</h2>
<ul>
    <?php foreach ($posts as $p): ?>
        <li><?= escape($p['title']) ?> <a href="edit_post.php?id=<?= $p['id'] ?>">edit</a></li>
    <?php endforeach; ?>
</ul>
<p><a href="index.php?page=admin&action=editPost">Create new post</a></p>
<h2>Recent contacts</h2>
<ul>
    <?php foreach ($contacts as $c): ?>
        <li><?= escape($c['name']) ?> (<?= escape($c['email']) ?>): <?= escape(substr($c['message'], 0, 50)) ?>...</li>
    <?php endforeach; ?>
</ul>
<p><a href="index.php">Back to site</a></p>
</body>
</html>