<?php 

$site_color = "#0069d9";

if (isset($_POST['ajax'])) {

  echo $content;
  exit(); 

} 


?>
 
<!DOCTYPE html>
<html lang="fr">
  
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <meta name="description" content="Agence immobilière">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="<?= $site_color ?>">
    <meta name="apple-mobile-web-app-title" content="MKmowil">
        
    <meta name="msapplication-TileColor" content="<?= $site_color ?>">
    <meta name="theme-color" content="<?= $site_color ?>"> 
    
    <!-- bootstrap -->
    <link href="<?= $_SESSION['home_url'] . '/css/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">
    
    <script src="<?= $_SESSION['home_url'].'js/jquery.js' ?>"></script>
    
    <link rel="stylesheet" type="text/css" href="<?= $_SESSION['home_url'].'css/App.css?'.time()  ?>">
    <link rel="stylesheet" type="text/css" href="<?= $_SESSION['home_url'].'css/header.css?'.time() ?>">
    <link rel="stylesheet" type="text/css" href="<?= $_SESSION['home_url'].'css/header.css?'.time() ?>">

    <?= $content ?>

  
<?php include_once "./inc/footer.php" ?>