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
                <a href="index.php?page=3" class="lien <?php echo isPageActive($page, '3'); ?>">RENT</a>
                <a href="index.php?page=4" class="lien <?php echo isPageActive($page, '4'); ?>">SELL</a>
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
<div class="menu-precedent">
    <i class="fa-solid fa-arrow-left-long"></i>
    <a href="index.php?page=1">Back to main</a>
</div>

<div class="titrepage">
    <div class="titre-gauche-buy">
        PROPERTIES FOR RENT /
    </div>
</div>

<!--                    ********************** FILTERS************ -->
<hr class="hr-accueil">
<div class="filter-container">
<button id="filterButton" class="filter-btn">Filters<i class="fa-solid fa-grip-vertical"></i></button>
    <div id="filterMenu" class="hidden">
        <div class="filter-style">
            <div class="title-bedrooms">
                <label>BEDROOMS</label>
            </div>    
            <div class="filter-bedrooms">    
                <input type="checkbox" name="bedroom" value="1" id="un" checked>
                <label for="un">1</label>
                <input type="checkbox" name="bedroom" value="2" id="deux">
                <label for="deux">2</label>
                <input type="checkbox" name="bedroom" value="3" id="trois">
                <label for="trois">3</label>
                <input type="checkbox" name="bedroom" value="4" id="quatre">
                <label for="quatre">4</label>
                <input type="checkbox" name="bedroom" value="5" id="cinq">
                <label for="cinq">5</label>
                <input type="checkbox" name="bedroom" value="6" id="six">
                <label for="six">6</label>
            </div>
            <div class="filter-bathrooms">
                <div class="title-bathrooms">
                    <label>BATHROOMS</label>
                </div>    
                <div class="filter-bathrooms">
                    <input type="checkbox" name="bathroom" value="1" id="un1" checked>
                    <label for="un1">1</label>
                    <input type="checkbox" name="bathroom" value="2" id="deux2">
                    <label for="deux2">2</label>
                    <input type="checkbox" name="bathroom" value="3" id="trois3">
                    <label for="trois3">3</label>
                    <input type="checkbox" name="bathroom" value="4" id="quatre4">
                    <label for="quatre4">4</label>
                    <input type="checkbox" name="bathroom" value="5" id="cinq5">
                    <label for="cinq5">5</label>
                </div>    
            </div>

            <div class="filter-type">
                <div class="title-type">
                    <label>PROPERTY TYPE</label>
                </div>
                <div class="filter-type-type">
                    <input type="checkbox" name="townhouse" value="townhouse" id="townhouse">
                    <label for="townhouse">Townhouse</label>
                </div>
                <div class="filter-type-type">
                    <input type="checkbox" name="apartment" value="apartment" id="apartment">
                    <label for="apartment">Apartment</label>
                </div>    
                <div class="filter-type-type">
                    <input type="checkbox" name="propertyType" value="villa" id="villa">
                    <label for="villa">Villa</label>
                </div>    
            </div>    

            <div class="filter-size">
                <div class="title-size">
                    <label>AREA</label>
                </div>
                <div class="filter-size">    
                    <input type="range" min="0" max="900" step="10" id="propertySize" class=""><br>
                    <div class="range-hrs">
                        <span class="range-hr"></span>
                        <span class="range-hr"></span>
                    </div>
                    <div class="range-labels">
                        <span class="range-label">0</span>
                        <span class="range-label">900</span>
                    </div>
                    <span id="propertySizeValue">450 m²</span>
                </div>    
            </div>    

            <div class="filter-price">
                <div class="title-price">
                    <label>PRICE (per week)</label>
                </div>   
                <div class="filter-price">
                    <input type="range" min="0" max="50000" step="1000" id="propertyPrice"><br>
                    <div class="price-hrs">
                        <span class="price-hr"></span>
                        <span class="price-hr"></span>
                    </div>
                    <span id="propertyPriceValue">0 €</span>
                </div>    
            </div>
            <div class="btn-apply">
                <button id="applyFilters">APPLY</button>
            </div>
        </div>
    </div>
</div>

<!-- *************** SORT BY **************** -->
<!-- <div class="sorting-container">
    <button id="sortingButton" class="sorting-btn">Sort by<i class="fa-solid fa-chevron-down"></i></button>
    <div id="sortingMenu" class="hidden2">
        <div class="sorting-style">
            <div class="title-price2">
                <label>PRICE</label>                
                <input type="checkbox" name="higher" value="higher" id="higher" checked>
                <label for="higher"><i class="fa-solid fa-arrow-up"></i></i></label>
                <input type="checkbox" name="lower" value="lower" id="lower">
                <label for="lower"><i class="fa-solid fa-arrow-down"></i></label>
            </div>
            <div class="date-croissant">
                <div class="title-creation">
                    <label>CREATED DATE</label>
                    <input type="checkbox" name="plusrecent" value="plusrecent" id="plusrecent">
                    <label for="plusrecent"><i class="fa-solid fa-arrow-up"></i></label>
                    <input type="checkbox" name="plusvieux" value="plusvieux" id="plusvieux">
                    <label for="plusvieux"><i class="fa-solid fa-arrow-down"></i></label>
                </div>    
            </div>            
        </div>
    </div>
</div> -->
<hr class="hr-accueil">

