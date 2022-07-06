<?php
    include("DB\db.php");
    $masp=$_GET['id'];
    var_dump($masp);
    $SQL_str_danhsachsp="select * from sanpham where trangthai=1 and idSanPham=:idSanPham";
    $dssanpham=$db->prepare($SQL_str_danhsachsp);
    $dssanpham->bindValue(':idSanPham',$masp,PDO::PARAM_STR);
    $dssanpham->execute();
    $dssanpham_rowsdata=$dssanpham->fetchAll();
    var_dump($dssanpham_rowsdata);
?>