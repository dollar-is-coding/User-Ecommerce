<?php
include("DB/db.php");
    $SQL_str_danhsachsp="select * from sanpham where trangthai=1";
    //$SQL_str_danhsachsp="select * from sanpham";
    $dssanpham=$db->prepare( $SQL_str_danhsachsp);
    $dssanpham->execute();
    $dssanpham_rowsdata=$dssanpham->fetchAll();
?>