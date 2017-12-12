<?php /* Template Name: customPage1 */ ?>

 <?php
        //Henter header.php 
        get_header(2);
   ?>
    
    <main class="container-fluid">
        <section class="row"><br><br><br><br>
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/mad1.png ?>" alt="">
            </section>
                                
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/mad2.png ?>" alt="">
            </section>
            
             <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/mad3.png ?>" alt="">
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
        
        <section class="row">
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/vin4.png ?>" alt="">
            </section>
                                
            <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/vin5.png ?>" alt="">
            </section>
            
             <section class="col-sm-4">
                <img class="img-fluid threeImg" src="<?php echo get_template_directory_uri()?>/images/vin6.png ?>" alt="">
            </section>
        </section>
        
    </main>

<?php
    //Henter footer.php
          get_footer();

?>