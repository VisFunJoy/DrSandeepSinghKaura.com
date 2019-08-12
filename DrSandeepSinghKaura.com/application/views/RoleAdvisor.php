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

<div style = "height:100%;" class = "row">
   <div class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 left-section-role">
      <div style = "display:block;margin-top: 20%; margin-bottom:10%;">
         <img height = "200px" 
            src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura7circular.png" 
            alt = "">        
      </div>
      <div style = "display:block;">
         Advisor(Skill Developement)
      </div>
   </div>
   <div style = "padding:25px;color:gray;" class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
   Adviser To Govt of Punjab , Punjab Skill Development Mission having following responsibilities : <br><br>
   
   
   1) To lay down of framework of skill development in Punjab by setting up of Multi Skill Development Centres in Major Cities as Hub Centres , Urban Skill Centres in Each district and Rural Skill Development Centres as Spoke Centres to provide desired employability skills to youth of Punjab <br><br>
   
   2) To Steer the Overseas Skill Development Model in association with High Commissions of Various Countries with focus on international employment. A MOU is signed between Govt of Punjab and British High Commission to set up India`s first International Skill Centre in Punjab <br><br>
   
   
   3) To implement Central Govt Skill Development Schemes in Punjab in coordination with respective Central Ministries of India <br><br>
   
   4) To bring investment under CSR Initiatives for upcoming Skill University in Punjab under PPP Model <br><br>
   
   5) To Plan and execute State Level Job Fairs in different parts of Punjab in coordination with Department of Industries , Department of Employment Generation and Universities <br><br>
   
   6) To Monitor the performance of Training Partners both private and Government imparting skill training to youth <br><br>
   </div>
</div>
<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>