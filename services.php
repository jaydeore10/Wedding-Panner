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
        <article class="grid_4">
          <div class="indent-right">
            <h2>Our Services</h2>
            <ul class="list-1 p2">
            <?php
				foreach($service as $ser)
				{
			?>
              <li><a href="services.php?srid=<?php echo $ser['ser_name']; ?>"><?php echo $ser['ser_name']; ?></a></li>
              <?php
				}
			  ?>
            </ul>
           </div>
        </article>
        <article class="grid_8">
          <div class="indent-left">
            <h2 class="indent-bot2">About Our Services</h2>
            <?php
			if(isset($_REQUEST['srid']))
			{
				$srd=$_REQUEST['srid'];
				
				if($srd=="Decoration")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['deco_img']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['deco_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['deco_desc']; ?>...&quot; </p>
                          <p><b>Budget :-</b> <?php echo $decoo['deco_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['deco_name']; ?>&&dess=<?php echo $decoo['deco_desc']; ?>&&price=<?php echo $decoo['deco_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
				}
				elseif($srd=="DJ")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['d_img']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['d_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['d_desc']; ?>...&quot; </p>
                          <p><b>Budget :-</b> <?php echo $decoo['d_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['d_name']; ?>&&dess=<?php echo $decoo['d_desc']; ?>&&price=<?php echo $decoo['d_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
					
				}
				elseif($srd=="food")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['f_img']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['f_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['f_desc']; ?>...&quot; </p>
                          <p><b>Budget :-</b> <?php echo $decoo['f_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['f_name']; ?>&&dess=<?php echo $decoo['f_desc']; ?>&&price=<?php echo $decoo['f_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
					
				}
				elseif($srd=="gift_store")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['gf_img']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['gf_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['gf_desc']; ?>...&quot;</p>
                          <p><b>Budget :-</b> <?php echo $decoo['gf_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['gf_name']; ?>&&dess=<?php echo $decoo['gf_desc']; ?>&&price=<?php echo $decoo['gf_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
					
				}
				elseif($srd=="hall")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['h_img']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['h_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['h_desc']; ?>...&quot;</p>
                          <p><b>Budget :-</b> <?php echo $decoo['h_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['h_name']; ?>&&dess=<?php echo $decoo['h_desc']; ?>&&price=<?php echo $decoo['h_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
					
				}
				elseif($srd=="photography")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['img_name']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['ph_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['ph_desc']; ?>...&quot; </p>
                          <p><b>Budget :-</b> <?php echo $decoo['ph_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                    <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['ph_name']; ?>&&dess=<?php echo $decoo['ph_desc']; ?>&&price=<?php echo $decoo['ph_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
					
				}
				elseif($srd=="video")
				{
					foreach($dec as $decoo)
					{
			?>
            <div class="wrapper p3">
              <figure class="img-indent">
                <p class="p1"><a href="#"><img class="img-border1" src="<?php echo $decoo['video_name']; ?>" height="180px" alt=""></a><span class="clear"></span></p>
                <span class="text-1"><?php echo $decoo['v_name']; ?></span> </figure>
              <div class="extra-wrap">
                <blockquote class="q1"> <span class="quote-marker1"></span>
                  <div class="quote-bot">
                    <div class="quote-top">
                      <div class="quote">
                        <div class="padding">
                          <p class="p2">&quot;...<?php echo $decoo['v_desc']; ?>...&quot; </p>
                          <p><b>Budget :-</b> <?php echo $decoo['v_price']; ?></p></div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div align="center" style="background:#CCC; border:#000 solid 2px; width:150px; margin-left:90px;"><a href="cart.php?prid=<?php echo $decoo['ser_id']; ?>&&nam=<?php echo $decoo['v_name']; ?>&&dess=<?php echo $decoo['v_desc']; ?>&&price=<?php echo $decoo['v_price']; ?>">Add_Cart</a></div>
                </blockquote>
              </div>
            </div>
            <?php
					}
					
				}
			
				
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
