<?php

function insert_sanpham($namesp,$amount,$tacgia,$price,$sell_price,$img,$luotxem,$mota,$iddm){
    $sql="insert into sanpham(namesp,amount,tacgia,price,sell_price,img,luotxem,mota,iddm) values('$namesp','$amount','$tacgia','$price','$sell_price','$img','$luotxem','$mota','$iddm')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,3";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,6";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanphamtrang(){
    $sql="select * from sanpham where 1 order by id desc limit 0,123213 ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if($kyw!=""){
        $sql.=" and namesp like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }   
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $sp=pdo_query_one($sql);
    
    return $sp;
}
function load_sanpham_cungloai($id,$iddm){
    $sql="select * from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$iddm,$namesp,$amount,$tacgia,$price,$sell_price,$img,$luotxem,$mota){
    if ($img=!"")
        $sql = "update sanpham set iddm='".$iddm."',namesp='".$namesp."',amount='".$amount."',tacgia='".$tacgia."'
        ,price='".$price."',sell_price='".$sell_price."',img='".$img."',luotxem='".$luotxem."',mota='".$mota."' where id=".$id;
    else
        $sql = "update sanpham set iddm='".$iddm."',namesp='".$namesp."',amount='".$amount."',tacgia='".$tacgia."'
        ,price='".$price."',sell_price='".$sell_price."',mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}

// Add a function to count total products

?>