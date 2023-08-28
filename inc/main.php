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
        <div class="titre-gauche">
            REAL   ESTATE
        </div>
        <div class="titre-droite">
            <div class="titre-droite1">
                IN CYPRUS <span class="slanted-slash">/</span>
            </div>
            <div class="titre-droite2">
                AT THE BEST PRICE <span class="slanted-slash">/</span>
            </div>
        </div>
    </div>

    <div class="photo-titre">
        <img src="img/imageaccueil-transformed.png">
    </div>

    <div class="whyus">WHY US ? <span class="slanted-slash">/</span></div>

    <div class="whyusphotos">
        <div class="whyusphotogauche">
            <img src="img/imageaccueil2-transformed2.png">
            <hr class="hr-whyus1">
            <p>AFFORDABLE LUXURY FOR INVESTORS<br>AND HEDONISTS</p>
        </div>
        <div class="whyusphotodroite">
            <img src="img/imageaccueil3-transformed.png">
            <hr class="hr-whyus2">
            <p>THE BEST OFFERS ON THE<br>REAL ESTATE MARKET</p>
        </div>
    </div>

<div class="whyus123">
    <div class="why1">
        <p class="num-why">1 <span class="slanted-slash">/</span></p>
        <p class="titre-why">YOU DON'T HAVE<br>TO WORRY ABOUT<br>ANYTHING</p>
        <p class="txt-why11">The developer takes over the management of your<br>property and its rent (which is average of 3000 CZK<br> per day).</p>
    </div>
    <div class="why2">
        <p class="num-why">2 <span class="slanted-slash">/</span></p>
        <p class="titre-why">ALL DOCUMENTS WILL BE<br>PROCESSED HERE IN THE<br> CZECH REPUBLIC</p>
        <p class="txt-why11">You will only need the basics of AJ when you want to<br>buy fresh products from the sea or from Cypriot<br> farmers.</p>
    </div>
    <div class="why3">
        <p class="num-why">3 <span class="slanted-slash">/</span></p>
        <p class="titre-why">EVERYTHING IS CHECKED<br>THROUGH THE REAL ESTATE<br>AGENCY CENTURY 21</p>
        <p class="txt-why11">It will take care if the paperwork from A to Z. You will<br>have control and visibility over everything. 
    </div>
</div>

<!--                                         ************** PROPERTIES *************  -->
<div class="whyus2">OUR PROPERTIES <span class="slanted-slash">/</span></div>

<div class="properties">

    <div class="alpha">
        <div class="photo-villa">
            <img src="img/imageaccueil4-transformed2.png">
        </div>
        <div class="texte-villa">
            <p class="titre-why2">VILLA ALPHA</p>
            <p class="txt-why">To obtain permanent residence, you need to fill out a number of documents and send them to the revelant authorities, as well as to the embassies of Cyprus. We help to deal with this difficult process, and also offer complete guidance on it.</p>
            <p class="txt-why2">3891 Ranchview Dr. Richardson, Limassol 3154</p>
            <p class="more">MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
    </div>

    <div class="beta">
        <div class="texte-villa2">
            <p class="titre-why2">VILLA BETA</p>
            <p class="txt-why">To obtain permanent residence, you need to fill out a number of documents and send them to the revelant authorities, as well as to the embassies of Cyprus. We help to deal with this difficult process, and also offer complete guidance on it.</p>
            <p class="txt-why2">1431 Thornidge Cir. Shiloh, Limassol 3154</p>
            <p class="more">MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
        <div class="photo-villa2">
            <img src="img/imageaccueil5-transformed.png">
        </div>
    </div>

    <div class="gamma">
        <div class="photo-villa">
            <img src="img/imageaccueil6-transformed.png">
        </div>
        <div class="texte-villa3">
            <p class="titre-why2">VILLA GAMMA</p>
            <p class="txt-why">To obtain permanent residence, you need to fill out a number of documents and send them to the revelant authorities, as well as to the embassies of Cyprus. We help to deal with this difficult process, and also offer complete guidance on it.</p>
            <p class="txt-why2">2715 Ash Dr. San Jose, Limassol 3840</p>
            <p class="more">MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
    </div>
    
    <div class="delta">
        <div class="texte-villa4">
            <p class="titre-why2">VILLA DELTA</p>
            <p class="txt-why">To obtain permanent residence, you need to fill out a number of documents and send them to the revelant authorities, as well as to the embassies of Cyprus. We help to deal with this difficult process, and also offer complete guidance on it.</p>
            <p class="txt-why2">2715 Ash Dr. San Jose, Limassol 3840</p>
            <p class="more">MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
        <div class="photo-villa4">
            <img src="img/imageaccueil7.png">
        </div>
    </div>
    <div class="omega">
        <div class="photo-villa5">
            <img src="img/imageaccueil8">
        </div>
        <div class="texte-villa3">
            <p class="titre-why2">VILLA GAMMA</p>
            <p class="txt-why">To obtain permanent residence, you need to fill out a number of documents and send them to the revelant authorities, as well as to the embassies of Cyprus. We help to deal with this difficult process, and also offer complete guidance on it.</p>
            <p class="txt-why2">2715 Ash Dr. San Jose, Limassol 3840</p>
            <p class="more">MORE <i class="fa-solid fa-arrow-right-long"></i></p>
        </div>
    </div>

</div>

<!-- *                                         ************** FORMULAIRE ET FOOTER ************************* -->
<div class="all">
    <div class="more">ALL PROPERTIES <i class="fa-solid fa-arrow-right-long"></i></div>
</div>
    
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
                <a href="index.php?page=4" class="lien <?php echo isPageActive($page, '4'); ?>">RENT</a>
                <a href="index.php?page=5" class="lien <?php echo isPageActive($page, '4'); ?>">SELL</a>
            </div>
        </div>
        <div class="navbar-container2">
            <a>CONTACT</a>
            <a href="" class="btn-login2">LOG IN</a>
            <a>FAVORITE</a>
        </div>    
        
    </div>
    <p class="myhome3">My Home</p>
<hr class="hr-footer">
<p class="allright">ALL RIGHTS RESERVED /</p>
</body>
</html>