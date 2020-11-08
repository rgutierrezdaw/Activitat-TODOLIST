<?php
include 'header.tpl.php'; //nos saldrà definido el header
include 'usernav.tpl.php';
?>

<section class="d-flex flex-column justify-content-center col-sm-12">
    <h1 class="text-center" style= font-family: roboto>Tasques de <?php echo $_SESSION['user'];?></h1>
    <br><br>
    <div class="d-flex flex-nowrap justify-content-around col-md-12 tasks">
        <?php echo $tasks;?>
    </div>
    
</section>

<?php
include 'footer.tpl.php';