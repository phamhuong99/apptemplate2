<!DOCTYPE html>
<html lang="en">
<head>
   <?php include_once "partials/head.php" ?>
</head>
<body>

<!-- Header -->
<?php include_once "partials/header.php" ?>
<!-- /Header -->

<?php
if(isset($_GET["page"]) && ($_GET["page"])){
    $filepath= dirname(__FILE)."/pages/".trim($_GET["page"]).".php";
    echo "<br> FILE path: ".$filepath;
    if (file_exists($filepath)){
        include_once "pages/".trim($_GET["page"].".php");

    }
}else {
    include_once "pages/home.php";
}
?>
}
<!-- Footer -->
<?php include_once "partials/footer.php" ?>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
