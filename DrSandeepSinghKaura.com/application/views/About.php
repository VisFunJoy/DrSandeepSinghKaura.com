<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | About</title>

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
   ABOUT ME
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/Main/index/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">About</li>
   </ol>
</nav>
   

<div class = "container">
   <div class = "row">
      <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <img style = "margin : 20px 0px;" height = "400px" src="<?php echo base_url(); ?>Dependencies/Images/SandeepKauraPictures/sskaura48.jpg" class="d-block w-100" alt="...">
      </div>
      <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <h4 class = "sub-heading">Introduction</h4>
         <p>
            Dr. Sandeep Singh Kaura has more than 20 years of experience in Reputed
      Educational Institutions and Industry in India in varied verticals like Organisational
      Development, Strategising new business ventures, enhancing Corporate Interface,
      Project Planning & Implementation and Foreign Relations. Dr Kaura also worked as
      Director of Punjab State Industrial Development Corporation (PSIDC) Chandigarh
      and is an active member of organisations such as PHD Chamber of commerce
      representing its national committees for promotion of Industrial Development and
      Skill Development in India, Confederation of Indian Industry (CII) for its initiatives on
      Skill Development in India, Punjab State Board for Technical Education! Society of
      Indian Automobile Manufacturers (SIAM) New Delhi and Member of council of
      Harvard University for Disaster Management.
         </p>
      </div>
   </div>
   <div class = "skills-expertise">
      <h4 class = "sub-heading">Skills, Subjects and Techniques Expertise</h4>
      <div class = "row">
         <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h6>Organisational Development (72%)</h6>
            <div class="progress">
               <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 72%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6>Strategising New Business ventures (78%)</h6>
            <div class="progress">
               <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6>Enhancing Corporate Interface (75%)</h6>
            <div class="progress">
               <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         </div>
         <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h6>Project Planning (87%)</h6>
            <div class="progress">
               <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 87%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h6>Implementation and Foreign Relations (82%)</h6>
            <div class="progress">
               <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 82%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
         </div>
      </div>
   </div>
   <div style = "margin-bottom :30px;" class = "my-qualifications">
      <h4 class = "sub-heading">My Qualifications</h4>
      <div class = "row">
         <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="jumbotron">
               <h4>MBA</h4>
               <hr class="my-4">
               <p class="lead"><b>The Master of Business Administration (MBA) is an 
                                       internationally-recognized degree designed 
               to develop the skills required for careers in business and management. 
               The value of the MBA, however, is not limited strictly to the business world.</b></p>
            </div>
         </div>
         <div style = "display:flex; justify-content: center; align-items: center;" 
              class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <ion-icon class = "d-none d-md-block" size="large" name="snow"></ion-icon>         
         </div>
      </div>
      <div class = "row">
         <div style = "display:flex; justify-content: center; align-items: center;" 
              class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <ion-icon class = "d-none d-md-block" size="large" name="snow"></ion-icon>         
         </div>
         <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="jumbotron">
               <h4>PhD (H.C)</h4>
               <hr class="my-4">
               <p class="lead"><b>An honorary doctoral degree is often awarded in recognition 
               of one's life experiences. It is denoted by the letters "h.c.", 
               which is an abbreviation for "honoris causa" (Latin for "for the sake of honor"). ... 
               Honorary doctorates are often awarded by prestigious universities such as Harvard or Oxford.</b></p>
            </div>
         </div>
      </div>
      <div class = "row">
         <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="jumbotron">
               <h4>Fellowship from University of Oxford</h4>
               <hr class="my-4">
               <p class="lead"><b>The term “Fellow” is commonly used in Oxford to refer to senior 
               academic and administrative members of a College; 
               Univ has several different classes of Fellowship.</b></p>
            </div>
         </div>
         <div style = "display:flex; justify-content: center; align-items: center;" 
              class = "col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <ion-icon class = "d-none d-md-block" size="large" name="snow"></ion-icon>         
         </div>
      </div>
   </div>
</div>
<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>