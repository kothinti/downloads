<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Welcome to Andhra Legal House & Co</title>
<link rel="stylesheet" type="text/css" href="css/master.css">
<link rel="stylesheet" type="text/css" href="css/color/color-1.css" id="color" />
<link rel="shortcut icon" href="images/short_icon.png">
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<?php
session_start();

if (isset($_POST['Accept'])) {
if ($_POST['Accept'] == 'Accept') {
    $_SESSION['did_accept'] = true;
    header ('Location: https://andhralegalhouse.org/home.php');
    die('<a href="#">Click here to continue</a>');
}
}
if (isset($_POST['Accept'])) {
if ($_POST['Accept'] == 'Decline') {
    $_SESSION['did_accept'] = true;
    header ('Location: https://andhralegalhouse.org/index.php');
    die('<a href="#">Click here to continue</a>');
}
}
?>	
</head>
<body>
<!--===== BACK TO TOP =====-->
<div class="short-msg">
  <a href="#." class="back-to"><i class="icon-arrow-up2"></i></a>
</div>
<div class="area-popup">
        <!-- data-backdrop="static" data-keyboard="false"-->
        <div id="Modal" class="modal fade in" data-backdrop="static" data-keyboard="true" style="display: block;margin-top:180px;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body overfl">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <center>
                                        <h3 class="text-black">
                                            DISCLAIMER</h3><br/>
                                    </center>
                                </div>
                                <div class="col-md-12 disclaimer">
                                    <p style="text-align:justify;">
                                       As per the norms set by the Bar Council of India, law firms are not
authorized to solicit work and publicize. All the information,
publications and legal commentary provided on
www.andhralegalhouse.org is for illustrative purposes only and
should not be regarded or relied upon as legal advice.</p> <br/>
<p style="text-align:justify;">While the
content provided is accurate as at the date of first publication, it is
updated frequently when laws and regulations change. The site
clearly states it is not intended to be a source of advertising or
solicitation, nor is it an invitation for a lawyer-client relationship, and
transmission, receipt or use of the site does not constitute or create a
lawyer-client relationship.</p><br/>
<p style="text-align:justify;"> By clicking the “Accept” button, the user
accepts that he/she is doing it out of free will and is solely at the
user&#39;s own risk.</p> 

                                </div>
<form id="frmStudent" method="post" action="">
<label style="float: right;padding-right:5px;">
<input type="radio" name="Accept" value="Decline" id="Decline" onclick="Decline()">
Decline</label>
<label style="float: right;padding-right:10px;">
<input target="_blank" type="radio" name="Accept" value="Accept" id="Accept" onclick="Accept()">
Accept</label>
<br/>

<br><br>
<input style="background:#f00;color:#fff;padding:10px;width:100%;" onclick="allOn();" type="submit" value="Submit">

