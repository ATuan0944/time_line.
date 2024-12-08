<?php
require_once '../model_DAO/contact.php';

extract($_REQUEST);

if (isset($act)) {
    switch ($act) {
        case 'form':
            $errors = [];
            $data = [];
            include_once 'view/template_header.php';
            include_once 'view/contact.php'; 
            include_once 'view/template_footer.php';
            break;

        case 'submit':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'email' => trim($_POST['email']),
                    'name' => trim($_POST['name']),
                    'phone' => trim($_POST['phone']),
                    'message' => trim($_POST['message']),
                ];

                $errors = [];

                if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors[] = 'Email không hợp lệ!';
                }

                if (empty($data['name'])) {
                    $errors[] = 'Vui lòng nhập họ và tên!';
                }

                if (empty($data['phone'])) {
                    $errors[] = 'Vui lòng nhập số điện thoại!';
                }

                if (empty($data['message'])) {
                    $errors[] = 'Vui lòng nhập nội dung!';
                }

                if (!empty($errors)) {
                    include_once 'view/template_header.php';
                    include_once 'view/contact.php'; 
                    include_once 'view/template_footer.php';
                    break;
                }

                Contact::save($data);

                $success_message = "Liên hệ của bạn đã được gửi thành công!";
                include_once 'view/template_header.php';
                include_once 'view/contact_success.php';
                include_once 'view/template_footer.php';
            } else {
                header('location: ?mod=contact&act=form');
            }
            break;

        default:
            header('location: ?mod=contact&act=form');
            break;
    }
} else {
    header('location: ?mod=contact&act=form');
}
?>
