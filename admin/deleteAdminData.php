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
    require_once './CrudData.php';

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
$result = new CrudData();
$data = $result->showDeleteData();

$delete = new CrudData();
$delete->deleteData();

?>
<div class="alert alert-danger" role="alert">
Do you want to delete the data below?
</div>

    <div class="succes-update-data">
    <ul class="list-group admin-read">
    <li class="list-group-item"><strong>Product name: </strong><?php print($data['product_name']); ?> </li>
    <li class="list-group-item"><strong>Size: </strong><?php print($data['product_size']); ?></li>
    <li class="list-group-item"><strong>Color: </strong><?php print($data['product_color']); ?></li>
    <li class="list-group-item"><strong>Quantity: </strong><?php print($data['product_quantity']); ?></li>
    <li class="list-group-item"><strong>Price: </strong><?php print($data['product_price']); ?>&#8364;</li>
    <li class="list-group-item"><strong>Sex: </strong><?php print($data['product_sex']); ?></li>
    <li class="list-group-item"><strong>Category:  </strong><?php print($data['product_type']); ?></li>
    <li class="list-group-item"><strong>Enable:  </strong><?php print($data['p_enable']); ?></li>
    </ul>
 <div class="delete_form mt-3">
  <form action="" method="POST">
    <a href="http://localhost/webshop/admin/admin.php" type ="vutton" class="btn btn-primary">Back</a>
    <button type="submit" name="deleteOk" class="btn btn-danger" value="<?php print($data['product_id']); ?>">Yes, delete it!</button>
  </form>
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