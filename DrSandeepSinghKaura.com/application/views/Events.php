<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SSKaura.com | Events</title>

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
   EVENTS
</div>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>/Main/index/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Events</li>
   </ol>
</nav>

<div class = "container">
   <?php if ($all_events_for_particular_page == false): ?>
      <div style = "text-align:center;margin: 40px;">
         <h4  style = "color: gray;">
            Sorry, No event yet.......
         </h4>
      </div>
   <?php else: ?>
      <?php foreach($all_events_for_particular_page as $single_event): ?>
            <div class = "single-news">
               <div class = "row">
                  <div style = "text-align:center;" class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                     <h3 style = "border-bottom:2px solid #FCCD04;color: #A64AC9;text-align:center; margin-bottom: 30px;">
                        <?php echo $single_event['title'] ?>
                     </h3>
                     <div style = "color: gray; margin : 20px;">
                        <b>Posted On : </b><?php echo date('d/m/Y H:i:s', $single_event['posted_on']); ?>
                     </div>
                     <img width = "350" height= "200" src="<?php echo $single_event["image"]; ?>" alt="Event Image">
                  </div>
                  <div style = "padding : 30px;" class = "col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                     <p>
                        <?php echo $single_event['description'] ?>
                     </p>
                  </div>
               </div>
            </div>
      <?php endforeach; ?>
   <?php endif; ?>
</div>

<?php echo $links; ?>

<!-- Footer -->
<?php include_once('Common/Footer.php'); ?>

</body>
</html>