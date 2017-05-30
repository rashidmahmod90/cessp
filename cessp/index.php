<?php include('defined.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Centre of Excellence in Solid State Physics</title>
	<link rel="shortcut icon" href="<?php echo URL; ?>images/cssp_logo.jpg" />
	<meta charset="UTF-16">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>bootstrap\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL;?>bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="<?php echo URL; ?>bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/styles.css" type="text/css">
	<script type="text/javascript" src="<?php echo URL; ?>js/styles.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>js/alumni_login.js"></script>
    <link type="text/css" href="<?php echo URL; ?>css/jquery.marquee.css" rel="stylesheet" media="all" />
<script type="text/javascript" src="<?php echo URL; ?>lib/jquery.marquee.js"></script>
    
</head>
<body>
<?php include('header.php'); ?>

<!--.....................This is for the carousel.............................-->

     <div class="carousel slide carousel-custom-index" id="mycarousel" data-ride="carousel">
     <!--.....................Indicators.............................-->


     <ol class="carousel-indicators">
     	<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
     	<li data-target="#mycarousel" data-slide-to="1" ></li>
     	<li data-target="#mycarousel" data-slide-to="2" ></li>
     	<li data-target="#mycarousel" data-slide-to="3" ></li>
     	<li data-target="#mycarousel" data-slide-to="4" ></li>
     	<li data-target="#mycarousel" data-slide-to="5" ></li>
     </ol>


     <!--.....................End of Indicators.............................!-->


     <!--.....................Wraper for slides.............................!-->
     <div class="carousel-inner" role="list-box">
     	<div class="item active">
     		<img class="img-responsive" src="images/slide1.jpg">
     		<div class="carousel-caption custom-caption animated bounceInDown">
        </div>
     	</div>
     	<div class="item">
     		<img class="img-responsive" src="images/slide2.jpg">
     		<div class="carousel-caption custom-caption animated bounceInDown">
            
        </div>
     	</div>
     	<div class="item">
     		<img class="img-responsive" src="images/slide3.jpg">
     		<div class="carousel-caption custom-caption animated bounceInDown">
            
        </div>
     	</div>
     	<div class="item">
     		<img class="img-responsive" src="images/slide4.jpg">
     		<div class="carousel-caption custom-caption animated bounceInDown">
            </div>
     	</div>
     	<div class="item">
     		<img class="img-responsive" src="images/slide5.jpg">
     		<div class="carousel-caption custom-caption animated bounceInDown">
            
        </div>
     	</div>
     	<div class="item">
     		<img class="img-responsive" src="images/slide6.jpg" alt="a">
     		<div class="carousel-caption custom-caption animated bounceInDown">
            
        </div>
     </div>
     <!--.....................End of Wraper.............................!-->

     <!--.....................Left and right controls...................!-->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>
    <span class="sr-only">Next</span>
    </a>
     <!--.....................End of Left and right controls............!-->

     </div>
     </div>
     <div class="container">
     	<h2 class="lead text-center" style="color:#800000;">Director’s Message:</h2>
     	<div class="col-md-12" style="margin-left: 2%;">
     	
     	<div class="col-md-1" style="padding:0;"><img src="<?php echo URL; ?>/images/dir_pic.jpg" class="img-responsive "></div>

        <div class="col-md-11" style="padding-right: 3.5%;"><p align="justify" style="font-size: 17px;">We, at the Centre of Excellence (COE) in Solid State Physics (SSP), are not only training technical manpower in the field of Solid State Physics we are striving hard to keep adding latest facilities for research. 
The Centre has a well-established M.Phil. programme in Solid State Physics. However, the COE in SSP expanded its horizon by offering another M.Phil. programme i.e. in the field of Microelectronics.
Since the Centre is looking after a wide variety of research programmes within its scope, it can be divided into the following sub-divisions:
</p>
</div>
<!--<div class="col-md-2 col-md-offset-2"><img src="<?php echo URL; ?>/images/dir_pic.jpg" class="img-responsive "></div> -->
</div>
&nbsp;<ol  style="font-size: 17px;margin-left: 1%;">
	<li>Theory of Condensed Matter</li>
	<li>Ceramics &amp; Superconductors</li>
	<li>Microelectronic Devices; Theory &amp; Experiment</li>
	<li>Nano-materials for High-Tech Applications</li>
	<li>Magnetism and Spintronics</li>
</ol>
<div class="col-md-12">
     	<div class="col-md-12">
     	<p align="justify" style="font-size: 17px;">Spintronics is the latest addition to Centre’s course work and research fields. You can see from these web pages that the Centre is well equipped for experimental and theoretical research in the fields mentioned above.
The Centre of Excellence has once again expanded its horizon and is now offering MS Nanotechnology degree as well. This is a multidisciplinary degree programme encompassing Physics, Chemistry and Biology at nano-level.
COE in Solid State Physics is also a component of School of Physical Sciences (SPS) established at University of the Punjab. The research facilities being acquired at SPS will enhance the capabilities of the Centre and we would thus be able to offer more seats to our M.Phil. and Ph.D. programmes.
</p>
<h4 style="margin:5% auto;"><strong>Prof. Dr. Shahzad Naseem</strong></h4>
</div>
</div>
     </div>
     <div class="container-fluid alumni-index-custom">
     <h2 class="text-center" style="color:lightgray;margin: 0;padding:0;">Alumni</h2>
     	<form action="<?php echo URL; ?>alumni/login_confirmation.php" class="text-center form-inline form-group-custom" method="post">

  <div class="form-group">
    <label for="email" style="color:lightgray;">Email:</label>
    <input type="email" class="form-control" name="email" size="30" id="email" onfocusout="checkemail();">
  </div>
  <div class="form-group">
    <label for="pwd" style="color:lightgray;margin-left: 10px;">Password:</label>
    <input type="password" class="form-control" name="password" size="30" id="pwd">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

     </div>
     <?php include('secondfooter.php'); ?>
     <?php include('footer.php'); ?>
</body>
</html>