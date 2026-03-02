<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../../functions.php';

class BlogController extends Controller
{
    public function index()
    {
        $this->data['activePage'] = 'blog';
        $this->data['posts'] = getPosts(10);
        $this->render('blog');
    }

    public function show($id)
    {
        $this->data['activePage'] = 'blog';
        $this->data['post'] = getPost($id);
        $this->render('blog');
    }
}