</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<header id="header-top_3">
  <!--===== HEADER TOP =====-->
  <div id="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <p class="p-font-15 p-white">Welcome to Andhra Legal House &#38; Co.</p>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 text-right">
          <div class="header-top-links custom-navbar" data-wow-duration="2s" role="navigation">
            <ul>
              <li><a style="font-weight:bold;font-size:15px;" href="#enquiry" class="header-login smoothscroll"><i style="font-weight:bold;font-size:15px;" class="icon-icons179"></i>For Quick Advice?</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== #/HEADER TOP =====--> 
  <!--===== HEADER BOTTOM =====-->
  <div id="header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-2 hidden-xs hidden-sm"><a href="index.php"><img style="width:264px;" src="images/atlantalawyes_logo.png" alt="logo"></a></div>
        <div class="col-md-10 col-sm-12 col-xs-12">
          <div class="get-tuch text-left top20">
            <i class="icon-telephone114"></i>
            <ul>
              <li>
                <h4>Phone Number</h4>
              </li>
              <li>
                <p><a href="tel:09393833669">+91 9393 833 669</a></p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="images/get-tuch-line.png" alt="line"></div>
          <div class="get-tuch text-left top20">
            <i class="icon-icons74"></i>
            <ul>
              <li>
                <h4>Andhra Legal House,</h4>
              </li>
              <li>
                <p>Visakhapatnam.</p>
              </li>
            </ul>
          </div>
          <div class="get-tech-line top20"><img src="images/get-tuch-line.png" alt="line"></div>
          <div class="get-tuch text-left top20">
            <i class=" icon-icons142"></i>
            <ul>
              <li>
                <h4>Email Address</h4>
              </li>
              <li>
                <p><a href="mailto:legaldesk@andhralegalhouse.org">legaldesk@andhralegalhouse.org</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== #/HEADER BOTTOM =====--> 
  <div class="wrap-sticky" style="height: 60px;"><nav class="custom-navbar navbar navbar-default no-background navbar-sticky bootsnav on menu-center no-full" data-wow-duration="2s" role="navigation">
    <div class="container">
      <!-- Start Header Navigation -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand sticky_logo" href="index.php"><img src="images/atlantalawyes_logo.png" class="logo" alt=""></a>
      </div><!-- End Header Navigation -->
      <div class="collapse navbar-collapse nav_3 clearfix" id="navbar-menu">
        <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp"> 
              <li class="active"><a href="index.php">Home</a></li>              
              <li><a class="smoothscroll" href="#about">About Us</a></li>              
              <li><a class="smoothscroll" href="#practice">Practice Areas</a></li>              
             <!--- <li><a class="smoothscroll" href="#members">Our Team</a></li>--->
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Resource Centre</a>
                <ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
                  <li><a href="the_firm.php">The Firm</a></li>
                  <li><a href="founders.php">Founder's Message</a></li>				  
                  <li><a href="our_team.php">Our Team</a></li>
                  <li><a href="affiliation.php">Affiliation</a></li><li><a href="practice.php">Practice Areas</a></li><li><a href="clients.php">Clients</a></li><li><a href="career.php">Careers</a></li>
                  <li><a href="corporate.php">Corporate Social Responsibility</a></li><li><a href="photo_gallery.php">Photo Gallery</a></li><li><a href="video_gallery.php">Video Gallery</a></li>				  
                </ul>
              </li>			  
              <li><a class="smoothscroll" href="#enquiry">Enquiry</a></li> 			                         
              <li><a class="smoothscroll" href="#contact">Contact Us</a></li>   
        </ul>
      </div>
    </div>
  </nav></div>
</header>
<!--  Header Top End  -->


<!--  Banner Start  -->
<section class="rev_slider_wrapper">
  <div id="rev_slider_3" class="rev_slider"  data-version="5.0">
    <ul>
      <!-- SLIDE 1 -->
      <li data-transition="fade">
        <img src="images/banner-4.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> PAN India Presence</h1>	
		  </div>
        </div>
      </li>
      <!-- SLIDE 2 -->
      <li data-transition="fade">
        <img src="images/banner-7.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> Partners with extensive<br/> experience</h1>	
		  </div>
        </div>
      </li>
      <!-- SLIDE 3 -->
      <li data-transition="fade">
        <img src="images/banner-8.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> Cost Effective <br/>And Personalized <br/>Services</h1>	
		  </div>
        </div>
      </li>
      <!-- SLIDE 4 -->
      <li data-transition="fade">
        <img src="images/banner-7.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> Quick Turnaround Time</h1>	
		  </div>
        </div>
      </li>
      <!-- SLIDE 5 -->
      <li data-transition="fade">
        <img src="images/banner-4.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> Effective Communication</h1>	
		  </div>
        </div>
      </li>
      <!-- SLIDE 6 -->
      <li data-transition="fade">
        <img src="images/banner-7.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> Handling Complex <br/>Transactions</h1>	
		  </div>
        </div>
      </li>
	       <!-- SLIDE  7-->
      <li data-transition="fade">
        <img src="images/banner-8.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;">Excellent Infrastructure</h1>	
		  </div>
        </div>
      </li>
      <!-- SLIDE 8 -->
      <li data-transition="fade">
        <img src="images/banner-7.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" class="rev-slidebg">
        <div class="tp-caption tp-resizeme"               
          data-x="['left','left','left','left']" data-hoffset="['15','15','30','15']" 
          data-y="['240','200','140','140']" data-voffset="['0','0','0','0']"
          data-responsive_offset="on"
          data-visibility="['on','on','on','on']"
          data-transform_idle="o:1;"
          data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
          data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
          data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"              
          data-start="800">
		  <div style="border-left:5px solid #ed2a28;margin-top:50px;padding-left:10px;">
          <h2 style="color:#ed2a28;font-size:32px;">Our Strength</h2>
		  <h1 style="color:#fff;font-size:36px;"> Represent Fortune <br/>500 Companies</h1>	
		  </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<!--  Banner End  -->

