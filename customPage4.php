<?php /* Template Name: customPage4 */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>
   
    <!-- Der skabes en container med grid med to dele, i den ene side er der et billede der fylder det hele i den anden teksten fra wordpress -->
    <main class="container-fluid">
        <section class="row">
            <section class="col-sm-6">
                <img class="img-fluid halfPageImg" src="<?php echo get_template_directory_uri()?>/images/book1.png ?>" alt="Hygge og nærvær på Restaurant Vår i Vintappertræde, Odense">
            </section>
           
            <section class="col-sm-6">
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
