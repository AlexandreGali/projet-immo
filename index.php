<!DOCTYPE html>
<html>
<head>

<?php
    $pageTitle = "Index"; 
    if (isset($_GET['page'])) {
        $page = intval($_GET['page']);
        if ($page == 1) {
            $pageTitle = "01 / MAIN PAGE";
        } elseif ($page == 2) {
            $pageTitle = "02 / OBJECTS PAGE";
        } elseif ($page == 3) {
            $pageTitle = "03 / OBJECT CARD PAGE";
        } elseif ($page == 4) {
            $pageTitle = "04 / CONTACTS";
        } 
    }
    ?>
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../projet_type/css/fontawesome-6.4/css/all.css">
    
</head>
<body>
    
<?php

$user='root';
$pass='';

try{ 
    $bdd=new PDO('mysql:host=localhost;dbname=exercice1', $user, $pass); 
}
catch(PDOException $e){ 
    die('Erreur : '. $e->getMessage());
}

function getCurrentPage() {
    $currentPage = $_SERVER['PHP_SELF'];
    $currentPage = explode('/', $currentPage);
    $currentPage = end($currentPage);
    $currentPage = explode('.', $currentPage);
    $currentPage = reset($currentPage);
    return $currentPage;
}

if(isset($_GET['page']) && $_GET['page'] !=NULL){ 
    $page=intval($_GET['page']); 
    if($page==1){
        include('inc/main.php'); 
    }
    elseif($page==2){
        include('inc/buy.php');
    }
    elseif($page==3){
        include('inc/objectcardpage.php');
    }
    elseif($page==4){
        include('inc/contact.php');
    }
    else {
        include('inc/main.php');
    }
}
else {
    include('inc/main.php');
}

?>

</body>
</html>