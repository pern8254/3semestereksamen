<?php /* Template Name: customPage3 */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>
    <!-- Der skabes en container med grid med tre billeder i som fylder lige meget hver --> 
    <main class="container-fluid">
        <section class="row"><br><br><br><br>
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/kontakt1.png" alt="Hyggeligt samvær på Restaurant Vår i Vintapperstræde, Odense">
            </section>
                                
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/kontakt2.png" alt="Lokale ved Restaurant Vår i Vintapperstræde, Odense">
            </section>
            
             <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/kontakt3.png" alt="Nærvær på Restaurant Vår Vintapperstræde, Odense">
            </section>
        </section>
        
        <!-- En række med grid som indeholder indhold fra databasen --> 
        <section class="row">  
           <section class="col-sm-4"></section>     
            <section class="col-sm-4">
                
                 <?php 
                    //Der skabes et loop som viser posts
                    if ( have_posts() ){
                        while (have_posts() ){
                        the_post();
                        
                        //Overskrift
                        echo '<h1 class="centerText">';
                        the_title();
                        echo '</h1>';

                        //Indholdet af post
                        the_content();
       
                        } //Slutter while
                    } //Slutter if
                ?>
                
            </section>   
        </section>  
    </main>

<?php
    //Henter footer.php
    get_footer();
?>