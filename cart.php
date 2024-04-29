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
 
            <h2 class="indent-bot2">Your Cart</h2>
      
                        <table align="center" >
                        	<tr style="border:solid #000 2px;">
                            	<th style="border:solid #000 2px; width:120px;">or_id</th>
                                <th style="border:solid #000 2px; width:120px;">Category</th>
                                <th style="border:solid #000 2px; width:120px;">Service name</th>
                                <th style="border:solid #000 2px; width:190px;">Description</th>
                                <th style="border:solid #000 2px; width:120px;">Price</th>
                                <th style="border:solid #000 2px; width:120px;">Username</th>
                                <th style="border:solid #000 2px; width:120px;">Order Date</th>
                                <th style="border:solid #000 2px; width:120px;" colspan="2">Action</th>
                            </tr>
                            <?php
						foreach($cont as $cartview)
						{	
						?>  
                          <tr style="border:solid #000 2px;">
                            	<td align="center"><?php echo $cartview['or_id']; ?></td>
                                <td align="center"><?php echo $cartview['category']; ?></td>
                                <td align="center"><?php echo $cartview['nam']; ?></td>
                                <td align="center"><?php echo $cartview['dess']; ?></td>
                                <td align="center"><?php echo $cartview['price']; ?></td>
                                <td align="center"><?php echo $cartview['username']; ?></td>
                                <td align="center"><?php echo $cartview['ord_date']; ?></td>
                                <td align="center" style="border:solid #000 2px; width:80px;"><a href="cart.php?stat=<?php echo $cartview['or_id']; ?>"><?php echo $cartview['status']; ?></a></td>
                                <td align="center" style="border:solid #000 2px; width:80px;"><a href="cart.php?cartdel=<?php echo $cartview['or_id']; ?>">Delete</a></td>
                            </tr>
                          <?php
							}
							?>
                            <tr style="border:solid #000 2px;">
                            	<th colspan="4" align="center" style="border:solid #000 2px; width:120px;">Total</th>
                                <td align="center" style="border:solid #000 2px; width:120px;">
								
								<?php 
								foreach($cart_price as $ccrt)
								{
									echo $ccrt['grand_total']; 
                                }
								?>
                                </td>
                                <td style="border:solid #000 2px; width:120px;" colspan="4">&nbsp;</td>
                            </tr>
                            </table>
  </div>
</section>
<!--==============================footer=================================-->
<?php
	include("include/footer.php");
?>
</body>
</html>
