<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com</title>

   <!-- Include needed files -->
   <?php include_once('Common/CommonHeaderFiles.php'); ?>

   <!-- Include External Css files -->
   <link href="<?php echo base_url(); ?>/Dependencies/Css/Home.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(); ?>/Dependencies/Css/Global.css" rel="stylesheet" type="text/css" />

</head>
<body>

<!-- Include Navbar -->
<?php include_once('Common/Navbar.php'); ?>

<!-- Carousel -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <?php for($i = 1; $i <= 31; $i++): ?>
      <li data-target="#carouselExampleIndicators" data-slide-to='<?php echo $i; ?>'></li>
    <?php endfor; ?>
  </ol> -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height = "500px" src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura36.jpg" class="d-block w-100" alt="...">
    </div>
    <?php for($i = 37; $i <= 47; $i++): ?>
      <div class="carousel-item">
         <img height = "500px" src='<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura<?php echo $i; ?>.jpg' class="d-block w-100" alt="...">
      </div>
    <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- News Section -->

<div class = "news-section">
   <h2 style = "margin:30px;">Latest News</h2>
   <div class = "single-news">
      <a href="">
         <img style = "display:inline-block;" height = "150px" width = "150px" src='<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura1.jpg' alt="News-image">
         <div style = "display:inline-block; vertical-align:top; margin-left:20px;">
            <h4 style = "border-bottom:2px solid #FCCD04;">News Heading</h4>
            <p>This is the news.</p>
         </div>
      </a>
   </div>
</div>

<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>