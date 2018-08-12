<?php
   include('header.php')
?>

      <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <div class="konten">
            <h1 class="display-4 text-center my-5">
              <i class="glyphicon glyphicon-user"></i> Data Pendaftar
            </h1>
            <br>
    
            <table class="table table-striped">
              <thead>
                <tr>
                  <th class="text-center" scope="col">No</th>
                  <th class="text-center" scope="col">Nama</th>
                  <th class="text-center" scope="col">Email</th>
                  <th class="text-center" scope="col">Telpon</th>
                  <th class="text-center" scope="col">Kota</th>
                  <th class="text-center" scope="col">Report</th>

                  
                </tr>
              </thead>

              <?php

              include_once('../config.php');

              $query = "SELECT * FROM data ORDER BY email ";

              $hasil = mysqli_query($koneksi, $query);
              $no = 1;

              while($data = mysqli_fetch_array($hasil)){


                // $folder= "../upload/gambar1/";
                // $handle= opendir($folder);
                // while (false !== ($file = readdir($handle))) {

                //   if ($file !== '.' && $file != '..') {
                   
                    
                 
                // $images = glob('../upload/gambar1/*.*');
                // $single_image = $images; 
                  
                //      echo '<img src="'.$images.'" width="100px" height="100px">' 

              ?>
              <tbody class="text-center">
                    <tr>
                      <td><?=$no;?></td>
                      
                      
                     
                      <td><?=$data['nama'];?></td>
                      <td><?=$data['email'];?></td>
                      <td><?=$data['telpon'];?></td>
                      <td></td>
                      <td><a href="../user/profile.php?email=$oper">Profile</a></td>
                      
                    </tr>
                  </tbody>
                  <?php
                    $no++;
                  }
                  
                  ?>
                </table>


          </div>
        </div>
      </div>
    </div>

    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
