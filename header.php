<!DOCTYPE html>
<html lang="da">
<head>
   
    <!-- Global site tag (gtag.js) - Google Analytics - Samler data -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96618415-2"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-96618415-2');
    </script>

    <meta charset="UTF-8">
    
    <!-- Titlen der står i fanen i browseren -->
    <title>Restaurant Vår</title>
    
    <!-- Tilpasser siden så godt som muligt til tablet/mobil -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    
    <!-- Skriver en kort beskrivelse når der er søgt med google eller lignende -->
    <meta name="description" content="Restaurant Vår ligger i Vintapperstræde i centrum af Odense. Her er fokus på lokale råvarer, bæredygtighed, økologi og naturligvis velsmag og hygge.">
    
    <!-- Henter stylesheet fra bootstrap -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/bootstrap/css/bootstrap.min.css">
    
    <!-- Henter font -->
    <link href="https://fonts.googleapis.com/css?family=Barlow">  
    
    <!-- Henter stylesheet --> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    
    <!-- Favicoon - ses i fanen og når der gemmes som bogmærke -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri()?>/images/favicon.png">
    
</head>
<body>
   
   <nav id="nav">
        <a href="http://vaar.pernillesondergaard.dk/wordpress">
            <img id="logo" src="<?php echo get_template_directory_uri()?>/images/logo.png" alt="Restaurant Vårs logo">
        </a>
       <?php
       //Der bliver skabt en menu
        wp_nav_menu();
    ?>
   </nav>