<!-- *************** PRESENTATION DES VILLAS ********************* -->
<div class="container-villas">
    <div class="container-villa1">
        <div class="photo-container-villas">
            <img src="img/villa1.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA ALPHA<i class="fa-solid fa-arrow-right-long"></i></p>
            <p>15,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>5</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>4</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>450 m²</div>
        </div>
    </div>
    
    <div class="container-villa2">
        <div class="photo-container-villas">
            <img src="img/villa2.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA BETA<i class="fa-solid fa-arrow-right"></i></p>
            <p>28,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 6-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 6 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>6</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>5</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>650 m²</div>
        </div>
    </div>

    <div class="container-villa3">
        <div class="photo-container-villas">
            <img src="img/villa3.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA GAMMA<i class="fa-solid fa-arrow-right"></i></p>
            <p>10,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 3-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 3 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>3</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>3</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>350 m²</div>
        </div>
    </div>

    <div class="container-villa4">
        <div class="photo-container-villas">
            <img src="img/villa4.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA DELTA<i class="fa-solid fa-arrow-right"></i></p>
            <p>25,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>6</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>5</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>550 m²</div>
        </div>
    </div>

    <div class="container-villa5">
        <div class="photo-container-villas">
            <img src="img/villa5.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA OMEGA<i class="fa-solid fa-arrow-right"></i></p>
            <p>10,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>4</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>3</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>350 m²</div>
        </div>
    </div>
    
    <div class="container-villa6">
        <div class="photo-container-villas">
            <img src="img/villa6.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA BROOKLYN<i class="fa-solid fa-arrow-right"></i></p>
            <p>12,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>5</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>4</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>450 m²</div>
        </div>
    </div>

    <div class="container-villa7">
        <div class="photo-container-villas">
            <img src="img/villa7.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA NORWAY<i class="fa-solid fa-arrow-right"></i></p>
            <p>15,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>5</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>4</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>350 m²</div>
        </div>
    </div>

    <div class="container-villa8">
        <div class="photo-container-villas">
            <img src="img/villa8.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA SEASHORE<i class="fa-solid fa-arrow-right"></i></p>
            <p>22,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>6</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>5</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>600 m²</div>
        </div>
    </div>

    <div class="container-villa9">
        <div class="photo-container-villas">
            <img src="img/villa9.png">
        </div>
        <div class="titre-villas-buy">
            <p>VILLA ALEXANDRIA<i class="fa-solid fa-arrow-right"></i></p>
            <p>11,000€</p>
        </div>
        <div class="description-villas">
            <p>The luxury 5-bedroom villa, is a 2-storey construction built on an ample plot, is composed of 5 separated bedrooms, impeccably designed with extensive open spaces, attention to details, doors crafted by local carpenters, terraces including roof-terrace with wooden pergolas, and a massive private triangle-shaped pool.</p>
        </div>
        <div class="logos-villas">
            <div class="chambre-nb"><i class="fa-solid fa-bed"></i>5</div>
            <div class="sdb-nb"><i class="fa-solid fa-sink"></i>4</div>
            <div class="metre-carre"><i class="fa-regular fa-square"></i>400 m²</div>
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
            <a>CONTACT</a>
            <a href="" class="btn-login2">LOG IN</a>
            <a>FAVORITE</a>
        </div>    
        
</div>
<p class="myhome3">My Home</p>
<hr class="hr-footer">
<p class="allright">ALL RIGHTS RESERVED /</p>



<script>
    
    document.addEventListener("DOMContentLoaded", function () {
    const filterButton = document.getElementById("filterButton");
    const filterMenu = document.getElementById("filterMenu");
    const applyFiltersButton = document.getElementById("applyFilters");
    const propertySizeRange = document.getElementById("propertySize");
    const propertyPriceRange = document.getElementById("propertyPrice");
    const propertySizeValue = document.getElementById("propertySizeValue");
    const propertyPriceValue = document.getElementById("propertyPriceValue");
    // const sortingButton = document.getElementById("sortingButton");
    // const sortingMenu = document.getElementById("sortingMenu");

    // sortingButton.addEventListener("click", function () {
    //     sortingMenu.classList.toggle("hidden2");
    // });
    

    filterButton.addEventListener("click", function () {
        filterMenu.classList.toggle("hidden");
    });

    propertySizeRange.addEventListener("input", function () {
        propertySizeValue.textContent = `${propertySizeRange.value} m²`;
    });

    propertyPriceRange.addEventListener("input", function () {
        propertyPriceValue.textContent = `${propertyPriceRange.value} €`;
    });

    applyFiltersButton.addEventListener("click", function () {
        const selectedBedrooms = Array.from(document.querySelectorAll("input[name='bedroom']:checked")).map(checkbox => checkbox.value);
        const selectedBathrooms = Array.from(document.querySelectorAll("input[name='bathroom']:checked")).map(checkbox => checkbox.value);
        const selectedPropertyTypes = Array.from(document.querySelectorAll("input[name='propertyType']:checked")).map(checkbox => checkbox.value);
        const selectedPropertySize = propertySizeRange.value;
        const selectedPropertyPrice = propertyPriceRange.value;

        console.log("Nombre de chambres sélectionnées:", selectedBedrooms);
        console.log("Nombre de salles de bains sélectionnées:", selectedBathrooms);
        console.log("Types de bien sélectionnés:", selectedPropertyTypes);
        console.log("Taille du bien sélectionnée:", selectedPropertySize);
        console.log("Prix du bien sélectionné:", selectedPropertyPrice);
    });
});




</script>
</body>
</html>