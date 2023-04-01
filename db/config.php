<?php
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'futsal_db';
  error_reporting(0);
  $connect = mysqli_connect($host, $user, $password, $db);
  
define('VALIDASI',1);
include "fungsigambar.php";


// $zz=mysqli_fetch_array(mysqli_query("SELECT * FROM profil WHERE id_profil='1'"));
// $namaprofil=$zz['namafutsal'];
// $alamatprofil=$zz['alamat'];
// $kodeposprofil=$zz['kodepos'];
// $faxprofil=$zz['fax'];
// $no_telponprofil=$zz['no_hp'];
?>
