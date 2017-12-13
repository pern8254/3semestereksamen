<?php /* Template Name: customPage1 */ ?>

<?php
    //Henter header.php 
    get_header(2);
?>
    <!-- Der skabes en container med grid med tre billeder i som fylder lige meget hver --> 
    <main class="container-fluid">
        <section class="row"><br><br><br><br>
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/mad1.png" alt="Økologisk og bæredygtig ny-nyrdisk mad">
            </section>
                                
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/mad2.png" alt="Økologisk og bæredygtig ny-nyrdisk mad">
            </section>
            
             <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/mad3.png" alt="Økologisk og bæredygtig ny-nyrdisk mad">
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
        
        <!-- Der skabes en container med grid med tre billeder i som fylder lige meget hver --> 
        <section class="row">
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/vin4.png" alt="Samling af bæredygtige naturvine">
            </section>
                                
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/vin5.png" alt="Bæredygtig naturvin">
            </section>
            
             <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/vin6.png" alt="Samling af bæredygtige naturvine">
            </section>
        </section>
    </main>

<?php
    //Henter footer.php
    get_footer();
?>