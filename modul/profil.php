  <div class="col-md-9">

                <div class="widget">
              
                   <div class="widget-content">
                
                      <legend align="center"><b>Tentang <?php echo "$namaprofil";?></b></legend>

                    <div class="post">
                      <div class="entry">
                        <div id="isi">
    
<?php
$idk='1';
 $about="select id_about,isi from about where id_about='$idk'";
 $perintah_query= mysqli_query($connect, $about);
 $rr=mysqli_fetch_array($perintah_query);
echo "$rr[isi]";
?>

<p  style="text-align: justify; font-size: 16px;">
Lapangan Bolinggoan Futsal adalah sebuah tempat penyewaan lapangan futsal yang terletak di kawasan Probolinggo, 
Jawa Tengah. Lapangan ini dilengkapi dengan fasilitas yang lengkap dan modern, 
termasuk lapangan berukuran standar internasional, sistem pencahayaan yang baik, dan ruang ganti yang bersih dan nyaman. 
Selain itu, Lapangan Rental Futsal Bolinggoan Futsal juga menyediakan berbagai paket sewa lapangan yang terjangkau untuk individu maupun kelompok, 
sehingga sangat cocok untuk yang ingin bermain futsal bersama teman-teman atau rekan kerja. 
Dengan layanan yang profesional dan fasilitas yang memadai, Lapangan Rental Futsal Probolinggo menjadi pilihan utama bagi para pecinta olahraga futsal di Probolinggo dan sekitarnya.
</p>

    
  </div>
  </div>
</div>
                                </div> <!-- /widget-content -->
                           </div> <!-- /widget -->
                    </div> <!-- /span6 -->

                    
                    <!-- menu kanan -->
                    <?php include 'modul/menu_kanan.php'; ?>
    