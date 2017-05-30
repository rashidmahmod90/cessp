<?php include('../defined.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Centre Of Excellence In Solid State Physics</title>
	<link rel="shortcut icon" href="<?php echo URL; ?>images/cssp_logo.jpg" />
	<meta charset="UTF-16">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>bootstrap\css\bootstrap.min.css">
	<script type="text/javascript" src="<?php echo URL; ?>bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="<?php echo URL; ?>css/styles.css" type="text/css">
	<script type="text/javascript" src="<?php echo URL; ?>js/styles.js"></script>
  <script type="text/javascript" src="<?php echo URL; ?>js/alumni_login.js"></script>
</head>
<body>
<?php include('../header.php'); ?>
<div class="container-fluid admission-main-container">
    <h2 class="lead text-center" style="color:#800000;">Alumni</h2>
    <div class="col-md-12">
    <div class="col-md-6 col-md-offset-3">
    <form class="form-horizontal" action="<?php echo URL; ?>alumni/login_confirmation.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" onfocusout="checkemail();" placeholder="Enter email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <a href="<?php echo URL;?>alumni\alumni_register.php">Don't have an account?</a>&emsp;<a href="">Forgot password</a>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </form>
  </div>
  </div>
</div>
<div style="position: fixed;bottom:0;width: 100%;">
<?php include('../secondfooter.php'); ?>
<?php include('../footer.php'); ?>
</div>
</body>
</html>