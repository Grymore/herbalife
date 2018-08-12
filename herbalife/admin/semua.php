<?php
include('header.php');
?>

    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="konten">
            <h1 class="text-center">Gallery</h1>
              <div class="row">
                <div class="col-sm">
                  <div class="well">
                    <div class="galeri ">
                    <?php
                    $files = glob("../upload/gambar1/*.*");
                    for ($i=0; $i<count($files); $i++)
                    {
                      $num = $files[$i];
                    
                      echo '<img style="border:1px; margin:10px;" src="'.$num.'"  width="250px" hight="150px"> '."&nbsp;&nbsp;";
                      }
                      
                    ?>   
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

