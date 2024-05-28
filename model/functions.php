<?php
require_once "./../../model/pdo.php";
//------------------------ GENERAL -----------------------------
function select_all($table){
    $sql = "select * from $table";
    return pdo_query($sql);
}
function select_one($table, $id){
    $sql = "select * from $table where id = ?";
    return pdo_query_one($sql, $id);
}
function get_delete($table, $id){
    $sql = "delete from $table where id = ?";
    pdo_execute($sql, $id);
}
function update_status($table, $status, $id){
    $sql = "update $table set status = ? where id = ?";
    pdo_execute($sql, $status, $id);
}
function search_comment($value){
    $sql = "select bl.* from binhluan bl inner join sanpham sp on bl.ma_sp = sp.id where bl.noi_dung like '%$value%' or sp.name like '%$value%'";
    return pdo_query($sql);
}
//------------------------ USER -----------------------------

function insert_user($user, $pass, $email, $role){
    $sql = "insert into taikhoan(user, pass, email, role) values(?, ?, ?, ?)";
    pdo_execute($sql, $user, $pass, $email, $role);
}

function update_user($user, $pass, $email, $role, $id){
    $sql = "update taikhoan set user = ?, pass = ?, email = ?, role = ? where id = ?";
    pdo_execute($sql, $user, $pass, $email, $role, $id);
}
function insert_comment($noi_dung, $ma_sp, $ma_kh, $ngay_them){
    $sql = "insert into binhluan(noi_dung, ma_sp, ma_kh, ngay_them) values(?, ?, ?, ?)";
    pdo_execute($sql, $noi_dung, $ma_sp, $ma_kh, $ngay_them);
}
?>