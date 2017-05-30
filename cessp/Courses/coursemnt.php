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
</head>
<body>
<?php include('../header.php'); ?>
<div class="container-fluid admission-main-container">
    <h2 class="lead text-center" style="color:#800000;">Courses</h2> 
    <div class="container-fluid">
        <h3><strong>M.S. Nanotechnology</strong></h3>
        <div class="col-md-12">
            <div class="col-md-6 col-md-offset-3">
                <table class="table">
                <tr><td><h4><strong>Couse Code</strong></h4></td><td><h4><strong>Couse Title</strong></h4></td><td><h4><strong>Credit Hours</strong></h4></td></tr>
                <tr><td>NT501</td><td><a href="<?php echo URL; ?>Courses\chemicalnanostructure.php">Chemical Synthesis of Nanostructures</a></td><td class="text-center">3</td></tr>
                <tr><td>NT502</td><td><a href="<?php echo URL; ?>Courses\physicesnanostructure.php">Physical Fabrication of Nanostructures</a></td><td class="text-center">3</td></tr>
                <tr><td>NT503</td><td><a href="<?php echo URL; ?>Courses\nanomaterial.php">Nanomaterials – A Theoretical Approach</a></td><td class="text-center">3</td></tr>
                <tr><td>NT504</td><td><a href="<?php echo URL; ?>Courses\simulationlab.php">Chemical Synthesis &amp; Simulations Lab</a></td><td class="text-center">3</td></tr>
                <tr><td>NT511</td><td><a href="<?php echo URL; ?>Courses\charnanostructure.php">Characterization of Nanostructures</a></td><td class="text-center">3</td></tr>
                <tr><td>NT512</td><td><a href="<?php echo URL; ?>Courses\appnanostructure.php">Applications of Nanostructures</a></td><td class="text-center">3</td></tr>
                <tr><td>NT513</td><td><a href="<?php echo URL; ?>Courses\bionanotechology.php">Bio-Nanotechnology</a></td><td class="text-center">3</td></tr>
                <tr><td>NT514</td><td><a href="<?php echo URL; ?>Courses\physicalfabrication.php">Physical Fabrication &amp; Characterization Lab</a></td><td class="text-center">3</td></tr>
        </table>
            </div>
        </div>
    </div>  
</div>
<?php include('../secondfooter.php'); ?>
<?php include('../footer.php'); ?>
</body>
</html>