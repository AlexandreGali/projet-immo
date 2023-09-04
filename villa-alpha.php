<?php
include('connexion.php');

$page = isset($_GET['page']) ? $_GET['page'] : '';

function isPageActive($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active' : '';
}
function isPageActive2($currentPage, $targetPage) {
    return $currentPage === $targetPage ? 'active-link' : '';
}
?>

<html>
<body>
<!-- ********************  NAVBAR **************** -->
<div class="header">        
    <div class="navbar-container1">
        <div class="navbar">
            <a href="index.php?page=1" class="lien1 <?php echo isPageActive($page, '1'); ?>">CENTURY 21.</a>
            <a href="index.php?page=1" class="lien <?php echo isPageActive($page, '1'); ?> <?php echo isPageActive2($page, '1'); ?>">HOMEPAGE</a>
            <a href="index.php?page=2" class="lien <?php echo isPageActive($page, '2'); ?> <?php echo isPageActive2($page, '2'); ?>">BUY</a>
            <a href="index.php?page=3" class="lien <?php echo isPageActive($page, '3'); ?> <?php echo isPageActive2($page, '3'); ?>">RENT</a>
            <a href="index.php?page=4" class="lien <?php echo isPageActive($page, '4'); ?> <?php echo isPageActive2($page, '4'); ?>">SELL</a>
        </div>
    </div>
    <div class="navbar-container2">
        <a>(201) 555-0124</a>
        <a href="" class="btn-login">LOG IN</a>
        <a>CONTACT</a>
    </div>        
</div>
<p class="myhome">My Home</p>
<hr class="hr-accueil">

<!--                                             ************** TITRE *************  -->
<div class="menu-precedent">
    <i class="fa-solid fa-arrow-left-long"></i>
    <a href="index.php?page=2">Back to properties</a>  /<a href="index.php?page=5">Villa alpha</a>
</div>

<div class="titrepage">
    <div class="titre-gauche-buy">
        VILLA ALPHA
    </div>
</div>

<!--                                             ************** SLIDER *************  -->
<div class="container-slider">
    <div class="photo1-villa1 current-photo" data-order="1">
        <img src="img/slider-villas1.png">
    </div>
    <div class="photos-villa-carre">
        <div class="photo-villa photo2-villa1" data-order="2">
            <img src="img/slider-villas3.png">
        </div>
        <div class="photo-villa photo3-villa1" data-order="3">
            <img src="img/slider-villas2.png">
        </div>
        <div class="photo-villa photo4-villa1" data-order="4">
            <img src="img/slider-villas4.png">
        </div>
        <div class="photo-villa photo5-villa1" data-order="5">
            <img src="img/slider-villas5.png">
        </div>
        <div class="photo-villa photo6-villa1" data-order="6">
            <img src="img/slider-villas6.png">
        </div>
        <div class="photo-villa photo7-villa1" data-order="7">
            <img src="img/slider-villas1.png">
        </div>
    </div>
</div>




