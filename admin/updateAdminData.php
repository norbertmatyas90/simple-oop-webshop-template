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

$updateData = new CrudData();
$data = $updateData->getUpdateData();

?>

<div class="mb-5 mt-5 update-form w-50 m-auto">

<form action="./updatedData.php" method="POST">
<div class="mb-3">
  <label for="u_pname" class="form-label"><strong>Product Name</strong></label>
  <input type="text" class="form-control" id="u_pname" name="u_pname" value="<?php print($data['product_name']); ?>" placeholder="<?php print($data['product_name']); ?>">
  </div>

  <div class="mb-3">
  <label for="u_psize" class="form-label"><strong>Product Size</strong></label>
  <input type="text" class="form-control" id="u_psize" name="u_psize" value="<?php print($data['product_size']); ?>" placeholder="<?php print($data['product_size']); ?>">
  </div>

  <div class="mb-3">
  <label for="u_pcolor" class="form-label"><strong>Product color</strong></label>
  <input type="text" class="form-control" id="u_pcolor" name="u_pcolor" value="<?php print($data['product_color']); ?>" placeholder="<?php print($data['product_color']); ?>">
  </div>

  <div class="mb-3">
  <label for="u_pquantity" class="form-label"><strong>Product quantity</strong></label>
  <input type="number" min="0"  class="form-control" id="u_pquantity" name="u_pquantity" value="<?php print($data['product_quantity']); ?>" placeholder="<?php print($data['product_quantity']); ?>">
  </div>

  <div class="mb-3">
  <label for="u_pprice" class="form-label"><strong>Product price</strong></label>
  <input type="number" min="1" class="form-control" id="u_pprice" name="u_pprice" value="<?php print($data['product_price']); ?>" placeholder="<?php print($data['product_price']); ?>">
  </div>

  <div class="mb-3">
  <label for="product_sex"><strong>Product sex</strong></label>
  <select class="form-select" id="product_sex" name="product_sex">
    <option value="Men">Men</option>
    <option value="Women">Women</option>
  </select>
  </div>

  <div class="mb-3">
  <label for="product_type"><strong>Product type</strong></label>
  <select class="form-select" id="product_type" name="product_type">
    <option value="Dress">Dress</option>
    <option value="Accessary">Accessary</option>
  </select>
  </div>

  <div class="mb-3">
  <label for="enable"><strong>Product allowed</strong></label>
  <select class="form-select" id="enable" name="enable">
    <option value="1">Yes</option>
    <option value="0">No</option>
  </select>
  </div>
  <a href="./admin.php" type="button" class="btn btn-primary">Back</a>
  <button type="submit" name="update" value="<?php print($data['product_id']); ?>" class="btn btn-success">Update</button>
</form>


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