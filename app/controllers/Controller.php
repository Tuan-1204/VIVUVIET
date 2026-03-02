<?php
// Base controller

class Controller
{
    protected $data = [];

    protected function render($view)
    {
        // views path relative to root
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            throw new Exception("View not found: $viewFile");
        }

        // extract data into local variables
        extract($this->data);
        // include header
        $activePage = $this->data['activePage'] ?? '';
        include __DIR__ . '/../views/layouts/header.php';
        include $viewFile;
        include __DIR__ . '/../views/layouts/footer.php';
    }
}
