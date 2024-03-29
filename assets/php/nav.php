<div class="navbar-expand">
    <nav class="navbar navbar-dark bg-dark mb-4">
        <a href="index.php"><img class="navbar-brand" src="assets/img/logo_small.png" alt="logo"></a>

        <ul class="navbar-nav mr-auto">

            <?php
            require "isLogged.php";

            if ($isAdmin) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="adminPanel.php">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php elseif ($isLogged) : ?>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="survey.php">Survey</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            <?php endif; ?>

        </ul>

    </nav>
</div>