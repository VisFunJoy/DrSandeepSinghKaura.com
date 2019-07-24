<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | Advisor</title>

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
   ADVISOR (Skill Developement)
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/Main/index/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Advisor (Skill Developement)</li>
   </ol>
</nav>   

<div class = "container">
   <div class = "row">

   </div>
</div>
<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>