<!--===== FEATURE =====-->
<section class="padding" style="padding-top:80px;">
  <div class="container" id="about">
    
    <div class="row">

      <div class="col-md-7 col-sm-7 col-xs-12">

        <div class="row">
          <div class="col-md-12">
            <h2 class="text-uppercase">About <span class="color_red"> Andhra Legal House &#38; Co</span></h2>
            <div class="line_1"></div>
            <div class="line_2"></div>
            <div class="line_3"></div>
          </div>
        </div>

        <div class="about-sev-tag">
          <p style="text-align:left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <b>Andhra Legal House &#38; Co.,</b> is a full-service Law Firm and one stop solution for all your legal needs. 
we strongly believe in Indian Constitution and Indian legal system and judiciary system to resolve the issues 
between people, organisations and corporates across India which is the prominent and ethical way of resolving 
issues and such resolution is documented legally and will be used to move ahead strongly in life. We strongly 
recommend protection of Human Rights, Women’s Rights, Child Rights, RTI and Nation First policy. 
We represent our clients in a number of complex and high value transactions in various sectors such as Civil, 
Criminal, Family, Properties, intellectual property rights, in the areas of Software, IT, Media, Broadcasting, 
Telecom, Sports, Infra, pharmaceuticals and healthcare, start-ups, e-Commerce, banking and finance, taxation, 
infrastructure and real estate, technology, media and telecommunication, corporate and commercial law, Arbitration, 
Family law, Trademark Registration, Copyrights and Immigration services.</p>
<ul>
              <li><i class="fa fa-square" aria-hidden="true"></i> PAN India Presence</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> 30+ Years Senior Advocates</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Partners with extensive experience</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Cost Effective & Personalized Services</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Quick Turnaround Time</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Effective Communication</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Handling Complex Transactions</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Excellent Infrastructure</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Wide Spectrum of Clients</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Represent Fortune 500 Companies</li>
              <li><i class="fa fa-square" aria-hidden="true"></i> Represent Big Corporates & Prominent Individuals at various Courts in India</li>
          </ul>

          <div class="founder-text">
              <p>Providing quality representation and services for our clients.</p>
              <h3 style="font-weight:600;">- Chitturi Srinivasa Rao, Founder.</h3><br/><br/>
          </div> 

        </div>

      </div>

      <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="about-sev-img">
         <img src="images/about.png" alt="image">
        </div>
      </div>

    </div>

  </div>
</section>
<!--=====#/ FEATURE =====--> 
<!--===== FACILITIES =====-->
<div class="facilities clearfix parallaxie" style="background-image: url(images/facilities.jpg);" id="">
  <div class="facilities-detail wrapper wow fadeIn padding">
        <div class="row">
          <div class="col-sm-1 col-md-2"></div>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <h2 class="text-uppercase"><span class="color_red">Aim</span></h2>	
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>		
          <div class="col-sm-1 col-md-2"></div>
        </div>
      <p style="text-align:left;" class="intro">To protect human rights by following indian constitution in the form of legal assitance and counselling to the maximum number of people with less turn around time and set them free to do their work and live with Dignity.</p><br/>
  
        <div class="row">
          <div class="col-sm-1 col-md-2"></div>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <h2 class="text-uppercase">  <span class="color_red">Vision</span></h2>	
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>		
          <div class="col-sm-1 col-md-2"></div>
        </div>
      <p style="text-align:left;" class="intro">To reach the maximum number of people in india with evolving digital technology and provide legal help to the seekers and help corporates to expertise more and set them free to build new India.
</p><br/>
  
        <div class="row">
          <div class="col-sm-1 col-md-2"></div>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <h2 class="text-uppercase"> <span class="color_red">Mission</span></h2>	
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>		
          <div class="col-sm-1 col-md-2"></div>
        </div>
