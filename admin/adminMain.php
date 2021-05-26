<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Size</th>
      <th scope="col">color</th>
      <th scope="col">quantity</th>
      <th scope="col">price &#8364;</th>
      <th scope="col">sex</th>
      <th scope="col">category</th>
      <th scope="col">Enable</th>
    </tr>
  </thead>
  <tbody>

<?php
    $adminDatas = new UseDataAdmin();
    $productDatas = $adminDatas->getAdminData();
    $pages = $adminDatas->getPaginationNumb();
    
    foreach($productDatas as $productData)
    {
?>
    <tr>
      <th scope="row"><?php print($productData['product_id']); ?></th>
      <td><?php print($productData['product_name']); ?></td>
      <td><?php print($productData['product_size']); ?></td>
      <td><?php print($productData['product_color']); ?></td>
      <td><?php print($productData['product_quantity']); ?></td>
      <td><?php print($productData['product_price']); ?></td>
      <td><?php print($productData['product_sex']); ?></td>
      <td><?php print($productData['product_type']); ?></td>
      <td><?php print($productData['p_enable']); ?></td>
      <td>
      
    <form action="./readAdminData.php" method="POST">
    <div class="crud-buttons d-flex justify-content-center">
        <button class="me-1 btn-success" type="submit" name="read" value="<?php print($productData['product_id']); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
            </svg>
        </button>
        </form>  

        <form action="./updateAdminData.php" method="POST">
        <button class="me-1 btn-primary" type="submit" name="update" value="<?php print($productData['product_id']); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"/>
            </svg>
        </button>
        </form>

        <form action="./deleteAdminData.php" method="POST">
        <button class="me-1 btn-danger" type="submit" name='delete' value="<?php print($productData['product_id']); ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
        </button>
        </div>
        </form>
       
    </td>
    </tr>
<?php
    }
?>
  </tbody>
</table>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--start pagination-->
<nav aria-label="..." class="d-flex justify-content-center">
<ul class="pagination">
    <?php
        for($i = 1; $i <= $pages; $i++)
        {
    ?>
<nav aria-label="...">
  <ul class="pagination pagination-lg">

    <li class="page-item" aria-current="page">
      <a href="?page=<?php print($i); ?>"><span class="page-link"><?php print($i); ?></span></a>
    </li>
  
  </ul>
</nav>

  <?php
        }
  ?>
    </ul>
</nav>
<!--end pagination-->