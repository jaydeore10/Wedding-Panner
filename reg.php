<?php
	include("control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>JAYANT GHORPADE | Contacts</title>
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
            <h2 class="indent-bot2">Register Form</h2>
            <form id="contact-form" action="#" method="post" enctype="multipart/form-data">
              <fieldset>
              <label><span class="text-form">First Name</span>
                  <input name="fname" type="text" required="required">
                </label>
                <label><span class="text-form">Email</span>
                  <input name="email" type="text" required="required">
                </label>
                <label><span class="text-form">Mobile</span>
                  <input name="mob" type="text" required="required">
                </label>
                <label><span class="text-form">Gender</span>
                  <select name="gender" required="required">
                  <option value="">---select---</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  </select>
                </label>
                <label><span class="text-form">Username</span>
                  <input name="uname" type="text" required="required">
                </label>
                <label><span class="text-form">Password</span>
                  <input name="pass" type="password" required="required">
                </label>
                <label><span class="text-form">state</span>
                  <select name="state" required="required">
                  <option>--select--</option>
                  	<?php foreach($state as $stt)
					{
					?>
                      <option value="<?php echo $stt['s_id']; ?>"><?php echo $stt['s_name']; ?></option>
                     <?php
					}
					?>
                  </select>
                </label>
                <label><span class="text-form">City</span>
                  <select name="city" required="required">
                  <option>--select--</option>
                  	<?php foreach($city as $ctt)
					{
					?>
                     <option value="<?php echo $ctt['ct_id']; ?>"><?php echo $ctt['ct_name']; ?></option>
                     <?php
					}
					?>
                  </select>
                </label>
                <label><span class="text-form">&nbsp;</span>
                  <input type="submit" name="reg_sub" value="Send" style="background:#999;border:#000 solid 1px;">
                </label>
              </fieldset>
            </form>
            <h5>Already Account ? <a href="links.php">Login Here</a></h5>
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
