
<div class="main-cards">
  <div class="card">
<a href="">
  <img src="../assets/img/main/menfashion.jpg" alt="Avatar" >
  </a>
  </div>

  <div class="card">
  <a href="">
  <img src="../assets/img/main/womenfashion.jpg" alt="Avatar" style="width:100%">
  </a>
  </div>

  <div class="card">
  <a href="">
  <img src="../assets/img/main/accessories.jpg" alt="Avatar" style="width:100%">
  </a>
  </div>

</div>

<h2>Men fashion</h2>
<div class="products">

<?php
  $menFashion = new ProductLists();

    foreach($menFashion->getMenFashion() as $manData)
    {
?>

  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../assets/img/fashion_img/<?php print($manData['product_img']); ?>" alt="Avatar" style="width:250px;height:300px; object-fit:cover;">
    </div>
    <div class="flip-card-back">
      <h3><?php print($manData['product_name']); ?></h3> 
      <p><?php print('colors: '.$manData['product_color']); ?></p> 
      <p><?php print('size: '.$manData['product_size']); ?></p>
      <p><?php print('price: '.$manData['product_price'].' 	&#8364;'); ?></p>
      <button type="button" class="btn btn-light">Add to Cart 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>

    </div>
  </div>
</div>
<?php
    }
?>

</div>

<h2>Women fashion</h2>
<div class="products">
<?php
$womenFashion = new ProductLists();

    foreach($womenFashion->getWomenFashion() as $womanData)
    {
?>

  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../assets/img/fashion_img/<?php print($womanData['product_img']); ?>" alt="Avatar" style="width:250px;height:300px; object-fit:cover;">
    </div>
    <div class="flip-card-back">
      <h3><?php print($womanData['product_name']); ?></h3> 
      <p><?php print('color: '.$womanData['product_color']); ?></p> 
      <p><?php print('size: '.$womanData['product_size']); ?></p>
      <p><?php print('price: '.$womanData['product_price'].' 	&#8364;'); ?></p>
      <button type="button" class="btn btn-light">Add to Cart 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>

    </div>
  </div>
</div>

<?php
    }
?>

</div>


<h2>Accessories</h2>
<div class="products">

<?php
$accesFashion = new ProductLists();

    foreach($accesFashion->getAccessaryFashion() as $accesData)
    {
?>

  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="../assets/img/fashion_img/<?php print($accesData['product_img']); ?>" alt="Avatar" style="width:250px;height:300px; object-fit:cover;">
    </div>
    <div class="flip-card-back">
      <h3><?php print($accesData['product_name']); ?></h3> 
      <p><?php print('for: '.$accesData['product_sex']); ?></p> 
      <p><?php print('price: '.$accesData['product_price'].' 	&#8364;'); ?></p>
      <button type="button" class="btn btn-light">Add to Cart 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
          <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
      </button>
    </div>
  </div>
</div>
<?php
    }
?>

</div>
