<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('jhernandez@scoresports.com, rebeka@scoresports.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('HG9hPBpn9Bn26yg');

$formproc->AddFileUploadField('photo','jpg,jpeg,gif,png,bmp',2024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<title>Custom Soccer Ball 2018</title>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/favicon.png">
	<link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">
	
	<!-- Bootstrap core CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Plugins -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/ionicons.min.css" rel="stylesheet">
	<link href="assets/css/simpletextrotator.css" rel="stylesheet">
	<link href="assets/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/superslides.css" rel="stylesheet">
	<link href="assets/css/vertical.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="contact.css" type="text/css" rel="stylesheet">
      

	<!-- Template core CSS -->
	<link href="assets/css/style.css" rel="stylesheet">
    
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>
    <script type="text/javascript">
var iWebkit;if(!iWebkit){iWebkit=window.onload=function(){function fullscreen(){var a=document.getElementsByTagName("a");for(var i=0;i<a.length;i++){if(a[i].className.match("noeffect")){}else{a[i].onclick=function(){window.location=this.getAttribute("href");return false}}}}function hideURLbar(){window.scrollTo(0,0.9)}iWebkit.init=function(){fullscreen();hideURLbar()};iWebkit.init()}}
function MM_showHideLayers() { //v9.0
  var i,p,v,obj,args=MM_showHideLayers.arguments;
  for (i=0; i<(args.length-2); i+=3) 
  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
    obj.visibility=v; }
}
</script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68804515-1', 'auto');
  ga('send', 'pageview');

</script>
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css">
.inactiveLink {
   pointer-events: none;
   cursor: default;
}
#base{
	visibility: hidden;
}
#apDiv1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	left: 518px;
	top: 50px;
}
#blkbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#blkbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#blkbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#colbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#colbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#colbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#gldbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#gldbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#gldbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#hunbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#hunbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#hunbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#kelbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#kelbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#kelbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#lembase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#navbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#navbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#navbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: visible;
}

#orgbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#orgbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: visible;
}


#orgbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#purbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#purbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#purbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#redbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#redbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#redbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#roybase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#roybase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#roybase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#silbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#silbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#silbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#turbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#turbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#turbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#whtbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: visible;
}


#whtbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#whtbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

#yelbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#yelbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}


#yelbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 50px;
	visibility: hidden;
}

.navbar-custom + .module {
    padding: 0px 0;
}

.module, .module-small {
    padding: 0px 0;
}

