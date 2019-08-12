<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html style = "background-color:white;" lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | Gallery</title>

   <!-- Include needed files -->
   <?php include_once('Common/CommonHeaderFiles.php'); ?>

   <!-- Include External Css files -->
   <link href="<?php echo base_url(); ?>Dependencies/Css/Main.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(); ?>Dependencies/Css/Global.css" rel="stylesheet" type="text/css" />

   <script>
      $(document).ready(function() {
         $('.gallery').each(function() { // the containers for all your galleries
         $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
                  enabled:true
               }
            });
         });
      });
   </script>
</head>
<body style = "background-color:white;">

<!-- Include Navbar -->
<?php include_once('Common/Navbar.php'); ?>

<!-- Content -->
<div class = "heading">
   GALLERY
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/Main/index/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Gallery</li>
   </ol>
</nav>
<?php $increment = 0; ?>
<div class = "container">
   <div class="gallery">
      <?php for($i = 1; $i <=16; $i++): ?>
         <div style = "margin-top : 50px; margin-bottom:50px;" class = "row">
            <div class = "img-container col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <div class = "img-overlay">
                  <img src="<?php echo base_url(); ?>Dependencies/Images/AppImages/image_preview_symbol.jpg" alt="alt">
               </div>
               <a href="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $increment+1; ?>.jpg">
                  <img class = "gallery-image" width = "100%" height = "250" src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $increment+1; ?>.jpg" alt="gallery-item">
               </a>
            </div>
            <div class = "img-container col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <div class = "img-overlay">
                  <img src="<?php echo base_url(); ?>Dependencies/Images/AppImages/image_preview_symbol.jpg" alt="alt">
               </div>
               <a href="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $increment+2; ?>.jpg">
                  <img class = "gallery-image" width = "100%" height = "250" src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $increment+2; ?>.jpg" alt="gallery-item">
               </a>
            </div>
            <div class = "img-container col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <div class = "img-overlay">
                  <img src="<?php echo base_url(); ?>Dependencies/Images/AppImages/image_preview_symbol.jpg" alt="alt">
               </div>
               <a href="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $increment+3; ?>.jpg">
                  <img class = "gallery-image" width = "100%" height = "250" src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $increment+3; ?>.jpg" alt="gallery-item">
               </a>
            </div>
         </div>
         <?php $increment = $increment + 3; ?>
      <?php endfor; ?>
   </div>
</div>

<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>