<script type="text/javascript" language="JavaScript">
$(document).ready(function() {
    $('#pesan').DataTable( {
        "searching":false,
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
     
} );

function konfirmasi()
{
    $tanya = confirm("Anda yakin akan menghapus data ?");
    if ($tanya== true) return true;
    else return false; 
} 
</script>


<div class="main">
    
    <div class="main-inner">

        <div class="container">
    
          <div class="row">         
 
            

                     <div class="span10">
                
                            <legend><b>Data Pemesanan Pelanggan</b></legend>
                              <table id="pesan" class="display">
                              <thead>
                              <tr>
                              <th>No.</th> 
                              <th>Username</th>
                              <th>Nama Klub</th> 
                              <th>Tanggal main</th>
                              <th>Jam main</th>
                              <th>No telpon</th>
                              <th>Status</th>
                              <th width="197px">AKSI</th></tr>
                              </thead>
                              <tbody>
                              <?php 
                              

            session_start();
            if($_SESSION['usernamepengunjung'] === 'admin'){
                $q = "SELECT * FROM pemesanan order by tanggal ASC";
            } else {
                $q = "SELECT * FROM pemesanan WHERE username='$_SESSION[usernamepengunjung]' order by tanggal ASC";
            }
                
                $sql=mysqli_query($connect, $q);
                                     
                    

                              while($cc=mysqli_fetch_array($sql)){
                                $no++;
                               ?>
                            <tr>
                              <td align="center"><?php echo $no;  ?></td>
                              <td align="center"><?php echo $cc["username"]; ?></td>
                              <td align="center"><?php echo $cc["nama_klub"]; ?></td>
                              <td align="center"><?php echo $cc["tanggal"]; ?></td>
                              <td align="center"><?php echo $cc["jam"]; ?></td>
                              <td align="center"><?php echo $cc["no_telpon"]; ?></td>
                              <td align="center">
                              	<?php
                              if(($cc["status"] == "Pending")){?>
                              <span class="btn btn-warning btn-sm"><?php echo $cc["status"]; ?></span>
                              <?php
                              }elseif(($cc["status"] == "Lunas")){
                              	?>
                              <span class="btn btn-success btn-sm"><?php echo $cc["status"]; ?></span>
                              <?php
                              }
                              
                              elseif(($cc["status"]== "Tertunda")){
                                ?>
                              <span class="btn btn-success btn-sm" rel="popover" id='el3' data-content="silahkan tunggu kurang lebih 10-15 menit sampai admin menkonfirmasi pesanan anda" title="info"><?php echo $cc["status"]; ?></span>
                              <?php
                              }
                              ?>
                              </td>

                              <td>
                             
                              <?php
                              if(($cc["status"] == "Pending")){?>
                                <form action="admin/terima.php" method="POST">
                                    <input type="hidden" value="<?= $cc['id_pemesanan']?>" name="terima">
                                    <button class="btn btn-info">Terima</button>
                                    
                                </form>                    
                              	<?php
                              }elseif(($cc["status"] == "Lunas")){?>
                                <a href="index.php?modul=hapus_pemesanan&id=<?php echo $cc['id_pemesanan']; ?>" onclick="return konfirmasi()" class="btn btn-info btn-sm" >Hapus</a>
                              	<span></span>
                              <?php
                              }
                              ?>
                            
                              </td>
                              <?php } ?>
                             
                            </tr>
                              

                              </tbody>
                              </table>
            </div><!--/span9-->
    
        </div><!--/row-->

    </div> <!--/container-->
                
</div> <!-- /main-inner -->

</div> <!--/ main-->




<script language="javascript">
        $(function ()
        { $("#example").popover();
            $("#el3").popover();
        });
        function showPopup() {
            $('#el3').popover('show')
        }
        function hidePopup() {
            $('#el3').popover('hide')
        }
</script>

<head>
    <style>
        .row{
            border-radius: 15px;
            background-color: lightblue;
            color: black;
            font-size: 15px;
            padding: 10px;
    }
    </style>
</head>
