
   <?php
        //Henter header.php 
        get_header();
   ?>
    
   <main class="container-fluid">
       <section class="row">
           <section class="col-sm-12">
           
               <video class="fontpagevideo" src="<?php echo get_template_directory_uri()?>/images/frontpagevideo.mp4 ?>" autoplay></video>
               
               <div class="textBox text-center">
                   <h1>Velkommen</h1>
                        <p>til Restaurant Vår</p> <br><br>
                            <a class="btnFrontPage" href="http://localhost/wordpress-4.9/wordpress/menu-vin/">Menu</a>
                            <a class="btnFrontPage" href="http://localhost/wordpress-4.9/wordpress/book/">Book</a>
               </div>
                
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



