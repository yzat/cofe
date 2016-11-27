<?php
require __DIR__."/header.php";
$target=$_POST['target'];
//var_dump($_POST);
if($target=='avtorizasia_admin'){
    $admin_login = $_POST['login'];
    $admin_password =md5($_POST['password']);
    if (!empty($admin_login) && !empty($admin_password)) {
        if (!empty($admin_login)) {
            $db->where('admin_login', $admin_login);
            $user_data = $db->get('admins');
            if (!empty($user_data)) {
                if (!empty($admin_password)) {
                    $db->where('admin_login', $admin_login);
                    $db->where('admin_password', $admin_password);
                    $user_data = $db->get('admins');
                    if (!empty($user_data)) {
                        $back['target'] = "admin_part";
                        $_SESSION['user_id'] = $user_data['id'];
                        $_SESSION['status'] = 'i_user_in_this_website';
                    } else {
                        $back['target'] = 'unknown_login_password';
                    }
                } else {
                    $back['target'] = 'password_empty';
                }
            } else {
                $back['target'] = 'unknown_login';
            }
        }
    }else{
        $back['target']='empty_login_password';
    }
}
echo json_encode($back);
?>