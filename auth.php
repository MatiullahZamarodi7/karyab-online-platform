<?php
include "bootstrap/init.php";

# Registration / creating user
$params = $_POST;
//$userData = (object) $params;
if (isset($_POST['register'])) {
    if (empty($params['name']) || empty($params['phone']) || empty($params['job']) || empty($params['province']) || empty($params['district']) || empty($_FILES['profile_photo']['name']) || empty($params['password']) || empty($params['conf_password'])) {
        $msg = "لطفا تمام فیلد ها را پر کنید!";
    } else {
        if (!preg_match('/^07[0-9]{8}$/', $params['phone']) || isUserExist($params['phone'])) {
            $msg = 'شماره نامعتبر است!';
        } else {
            if ($params['password'] != $params['conf_password'] || strlen($params['password']) < 8) {
                $msg = ' رمز عبور نامعتبر است(رمز باید بیشتر از 8 کرکتر باشد!)';
            } else {
                if (createUser($params, $_FILES['profile_photo'])) {
                    $_SESSION['phone'] = $params['phone'];
                    move_uploaded_file($_FILES['profile_photo']['tmp_name'], "./uploads/" .time().$_FILES['profile_photo']['name']);
                    header("Location: auth.php?action=login");
                    // echo $_FILES['profile_photo'];

                }
            }
        }
    }
}


#login and login validation
if (isset($params['login'])) {
    if (empty($params['phone_no']) || empty($params['pass']) || !preg_match('/^07[0-9]{8}$/', $params['phone_no']) || strlen($_POST['pass']) < 8) {
        $msg = 'اطلاعات درست نمیباشد!';
    } else {
        if (!isUserExist($params['phone_no'])) {
            $msg = 'اطلاعات وارد شده درست نمیباشد!';
        } else {
            $user = isUserExist($params['phone_no']);
            if (password_verify($params['pass'], $user['password'])) {
                header("Location: index.php");
            } else {
                $msg = 'اطلاعات وارد شده درست نمیباشد!';
            }
        }
    }

}

#include Login/Register tpl
if (isset($_GET['action']) && $_GET['action'] == 'register') {
    include "tpl/register-tpl.php";
} else {
    include "tpl/login-tpl.php";
}
