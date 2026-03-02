<?php
require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../../functions.php';

class ContactController extends Controller
{
    public function index()
    {
        $errors = [];
        $successMsg = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $subject = trim($_POST['subject'] ?? '');
            $message = trim($_POST['mess'] ?? '');

            if ($name === '') {
                $errors[] = 'Vui lòng nhập tên';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email không hợp lệ';
            }
            if ($subject === '') {
                $errors[] = 'Vui lòng nhập chủ đề';
            }
            if ($message === '') {
                $errors[] = 'Vui lòng nhập nội dung';
            }

            if (empty($errors)) {
                if (saveContact($name, $email, $subject, $message)) {
                    $successMsg = 'Cảm ơn bạn đã gửi liên hệ. Chúng tôi sẽ trả lời sớm.';
                } else {
                    $errors[] = 'Có lỗi khi lưu dữ liệu. Vui lòng thử lại.';
                }
            }
        }

        $this->data['activePage'] = 'contact';
        $this->data['errors'] = $errors;
        $this->data['successMsg'] = $successMsg;
        $this->render('contact');
    }
}
