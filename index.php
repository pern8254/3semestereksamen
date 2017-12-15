<?php
    //Henter header.php 
    get_header();
?>
   <!-- Skaber en container med grid i form af row og col --> 
   <main class="container-fluid">
       <section class="row">
            <section class="col-sm-12">
               
               <!-- Videoen på forsiden bliver hentet, der er en poster som vises inden videoen afspilles, autoplay gør at videoen afspilles når den er loadet --> 
               <video class="fontpagevideo" src="<?php echo get_template_directory_uri()?>/images/frontpagevideo.mp4" autoplay poster="<?php echo get_template_directory_uri()?>/images/poster.png"></video>
               
               <!-- Der skabes en boks med overskrift samt knapper --> 
               <div class="textBox text-center">
                   <h1>Velkommen</h1>
                        <p>til Restaurant Vår</p>
                            <br><br>
                               <a class="btnFrontPage" href="http://vaar.pernillesondergaard.dk/wordpress/menu-vin/">Menu</a>
                                <a class="btnFrontPage" id="btn2" href="https://book.dinnerbooking.com/dk/da-DK/book/table/pax/1296/1" target="_blank">Book</a>
               </div>
               
<?php    
    //Der skabes et loop som viser posts
          if ( have_posts() ){
              while (have_posts() ){
                  the_post();
                
                //Overskrift
                echo '<h1>';
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