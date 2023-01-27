<?php include 'includes/header.php';?>
  <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "benstilenmore@gmail.com";  //place your/your client's email address here
        $toName = "Ben Smolen"; //place your client's name here
        //$toAddress = "marksmolen032066@gmail.com";  //place your/your client's email address here
        //$toName = "Mark Smolen"; //place your client's name here
        $website = "Ben's Tile & More";  //place NAME of your client's website

        echo loadContact('simple.php','new_feedback.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

<!-- START FOOTER SECTION -->
<?php include 'includes/contactfooter.php';?>