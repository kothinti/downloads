<?php include_once "includes/header.php"; ?>


<div class="page-title page-main-section parallaxie" style="background-image: url(images/titlebg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 59.6px;">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Enquiry</h1>
      
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.php">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="enquiry.php">Enquiry</a> 
    </div>
  </div>
</div>

		
<section id="agent-2-peperty" class="profile padding ">
  
  
  <div class="container-3" style="padding-left:100px; margin:0px;"> 
  
    <div class="row">
    
	<?
	$NName=$_GET['NName'];
	echo "<br><br>Thanks Mr/Mrs. <span class='CapTitle'>".$NName."</span><br><br>We will get back to you shortly!!<br><br><br>";
?>
	
    </div>
  </div>
</section>
	
<?php include_once "includes/footer.php"; ?>