<p style="text-align:left;" class="intro">No one should suffer because of illiteracy and get stuck in legal cases due to poverty and no company should suffer due to unnatural forces by reaching all of them by digital presence TEAM ALH &Co will stand for all seekers and counsel them and with legal process we set them free to work with pride and build the nation
</p><br/>	

        <div class="row">
          <div class="col-sm-1 col-md-2"></div>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <h2 class="text-uppercase"> <span class="color_red">MOTTO</span></h2>	
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>		
          <div class="col-sm-1 col-md-2"></div>
        </div>
      <p style="text-align:left;" class="intro">Nation First. Protect human rights and Indian Constitution by public awareness & legal service.</p><br/>
  
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-uppercase"> <span class="color_red">Core Values</span></h2>
        <div class="line_1"></div>
        <div class="line_2"></div>
        <div class="line_3"></div>
      </div>
    </div>
    <div class="facilities-content">
      <p style="text-align:left;" class="intro">The firm has always strived to create and implement innovative and effective methods of Providing quality representation and services for our clients.
       </p>
          <div class="our-mission-box-detail mb-20">
           <ul style="margin-top:0px;">
              <li> The Values of Honesty and Integrity.</li>
              <li> Dedication.</li>
              <li> Transparency in Communication.</li>
              <li> Diligence and Accountability for Our Services.</li>
          </ul>	   
	       </div>
	</div>
        <div class="row">
          <div class="col-sm-1 col-md-2"></div>
        <div class="col-md-12 col-sm-6 col-xs-12">
            <h2 class="text-uppercase">Why <span class="color_red">Andhra Legal House & Co.,</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
        </div>		
          <div class="col-sm-1 col-md-2"></div>
        </div>
                <div class="our-mission-box-detail mb-20">
                    <ul style="margin-top:0px;">
                      <li><h4 style="font-size:16px;color:#333;">We strongly believe in Professional ethics in this industry which is the fore most factor in terms of privacy.</h4></li>
                        <li><h4 style="font-size:16px;color:#333;">We have a Counselling team of experts who can guide the concerned to be clearer on what to do next to proceed.</li>
                        <li><h4 style="font-size:16px;color:#333;">Our team of legal advisory panel have hands on experience on how to resolve the issue by cross functional 
departments with proper alignment and fix the issue with a proven track record.</li>
                        <li><h4 style="font-size:16px;color:#333;">Our senior advocates experienced with 30+ years hands on expertise and experience in resolving the issues 
across India.</li>
                        <li><h4 style="font-size:16px;color:#333;">We have a Senior team of Retired Judges, APPs, Police, IncomeTax, Software, Media, CA, Corporate Consultants,
 with high value transactional experience.</h4></li>
                        <li><h4 style="font-size:16px;color:#333;">We always believe in combination of experience of our senior advocates and panel members as well as young 
team of advocates who have command on today’s technology for quick turnaround time.</li>
                        <li><h4 style="font-size:16px;color:#333;">We always believe in proper counselling will yield faster results and saves time of valuable courts.</li>
                        <li><h4 style="font-size:16px;color:#333;">We observe business trends and human edge in every transaction to protect each individual rights.</li>

                    </ul>
                </div>		    

	  </div>
  </div>

<!--=====#/ FACILITIES =====--> 
<!--===== GALLERY =====-->
<div class="gallery padding" style="border-top: 10px solid rgb(255, 255, 255);">
  <div class="container" id="practice">
    <div class="col-md-12 wow fadeIn text-center  bottom40">
      <h2 class="text-uppercase">Practice <span class="color_red">Areas</span></h2>
      <div class="text-center seprator">
        <div class="line_4"></div>
        <div class="line_5"></div>
        <div class="line_6"></div>
      </div>
    </div>
    <section id="grid" class="grid clearfix"> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;" src="images/image13.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Civil </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image14.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Criminal</h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image15.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Family </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image16.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Financial Properties </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
	  
	  
      <figure> <img style="height:183px;"  src="images/image1.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Transactions </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image2.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Private Sectors </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image3.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Personal Injury </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image4.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Public Health </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image5.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Child Welfare </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image6.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Representation </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image7.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Copyrights </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image8.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Contracts </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image9.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Criminal Code </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> 
      <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image10.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Formations </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image11.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Immigration </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a> <a href="client-registration.php" class="wow fadeInUp" data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
      <figure> <img style="height:183px;"  src="images/image12.jpg" />
        <svg viewBox="0 0 180 500" preserveAspectRatio="none">
          <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z "/>
        </svg>
        <figcaption>
          <h2>Insolvency </h2>
          <span href="client-registration.php">View</span> </figcaption>
      </figure>
      </a>	  
	</section>
  </div>