body {
	background-image: url();
}
</style>
</head>
<body style="margin-top:30px">

	<!-- PRELOADER -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- /PRELOADER -->

	<!-- OVERLAY MENU -->
	<div id="overlay-menu" class="overlay-menu">

		<a href="#" id="overlay-menu-hide" class="navigation-hide"><i class="ion-close-round"></i></a>
		
		<div class="overlay-menu-inner">
			<nav class="overlay-menu-nav">
		
				<ul id="nav">
		
					<li><a href="index.html">Home</a></li>			
					<li><a href="des1.php">CUSTOM DESIGN 1</a></li>
					<li><a href="des2.php">CUSTOM DESIGN 2</a></li>
					<li><a href="des3.php">CUSTOM DESIGN 3</a></li>
					<li><a href="stamp.html" target="_blank">STAMP BALL</a></li>

				</ul>
		
			</nav>
		</div>
		
		<div class="overlay-navigation-footer">
		
			<div class="container">
		
				<div class="row">
		
					<div class="col-sm-12 text-center">
						<p class="copyright font-alt m-b-0">© 2018 SCORE, All Rights Reserved.</p>
					</div>
		
				</div>
		
			</div>
		
		</div>

	</div>
	<!-- /OVERLAY MENU -->

	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- NAVIGATION -->
		<nav class="navbar navbar-custom navbar-transparent navbar-light navbar-fixed-top">

			<div class="container">
			
				<div class="navbar-header">
					<!-- YOU LOGO HERE -->
					<a class="navbar-brand" href="index.html">
						<!-- IMAGE OR SIMPLE TEXT -->
						CUSTOM SOCCER BALL 2018
					</a>
				</div>
			
				<!-- ICONS NAVBAR -->
				<ul id="icons-navbar" class="nav navbar-nav navbar-right">
					<li>
						<a href="#" id="toggle-menu" class="show-overlay" title="Menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
					</li>
				</ul>
				<!-- /ICONS NAVBAR -->
			
				<ul class="extra-navbar nav navbar-nav navbar-right">
					<li><a href="des1.php" title="">CUSTOM DESIGN 1</a></li>
                    <li><a href="des2.php" title="">CUSTOM DESIGN 2</a></li>
                    <li><a href="des3.php" title="">CUSTOM DESIGN 3</a></li>
                    <li><a href="stamp.html" target="_blank">STAMP BALL</a></li>
				</ul>
			
			</div>

		</nav>
		<!-- /NAVIGATION -->

		<!-- HERO
		<section class="module module-parallax bg-light-30" data-background="assets/images/kits/kit1/gld/gldkit3bg.jpg">

			<!-- HERO TEXT
			<div class="container">

				<div class="row">
					<div class="col-sm-12 text-center">
						<h1 class="mh-line-size-3 font-alt m-b-20">Single 1</h1>
						<h5 class="mh-line-size-4 font-alt">Simple single portfolio page with images</h5>
					</div>
				</div>

			</div>
			<!-- /HERO TEXT

		</section>
		 /HERO -->
		 <section class="module">

			<div class="container">
        		<div class="row">
        	
	        		<center style="padding:20px" >
	        		<h1>Custom Design 1</h1>
	        		<p> <br>
	        		  <a href="http://www.scoresports.com"><br><a href="http://www.scoresports.com"><font color="#ed1b24" size="+1">SCORESPORTS.COM </font></a><font color="#ed1b24" size="+1">-</font> <a href="tel:8006267774"><font color="#ed1b24" size="+1"> 800.626.7774</font></a>
	        		</p></center>
        	
        		</div>
			</div>
        </section>
		<!-- SINGLE PORTFOLIO -->
		<section class="module">

			<div class="container">

				<!-- PORTFOLIO CONTENT -->
				<div class="row">

					<div class="col-sm-12">

						<ul></ul>
                        <!-- IMAGE WITH CAPTION
						<div class="image-caption">
							<div class="caption-text text-light">
								<h5 class="font-alt">Italy 550, Naples 118A, Elite 828 </h5>
								<p class="font-serif">Gold Edition</p>
							</div>
							<img src="assets/images/kits/kit1/gld/gldkit3bg.jpg" alt="">
						</div>
						<!-- /IMAGE WITH CAPTION -->

					</div>

				</div>
				<!-- /PORTFOLIO CONTENT -->

				<!-- PROJECT DETAILS -->
				<div class="row m-t-0">
					<!-- Uniform Created -->
                    
					<div class="col-sm-6 col-md-4 m-b-sm-30">
                    <div align="center"><span style="margin-top:-10px"><h2 align="center" style="margin-top:-10px"><font color="#FFFFFF">Custom Design 1</font></h2></span></div>
                                                           
						<div align="center" style="margin:auto; height:290px; width:290px">
                            <div id="blkbase1"><img src="assets/images/Balls/DESIGN1/DES1-BALL-COL.png" width="290" height="290" /></div>
                            <div id="colbase1"><img src="assets/images/Balls/DESIGN1/DES1-BALL-COL.png" width="290" height="290" /></div>
                            <div id="lembase1"><img src="assets/images/Balls/DESIGN1/DES1-BALL-LEM.png" width="290" height="290" /></div>
                            <div id="silbase1"><img src="assets/images/Balls/DESIGN1/DES1-BALL-SIL.png" width="290" height="290" /></div>
                            <div id="orgbase1"><img src="assets/images/Balls/DESIGN1/DES1-BALL-TNG.png" width="290" height="290" /></div>
                            <div id="whtbase1"><img src="assets/images/Balls/DESIGN1/DES1-BALL-WHT.png" width="290" height="290" /></div>
                            
                            <div id="blkbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-BLK.png" width="290" height="290" /></div>
                            <div id="colbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-COL.png" width="290" height="290" /></div>
                            <div id="gldbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-GLD.png" width="290" height="290" /></div>  
                            <div id="hunbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-HUN.png" width="290" height="290" /></div>
                            <div id="kelbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-KEL.png" width="290" height="290" /></div>
                            <div id="navbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-NAV.png" width="290" height="290" /></div>
                            <div id="orgbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-ORG.png" width="290" height="290" /></div>
                            <div id="purbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-PUR.png" width="290" height="290" /></div>
                            <div id="redbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-RED.png" width="290" height="290" /></div>
                            <div id="roybase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-ROY.png" width="290" height="290" /></div>
                            <div id="silbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-SIL.png" width="290" height="290" /></div>
                            <div id="turbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-TUR.png" width="290" height="290" /></div>
                            <div id="whtbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-WHT.png" width="290" height="290" /></div>
                            <div id="yelbase2"><img src="assets/images/Balls/DESIGN1/DES1-PRIMARY-YEL.png" width="290" height="290" /></div>
                            
                            <div id="blkbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-BLK.png" width="290" height="290" /></div>
                            <div id="colbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-COL.png" width="290" height="290" /></div>
                            <div id="gldbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-GLD.png" width="290" height="290" /></div>  
                            <div id="hunbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-HUN.png" width="290" height="290" /></div>
                            <div id="kelbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-KEL.png" width="290" height="290" /></div>
                            <div id="navbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-NAV.png" width="290" height="290" /></div>
                            <div id="orgbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-ORG.png" width="290" height="290" /></div>
                            <div id="purbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-PUR.png" width="290" height="290" /></div>
                            <div id="redbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-RED.png" width="290" height="290" /></div>
                            <div id="roybase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-ROY.png" width="290" height="290" /></div>
                            <div id="silbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-SIL.png" width="290" height="290" /></div>
                            <div id="turbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-TUR.png" width="290" height="290" /></div>
                            <div id="whtbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-WHT.png" width="290" height="290" /></div>
                            <div id="yelbase3"><img src="assets/images/Balls/DESIGN1/DES1-SECONDARY-YEL.png" width="290" height="290" /></div>
                            
                                </div>
                                <div align="center"><br>Price starting at <font size="5px">$10.95</font>
                                </div>
                                <div align="center"><p class="copyright text-center m-b-0"><a href="#con2" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Description</a><br></p>
                                </div>
						
					</div>
                    <!-- Uniform Created End -->

					<div class="col-sm-6 col-md-4 m-b-sm-30">
                    
						<div align="center">
                        <table border="0" cellspacing="0">
                        <tr>
                          <td colspan="13">&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="13"></td>
                        </tr>
      <tr>
        <td colspan="13"><center>
          <strong>Ball Color</strong>
          </center>          <center>
            </center></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><img src="assets/images/Uniforms/swatches/col.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwncol.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase1','','show','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'COL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/lem.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnlem.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/lem.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','show','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'LEM'" /></td>
        <td><img src="assets/images/Uniforms/swatches/sil.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','show','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'SIL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="20" height="8" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','show','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'TNG'" /></td>
        <td><img src="assets/images/Uniforms/swatches/wht.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','lembase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','show');document.getElementById('ballcolor1').value = 'WHT'" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td width="20">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="13">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="13"><div align="center"><strong>Primary Color</strong></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><img src="assets/images/Uniforms/swatches/blk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="20" height="74" onClick="MM_showHideLayers('blkbase2','','show','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'BLK'" /></td>
        <td><img src="assets/images/Uniforms/swatches/col.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwncol.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="168"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','show','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'COL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/gld.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwngld.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','show','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'GLD'" /></td>
        <td width="20"><img src="assets/images/Uniforms/swatches/hun.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="20" height="8"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','show','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'HUN'" /></td>
        <td><img src="assets/images/Uniforms/swatches/kel.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnkel.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/kel.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','show','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'KEL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/lim.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnlim.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/lim.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','show','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide','yelbase2','','hide');document.getElementById('basecolor2').value = 'LIM'" /></td>
        <td><img src="assets/images/Uniforms/swatches/nav.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/nav.png'" alt="s" width="20" height="151"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','show','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'NAV'" /></td>
        <td width="20">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="20" height="8"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','show','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'ORG'" /></td>
        <td><img src="assets/images/Uniforms/swatches/pur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pur.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','show','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'PUR'" /></td>
        <td><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','show','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'RED'" /></td>
        <td><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','show','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'ROY'" /></td>
        <td width="20"><img src="assets/images/Uniforms/swatches/sil.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="8"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','show','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'SIL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/tur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwntur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/tur.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','show','whtbase2','','hide');document.getElementById('ballcolor2').value = 'TUR'" /></td>
        <td><img src="assets/images/Uniforms/swatches/wht.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','show');document.getElementById('ballcolor2').value = 'WHT'" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="13">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="13"><div align="center"><strong>Secondary Color</strong></div></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><img src="assets/images/Uniforms/swatches/blk.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onmouseout="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase3','','show','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'BLK'" /></td>
        <td><img src="assets/images/Uniforms/swatches/col.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwncol.png'" onmouseout="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','show','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'COL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/gld.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwngld.png'" onmouseout="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','show','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'GLD'" /></td>
        <td><img src="assets/images/Uniforms/swatches/hun.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onmouseout="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','show','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'HUN'" /></td>
        <td><img src="assets/images/Uniforms/swatches/kel.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnkel.png'" onmouseout="this.src='assets/images/Uniforms/swatches/kel.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','show','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'KEL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/nav.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onmouseout="this.src='assets/images/Uniforms/swatches/nav.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','show','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'NAV'" /></td>
        <td><img src="assets/images/Uniforms/swatches/org.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onmouseout="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="20" height="8"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','show','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'ORG'" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><img src="assets/images/Uniforms/swatches/pur.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnpur.png'" onmouseout="this.src='assets/images/Uniforms/swatches/pur.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','show','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'PUR'" /></td>
        <td><img src="assets/images/Uniforms/swatches/red.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnred.png'" onmouseout="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','show','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'RED'" /></td>
        <td><img src="assets/images/Uniforms/swatches/roy.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onmouseout="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','show','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'ROY'" /></td>
        <td><img src="assets/images/Uniforms/swatches/sil.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onmouseout="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','show','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'SIL'" /></td>
        <td><img src="assets/images/Uniforms/swatches/tur.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwntur.png'" onmouseout="this.src='assets/images/Uniforms/swatches/tur.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','show','whtbase3','','hide');document.getElementById('ballcolor3').value = 'TUR'" /></td>
        <td><img src="assets/images/Uniforms/swatches/wht.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onmouseout="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','show');document.getElementById('ballcolor3').value = 'WHT'" /></td>
        <td><img src="assets/images/Uniforms/swatches/gld.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwngld.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','show','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'GLD'" /></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="13"><p class="copyright text-center m-b-0"><a href="#con1" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Terms and Conditions</a><br>© 2018 <a href="#">SCORE</a>, <br />
          American Soccer Company, Inc.</p></td>
      </tr>
                        </table>					  
                    </div>
                    </div>
                            <!-- Uniform Selection End-->

							<!-- Uniform Form-->
							<div class="col-sm-6 col-md-4 m-b-sm-30">
                    <div style="margin:auto; width:320px; height:475px; overflow:scroll; overflow-x:hidden background-color: white;">
                            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div style="width:270px"><input name="Design" id="design1" value="Custom Design 1" type="hidden" />
  SCORE's Custom Soccer Ball 2018 features high-quality styles and custom designs that will have your players standing out on the field.  Complete the form below and a SCORE Expert will contact you.
</div>
<div class='short_explanation'>
  <div align="center">* required fields</div>
</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div style="width:270px" class='container'>
    <label for='name' >Contact Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='email' >Organization*:</label><br/>
    <input type='text' name='Organization' id='org' value='<?php echo $formproc->SafeDisplay('org') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='email' >Phone*:</label>
    <br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='email' >Ball Color*:</label>
    <br/>
    <input type='text' name='Ball Color' id='ballcolor1' value='<?php echo $formproc->SafeDisplay('ballcolor1') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='email' >Primary Ball Color*:</label>
    <br/>
    <input type='text' name='Secondary Color' id='ballcolor2' value='<?php echo $formproc->SafeDisplay('ballcolor2') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div style="width:270px" class='container'>
    <label for='email' >Secondary Ball Color*:</label>
    <br/>
    <input type='text' name='Secondary Ball Color' id='ballcolor3' value='<?php echo $formproc->SafeDisplay('ballcolor3') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div style="width:270px" class='container'>
    <label for='email' >Quantity*:</label>
    <br/>
    <input type='text' name='Quantity' id='qnt' value='<?php echo $formproc->SafeDisplay('qnt') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='email' >In-Hand Date*:</label>
    <br/>
    <input type='text' name='In-Hand Date' id='ndate' value='<?php echo $formproc->SafeDisplay('ndate') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:270px" class='container'>
    <label for='message' >Comment Box:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="30" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>


<div style="width:270px" class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
</div>

</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("photo","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");
// ]]>
</script>
							
				<!-- /PROJECT DETAILS -->

			</div>

		</section>
		<!-- /SINGLE PORTFOLIO -->
        
        <div class="row">
        	
        		<p><center style="padding:20px" >All images and artwork are the exclusive property of SCORE, American Soccer Company, Inc. (except for customer trademarks) and are protected under U.S. And international copyright treaties. Artwork and image may not be copied, reproduced, redistributed, manipulated, projected, used or altered in any way without the prior express, written permission of SCORE, American Soccer Company, Inc.</center></p>
        	
        </div>

		<hr class="divider"><!-- DIVIDER -->

		<!-- RELATED PRODUCTS -->
		<section class="module">

			<div class="container">

				<!-- MODULE TITLE -->
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<h2 class="module-title font-alt">Related Products</h2>
					</div>
				</div>
				<!-- /MODULE TITLE -->

				<!-- WORKS GRID -->
				<div class="row">

					<div id="works-grid" class="works-grid works-hover-w">

						<!-- DO NOT DELETE THIS DIV -->
						<div class="grid-sizer"></div>

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/power-pump-no-791.html" >
								<img src="assets/images/Balls/791.png" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">POWER PUMP No.791</h3>
									<div class="work-descr">
										
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/dial-gauge-no-794.html" >
								<img src="assets/images/Balls/794.png" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">DIAL GAUGE No.794</h3>
									<div class="work-descr">
										
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/needles-no-795.html" >
								<img src="assets/images/Balls/795.png" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">Needles No.795</h3>
									<div class="work-descr">
										
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->
                        
                        <!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/ball-bag-no-962.html" >
								<img src="assets/images/Balls/962.png" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">Ball Bag No.962</h3>
									<div class="work-descr">
										
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						

					</div>

				</div>
				<!-- /WORKS GRID -->

			</div>

		</section>
		<!-- /RELATED PROJECT -->

		<!-- FOOTER -->
		<footer class="module bg-light">

			<div class="container">
			
				<div class="row">
			
					<div class="col-sm-12">
			
						<ul class="social-text-links font-alt text-center m-b-20">
							<li><a href="https://www.facebook.com/Scoresports?_rdr=p">Facebook</a></li>
							<li><a href="https://twitter.com/scoresports">Twitter</a></li>
							<li><a href="https://instagram.com/scoresports/">Instagram</a></li>
						</ul>
			
					</div>
			
				</div>
			
				<div class="row">
			
					<div class="col-sm-12">
			
						<p class="copyright text-center m-b-0">© 2018 <a href="#">SCORE</a>, All Rights Reserved.</p>
			
					</div>
			
				</div>
			
			</div>

		</footer>
		<!-- /FOOTER -->
        
        <div id="con3" class="modal fade" tabindex="-1">
 	<div class="modal-dialog" style="background-color:#FFF">
 		<div class="modal-header">
 			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Pricing Information</h3>
        </div>
        <div class="modal-body">
            	<ul>
                  <li>Custom Uniform Design Kit: $10.95 youth/adult</li>
                  	<ul>
                    	<li>150 custom uniform kit minimum order.  Minimum orders must be at least 150 per item & color.</li>
                        <li>Uniform Kit Includes: 1 Custom Design Jersey, 1 Custom Sublimated Naples No.118CS, 1 Pair of Elite Socks No.828, 2-Color 8" Back Number, Sublimated Logo.</li>
                    </ul>
                  <li>Individual Pricing:</li>
                    <ul>    
                        <li>Custom Design Jersey - $25.00</li>
                        <li>Custom Design Short - $15.00</li>
                        <li>Elite Sock No.828 - $5.00</li>
                    </ul>
                    
                  <li>Individual Custom Design Items, can only be ordered individually after Minimum Quantity of 150 Custom Design Kits are ordered.</li>
                  <li>Individual Custom Design Items must be the same design as the packages ordered.</li>
                  <li>Logos will be sublimated.</li>
                  
                </ul>
        </div>
        <div class="modal-footer">
        	<button class="btn bton-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
 </div>
        
        <div id="con2" class="modal fade" tabindex="-1">
 	<div class="modal-dialog" style="background-color:#FFF">
 		<div class="modal-header">
 			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Custom Design 1</h3>
        </div>
        <div class="modal-body">
            	<ul>
                  <li>4 Easy Steps</li>
                  	<ul>
                        <li>Submit your design colors and information.</li>
                        <li>A Great SCORE Expert will contact you to provide exceptional service.</li>
                        <li>Please have decoration information ready to provide to your sales representative.</li>
                        <li>Place your order</li>
                    </ul>
                </ul>
        </div>
        <div class="modal-footer">
        	<button class="btn bton-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
 </div>
        
        <div id="con1" class="modal fade" tabindex="-1">
 	<div class="modal-dialog" style="background-color:#FFF">
 		<div class="modal-header">
 			<button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
        <h3>Terms & Conditions</h3>
        </div>
        <div class="modal-body">
        SCORE Custom Ball Terms & Conditions
            	<ul>
                	<li>200 Ball minimum required for custom orders.</li>
                	<li>Ball design available in maximum of 3 colors (1 ball base color & 2 design colors).</li>
                    <li>Delivery is approximately 120 days after order has been finalized and sample artwork has been approved.</li>
                    <li>In our experience, most orders arrive on time.  However, delivery dates may vary due to manufacturer performance or any other delays caused by sea transportation (shipping), US custom or any Act of God. </li>

                	<li>Rush delivery (air freight) is available for an additional charge per ball.</li>
                    <li>All orders are final.  Once an order has been placed, it cannot be changed or cancelled. </li>
                    <li>A 50% deposit is required at time of order placement and remaining balance will be due at time of shipment.</li>
     				<li>1-year warranty on manufacturer defects.</li>
                </ul>
        SCORE Quick Stamp Ball Terms & Conditions
            	<ul>
                	<li>50 ball minimum required for stamp ball orders.</li>
                	<li>Quick Stamp is only available on current SCORE stock balls.</li>
                    <li>Logo placement is available up to 4 locations.</li>
                    <li>Delivery is approximately 30 days after order has been finalized and sample artwork has been approved.</li>
                	<li>In our experience, most orders arrive on time.   However, delivery dates may vary due to manufacturer performance or any other delays caused by transportation (shipping), or any other Act of God.</li>
                    <li>All orders are final.  Once an order has been placed, it cannot be changed or cancelled.</li>
                    <li>A 50% deposit is required at time of order placement and remaining balance will be due at time of shipment.</li>
     				<li>Logo size and placement may be limited by the ball design. </li>
                </ul>
                
        </div>
        <div class="modal-footer">
        	<button class="btn bton-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
 </div>

	</div>
	<!-- /WRAPPER -->

	<!-- SCROLLTOP -->
	<div class="scroll-up">
		<a href="#totop"><i class="fa fa-angle-double-up"></i></a>
	</div>

	<!-- Javascript files -->
	<script src="assets/js/jquery-2.1.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.superslides.min.js"></script>
	<script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.simple-text-rotator.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/packery-mode.pkgd.min.js"></script>
	<script src="assets/js/appear.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/jqBootstrapValidation.js"></script>
	<script src="assets/js/jquery.fitvids.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>
    <script src="assets/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src="assets/js/custom.js"></script>

</body>
</html>