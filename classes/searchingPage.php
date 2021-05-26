<?php

  require_once './ConnectDb.php';
  require_once './Search.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- index CSS -->
    <link href="../assets/css/index.css" rel="stylesheet" >
    
    <title>Kitölteni</title>
  </head>
  <body>
     <!--start hedaer-->
  <header>
      <?php 
      require_once './header.php';
      ?>
      
  </header>
   <!--end hedaer-->
   
   <!--start main-->
   <main>
   <?php 
      require_once './searchingPageMain.php';
    ?>
    </main>
  <!--end main-->
   
  <!--start footer-->
  <footer>

  <?php
  require_once './footer.php';
  ?>

  </footer>
  <!--end footer-->
   
   <!--start JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>

    </script>
    <!--end JavaScript-->
  
  </body>
</html>