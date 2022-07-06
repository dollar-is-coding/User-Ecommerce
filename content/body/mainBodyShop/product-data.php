<?php
include("DB/db.php");
    $SQL_str_danhsachsp="select * from sanpham where trangthai=1";
    //$SQL_str_danhsachsp="select * from sanpham";
    $dssanpham=$db->prepare( $SQL_str_danhsachsp);
    $dssanpham->execute();
    $dssanpham_rowsdata=$dssanpham->fetchAll();
    //var_dump($dssanpham_rowsdata);

    //$SQL_str_danhsachloaisp="select * from loaisanpham";
    //$dsloaisanpham=$db->prepare( $SQL_str_danhsachloaisp);
    //$dsloaisanpham->execute();
    //$dsloaisanpham_rowsdata=$dsloaisanpham->fetchAll();
    //var_dump($dsloaisanpham_rowsdata);
?>