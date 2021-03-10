<?php session_save_path("/tmp");?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>

<body>
  <?php require "./assets/php/nav.php" ?>
  <h1>GPU Shop</h1>
  <p id="msg">Welcome to the GPU Shop</p>
  <section class="filter mb-4">
    <div class="container filter__container-inner">

      <div>
        <label for="search">Search: </label>
        <input type="text" id="search" name="search" placeholder="Search...">
      </div>

      <h5>Type</h5>

      <div>
        <label for="sort">Sort Order: </label>
        <select name="sort" id="sort">
          <option value="0">Price Desc.</option>
          <option value="1">Price Asc.</option>
        </select>
      </div>

      <div id="type">
        <div>
          <label for="nvidia">nVidia</label>
          <input type="checkbox" name="type" id="nVidia" value="nVidia">
        </div>
        <div>
          <label for="amd">AMD</label>
          <input type="checkbox" name="type" id="AMD" value="AMD">
        </div>
      </div>

    </div>
  </section>

  <section class="products container">
    <div class="card">
      <img class="card-img-top" src="assets\\img\\product\\gpu1.png" alt="">
      <div class="card-body">
        <h5 class="card-title">GIGABYTE nVidia GeForce GT 730 2GB GDDR5 64bit - GV-N730D5-2GL</h5>
        <p class="card-text">100$</p>
        <a href="#" class="btn btn-primary">Add to Cart</a>
      </div>
    </div>
  </section>

  <?php require "./assets/php/footer.php" ?>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>