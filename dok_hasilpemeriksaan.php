<html>
<head>
    
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Arsip</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<?php 
include 'koneksi.php';
?>

               
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped" id="dataTables-example">
                  <tr>
                    <td colspan="5" align="center"><h4>Dokumentasi Hasil Pemeriksaan</t4></td>
                  </tr>
                  <tr>
                  
                  <?php
                  $kolom=5;
                  $i=0;
                  $query = mysql_query("SELECT * FROM transaksi1 where ksurat='3' ORDER BY tanggal DESC");
                  while ($r = mysql_fetch_array($query)){                  
                  $nomor = $r['nomor'];
                  $sifat = $r['sifat'];
                  $lampiran = $r['lampiran'];
                  $perihal = $r['perihal'];
                  $tanggal = $r['tanggal'];
                  $foto = $r['foto'];
                  if ($i>=$kolom){
                                   
                  ?>
                  <tr class="odd gradeX">                  
                  </tr>
                  <?php
                  $i=0;
                  }
                  $i++;
                  ?>

                    <td align="center"><?php if ($foto==""){ ?><a href="img/no_image.png"><img height="250" width="150" src="img/no_image.png"></a> <?php } else { ?><a href="<?php echo "foto/$foto" ?>"><img height="250" width="150" src="<?php echo "foto/$foto" ?>"></a> <?php } ?><br><?php echo $tanggal; ?><br><?php echo $perihal; ?></td>
                    

                  
                  <?php }?>
                  </tr>
                  
                </table>
              </div>
                            
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>