</div>
<!--=====#/ GALLERY =====--> 
<!--=====#/ TEAM =====--> 

<!----------<section id="team-sev" class="padding bg_light">
    <div class="container" id="members">

      <div class="row mb-20">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 text-center">
          <h2 class="text-uppercase">Panel Advisory <span class="color_red">Members </span></h2>
          <div class="line_1-1"></div>
          <div class="line_2-2"></div>
          <div class="line_3-3"></div>
        </div>
        <div class="col-sm-1 col-md-2"></div>
      </div>
        
      <div class="row mt-30">
          
          <div class="col-md-3 col-sm-3 col-xs-12 text-center">
              <div class="team-box">
                <img src="images/team-1.png" alt="img">
                    <h2 style="font-size:13px;">Chitturi Srinivasa Rao</h2>
                  <p>Senior Advocate</p>
				  <p>Visakhapatnam</p>				  
                  <div class="team-box-overlay">
                    <h2 style="font-size:13px;">Chitturi Srinivasa Rao</h2>
                      <p>The firm has always strived to create and implement innovative and effective methods of Providing quality representation and services for our clients. </p>
                  </div>
                  
              </div>
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12 text-center">
              <div class="team-box">
                <img src="images/team-2.png" alt="img">
                    <h2 style="font-size:13px;">Chitturi Srinivasa Rao</h2>
                  <p>Senior Advocate</p>
				  <p>Visakhapatnam</p>				  
                  <div class="team-box-overlay">
                    <h2 style="font-size:13px;">Chitturi Srinivasa Rao</h2>
                      <p>The firm has always strived to create and implement innovative and effective methods of Providing quality representation and services for our clients. </p>
                  </div>
                  
              </div>
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12 text-center">
              <div class="team-box">
                <img src="images/team-3.png" alt="img">
                    <h2 style="font-size:13px;">Chitturi Srinivasa Rao</h2>
                  <p>Senior Advocate</p>
				  <p>Visakhapatnam</p>
                  <div class="team-box-overlay">
                    <h2>Chitturi Srinivasa Rao</h2>
                      <p>The firm has always strived to create and implement innovative and effective methods of Providing quality representation and services for our clients. </p>
                  </div>
                  
              </div>
          </div>
          
          <div class="col-md-3 col-sm-3 col-xs-12 text-center">
              <div class="team-box">
                <img src="images/team-4.png" alt="img">
                    <h2 style="font-size:13px;">Chitturi Srinivasa Rao</h2>
                  <p>Senior Advocate</p> 
				  <p>Visakhapatnam</p>				  
                  <div class="team-box-overlay">
                    <h2>Chitturi Srinivasa Rao</h2>
                      <p>The firm has always strived to create and implement innovative and effective methods of Providing quality representation and services for our clients. </p>
                  </div>                  
              </div>
          </div>
      </div>           
    </div>
</section>---------->
<!--=====#/ TEAM =====--> 
<!--=====#/ enquiry =====--> 
<section id="estimate" class="padding parallaxie" style="background-image: url(images/estimate_bg.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 4.05333px;">
  <div class="container" id="enquiry">
    <div class="row">
      <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="estimate_form">
          <h2 class="text-uppercase">Need a<span class="color_red"> Legal Advice</span></h2>
          <div class="line_1"></div>
          <div class="line_2"></div>
          <div class="line_3"></div>
          <div class="property-query-area top40">
