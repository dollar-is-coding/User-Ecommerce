<?php
include("../../../../DB/db.php");
    $masp=$_GET['id'];
    $SQL_str_danhsachsp="select masanPham from sanpham where trangthai=1 and maSanPham=:maSanPham";
    $dssanpham=$db->prepare($SQL_str_danhsachsp);
    $result->bindValue(':maSanPham',$masp,PDO::PARAM_STR);
    $dssanpham->execute();
    $dssanpham_rowsdata=$dssanpham->fetchAll();
    var_dump($dssanpham_rowsdata);

    //$SQL_str_danhsachloaisp="select * from loaisanpham";
    //$dsloaisanpham=$db->prepare( $SQL_str_danhsachloaisp);
    //$dsloaisanpham->execute();
    //$dsloaisanpham_rowsdata=$dsloaisanpham->fetchAll();
    //var_dump($dsloaisanpham_rowsdata);
?>