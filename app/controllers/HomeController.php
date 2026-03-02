<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../../functions.php';

class HomeController extends Controller
{
    public function index()
    {
        $this->data['activePage'] = 'home';
        $this->render('home');
    }
}
