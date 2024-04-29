<?php
	include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=PT+Sans:700" rel="stylesheet" type="text/css">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
</head>
<body id="page5">
<!--==============================header=================================-->
<?php
	include("include/menu.php");
?><!--==============================content================================-->
<section id="content">
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <article class="grid_8">
          <div class="indent-right">
            <h2 class="indent-bot2">Contact Form</h2>
            <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
              <fieldset>
                <label><span class="text-form">Name</span>
                  <input name="name" type="text" required="required">
                </label>
                <label><span class="text-form">Email</span>
                  <input name="email" type="text"  required="required">
                </label>
                <div class="wrapper">
                  <div class="text-form">Message</div>
                  <div class="extra-wrap">
                    <textarea name="desc" required="required"></textarea>
                    <div class="clear"></div>
                    <div class="buttons"> <input type="submit" name="contact_sub" value="Send" style="background:#999;border:#000 solid 1px;"> </div>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </article>
        <article class="grid_4">
          <div class="indent-left">
            <h2 class="indent-bot2">Contact Us</h2>
            <dl>
              <dt class="p2">MOTI NAGAR DEOLA </dt>
              <dd><span>Telephone:</span> +919370757200</dd>
              <dd>&nbsp;</dd>
              <dd><span>Email:</span> <a href="#">mail@weddingplanner.com</a></dd>
            </dl>
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
