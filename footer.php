<!-- Der bliver skabt en footer med tre lige store kolonner -->
<footer class="row">
    <div class="container">

       <!-- Kolonne 1 -->
        <div class="col-sm-4" id="col1">
            <h4>Åbningstider</h4>
                <p>Frokost <br>
                Torsdag til lørdag 12 - 14 <br><br>
                Aften <br>
                Onsdag til lørdag 18 - 22 
                </p> 
        </div>
    
      <!-- Kolonne 2 -->
        <div class="col-sm-4" id="col2">
            <h4>Find os</h4>
                <p>Vintappertræde 10 <br>
                   5000 Odense C <br><br>
                   CVR: 38483145 <br>
                   <a href="http://www.findsmiley.dk/699594" target="_blank">Smiley rapport</a>
                </p>
        </div>
        
        <!-- Kolonne 3 -->
        <div class="col-sm-4" id="col3">
            <h4>Kontakt</h4>  
                <p>+45 26 49 26 44 <br>
                    <a href="mailto:info@vaar.dk">info@vaar.dk</a>
                </p> <br>
                   <a href="https://www.facebook.com/restaurantvaar/" target="_blank">
                       <img class="soMe" src="<?php echo get_template_directory_uri()?>/images/fb_logo.png" alt="Facebook logo">
                   </a>
                   <a href="https://www.instagram.com/restaurant_vaar/" target="_blank">
                       <img class="soMe" src="<?php echo get_template_directory_uri()?>/images/in_logo.png" alt="Instagram logo">
                   </a>
                   <a href="https://www.tripadvisor.dk/Restaurant_Review-g189524-d12632849-Reviews-Restaurant_Var-Odense_Funen_and_Islands.html" target="_blank">
                       <img class="soMe" src="<?php echo get_template_directory_uri()?>/images/ta_logo.png" alt="Tripadvisor logo">
                   </a>
        </div>

       <!-- Kolonne der fylder hele det nederste stykke -->
        <div class="row">
            <div class="col-sm-12" id="col4">
                <p>&copy; 2017 Restaurant Vår</p>
            </div>
        </div>

    </div> 
</footer>

    <!-- Henter javascript fra bootstrap -->
    <script src="<?php echo get_template_directory_uri()?>/bootstrap/js/bootstrap.min.js"></script>
     
    <!-- Henter javascript fil --> 
    <script src="<?php echo get_template_directory_uri()?>/javascript.js"></script>
      
</body>
</html>