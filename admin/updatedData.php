<?php
require_once './Session.php';
Session::start();

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

    <title>Hello, world!</title>
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
require_once './CrudData.php';

$update = new CrudData();
$update->updateData();
$data = $update->succesUpdatedData();
?>

<div class="succes-update-data">
<ul class="list-group admin-read">
  <li class="list-group-item">Product name: <?php print($data['product_name']); ?> </li>
  <li class="list-group-item">Size: <?php print($data['product_size']); ?></li>
  <li class="list-group-item">Color: <?php print($data['product_color']); ?></li>
  <li class="list-group-item">Quantity: <?php print($data['product_quantity']); ?></li>
  <li class="list-group-item">Price : <?php print($data['product_price']); ?>&#8364;</li>
  <li class="list-group-item">Sex: <?php print($data['product_sex']); ?></li>
  <li class="list-group-item">Category:  <?php print($data['product_type']); ?></li>
  <li class="list-group-item">Enable:  <?php print($data['p_enable']); ?></li>
</ul>

<a href="http://localhost/webshop/admin/admin.php">
<button type="button" class="btn btn-primary mt-2">Back to main page</button>
</a>

</div>


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