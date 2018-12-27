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
$formproc->AddRecipient('webmaster@scoresports.com, rebeka@scoresports.com'); //<<---Put your email address here


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
	
	<title>All Stars 2018</title>
	
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
	top: 0px;
}
#blkbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
#burbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
#gldbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#orgbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roybase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wnabase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}

#wrebase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wrobase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whtbase {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blksho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#gldsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}

#orgsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roysho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wnasho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wresho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wrosho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whtsho {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#blksoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#gldsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}

#orgsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roysoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wblsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wbusoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wglsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whusoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wnasoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wresoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wrosoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#wwhsoc {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


.navbar-custom + .module {
    padding: 0px 0;
}

.module, .module-small {
    padding: 0px 0;
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
		
					<li class="slidedown">
						<a href="#">PLATINUM COLLECTION</a>
						<ul>
						<li><a href="kit3.php">USA Men's Kit</a></li>
						<li><a href="kit5.php">USA Women's Kit</a></li>
						<li><a href="kit1.php">SPAIN 500</a></li>
						<li><a href="kit4.php">BRAZIL 447</a></li>
                     	<li><a href="kit2.php">ENGLAND 478</a></li>
							</ul>
					</li>
		
					<li class="slidedown">
						<a href="#">P1</a>
						<ul>
							<li><a href="des1.php">Set-In 1</a></li>
						<li><a href="des2.php">Set-In 2</a></li>
						</ul>
					</li>
                    
                    <li class="slidedown">
						<a href="#">P2</a>
						<ul>
							<li><a href="des3.php">Raglan 1</a></li>
                            <li><a href="des4.php">Raglan 2</a></li>
						</ul>
					</li>
		
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
			
				<div class="navbar-header" >
					<!-- YOU LOGO HERE -->
					<a class="navbar-brand" href="index.html">
						<!-- IMAGE OR SIMPLE TEXT -->
						<img src="assets/images/logo-dark.png" width="190" alt="">
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
                	<li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">PLATINUM COLLECTION
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="kit3.php">USA Men's Kit</a></li>
						<li><a href="kit5.php">USA Women's Kit</a></li>
						<li><a href="kit1.php">SPAIN 500</a></li>
						<li><a href="kit4.php">BRAZIL 447</a></li>
                     	<li><a href="kit2.php">ENGLAND 478</a></li>
                      </ul>
                    </div></li>
					<li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">P1
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des1.php">Set-In 1</a></li>
						<li><a href="des2.php">Set-In 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">P2
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des3.php">Raglan 1</a></li>
                        <li><a href="des4.php">Raglan 2</a></li>
                      </ul>
                    </div></li>
					
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
         
         <!-- /SINGLE PORTFOLIO -->
        <section class="module">

			<div class="container">
        <div class="row">
        	
        		<center style="padding:20px" >
        		<h1>USA MEN'S 525</h1>
        		<p>The 2018 All Star Collection features new platinum styles and custom designs.  Our premium-quality uniforms will offer great comfort and style for your team.  Explore our All Star line, complete the form and a SCORE Sales Rep will be in contact with you, to answer any questions you may have.  <br><a href="http://www.scoresports.com"><font color="#ed1b24" size="+1">SCORESPORTS.COM </font></a><font color="#ed1b24" size="+1">-</font> <a href="tel:8006267774"><font color="#ed1b24" size="+1"> 800.626.7774</font></a>
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
						<div align="center" style="margin:auto; height:600px; width:290px">
                            
                            <div id="blksoc"><img src="img/P1D1/SOCK/828-BLKWHT.png" width="290" height="400" /></div>
                            <div id="bursoc"><img src="img/P1D1/SOCK/828-BURWHT.png" width="290" height="400" /></div>
                            <div id="chrsoc"><img src="img/P1D1/SOCK/828-CHRBLK.png" width="290" height="400" /></div>   
                            <div id="colsoc"><img src="img/P1D1/SOCK/828-COLBLK.png" width="290" height="400" /></div>
                            <div id="gldsoc"><img src="img/P1D1/SOCK/828-GLDBLK.png" width="290" height="400" /></div>
                            <div id="hunsoc"><img src="img/P1D1/SOCK/828-HUNBLK.png" width="290" height="400" /></div>
                            <div id="navsoc"><img src="img/P1D1/SOCK/828-NAVBLK.png" width="290" height="400" /></div>
                            <div id="orgsoc"><img src="img/P1D1/SOCK/828-ORGBLK.png" width="290" height="400" /></div>
                            <div id="redsoc"><img src="img/P1D1/SOCK/828-REDBLK.png" width="290" height="400" /></div>
                            <div id="roysoc"><img src="img/P1D1/SOCK/828-ROYBLK.png" width="290" height="400" /></div>
                            <div id="wblsoc"><img src="img/P1D1/SOCK/828-WHTBLK.png" width="290" height="400" /></div>
                            <div id="wbusoc"><img src="img/P1D1/SOCK/828-WHTBUR.png" width="290" height="400" /></div>
                            <div id="wglsoc"><img src="img/P1D1/SOCK/828-WHTGLD.png" width="290" height="400" /></div>
                            <div id="whusoc"><img src="img/P1D1/SOCK/828-WHTHUN.png" width="290" height="400" /></div>
                            <div id="wnasoc"><img src="img/P1D1/SOCK/828-WHTNAV.png" width="290" height="400" /></div>
                            <div id="wresoc"><img src="img/P1D1/SOCK/828-WHTRED.png" width="290" height="400" /></div>
                            <div id="wrosoc"><img src="img/P1D1/SOCK/828-WHTROY.png" width="290" height="400" /></div>
                            <div id="wwhsoc"><img src="img/P1D1/SOCK/828-WHTWHT.png" width="290" height="400" /></div>

                            
                            <div id="blksho"><img src="img/525/SHORT/125-blk.png" width="290" height="600" /></div>
                            <div id="bursho"><img src="img/525/SHORT/125-bur.png" width="290" height="600" /></div>
                            <div id="colsho"><img src="img/525/SHORT/125-col.png" width="290" height="600" /></div>
                            <div id="hunsho"><img src="img/525/SHORT/125-hun.png" width="290" height="600" /></div>
                            <div id="navsho"><img src="img/525/SHORT/125-nav.png" width="290" height="600" /></div>
                            <div id="orgsho"><img src="img/525/SHORT/125-org.png" width="290" height="600" /></div>
                            <div id="redsho"><img src="img/525/SHORT/125-red.png" width="290" height="600" /></div>
                            <div id="roysho"><img src="img/525/SHORT/125-roy.png" width="290" height="600" /></div>
                            <div id="wnasho"><img src="img/525/SHORT/125-whtnav.png" width="290" height="400" /></div>
                            <div id="wresho"><img src="img/525/SHORT/125-whtred.png" width="290" height="400" /></div>
                            <div id="wrosho"><img src="img/525/SHORT/125-whtroy.png" width="290" height="400" /></div>
                            <div id="whtsho"><img src="img/525/SHORT/125-whtwht.png" width="290" height="600" /></div>
                            
                            <div id="blkbase"><img src="img/525/JERSEY/525-blk.png" width="290" height="600" /></div> 
                            <div id="burbase"><img src="img/525/JERSEY/525-bur.png" width="290" height="600" /></div> 
                            <div id="colbase"><img src="img/525/JERSEY/525-col.png" width="290" height="600" /></div> 
                            <div id="hunbase"><img src="img/525/JERSEY/525-hun.png" width="290" height="600" /></div>
                            <div id="navbase"><img src="img/525/JERSEY/525-nav.png" width="290" height="600" /></div>
                            <div id="orgbase"><img src="img/525/JERSEY/525-org.png" width="290" height="600" /></div>
                            <div id="redbase"><img src="img/525/JERSEY/525-red.png" width="290" height="600" /></div> 
                            <div id="roybase"><img src="img/525/JERSEY/525-roy.png" width="290" height="600" /></div> 
                            <div id="wnabase"><img src="img/525/JERSEY/525-whtnav.png" width="290" height="600" /></div> 
                            <div id="wrebase"><img src="img/525/JERSEY/525-whtred.png" width="290" height="600" /></div>
                            <div id="wrobase"><img src="img/525/JERSEY/525-whtroy.png" width="290" height="600" /></div>
                            <div id="whtbase"><img src="img/525/JERSEY/525-wht.png" width="290" height="600" /></div>
                            
                                
                            </div>
						
					</div>
                    <!-- Uniform Created End -->
                    
					<!-- Uniform Selection -->
					<div class="col-sm-6 col-md-4 m-b-sm-30">
                    
						<div align="center" style="height:600px">
                        <table border="0" cellspacing="0" cellpadding="3">
                            <tr>
                                <p class="copyright text-center m-b-0"><a href="#con2" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Description</a></p>
                            </tr>
                            <tr>
                                    			  <td colspan="6"><div align="center">Price starting at <font size="5px" color="ed1b24">$35.95</font></div></td>
   			    			</tr>
                                    			<tr>
                                    			  <td colspan="6"><div align="center">Jersey Color</div></td>
                                   			  </tr>
                                    			<tr>
                                    			  <td><img src="assets/images/Uniforms/swatches/blk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blkbase','','show','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-BLK/WHT'" /></td>
                                    			  <td><img src="assets/images/Uniforms/swatches/bur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnbur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/bur.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','show','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-BUR/WHT'" /></td>
                                    			  <td><img src="assets/images/Uniforms/swatches/col.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwncol.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','show','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-COL/WHT'" /></td>
                                    			  <td><img src="assets/images/Uniforms/swatches/hun.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','show','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-HUN/WHT'" /></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/nav.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/nav.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','show','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-NAV/WHT'" /></em></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="40" height="40" sonClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','show','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-ORG/WHT'" /></em></td>
                                   			  </tr>
                            <tr>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','show','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-RED/WHT'" /></em></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','show','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-ROY/WHT'" /></em></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTNAV.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTNAV.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTNAV.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','show','wrebase','','hide','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-WHT/NAV'" /></em></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTRED.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTRED.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTRED.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','show','wrobase','','hide','whtbase','','hide');document.getElementById('ballcolor').value = '525-WHT/RED'" /></em></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTROY.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTROY.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTROY.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','show','whtbase','','hide');document.getElementById('ballcolor').value = '525-WHT/ROY'" /></em></td>
                                    			  <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTWHT.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blkbase','','hide','burbase','','hide','colbase','','hide','gldbase','','hide','hunbase','','hide','navbase','','hide','orgbase','','hide','redbase','','hide','roybase','','hide','wnabase','','hide','wrebase','','hide','wrobase','','hide','whtbase','','show');document.getElementById('ballcolor').value = '525-WHT/WHT'" /></em></td>
                                   			  </tr>
                            <tr>
                            	<td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            
                            <tr>
                              	<td colspan="6"><div align="center">Short Color</div></td>
                            </tr>
                            <tr>
                            	<td><span title="BLK"><img src="assets/images/Uniforms/swatches/blk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','show','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-BLK'" /></span></td>
                                <td><span title="BUR"><img src="assets/images/Uniforms/swatches/bur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnbur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/bur.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','show','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-BUR'" /></span></td>
                                <td><span title="COL"><img src="assets/images/Uniforms/swatches/col.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwncol.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','show','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-COL'" /></span></td>
                                <td><img src="assets/images/Uniforms/swatches/hun.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','show','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-HUN'" /></td>
                                <td><img src="assets/images/Uniforms/swatches/nav.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/nav.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','show','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-NAV'" /></td>
                                <td><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','show','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-ORG'" /></td>
                         	</tr>
                            <tr>
                            	<td><span title="RED"><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','show','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-RED'" /></span></td>
                                <td></em><span title="ROY"><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','show','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-ROY'" /></span></td>
                                <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTNAV.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTNAV.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTNAV.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','show','wresho','','hide','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-WHT/NAV'" /></em></td>
                                <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTRED.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTRED.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTRED.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','show','wrosho','','hide','whtsho','','hide');document.getElementById('ink1').value = '125-WHT/RED'" /></em></td>
                                <td><em><img src="assets/images/Uniforms/swatches/socks/828-WHTROY.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTROY.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTROY.png'" alt="." width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','show','whtsho','','hide');document.getElementById('ink1').value = '125-WHT/ROY'" /></em></td>
                                <td><img src="assets/images/Uniforms/swatches/socks/828-WHTWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTWHT.png'" alt="s" width="40" height="40" onClick="MM_showHideLayers('blksho','','hide','bursho','','hide','colsho','','hide','orgsho','','hide','hunsho','','hide','navsho','','hide','redsho','','hide','roysho','','hide','wnasho','','hide','wresho','','hide','wrosho','','hide','whtsho','','show');document.getElementById('ink1').value = '125-WHT/WHT'" /></td>
                          	</tr>
                            <tr>
                              	<td>&nbsp;</td>
                              	<td>&nbsp;</td>
                              	<td>&nbsp;</td>
                              	<td>&nbsp;</td>
                              	<td>&nbsp;</td>
                              	<td>&nbsp;</td>
                            </tr>
                            
                            <tr>
                              	<td colspan="6"><div align="center">Sock Color</div></td>
                          	</tr>
                            <tr>
                                <td><em><span title="BLK/WHT"><img src="assets/images/Uniforms/swatches/socks/828-BLKWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-BLKWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-BLKWHT.png'" alt="s" width="40" height="40" onclick="document.getElementById('ink2').value = '828-BLK/WHT';MM_showHideLayers('blksoc','','show','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                                <td><em><span title="BUR/WHT"><img src="assets/images/Uniforms/swatches/socks/828-BURWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-BURWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-BURWHT.png'" alt="s" width="40" height="40" onclick="document.getElementById('ink2').value = '828-BUR/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','show','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                                <td><em><span title="CHR/BLK"><img src="assets/images/Uniforms/swatches/socks/828-CHRBLK.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-CHRBLK.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-CHRBLK.png'" alt="s" width="40" height="40" onclick="document.getElementById('ink2').value = '828-CHR/BLK';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','show','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                                <td><em><span title="COL/WHT"><img src="assets/images/Uniforms/swatches/socks/828-COLWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-COLWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-COLWHT.png'" alt="s" width="40" height="40" onclick="document.getElementById('ink2','roysoc','','hide').value = '828-COL/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','show','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                                <td><em><span title="GLD/WHT"><img src="assets/images/Uniforms/swatches/socks/828-GLDWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-GLDWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-GLDWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-GLD/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','show','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                                <td><em><span title="HUN/WHT"><img src="assets/images/Uniforms/swatches/socks/828-HUNWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-HUNWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-HUNWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-HUN/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','show','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                            </tr>
                            <tr>
                              	<td><em><span title="NAV/WHT"><img src="assets/images/Uniforms/swatches/socks/828-NAVWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-NAVWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-NAVWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-NAV/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','show','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="ORG/WHT"><img src="assets/images/Uniforms/swatches/socks/828-ORGWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-ORGWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-ORGWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-ORG/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','show','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="RED/WHT"><img src="assets/images/Uniforms/swatches/socks/828-REDWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-REDWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-REDWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-RED/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','show','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="ROY/WHT"><img src="assets/images/Uniforms/swatches/socks/828-ROYWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-ROYWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-ROYWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-ROY/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','show','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/BLK"><img src="assets/images/Uniforms/swatches/socks/828-WHTBLK.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTBLK.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTBLK.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/BLK';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','show','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/BUR"><img src="assets/images/Uniforms/swatches/socks/828-WHTBUR.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTBUR.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTBUR.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/BUR';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','show','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                          </tr>
                          <tr>
                          		<td><em><span title="WHT/GLD"><img src="assets/images/Uniforms/swatches/socks/828-WHTGLD.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTGLD.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTGLD.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/GLD';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','show','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/HUN"><img src="assets/images/Uniforms/swatches/socks/828-WHTHUN.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTHUN.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTHUN.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/HUN';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','show','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/NAV"><img src="assets/images/Uniforms/swatches/socks/828-WHTNAV.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTNAV.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTNAV.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/NAV';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','show','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/RED"><img src="assets/images/Uniforms/swatches/socks/828-WHTRED.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTRED.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTRED.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/RED';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','show','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/ROY"><img src="assets/images/Uniforms/swatches/socks/828-WHTROY.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTROY.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTROY.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/ROY';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','show','wwhsoc','','hide')" /></span></em></td>
                              	<td><em><span title="WHT/WHT"><img src="assets/images/Uniforms/swatches/socks/828-WHTWHT.png" onMouseOver="this.src='assets/images/Uniforms/swatches/socks/dwn_828-WHTWHT.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/socks/828-WHTWHT.png'" alt="s" width="40" height="40" onClick="document.getElementById('ink2').value = '828-WHT/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','show')" /></span></em></td>
						    </tr>
						    <tr>
						      	<td colspan="6"><p class="copyright text-center m-b-0"><a href="#con1" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Terms and Conditions</a><br>© 2018 <a href="#">SCORE</a>, <br />
					          American Soccer Company, Inc.</p></td>
						    </tr>
                	</table>
					  
                    </div>
          		</div>
                <!-- Uniform Selection End-->

				<!-- Uniform Form-->
				<div class="col-sm-6 col-md-4 m-b-sm-30">
                    <div style="margin:auto; width:320px; height:600px; overflow:scroll; overflow-x:hidden">
                            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div style="width:270px"><h2 align="center" style="margin-top:-10px"><input name="Design" id="men525" value="USA Men's 525" type="hidden" /></h2>