<script>
function validateformenq()
{
 var z=document.formenq.EDEMailID.value;
 var x=document.formenq.EDEMailID.value.indexOf("@")
 var y=document.formenq.EDEMailID.value.indexOf(".")

 if (document.formenq.EDCompanyName.value=="")
 {
 alert("Please Enter value for Company Name");
 document.formenq.EDCompanyName.focus();
 return false;
 }
 else if (document.formenq.EDContactPerson.value=="")
 {
 alert("Please Enter value for Contact Person");
 document.formenq.EDContactPerson.focus();
 return false;
 }
 else if (document.formenq.EDDesignation.value=="")
 {
 alert("Please Enter value for Designation");
 document.formenq.EDDesignation.focus();
 return false;
 }
 else if (document.formenq.EDContactNo.value=="")
 {
 alert("Please Enter value for Contact No");
 document.formenq.EDContactNo.focus();
 return false;
 }
 else if (document.formenq.EDEMailID.value=="")
 {
 alert("Please Enter value for E-Mail ID");
 document.formenq.EDEMailID.focus();
 return false;
 }
 else if (document.formenq.EDAddress.value=="")
 {
 alert("Please Enter value for Address");
 document.formenq.EDAddress.focus();
 return false;
 }
 else if (document.formenq.EDTypeofBusiness.value=="")
 {
 alert("Please Select value for Type of Business");
 document.formenq.EDTypeofBusiness.focus();
 return false;
 }
 else if (document.formenq.EDYourMessage.value=="")
 {
 alert("Please Enter value for Your Message");
 document.formenq.EDYourMessage.focus();
 return false;
 }
 else if (document.formenq.vercode.value=="")
 {
 alert("Please Enter value for Security Code");
 document.formenq.vercode.focus();
 return false;
 }
	if(z=="")
	{
		alert("Please enter your E-Mail address.")
		document.formenq.EDEMailID.focus();
		return false;
	}
	else if(x=="-1" )
	{
		alert("Not a Valid E-Mail.")
		document.formenq.EDEMailID.focus();
		return false;
	}
	else if(y=="-1" )
	{
		alert("Not a Valid E-Mail.")
		document.formenq.EDEMailID.focus();
		return false;
	}
 else
 {
 document.formenq.action="EnquiryDataProcess.php"
 document.formenq.submit()
 }
}
</script>		

 <form action="EnquiryDataProcess.php" method="post" name="formenq" onsubmit=" return validateformenq();" required>
 <div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Apply For Legal Advice *</label>
 <div class="form-group">
<select class="form-control" id="EDTypeofBusiness" name="EDTypeofBusiness" required>
<option value="" selected>select</option>
<option value="individual">Individual</option>
<option value="corporate">Corporate</option>
</select>
 </div>
 </div>
 </div>
<div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Company Name *</label>
<input name="EDCompanyName" id="EDCompanyName" size="30" class="keyword-input" placeholder="Company Name" type="text" required>
 </div>
 </div>
<div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Contact Person *</label>
<input name="EDContactPerson" id="EDContactPerson" size="30" class="keyword-input" placeholder="Contact Person" type="text" required>
 </div>
 </div>
<div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Designation *</label>
<input name="EDDesignation" id="EDDesignation" size="30" class="keyword-input" placeholder="Designation" type="text" required>
 </div>
 </div>	
 <div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Contact No *</label>
<input name="EDContactNo" id="EDContactNo" placeholder="Contact No" class="keyword-input" type="text" required>
 </div>
 </div>
 <div class="col-md-12 clearfix">
 <div class="single-query">
 <label>E-Mail ID *</label>
<input style="text-transform:lowercase;" name="EDEMailID" id="EDEMailID" placeholder="Email Address" class="keyword-input" type="text" required>
 </div>
 </div>
 <div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Address *</label>
<input name="EDAddress" id="EDAddress" placeholder="Address" class="keyword-input" type="text" required>
 </div>
 </div>
 <div class="col-md-12 clearfix">
 <div class="single-query">
 <label>Your message (Requirements) * </label>
<textarea name="EDYourMessage" id="EDYourMessage" placeholder="Write here something...." required></textarea>
 </div>
 </div>

