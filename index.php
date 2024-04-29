<?php
	include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><marquee>Wedding Planner</marquee></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:500italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 500.00,
        easing: 'easeOutQuint',
        preset: 'slideDown',
        slideshow: 2000,
        banners: false,
        pauseOnHover: true,
        pagination: true,
        pagNums: false
    });
});
</script>
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
<?php
	include("include/menu.php");
?>
  <div class="main">
    <div class="slider-wrapper">
      <div class="slider">
        <ul class="items">
          <li> <img src="images/venue.jpg" alt=""> </li>
          <li> <img src="images/tt.jpg" alt=""> </li>
          <li> <img src="images/ture.jpg" alt=""> </li>
        </ul>
      </div>
    </div>
  </div>
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_4">
          <div class="indent-right">
            <h2><MARQUEE>True Story........</MARQUEE></h2>
            <p>Our services are every where you can see also every city and out of state also provide our services.</p>
            <ul class="list-1 p2">
              <li><a href="#">Satana....</a></li>
              <li><a href="#">Deola.....</a></li>
              <li><a href="#">Chalisgaon...</a></li>
              <li><a href="#">Kalwan........</a></li>
              <li><a href="#">Nashik........</a></li>
            </ul>
            <p class="img-indent-bot">Your hope we will fill like a dream success.</p>
            <a class="link-1" href="#">About Our Wedding Planning</a> </div>
        </article>
        <article class="grid_8">
          <div class="indent-left">
            <h2 class="indent-bot2"><marquee>About Our Services</marquee></h2>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="images/s1 (1).jpg" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><marquee>nikhil chavan(Video Shooting)</marquee></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...I know every Moment is not coming back but we can store in our pocket.</p>
                          Video Shooting is just things but it's very important inour life...&quot; </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <div class="wrapper img-indent-bot">
              <figure class="img-indent-r">
                <p class="p1"><a href="#"><img class="img-border1" src="images/s1 (2).jpg" height="180px" width="200px" alt=""></a><span class="clear"></span></p>
                <div class="alignright"> <span class="text-1"><marquee>gaurav Bhau(Photographer)</marquee></span> </div>
              </figure>
              <div class="extra-wrap">
                <blockquote class="q2"> <span class="quote-marker2"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p>&quot;Photography is my passion but i know every people have different exepect on me But don't worry about it I am here.</p>
                          Happy Wedding Days.&quot; </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <a class="link-1" href="#">Read More.....????</a> </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!--==============================footer=================================-->
<?php
	include("include/footer.php");
?>
</body>
</html>
