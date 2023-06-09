
<?php 
include("../db/config.php");
    if(isset($_POST['terima'])){
        $query = "update pemesanan set status = 'Lunas' where id_pemesanan = " . $_POST['terima'];
        mysqli_query($connect, $query);
        header("location: ../../futsaltry/index.php?modul=pesandetail");
        
    }
?>