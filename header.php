<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="<?php bloginfo('charset'); ?>">
 
 
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
 
 
<!—Viewport responsive  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">		
	
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK -->
    <!—Google fonts  -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
 
    
       
    <!-- CSS:  -->
 
        
	<!—remove all our styles and any Javascript code. Wordpress automatically calls javascript /jquery elsewhere, calls to javascript are not needed in the header or the footer now-->
    
<?php wp_head(); ?> <!—very important that this is added-->
</head>

<body>
    <nav class="navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
                <a class="navbar-brand" href="#">JOSH <span class="orange">WHITKIN</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">PROJECTS</a></li>
                    <li><a href="#">PUBLICATIONS</a></li>
                    <li><a href="#">CV</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
 
            </div>
        </div>
    </nav>
    <header class="container-fluid  herobg">
        <div class="container">
            <h1> Games Design For the future</h1>
        </div>
    </header>


  <section class="container-fluid aboutbg text-center">
    <div class="container">
      <h2> GAMES &amp; LEVEL DESIGNER </h2>
      <p class="particle"> and particle wizard</p>
      <p class="about-text"> My name is josh Whitkin. I’m a professional with more than 7 years of industry experience
        in Games Design,
        Level
        design, Scripting and Visual Effects. What makes me passionate about games is the combination of technology and
        creativity, and how multiple disciplines come together to create an interactive experience. Whether I'm
        designing
        for puzzle games, 2D platformers or 3D environments. I always tell a story.</p>
      <div class="blocker"></div>
    </div>
  </section>

  <section class="container-fluid articlesbg">
    <div class="container">
      <div class="row">
        <!--  a row that gives us access to the BS columns-->
        <div class="article-title text-center">
          <h3>LATEST ARTICLES</h3>
          <div class="col-md-4 article-cent">
            <img class="img-responsive" alt=“portait” src="images/portrait.jpg">
            <h4>A PORTRAIT</h4>
            <p>12 Dececmeber 2020</p>
            <p>STS has never been shy of seeking new terrains of investigation. More and more STS s cholars are starting
              to
              explore and intervene in the arts. This object of study brings new challenges and opportunities that we
              want to
              explore in this session. We would like to gather first of all simply new kinds of knowledge arising from
              STS study
              of the arts.
            </p>
            <p class="readmore">CONTINUE READING</p>
          </div>
        </div>
        <div class="col-md-4 article-cent">
          <img class="img-responsive" alt=“portait2” src="images/portrait2.jpg">
          <h4>A MODEL</h4>
          <p class="date">12 December 2020</p>
          <p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to
            explore and intervene in the arts. This object of study brings new challenges and opportunities that we want
            to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from
            STS study of the arts.
          </p>
          <p class="readmore">CONTINUE READING</p>
        </div>

        <div class="col-md-4 article-cent">
          <img class="img-responsive" alt=“portait3” src="images/portrait3.jpg">
          <h4>A GAMES DESIGN</h4>
          <p class="date">12 December 2020</p>
          <p>STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to
            explore and intervene in the arts. This object of study brings new challenges and opportunities that we want
            to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from
            STS study of the arts.
          </p>
          <p class="readmore">CONTINUE READING</p>
        </div>
      </div><!-- row-->
    </div><!-- container-->
  </section><!-- container-fluid-->


  <footer class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center footer-content">
          <p>JOSH WHITKIN</p>
          <img src="images/tumblr.jpg" alt=“tumblr”>
          <img src="images/rss.jpg" alt=“rss”>
          
        </div>
        <div class="col-md-6 text-center footer-content">
          <p>Terms and Conditions</p>
          <img src="images/linkedin.jpg" alt=“linkedin”>
          <img src="images/fb.jpg" alt=“facebook”>
          
        </div>
      </div>
    </div>
  </footer>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>



</html>