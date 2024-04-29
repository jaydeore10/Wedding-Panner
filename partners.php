<?php
	include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'slideDown',
        slideshow: 7000,
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
</header>
<!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
  
        <article class="grid_8">
          <div class="indent-left">
            <h2 class="indent-bot2">Our Partners</h2>
            <?php
				foreach($service as $se)
				{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $se['ser_img']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $se['ser_name']; ?></span> </figure>
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
            <?php
				}
			?>
            </div>
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
