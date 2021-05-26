<?php
require_once './Session.php';
Session::start();

if(isset($_POST['logout']))
{
  $logout = new Session();
  $logout->logOut();
}
?>

<!doctype html>
<html lang="en">
  <head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- admin CSS -->
    <link rel="stylesheet" href="../assets/css/admin.css">

    <title>Admin page</title>
  </head>
  <body>
<?php
    require_once './UseDataAdmin.php';

    if(isset($_SESSION['user']['user_id']))
    {
?>

<!--start hedaer-->
<header>
    <?php
        require_once './adminHeader.php';
    ?>
</header>
<!--end hedaer-->

<!--start main-->
<main>
    <?php
        require_once './adminMain.php';
    ?>
</main>
<!--end main-->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


<?php
    }else{
      header('Location: http://localhost/webshop/login.php');
    }
?>
  </body>
</html>