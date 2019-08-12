<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | MD (Rayat - Bahra)</title>

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
   Managing Director at Rayat-Bahra
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/Main/index/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">MD (Rayat-Bahra)</li>
   </ol>
</nav>

<div style = "height:100%;" class = "row">
   <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-section-role">
      <div style = "display:block;margin-top: 20%; margin-bottom:10%;">
         <img height = "200px" 
            src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura7circular.png" 
            alt = "">        
      </div>
      <div style = "display:block;">
         Managing Director(Rayat-Bahra)
      </div>
   </div>
   <div style = "padding:25px;color:gray;" class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
   His achievements while working with Rayat-Bahra Group of Universities and Colleges Chandigarh, as Managing Director are very exemplary. Under his esteemed leadership, Rayat-Bahra Group has experienced a phenomenal & competent change by touching the zenith of success in developing itself towards an International Hub of education with spread of seven campuses in India having 35000 students . <br><br>

   He has been actively involved in the areas of Youth career development, Counselling , Training & Placements . He has organized various high profile events in the field of Mass Recruitments through National and International Job fairs. <br><br>

   He is working very closely with Industry and Foreign Universities for setting up of Centres of Excellence at upcoming Punjab Skill University with top MNCs like Siemens, IBM, Oracle, Tata Technologies and Google coming forward along with top International Universities to introduce New Age Professional Degree programs with specialisations in technologies like Android, IOT, Cyber Security, Big Data, Design & Development etc with the focus of making the students employable right on day one after course completion both at national and international level. <br><br>

   A Unique International Skill Development Centre is being set up in association with British High Commission and Govt of Alberta Canada to provide skill training to the youth of Punjab by overseas agencies with focus to provide Employment in UK , Australia , Canada , GCG countries etc. 
   </div>
</div>

<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>