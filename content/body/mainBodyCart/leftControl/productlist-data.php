<?php
    include("DB\db.php");
    $tensp=$_GET['txtsearch'];
    $SQL_str_danhsachsp="select * from sanpham where trangthai=1 and tenSanPham like :tenSanPham";
    $dssanpham=$db->prepare($SQL_str_danhsachsp);
    $dssanpham->bindValue(':tenSanPham',$tensp,PDO::PARAM_STR);
    $dssanpham->execute();
    $dssanpham_rowsdata=$dssanpham->fetchAll();
?>