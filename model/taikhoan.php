<?php

function insert_taikhoan($user,$email,$pass){
    $sql="insert into taikhoan(user,email,pass) values('$user','$email','$pass')";
    pdo_execute($sql);
}

function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}

function update_taikhoan($id,$user,$pass,$email,$status,$tel){
    $sql="update taikhoan set user='".$user."',pass='".$pass."', email='".$email."', status='".$status."', tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}

function loadall_user(){
    
}
?>