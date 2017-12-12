<?php /* Template Name: customPage3 */ ?>

 <?php
        //Henter header.php 
        get_header(2);
   ?>
    
    <main class="container-fluid">
        <section class="row"><br><br><br><br>
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/kontakt1.png ?>" alt="">
            </section>
                                
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/kontakt2.png ?>" alt="">
            </section>
            
             <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/kontakt3.png ?>" alt="">
            </section>
        </section>
        
        <section class="row">  
           <section class="col-sm-4"></section>     
            <section class="col-sm-4">
                 <?php 
        
                    //the post loop
                    if ( have_posts() ){
                        while (have_posts() ){
                        the_post();
        
                        echo '<h1 class="centerText">';
                        the_title();
                        echo '</h1>';

                        // post content here 
                        the_content();
       
                        } //end while
                    } //end if
          
                ?>
            </section>   
        </section>  
        
    </main>

<?php
    //Henter footer.php
          get_footer();

?>