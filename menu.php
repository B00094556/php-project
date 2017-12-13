<!doctype html>
<?php
include_once 'header.php';
?>
<html>
<head>
    <title>
        Five Guys
    </title>
</head>
<body>
<section class="main-container">
    <div class="main-wrapper">
        <?php
        if (isset($_SESSION['u_id'])){
            echo "You are logged in!";
        }
        ?>
    </div>
</section>
<div class="container">
    <img src="images/fiveguyshome.jpg" style="width:100%;">
    <div class="centered"><h1>Burgers</h1>
        <h3>
            <br />Hamburger
            <br />Cheeseburger
            <br />Bacon Burger
            <br />Bacon Cheeseburger
        </h3>
    </div>
</div>
</body>

<hr>

<?php
include_once 'footer.php'
?>
</html>