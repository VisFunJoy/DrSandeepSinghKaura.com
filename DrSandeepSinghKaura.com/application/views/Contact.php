<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" style = "background-color: white;">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | Contact</title>

   <!-- Include needed files -->
   <?php include_once('Common/CommonHeaderFiles.php'); ?>

   <!-- Include External Css files -->
   <link href="<?php echo base_url(); ?>Dependencies/Css/Main.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(); ?>Dependencies/Css/Global.css" rel="stylesheet" type="text/css" />

</head>
<body style = "background-color: white;">

<!-- Include Navbar -->
<?php include_once('Common/Navbar.php'); ?>

<!-- Content -->
<div class = "heading">
   CONTACT ME
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/Main/index/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact</li>
   </ol>
</nav>
   
<div style = " text-align:center;">
   <?php if (isset($message)): ?>
      <h4 style = "color:#17E9E0;"><?php echo $message; ?></h4>
   <?php endif; ?>
</div>
<div style = "margin-top:50px;" class = "container">
   <div class = "row">
      <div class = "col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
         <h4 style = "color:gray;">For any query, please drop a message here....</h4>
         <form class = "row" action="<?php echo site_url(); ?>/Main/send_contact_message" method = "Post">
            <div style = "text-align:center;" class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
               <input required autocomplete="off" class = "input-box" style = "margin:10px auto;" placeholder = "Enter your name" type="text" name="name"><br>
               <input required autocomplete="off" class = "input-box" style = "margin:10px auto;" placeholder = "Enter your email address" type="email" name="email"><br>
               <input required autocomplete="off" class = "input-box" style = "margin:10px auto;" placeholder = "Enter your subject" type="text" name="subject"><br>
            </div>
            <div style = "text-align:center;" class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
               <textarea required autocomplete="off" class = "input-box" style = "margin:10px auto; height: 220px;" 
               type="text" name="message" rows = "20" cols = "50">Message goes here...</textarea>
            </div>
            <div style = "text-align:center;" class = "col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
               <button class = "button" type="submit">Send Message</button>
            </div>
         </form>
      </div>
      <div style = "padding-top:45px;" class = "col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
         <div class = "row" style = "margin-bottom:40px; text-align:center;">
            <div class = "social-links" style = "margin-left:auto; margin-right:auto;">
               <a data-toggle="tooltip" target = "_blank" data-placement="top" title="Facebook" href="https://www.facebook.com/sskaura1/?modal=admin_todo_tour">
                  <img class = "social-icon" src="<?php echo base_url(); ?>Dependencies/Images/AppImages/facebook_icon.png" alt="facebook">
               </a>
               <a data-toggle="tooltip" target = "_blank" data-placement="top" title="Linkedin" href="https://www.linkedin.com/in/dr-sandeep-singh-kaura-105b4015/">
                  <img class = "social-icon" src="<?php echo base_url(); ?>Dependencies/Images/AppImages/linkedin_icon.png" alt="linkedin">
               </a>
               <a data-toggle="tooltip" target = "_blank" data-placement="top" title="Twitter" href="https://www.twitter.com/kaurass">
                  <img class = "social-icon" src="<?php echo base_url(); ?>Dependencies/Images/AppImages/twitter_icon.png" alt="twitter">
               </a>
               <a data-toggle="tooltip" target = "_blank" data-placement="top" title="Youtube" href="https://www.youtube.com/user/sandeepkaura">
                  <img class = "social-icon" src="<?php echo base_url(); ?>Dependencies/Images/AppImages/youtube-red-square.png" alt="youtube">
               </a>
            </div>
         </div>
         <div class= "row" style = "margin:20px;">
            <ion-icon style = "color:#17E9E0;margin-right:10px;" name="home" size="large"></ion-icon>
            <h6>
               Room No. 507, 5th floor, Plot No. 1,<br>
               Directorate of technical education, <br>Sector 36-A, Chandigarh - 160036 
            </h6>
         </div>
         <hr>
         <div class= "row" style = "margin:20px;">
            <ion-icon style = "color:#17E9E0; margin-right:10px;" name="call" size="large"></ion-icon>
            <h6>
               +91-172-5022383
            </h6>
         </div>
         <hr>
         <div class= "row" style = "margin:20px;">
            <ion-icon style = "color:#17E9E0; margin-right:10px;" name="mail" size="large"></ion-icon>
            <h6>
               sandeepsingh.kaura@punjab.gov.in
            </h6>
         </div>
      </div>
   </div>
</div>

<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>