<?php include_once "includes/header.php"; ?>

<div class="page-title page-main-section parallaxie" style="background-image: url(images/titlebg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 59.6px;">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <div class="main-title">
      <h1>Careers</h1>
      
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.php">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="career.php">Careers</a> 
    </div>
  </div>
</div>


<!-- Counter Section -->
<div class="container">
<section class="contact-section-three">
        <div class="auto-container">
            <div class="row clearfix">
<div class="form-column col-md-8 col-sm-12 col-xs-12" id="container-3">
 <div class="inner-column agent-p-form top40">
 <div class="sec-title">
 <h3>Acknowledgement</h3>
 </div>

<div class="row" align="center">
<?
	$NName=$_GET['NName'];
?>
<?
	echo "<br>Thanks <strong>Mr/Mrs. ".$NName."</strong><br><br>We will get back to you shortly!!";
?>
</div>

 </div>
</div>

<div class="info-column col-md-4 col-sm-6 col-xs-12 ">
<br><br><img src="images/img04g.jpg" width="100%">
</div>
            </div>
        </div>
    </section>
</div>	


<!-- Counter Section -->


<?php include_once "includes/footer.php"; ?>