<!--                                             ************** DESCRIPTION *************  -->
<div class="container-descriptif">
    <div class="descriptif-gauche">
        <h4>DESCRIPTION</h4>
        <p>The luxury 4-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 4 separate bedrooms, impeccably desgined with extensive open spaces, attention to detail, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        <h5>QUICK SUMMARY</h5>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Location
                </div>
                <div class="description-villa-details-droite">
                    BAHCELI                    
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Price
                </div>
                <div class="description-villa-details-droite">
                    1,500,000€
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Property Type
                </div>
                <div class="description-villa-details-droite">
                    VILLA
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Status
                </div>
                <div class="description-villa-details-droite">
                    ON SALE
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Area
                </div>
                <div class="description-villa-details-droite">
                    450 m²
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Terrace
                </div>
                <div class="description-villa-details-droite">
                    50m²
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Bedrooms
                </div>
                <div class="description-villa-details-droite">
                    5
                </div>
            </div>
            <hr>
            <div class="description-villa-details">
                <div class="description-villa-details-gauche">
                    Bathrooms
                </div>
                <div class="description-villa-details-droite">
                    4
                </div>
            </div>
            <hr>
            <div class="villa1-video">
                <h4>VIDEO REVIEW</h4>
                <img src="img/slider-villas1.png">
            </div>
            <div class="villa1-localisation">
                <h4>LOCATION</h4>
                <img src="img/location-map.png">
            </div>
    </div>
    <div class="descriptif-droite">
        <h4>CONTACT AGENT</h4>
        <div class="tete-nom-agent">
            <div class="photo-agent">
                <img src="img/claudy.jpg">
            </div>
            <div class="nom-agent">
                <p>Claudy Focan</p>
                <p>+90 548 881 911</p>
                <p>claudyfocan@gmail.com</p>
            </div>
        </div>
        <div class="formulaire-contact-agent">    
            <form method="post" action="">
                <div class="champ5">
                    <input type="text" name="name" id="name" placeholder="Name*">
                </div>
                <div class="champ5">
                    <input type="text" name="email" id="email" placeholder="Email*">
                </div>
                <div class="champ5">
                    <input type="text" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="champ6">
                    <input type="text" name="message" id="message" placeholder="Message*">
                </div>
                <div class="champ4">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ******************* FOOTER ************** -->
<div class="formulaire">    
    <div class="formu">
        <div class="gauche">
            <div class="more">
                STILL HAVE QUESTIONS ? LEAVE US A MESSAGE
            </div>
            <form method="post" action="">
                <div class="champ">
                    <input type="text" name="name" id="name" placeholder="Name*">
                </div>
                <div class="champ">
                    <input type="text" name="email" id="email" placeholder="Email*">
                </div>
                <div class="champ2">
                    <input type="text" name="message" id="message" placeholder="Message*">
                </div>
                <div class="champ">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
   
    <div class="droite">
        <div class="more">
            OR YOU CAN ORDER A CALLBACK
        </div>
        <div class="champ3">
            <input type="submit" value="Call me">
        </div>
        <p class="more2">OUR CONTACTS <i class="fa-solid fa-arrow-right-long"></i></p>
    </div>
 </div>
</div>

<div class="footer">        
        <div class="navbar-container1">
            <div class="navbar">
                <a href="index.php?page=1" class="lien1 <?php echo isPageActive($page, '1'); ?>">CENTURY 21.</a>
                <a href="index.php?page=1" class="lien <?php echo isPageActive($page, '1'); ?>">HOMEPAGE</a>
                <a href="index.php?page=2" class="lien <?php echo isPageActive($page, '2'); ?>">BUY</a>
                <a href="index.php?page=3" class="lien <?php echo isPageActive($page, '3'); ?>">RENT</a>
                <a href="index.php?page=4" class="lien <?php echo isPageActive($page, '4'); ?>">SELL</a>
            </div>
        </div>
        <div class="navbar-container2">
            <a>(201) 555-0124</a>
            <a href="" class="btn-login2">LOG IN</a>
            <a>CONTACT</a>
        </div>    
        
</div>
<p class="myhome3">My Home</p>
<hr class="hr-footer">
<p class="allright">ALL RIGHTS RESERVED /</p>

<script>
    
    document.addEventListener("DOMContentLoaded", function () {
    const photos = document.querySelectorAll(".photo-villa");
    const currentPhoto = document.querySelector(".current-photo");

    photos.forEach((photo) => {
        photo.addEventListener("click", () => {
            const clickedOrder = photo.getAttribute("data-order");
            const currentOrder = currentPhoto.getAttribute("data-order");

            // Échange les ordres des photos
            photo.setAttribute("data-order", currentOrder);
            currentPhoto.setAttribute("data-order", clickedOrder);

            // Échange les classes pour la mise en page CSS
            photo.classList.add("current-photo");
            currentPhoto.classList.remove("current-photo");

            // Remplace l'URL de la grande image
            const clickedImgSrc = photo.querySelector("img").src;
            currentPhoto.querySelector("img").src = clickedImgSrc;
        });
    });
});

</script>

</body>
</html>