</div>
<div class='short_explanation'>
  <div align="center">* required fields</div>
</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Contact Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Organization*:</label><br/>
    <input type='text' name='Organization' id='org' value='<?php echo $formproc->SafeDisplay('org') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Phone*:</label>
    <br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Jersey Color*:</label>
    <br/>
    <input type='text' name='Priamary Color' id='ballcolor' value='<?php echo $formproc->SafeDisplay('ballcolor') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Short Color*:</label>
    <br/>
    <input type='text' name='Main Short Color' id='ink1' value='<?php echo $formproc->SafeDisplay('ink1') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Sock Color*:</label>
    <br/>
    <input type='text' name='Sock Color' id='ink2' value='<?php echo $formproc->SafeDisplay('ink2') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Quantity*:</label>
    <br/>
    <input type='text' name='Quantity' id='qnt' value='<?php echo $formproc->SafeDisplay('qnt') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >In-Hand Date*:</label>
    <br/>
    <input type='text' name='In-Hand Date' id='ndate' value='<?php echo $formproc->SafeDisplay('ndate') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Comment Box:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="30" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
   
</div>
<div class='container' style="width:240px"> <label for='message' ><font color="#6D6E71">*Please have decoration information ready to provide to your sales representative. </font></label></div>
<div class='container' style="display:none;">
    <label for='photo' >Upload Logo:</label><br/>
    <input type="file" name='photo' id='photo' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>
