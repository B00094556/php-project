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
    <div class="centered"><h1>About</h1>
        <h3>
            <br />Five guys was founded in 1986 in Virginia.
            <br />The founders of the restaurant chain are Jerry Murrell and Janie Murrel.
            <br />Five guys has more than 15,000 employees!
            <br />Now Five guys can be enjoyed all around the world.
        </h3>
    </div>
</div>
</body>

<hr>

<?php
include_once 'footer.php'
?>
</html>