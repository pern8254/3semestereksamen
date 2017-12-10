<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <title>Restaurant Vår</title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/bootstrap/css/bootstrap.min.css ?>">
    
    <!-- Henter stylesheet --> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css ?>">
    
</head>
<body>
   
   <nav class="headertwo">
        <a href="#">
            <img id="logo" src="<?php echo get_template_directory_uri()?>/images/logo.png ?>" alt="Vår logo">
        </a>
       <?php
       //Der bliver skabt en menu
        wp_nav_menu();
    ?>
   </nav>
 