</div>


<div class='container'>
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
							<a href="http://www.scoresports.com/ultima-no-1800.html" class="inactiveLink">
								<img src="assets/images/portfolio/img-6c.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">Ultima No.1800</h3>
									<div class="work-descr">
										SOCCER EQUIPMENT
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://soccer.scoresports.com/player-bag-no-8650.html" class="inactiveLink">
								<img src="assets/images/portfolio/img-6.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">Player Bag No.8650</h3>
									<div class="work-descr">
										SOCCER EQUIPMENT 
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://www.scoresports.com/hoodie-number-4040.html" class="inactiveLink">
								<img src="assets/images/portfolio/img-6a.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">HOODIE 4040</h3>
									<div class="work-descr">
										OUTERWEAR
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->
                        
                        <!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://soccer.scoresports.com/soccer/accessories/coaches/captain-arm-band-no-699.html" class="inactiveLink">
								<img src="assets/images/portfolio/img-6b.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">CAPTAIN ARM BAND NO.699</h3>
									<div class="work-descr">
										SOCCER ACCESSORIES
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
        
        <div id="con2" class="modal fade" tabindex="-1">
            <div class="modal-dialog" style="background-color:#FFF">
                <div class="modal-header">
                    <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                <h3>USA Men's 525</h3>
                </div>
                <div class="modal-body">
                        <ul>
                          <li>USA Men's Kit Includes: 1 Jersey, 1 Houston Men's No.125A Short, 1 Elite No.828 Socks, 1 2-Color 3.5" Standard Logo & 2-Color 8" Standard Back Number</li>
                            
                          <li>E°K Fit 120™ body, Clean V-neck collar, Sublimated gradient chevron design, Breathable E°K Fit Mesh™ side panels, Tapered athletic fit</li>
                          
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
                Stock Uniforms
            	<ul>
                	<li>Stock Uniform Packages Include: jersey, selected short, Elite 828 sock, 3.5" standard 2-color logo, 8" standard back number</li>
                	<li>Additional fees may apply for logos.</li>
                    <li>2 weeks minimum production time from day order is approved and processed.</li>
                    <li>No minimum quantity required for Stock Uniforms.</li>
                    
                </ul>
                Custom Uniform Kits
                        <ul>
                            <li>150 uniform minimum order. Minimum orders must be at least 150 per item & color.</li>
                            <li>4 weeks minimum production time from the day art is approved and order is processed.</li>
                            <li>Sales representative will review the custom uniform timeline.</li>
                        </ul>
                        Custom Uniform Order Tips
                        <ul>
                            <li>Select your color combinations ahead of time.</li>
                            <li>Provide a JPG format of your logo.</li>
                            <li>Allow enough time for art comps, approval & production time.</li>
                        </ul>
                        Sizing Information
                        <ul>
                          <li>Numerical Sizing Comparison</li>
                            <ul>
                                <li>SCORE YXXS Similar to a 3-4</li>
                                <li>SCORE YXS Similar to a 4-5</li>
                                <li>SCORE YS Similar to a 5-6</li>
                                <li>SCORE YM Similar to a 7-8</li>
                                <li>SCORE YL Similar to a 10-12</li>
                                <li>SCORE AS Similar to a 14-16</li>
                            </ul>
                            <li>This comparison gives an indication of sizes only and are by no means exact as they vary from manufacturer to manufacturer - sometimes by a full inch up and down.</li> 
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