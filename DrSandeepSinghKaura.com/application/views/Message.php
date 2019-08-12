<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | Message</title>

   <!-- Include needed files -->
   <?php include_once('Common/CommonHeaderFiles.php'); ?>

   <!-- Include External Css files -->
   <link href="<?php echo base_url(); ?>Dependencies/Css/Main.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(); ?>Dependencies/Css/Global.css" rel="stylesheet" type="text/css" />

</head>
<body>

<!-- Include Navbar -->
<?php include_once('Common/Navbar.php'); ?>

<!-- Content -->
<div class = "heading">
   Message
</div>

<div style = "padding : 100px;" class = "container">
   <div class = "row">
      <div style = "text-align:center;">
         <h4 style = "color:#A64AC9;"><?php echo $message; ?></h4>
      </div>
   </div>
</div>
<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>