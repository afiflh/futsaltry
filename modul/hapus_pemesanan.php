<?php
include"../db/config.php";
$d=$_GET["id"];

$q = "delete from pemesanan where id_pemesanan='$d'";
$query = mysqli_query($connect, $q);
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Data  Telah di hapus')
    window.location.href='index.php?modul=pesandetail';
    </SCRIPT>");

?>