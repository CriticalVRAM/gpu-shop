<!DOCTYPE html>
<html lang="en">
<?php require_once "assets/component/header.php" ?>
<?php session_start(); ?>

<body>
  <div class="navbar-expand">
    <nav class="navbar">
      <img class="navbar-brand" src="assets/img/logo_small.png" alt="logo">

      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <?php

        if (isset($_SESSION["userID"])) : ?>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php endif; ?>


      </ul>

    </nav>
  </div>



</body>

</html>