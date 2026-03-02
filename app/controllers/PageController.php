<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../../functions.php';

class PageController extends Controller
{
    public function about()
    {
        $this->data['activePage'] = 'about';
        $this->render('about');
    }

    public function offers()
    {
        $this->data['activePage'] = 'offers';
        $this->render('offers');
    }
}
