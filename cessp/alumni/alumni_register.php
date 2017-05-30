<?php include('../defined.php'); ?>
<?php
session_start();
include("simple-php-captcha.php");
$_SESSION['captche'] = simple_php_captcha();
?>
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
  <script type="text/javascript" src="<?php echo URL; ?>js/alumni_register.js"></script>
</head>
<body>
<?php include('../header.php'); ?>
<div class="container-fluid admission-main-container">
    <h2 class="lead text-center" style="color:#800000;">Alumni</h2>
    <div class="col-md-12">
    <div class="col-md-6 col-md-offset-2">
    <form class="form-horizontal" action="<?php echo URL; ?>alumni/alumni_registration.php" method="post">
    <h3><strong>PERSONAL INFORMATION</strong></h3>
    <div class="form-group">
      <label class="control-label col-sm-4" for="email" style="color:#800000;">Email:*</label>
      <div class="col-sm-8">
        <input type="email" name="email" class="form-control email" id="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">First Name:</label>
      <div class="col-sm-8">
        <input type="text" name="first_name" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Last Name:</label>
      <div class="col-sm-8">
        <input type="text" name="last_name" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">NIC No:</label>
      <div class="col-sm-8">
        <input type="text" name="nic" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Father Name:</label>
      <div class="col-sm-8">
        <input type="text" name="father_name" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Gender:</label>
      <div class="col-sm-8">
                                <div class="radio" >
      <label><input type="radio" name="gender" value="male">Male</label>&emsp;
      <label><input type="radio" name="gender" value="female">Female</label>
    </div>
                            </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Date of birth:</label>
      <div class="col-sm-8">
        <input type="text" name="dob" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Address:</label>
      <div class="col-sm-8">
        <input type="text" name="address" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">City:</label>
      <div class="col-sm-8">
        <input type="text" name="city" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Province:</label>
      <div class="col-sm-8">
        <input type="text" name="province" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Country:</label>
      <div class="col-sm-8">
        <input type="text" name="country" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Phone no:(Home)</label>
      <div class="col-sm-8">
        <input type="text" name="phone" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Mobile:</label>
      <div class="col-sm-8">
        <input type="text" name="mobile" class="form-control">
      </div>
    </div>
    <h3><strong>ACADEMIC INFORMATION</strong></h3>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Degree:</label>
      <div class="col-sm-8">
        <select class="selectpicker"  name="degree">
          <option value="M. Phil Solid State Physics">M. Phil Solid State Physics</option>
          <option value="M.Phil. in ME and SP">M.Phil. in ME &amp; SP</option>
          <option value="M.S. Nanotechnology">M.S. Nanotechnology</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Specialization:</label>
      <div class="col-sm-8">
        <input type="text" name="Specialization" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Roll Number:</label>
      <div class="col-sm-8">
        <input type="text" name="roll_number" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Session:</label>
      <div class="col-sm-8">
        <input type="text" name="session" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Passing Year:</label>
      <div class="col-sm-8">
        <input type="text" name="passing_year" class="form-control">
      </div>
    </div>
    <h3><strong>PROFESSIONAL INFORMATION</strong></h3>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Organization:</label>
      <div class="col-sm-8">
        <input type="text" name="organization" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Designation:</label>
      <div class="col-sm-8">
        <input type="text" name="designation" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Office Address:</label>
      <div class="col-sm-8">
        <input type="text" name="office_address" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Office Phone:</label>
      <div class="col-sm-8">
        <input type="text" name="office_phone" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Office Fax:</label>
      <div class="col-sm-8">
        <input type="text" name="office_fax" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Area of Expertise:</label>
      <div class="col-sm-8">
        <input type="text" name="Expertise_area" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Experience in Year:</label>
      <div class="col-sm-8">
        <input type="text" name="Experience_year" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="first-name">Specialized Sector:</label>
      <div class="col-sm-8">
        <input type="text" name="Specialized_sector" class="form-control">
      </div>
    </div>
    <div class="form-group">
    <div class="col-sm-2 col-sm-offset-4">
    <img src="<?php echo $_SESSION['captche']['image_src']; ?>">
    </div>
      <div class="col-sm-8 col-md-offset-4" style="margin-top: 5px;">
        <input type="text" name="captche_value" class="form-control" id="captche_value" onfocusout="checkemail();">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" name="register" class="btn btn-primary">Register</button>
      </div>
    </div>
  </form>
  </div>
  </div>
</div>
<?php include('../secondfooter.php'); ?>
<?php include('../footer.php'); ?>
</body>
</html>