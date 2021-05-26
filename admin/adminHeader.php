<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid d-flex justify-content-start">
        <img src="../assets/img/logo.png" alt="shop logo" id="logo">
        <a class="navbar-brand " href="admin.php">OnTheWater</a>
        <h4>Welcome <?php print($_SESSION['user']['user_name']); ?>!</h4>
    </div>

    <div class="search-form">
        <form class="d-flex" action="searchResult.php" method="GET">
            <input class="form-control me-3" type="search" name="admin_search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    <div class="search-form">
        <form class="d-flex" action="admin.php" method="POST">
        <button class="btn btn-secondary me-3" name="logout">Logout</button>
        </form>
    </div>
   
</nav>

