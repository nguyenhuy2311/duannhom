<?php
session_start();
require_once './../../model/functions.php';

$user = $_POST['name'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$role = $_POST['role'];
if( empty($user) ||
    empty($pass) ||
    empty($email) ||
    empty($role)
){
    $_SESSION['error'] = "Vui lòng không để trống !";
    header("Location: http://localhost/pro1014_duan1/Admin/user/add-form.php");
    die;
}
if(strlen($pass) < 6){
    $_SESSION['error'] = "Mật khẩu phải trên 6 kí tự !";
    header("Location: http://localhost/pro1014_duan1/Admin/user/add-form.php");
    die;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION['error'] = "Email không đúng định dạng !";
    header("Location: http://localhost/pro1014_duan1/Admin/user/add-form.php");
    die;
}
insert_user($user, $pass, $email, $role);
header("location: index.php");
?>