<div class="row" style="padding-left:15px;">
 <div class="col-md-6 col-sm-6 col-xs-6 text-left">
 <div class="single-query">
 <label>Enter Code *</label>
<input name="vercode" class="StyleBox" id="vercode" size="5" maxlength="35" required>
 </div>
 </div>
 <div class="col-md-6 col-sm-6 col-xs-6 text-left">
 <div class="single-query">
 <br><img style="max-width:100%; width:65px;" src="shoutcaptchaResp.php">
 </div>
 </div>
</div>

<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 text-center">
 <div class="query-submit-button" id="OClickSubmit">
<input class="btn_fill" name="Submit" value="Submit" onclick="OClickSubmit();" type="submit">
 </div>
 </div>
<div class="col-md-6 col-sm-6 col-xs-6 text-center">
 <div class="query-submit-button" id="OClickSubmit">
<input class="btn_fill" name="Reset" value="Reset" type="reset">
 </div>
 </div>
</div>

</form>

          </div>
        </div><br/>
		<div class="row">		
        <div class="col-md-6 col-sm-12 col-xs-12">
           <a href="advocate-registration.php" class="btn_fill" style="transition: none 0s ease 0s; line-height: 21px; border-width: 0px; padding: 12px 40px; letter-spacing: 0px; font-weight: 400; font-size: 15px;width:100%;margin-top:30px"><i style="color:#fff;" class="fa fa-hand-o-right" aria-hidden="true"></i>    Advocate Registration Form</a>
        </div>        
		<div class="col-md-6 col-sm-12 col-xs-12">
           <a href="client-registration.php" class="btn_fill" style="transition: none 0s ease 0s; line-height: 21px; border-width: 0px; padding: 12px 40px; letter-spacing: 0px; font-weight: 400; font-size: 15px;width:100%;margin-top:30px;"><i style="color:#fff;" class="fa fa-hand-o-right" aria-hidden="true"></i>   Client Registration Form</a>
        </div>			
       </div>		
     </div>
    </div>
  </div>
</section>
<!--=====#/ enquiry =====--> 

<!-- PARTNER -->
<div id="our-partner" class="padding">
  <div class="container">
    <div class="row mb-20">
        <div class="col-sm-1 col-md-2"></div>
        <div class="col-xs-12 col-sm-10 col-md-8 text-center">
          <h2 class="text-uppercase"><span class="color_red">Clients</span></h2>
          <div class="line_1-1"></div>
          <div class="line_2-2"></div>
          <div class="line_3-3"></div>
        </div>
        <div class="col-sm-1 col-md-2"></div>
      </div>
    <div class="col-md-12">
      <div class="row">
        <div id="our-partner-slider" class="owl-carousel">
          <div class="item"><img src="images/apgovt.png" alt="Partners"></div>
          <div class="item"><img src="images/hdfc.png" alt="Partners"></div>
          <div class="item"><img src="images/citybank.png" alt="Partners"></div>
          <div class="item"><img src="images/ongc.png" alt="Partners"></div>
          <div class="item"><img src="images/SITICABLE.png" alt="Partners"></div>
          <div class="item"><img src="images/sbi.png" alt="Partners"></div>
          <div class="item"><img src="images/southindianbank.png" alt="Partners"></div>
          <div class="item"><img src="images/hpcl.png" alt="Partners"></div>
          <div class="item"><img src="images/apgovt.png" alt="Partners"></div>
          <div class="item"><img src="images/hdfc.png" alt="Partners"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- PARTNER -->
<!--=====#/ contact =====--> 
<section id="image-text" class="padding-bottom-top-120 parallaxie" style="background-image: url(images/bg-text.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 13.98px;">
  <div class="container" id="contact">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="image-text-heading top30 bottom30 kgr">
          <h1 style="color:#fff;">Contact Us</h1>
		  <p style="color:#fff;">The firm has always strived to create and implement innovative and effective methods of providing <br/> Quality representation and services for our clients. </p>
           <br/><h3 style="color:#fff;">Call us! We are available 9am to 9pm</h3>
		 <a style="color:#fff;" href="tel:09393833669" class=""><h1 style="color:#fff;"><i style="color:#fff;" class="fa fa-phone text-theme-color-2 mr-5"></i>    +91 9393 833 669</h1></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=====#/ contact =====--> 
