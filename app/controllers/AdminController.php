<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../../functions.php';
class AdminController extends Controller
{
    public function index()
    {
        requireLogin();
        $pdo = getPDO();
        $this->data['posts'] = $pdo->query('SELECT * FROM posts ORDER BY created_at DESC LIMIT 20')->fetchAll();
        $this->data['contacts'] = $pdo->query('SELECT * FROM contacts ORDER BY created_at DESC LIMIT 20')->fetchAll();
        $this->render('admin/index', 'admin');
    }

    public function editPost($id = null)
    {
        requireLogin();
        $pdo = getPDO();
        $post = null;
        if ($id) {
            $stmt = $pdo->prepare('SELECT * FROM posts WHERE id=?');
            $stmt->execute([$id]);
            $post = $stmt->fetch();
        }

        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title'] ?? '');
            $content = trim($_POST['content'] ?? '');
            $category = trim($_POST['category'] ?? '');
            $image = trim($_POST['image'] ?? '');

            if ($title === '') $errors[] = 'Title required';
            if ($content === '') $errors[] = 'Content required';

            if (empty($errors)) {
                if ($post) {
                    $stmt = $pdo->prepare('UPDATE posts SET title=?, content=?, category=?, image=? WHERE id=?');
                    $stmt->execute([$title, $content, $category, $image, $id]);
                } else {
                    $stmt = $pdo->prepare('INSERT INTO posts (title, content, category, image) VALUES (?,?,?,?)');
                    $stmt->execute([$title, $content, $category, $image]);
                    $id = $pdo->lastInsertId();
                }
                header('Location: index.php?page=admin&action=index');
                exit;
            }
        }
        $this->data['post'] = $post;
        $this->data['errors'] = $errors;
        $this->render('admin/edit_post', 'admin');
    }
}
