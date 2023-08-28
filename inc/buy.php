<?php
include('connexion.php');

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
?>

<html>
<body>
   <!-- ********************  NAVBAR **************** -->
    <div class="header">        
        <div class="navbar-container1">
            <div class="navbar">
                <a href="index.php?page=1" class="lien1 <?php echo isPageActive($page, '1'); ?>">CENTURY 21.</a>
                <a href="index.php?page=1" class="lien <?php echo isPageActive($page, '1'); ?>">HOMEPAGE</a>
                <a href="index.php?page=2" class="lien <?php echo isPageActive($page, '2'); ?>">BUY</a>
                <a href="index.php?page=4" class="lien <?php echo isPageActive($page, '4'); ?>">RENT</a>
                <a href="index.php?page=5" class="lien <?php echo isPageActive($page, '4'); ?>">SELL</a>
            </div>
        </div>
        <div class="navbar-container2">
            <p>CONTACT</p>
            <a href="" class="btn-login">LOG IN</a>
            <p>FAVORITE</p>
        </div>        
    </div>
    <p class="myhome">My Home</p>
    <hr class="hr-accueil">

<!--                                             ************** TITRE *************  -->
<div class="titrepage">
    <div class="titre-gauche-buy">
        PROPERTIES FOR SALE /
    </div>
</div>