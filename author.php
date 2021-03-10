<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php require "./assets/php/header.php" ?>

<body>
    <?php require "./assets/php/nav.php" ?>
    <h1 class="mb-4">Author</h1>

    <div class="container">
        <div class="row">
            <div class="col-md d-flex justify-content-center">
                <img class="about__img mb-3" src="assets/img/me.jpg" alt="author">
            </div>
            <div class="col-md">
                <p class="a1" style="opacity: 1;">
                    Uroš Radulović - student. I am currently studying at ICT college in Belgrade. I like pretentious Japanese
                    cartoons, complicated video games and the competitive Star Craft scene. I will hopefully become a full stack
                    developer one day. I am also interested in UX design. Always check if the milk is in date.
                </p>
                <a class="btn btn-primary" href="https://nanibyte.github.io/portfolio_school/">Portfolio</a>
                <a class="btn btn-primary" href="https://github.com/NaniByte">Github</a>
                <a class="btn btn-primary" download="" href="docs.pdf">Docs</a>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>