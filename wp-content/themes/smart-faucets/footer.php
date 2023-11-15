<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		
    <!-- Footer -->
    <footer class="main-footer">
        <div class="top">
            <div class="container">
                <h2> <?php  dynamic_sidebar('footer_slider_title'); ?></h2>
                <div class="footer-slider">
                <?php
                    $args = array( 'post_type' => 'slider', 'posts_per_page' => -1 ,'orderby' => 'ID','order' => 'ASC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                    
                   
                    ?>
                    <div class="elements">
                        <div class="fig-holder">
                            <figure style="background-image: url(<?php echo $slider_image[0] ; ?>);"></figure>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="wapper">
                    <p> <?php  dynamic_sidebar('copyright_text'); ?>  I   <a href="mailto:  <?php  dynamic_sidebar('contact_email'); ?>"> <?php  dynamic_sidebar('contact_email'); ?></a></p>
                    <p>Design and Maintained by <a href="https://www.businessprodigital.com/" target="_blank">Business Pro Digital</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.bundle.min.js"></script>
    <!-- extra js -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.6.3.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/slick.min.js"></script>
    <!-- Jquery UI -->
    
    <!-- main-Js -->
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
    
     <script>
        $(document).ready(function() {
          // List of USA states
          var usaStates = [
            "Alabama", "Alaska", "Arizona", "Arkansas", "California",
            "Colorado", "Connecticut", "Delaware", "Florida", "Georgia",
            "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa",
            "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland",
            "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri",
            "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey",
            "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
            "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina",
            "South Dakota", "Tennessee", "Texas", "Utah", "Vermont",
            "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
          ];
      
          // List of cities for each state
          var cityData = {
            "Alabama": ["Alexander City","Andalusia","Anniston","Athens","Atmore","Auburn","Bessemer","Birmingham", "Montgomery", "Mobile","Other"],
            
             "Alaska": ["Anchorage", "Juneau", "Fairbanks", "Sitka", "Ketchikan","Wasilla", "Kenai", "Kodiak", "Bethel", "Palmer","Other"],
             "Arizona": ["Phoenix", "Tucson", "Mesa", "Scottsdale", "Tempe","Other"],
             "Arkansas": ["Little Rock", "Fayetteville", "Fort Smith","Other"] ,
             "California": ["Los Angeles", "San Francisco", "San Diego", "Sacramento", "San Jose","Other"],
             "Colorado": ["Denver", "Colorado Springs", "Boulder","Other"],
             "Connecticut": ["Hartford", "New Haven", "Stamford","Other"],
             "Delaware": ["Wilmington", "Dover", "Newark","Other"],
             "Florida": ["Miami", "Orlando", "Tampa","Other"],
             "Georgia": ["Atlanta", "Savannah", "Augusta","Other"],
             "Hawaii": ["Honolulu", "Hilo", "Kailua","Other"],
             "Idaho": ["Boise", "Nampa", "Meridian","Other"],
             "Illinois": ["Chicago", "Springfield", "Peoria","Other"],
             "Indiana": ["Indianapolis", "Fort Wayne", "Bloomington","Other"],
             "Iowa": ["Des Moines", "Cedar Rapids", "Iowa City","Other"],
             "Kansas": ["Wichita", "Overland Park", "Kansas City","Other"],
             "Kentucky": ["Louisville", "Lexington", "Bowling Green","Other"],
            "Louisiana": ["New Orleans", "Baton Rouge", "Shreveport","Other"],
            "Maine": ["Portland", "Bangor", "Lewiston","Other"],
            "Maryland": ["Baltimore", "Annapolis", "Rockville","Other"],
            "Massachusetts": ["Boston", "Cambridge", "Worcester","Other"],
            "Michigan": ["Detroit", "Grand Rapids", "Lansing","Other"],
            "Minnesota": ["Minneapolis", "St. Paul", "Rochester","Other"],
            "Mississippi": ["Jackson", "Gulfport", "Hattiesburg","Other"],
            "Missouri": ["Kansas City", "St. Louis", "Springfield","Other"],
            "Montana": ["Billings", "Missoula", "Great Falls","Other"],
            "Nebraska": ["Omaha", "Lincoln", "Bellevue","Other"],
            "Nevada": ["Las Vegas", "Reno", "Henderson","Other"],
            "New Hampshire": ["Manchester", "Nashua", "Concord","Other"],
            "New Jersey": ["Newark", "Jersey City", "Paterson","Other"],
            "New Mexico": ["Albuquerque", "Santa Fe", "Las Cruces","Other"],
            "North Carolina": ["Charlotte", "Raleigh", "Greensboro","Other"],
            "North Dakota": ["Fargo", "Bismarck", "Grand Forks","Other"],
            "Ohio": ["Columbus", "Cleveland", "Cincinnati","Other"],
            "Oklahoma": ["Oklahoma City", "Tulsa", "Norman","Other"],
            "Oregon": ["Portland", "Eugene", "Salem","Other"],
            "Pennsylvania": ["Philadelphia", "Pittsburgh", "Allentown","Other"],
            "Rhode Island": ["Providence", "Warwick", "Cranston","Other"],
            "South Carolina": ["Charleston", "Columbia", "Greenville","Other"],
            "South Dakota": ["Sioux Falls", "Rapid City", "Aberdeen","Other"],
            "Tennessee": ["Nashville", "Memphis", "Knoxville","Other"],
            "Texas": ["Houston", "Dallas", "Austin","Other"],
            "Utah": ["Salt Lake City", "West Valley City", "Provo","Other"],
            "Vermont": ["Burlington", "Essex", "Montpelier","Other"],
            "Virginia": ["Virginia Beach", "Richmond", "Alexandria","Other"],
            "Washington": ["Seattle", "Spokane", "Tacoma","Other"],
            "West Virginia": ["Charleston", "Huntington", "Morgantown","Other"],
            "Wisconsin": ["Milwaukee", "Madison", "Green Bay","Other"],
             "Wyoming": ["Cheyenne", "Casper", "Laramie","Other"]
          };
      
          // Populate the state dropdown
          var stateDropdown = $("#stateDropdown");
          $.each(usaStates, function(index, state) {
            stateDropdown.append($("<option>").text(state));
          });
      
          // Populate the city dropdown based on the selected state
          var cityDropdown = $("#cityDropdown");
          stateDropdown.change(function() {
            var selectedState = $(this).val();
            cityDropdown.empty(); // Clear previous options
      
            if (selectedState in cityData) {
              var cities = cityData[selectedState];
              $.each(cities, function(index, city) {
                cityDropdown.append($("<option>").text(city).val(city));
              });
            } else {
              cityDropdown.append($("<option>").text("Select a state first"));
               
            }
          });
      
          // Enable custom city input when "Other" is selected in the city dropdown
          cityDropdown.change(function() {
            var selectedCity = $(this).val();
            if (selectedCity === "Other") {
                $("#customCity").show();
            //   $("#customCity").prop("disabled", false);
            } else {
              $("#customCity").hide();
            }
          });
        });
      </script>
<?php wp_footer(); ?>

</body>
</html>
