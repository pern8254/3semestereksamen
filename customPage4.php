<?php /* Template Name: customPage4 */ ?>


   <?php
        //Henter header.php 
        get_header(2);
   ?>
    
    <main class="container-fluid">
        <section class="row">
            <section class="col-sm-6">
                <img class="img-fluid halfPageImg" src="<?php echo get_template_directory_uri()?>/images/book1.png ?>" alt="">
            </section>
           
            <section class="col-sm-6">
                 <?php 
        
                    //the post loop
                    if ( have_posts() ){
                        while (have_posts() ){
                        the_post();
        
                        echo '<h1>';
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