<!-- CONTACT -->
<section id="contact" class="bg-color-red">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-telephone114"></i>
          <ul>
            <li> <h4>Phone Number</h4> </li>
            <li> <p><a style="color:#fff;" href="tel:09393833669">+91 9393 833 669</a></p> </li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class="icon-icons74"></i>
          <ul>
<li><h4>Andhra Legal House</h4></li><li><p>Visakhapatnam, Amaravathi, Hyderabad</p></li><li><p>Bangalore, Chennai, Kerala,</p></li><li><p>Pune, Mumbai.</p></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="get-tuch">
          <i class=" icon-icons142"></i>
          <ul>
            <li><h4>Email Address</h4></li>
            <li><a href="mailto:legaldesk@andhralegalhouse.org"> legaldesk@andhralegalhouse.org</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- CONTACT --> 
<footer id="footer" class="footer divider layer-overlay overlay-dark-8">  
  <div class="footer-bottom bg-black-333">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5">
          <p class="font-11 text-black-777 m-0 copy-right">Copyright: 2012-22. <a href="#."><span class="color_red">Andhra Legal House</span></a>. All Rights Reserved</p>
        </div>
        <div class="col-md-6 col-sm-7 text-right">          
		  <div class="widget no-border m-0">            
		    <ul class="list-inline sm-text-center mt-5 font-12">              
			   <li>
			      <p style="text-align:justify;" class="font-11 text-black-777 m-0 copy-right">Powered by 
				    <a href="http:hamsikhatech.com/">
			         <span class="color_red">Hamsikha Technologies</span>
				    </a>
				  </p>
				</li>            
			</ul>          
		  </div>        
		</div>
      </div>
    </div>
  </div>
</footer>
<!-- FOOTER --> 

<!------------
<script>
            $(window).scroll(function () {

                var scroll = $(window).scrollTop();
                if (scroll >= 100) {

                    $(".drop-main-box").addClass("after-scroll-mega");
                    $(".drop-main-box").removeClass("dropdown-ranjan-box");

                }
                else {

                    $(".drop-main-box").addClass("dropdown-ranjan-box");
                    $(".drop-main-box").removeClass("after-scroll-mega");
                }
            });
            $(document).ready(function () {

                $('#Modal').modal({ backdrop: 'static', keyboard: false });

            });
   </script>
   
-------------->
   
<!--===== REQUIRED JS =====--> 
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootsnav.js"></script>
<!--To View on scroll-->
<script src="js/jquery.appear.js"></script>
<!--Owl Slider-->
<script src="js/owl.carousel.min.js"></script>
<!--Parallax-->
<script src="js/parallaxie.js"></script>
<!--Fancybox-->
<script src="js/jquery.fancybox.min.js"></script> 
<!--Cube Gallery-->
<script src="js/cubeportfolio.min.js"></script> 
<!--Bootstrap Dropdown-->
<script src="js/bootstrap-select.js"></script>
<!--Wow animation-->
<script src="js/wow.min.js"></script>
<!--Rang Slider-->
<script src="js/range-Slider.min.js"></script> 
<!--Checkbox-->
<script src="js/selectbox-0.2.min.js"></script> 
<!--Checkbox-->
<script src="js/scrollreveal.min.js"></script> 
<!--Revolution Slider-->
<script src="js/andhralegalhouse/jquery.andhralegalhouse.tools.min.js"></script>
<script src="js/andhralegalhouse/jquery.andhralegalhouse.revolution.min.js"></script>   
<script src="js/andhralegalhouse/revolution.extension.layeranimation.min.js"></script> 
<script src="js/andhralegalhouse/revolution.extension.navigation.min.js"></script> 
<script src="js/andhralegalhouse/revolution.extension.parallax.min.js"></script> 
<script src="js/andhralegalhouse/revolution.extension.slideanims.min.js"></script> 
<script src="js/andhralegalhouse/revolution.extension.video.min.js"></script>
<!--Custom Js -->
<script src="js/functions.js"></script>
    <script src="js/smoothscroll.js"></script> 
<script src="js/script.js"></script>	
</body>
</html>