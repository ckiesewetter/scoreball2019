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
	
	<title>2018 Custom Uniform</title>
	
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
#blkbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blkbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blkbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#burbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#burbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#burbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chabase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chabase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chabase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	
#fucbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#fucbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#fucbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#gldbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#gldbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#gldbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#kelbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#kelbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#kelbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#lembase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#lembase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#lembase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	
#limbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#orgbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#pnkbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnkbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnkbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#purbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#purbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#purbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roybase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#roybase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#roybase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#silbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#tngbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tngbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tngbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	
#turbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#turbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#turbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whtbase1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtbase2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtbase3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}

#blksho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blksho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#blksho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#bursho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chasho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chasho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chasho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#chrsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#colsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#colsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	
#fucsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#fucsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#fucsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	

#gldsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#gldsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#gldsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#hunsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#hunsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#kelsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#kelsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#kelsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	
#lemsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#lemsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#lemsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	

#limsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#limsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#navsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#navsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#orgsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#orgsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#pnksho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnksho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pnksho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#pursho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pursho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#pursho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#redsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#redsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#roysho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#roysho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: visible;
}


#roysho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#silsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#silsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	
#tngsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tngsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tngsho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}
	

#tursho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tursho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#tursho3 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}

#whtsho1 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtsho2 {
	position:absolute;
	width:290px;
	height:115px;
	z-index:1;
	top: 0px;
	visibility: hidden;
}


#whtsho3 {
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
	visibility: hidden;
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
	visibility: visible;
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

.row {
    margin-left: -15px;
    margin-right: -15px;
    margin-top: 30px;
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
						<a href="#">Pattern 1</a>
						<ul>
							<li><a href="des1.php">Design 1</a></li>
							<li><a href="des2.php">Design 2</a></li>
						</ul>
					</li>
                    
                    <li class="slidedown">
						<a href="#">Pattern 2</a>
						<ul>
							<li><a href="des3.php">Design 1</a></li>
                            <li><a href="des4.php">Design 2</a></li>
						</ul>
					</li>
					<li class="slidedown">
						<a href="#">Pattern 3</a>
						<ul>
							<li><a href="des3.php">Design 1</a></li>
                            <li><a href="des4.php">Design 2</a></li>
						</ul>
					</li>
					<li class="slidedown">
						<a href="#">Pattern 4</a>
						<ul>
							<li><a href="des3.php">Design 1</a></li>
                            <li><a href="des4.php">Design 2</a></li>
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
						<h3>2018 Custom Uniform</h3>
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
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 1
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des1.php">Design 1</a></li>
						<li><a href="des2.php">Design 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 2
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des3.php">Design 1</a></li>
                        <li><a href="des4.php">Design 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 3
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des5.php">Design 1</a></li>
                        <li><a href="des6.php">Design 2</a></li>
                      </ul>
                    </div></li>
                    <li><div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pattern 4
                      <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="des7.php">Design 1</a></li>
                        <li><a href="des8.php">Design 2</a></li>
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
        		<h1>Pattern 4 Design 1</h1>
        		<p>The 2018 Custom Uniform Collection features new designs you can customize for your league. Our premium quality uniforms offer comfort and style on the field. Contact a SCORE Sales Rep at 800.626.7774 to get started building your custom uniform. <br>
				<a href="http://www.scoresports.com"><font color="#ed1b24"><br><a href="http://www.scoresports.com"><font color="#ed1b24" size="+1">SCOREsports.com </font></a><font color="#ed1b24" size="+1">-</font> <a href="tel:8006267774"><font color="#ed1b24" size="+1"> 800.626.7774</font></a>
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

                            
                            <div id="blksho1"><img src="img/P4D1/SHORT/design1-short-blk1.png" width="290" height="400" /></div>
                            <div id="bursho1"><img src="img/P4D1/SHORT/design1-short-bur1.png" width="290" height="400" /></div>
                            <div id="chasho1"><img src="img/P4D1/SHORT/design1-short-cha1.png" width="290" height="400" /></div>
                            <div id="chrsho1"><img src="img/P4D1/SHORT/design1-short-chr1.png" width="290" height="400" /></div>  
                            <div id="colsho1"><img src="img/P4D1/SHORT/design1-short-col1.png" width="290" height="400" /></div>
                            <div id="gldsho1"><img src="img/P4D1/SHORT/design1-short-gld1.png" width="290" height="400" /></div>  
                            <div id="hunsho1"><img src="img/P4D1/SHORT/design1-short-hun1.png" width="290" height="400" /></div>
                            <div id="kelsho1"><img src="img/P4D1/SHORT/design1-short-kel1.png" width="290" height="400" /></div>
                            <div id="limsho1"><img src="img/P4D1/SHORT/design1-short-lim1.png" width="290" height="400" /></div>
                            <div id="navsho1"><img src="img/P4D1/SHORT/design1-short-nav1.png" width="290" height="400" /></div>
                            <div id="orgsho1"><img src="img/P4D1/SHORT/design1-short-org1.png" width="290" height="400" /></div>
                            <div id="pnksho1"><img src="img/P4D1/SHORT/design1-short-pnk1.png" width="290" height="400" /></div>
                            <div id="pursho1"><img src="img/P4D1/SHORT/design1-short-pur1.png" width="290" height="400" /></div>
                            <div id="redsho1"><img src="img/P4D1/SHORT/design1-short-red1.png" width="290" height="400" /></div>
                            <div id="roysho1"><img src="img/P4D1/SHORT/design1-short-roy1.png" width="290" height="400" /></div>
                            <div id="silsho1"><img src="img/P4D1/SHORT/design1-short-sil1.png" width="290" height="400" /></div>
                            <div id="tursho1"><img src="img/P4D1/SHORT/design1-short-tur1.png" width="290" height="400" /></div>
                            <div id="whtsho1"><img src="img/P4D1/SHORT/design1-short-wht1.png" width="290" height="400" /></div>

                             
                            
                            
                            
                            <div id="blkbase1"><img src="img/P4D1/JERSEY/design1-blk1.png" width="290" height="400" /></div>
                            <div id="burbase1"><img src="img/P4D1/JERSEY/design1-bur1.png" width="290" height="400" /></div>
                            <div id="chabase1"><img src="img/P4D1/JERSEY/design1-cha1.png" width="290" height="400" /></div>
                            <div id="chrbase1"><img src="img/P4D1/JERSEY/design1-chr1.png" width="290" height="400" /></div>  
                            <div id="colbase1"><img src="img/P4D1/JERSEY/design1-col1.png" width="290" height="400" /></div>
                            <div id="gldbase1"><img src="img/P4D1/JERSEY/design1-gld1.png" width="290" height="400" /></div>  
                            <div id="hunbase1"><img src="img/P4D1/JERSEY/design1-hun1.png" width="290" height="400" /></div>
                            <div id="kelbase1"><img src="img/P4D1/JERSEY/design1-kel1.png" width="290" height="400" /></div>
                            <div id="navbase1"><img src="img/P4D1/JERSEY/design1-nav1.png" width="290" height="400" /></div>
                            <div id="orgbase1"><img src="img/P4D1/JERSEY/design1-org1.png" width="290" height="400" /></div>
                            <div id="pnkbase1"><img src="img/P4D1/JERSEY/design1-pnk1.png" width="290" height="400" /></div>
                            <div id="purbase1"><img src="img/P4D1/JERSEY/design1-pur1.png" width="290" height="400" /></div>
                            <div id="redbase1"><img src="img/P4D1/JERSEY/design1-red1.png" width="290" height="400" /></div>
                            <div id="roybase1"><img src="img/P4D1/JERSEY/design1-roy1.png" width="290" height="400" /></div>
                            <div id="silbase1"><img src="img/P4D1/JERSEY/design1-sil1.png" width="290" height="400" /></div>
                            <div id="turbase1"><img src="img/P4D1/JERSEY/design1-tur1.png" width="290" height="400" /></div>
                            <div id="whtbase1"><img src="img/P4D1/JERSEY/design1-wht1.png" width="290" height="400" /></div>
                            
                            <div id="blkbase2"><img src="img/P4D1/JERSEY/design1-blk2.png" width="290" height="400" /></div>
                            <div id="burbase2"><img src="img/P4D1/JERSEY/design1-bur2.png" width="290" height="400" /></div>
                            <div id="chabase2"><img src="img/P4D1/JERSEY/design1-cha2.png" width="290" height="400" /></div>
                            <div id="chrbase2"><img src="img/P4D1/JERSEY/design1-chr2.png" width="290" height="400" /></div>  
                            <div id="colbase2"><img src="img/P4D1/JERSEY/design1-col2.png" width="290" height="400" /></div>
                            <div id="fucbase2"><img src="img/P4D1/JERSEY/design1-fuc2.png" width="290" height="400" /></div>
                            <div id="gldbase2"><img src="img/P4D1/JERSEY/design1-gld2.png" width="290" height="400" /></div>  
                            <div id="hunbase2"><img src="img/P4D1/JERSEY/design1-hun2.png" width="290" height="400" /></div>
                            <div id="kelbase2"><img src="img/P4D1/JERSEY/design1-kel2.png" width="290" height="400" /></div>
                            <div id="lembase2"><img src="img/P4D1/JERSEY/design1-lem2.png" width="290" height="400" /></div>
                            <div id="limbase2"><img src="img/P4D1/JERSEY/design1-lim2.png" width="290" height="400" /></div>
                            <div id="navbase2"><img src="img/P4D1/JERSEY/design1-nav2.png" width="290" height="400" /></div>
                            <div id="orgbase2"><img src="img/P4D1/JERSEY/design1-org2.png" width="290" height="400" /></div>
                            <div id="pnkbase2"><img src="img/P4D1/JERSEY/design1-pnk2.png" width="290" height="400" /></div>
                            <div id="purbase2"><img src="img/P4D1/JERSEY/design1-pur2.png" width="290" height="400" /></div>
                            <div id="redbase2"><img src="img/P4D1/JERSEY/design1-red2.png" width="290" height="400" /></div>
                            <div id="roybase2"><img src="img/P4D1/JERSEY/design1-roy2.png" width="290" height="400" /></div>
                            <div id="silbase2"><img src="img/P4D1/JERSEY/design1-sil2.png" width="290" height="400" /></div>
                            <div id="tngbase2"><img src="img/P4D1/JERSEY/design1-tng2.png" width="290" height="400" /></div>
                            <div id="turbase2"><img src="img/P4D1/JERSEY/design1-tur2.png" width="290" height="400" /></div>
                            <div id="whtbase2"><img src="img/P4D1/JERSEY/design1-wht2.png" width="290" height="400" /></div>
                            
                            
                            <div id="blkbase3"><img src="img/P4D1/JERSEY/design1-blk3.png" width="290" height="400" /></div>
                            <div id="burbase3"><img src="img/P4D1/JERSEY/design1-bur3.png" width="290" height="400" /></div>
                            <div id="chabase3"><img src="img/P4D1/JERSEY/design1-cha3.png" width="290" height="400" /></div>
                            <div id="chrbase3"><img src="img/P4D1/JERSEY/design1-chr3.png" width="290" height="400" /></div>  
                            <div id="colbase3"><img src="img/P4D1/JERSEY/design1-col3.png" width="290" height="400" /></div>
                            <div id="fucbase3"><img src="img/P4D1/JERSEY/design1-fuc3.png" width="290" height="400" /></div>  
                            <div id="gldbase3"><img src="img/P4D1/JERSEY/design1-gld3.png" width="290" height="400" /></div>  
                            <div id="hunbase3"><img src="img/P4D1/JERSEY/design1-hun3.png" width="290" height="400" /></div>
                            <div id="kelbase3"><img src="img/P4D1/JERSEY/design1-kel3.png" width="290" height="400" /></div>
                            <div id="lembase3"><img src="img/P4D1/JERSEY/design1-lem3.png" width="290" height="400" /></div>
                            <div id="limbase3"><img src="img/P4D1/JERSEY/design1-lim3.png" width="290" height="400" /></div>
                            <div id="navbase3"><img src="img/P4D1/JERSEY/design1-nav3.png" width="290" height="400" /></div>
                            <div id="orgbase3"><img src="img/P4D1/JERSEY/design1-org3.png" width="290" height="400" /></div>
                            <div id="pnkbase3"><img src="img/P4D1/JERSEY/design1-pnk3.png" width="290" height="400" /></div>
                            <div id="purbase3"><img src="img/P4D1/JERSEY/design1-pur3.png" width="290" height="400" /></div>
                            <div id="redbase3"><img src="img/P4D1/JERSEY/design1-red3.png" width="290" height="400" /></div>
                            <div id="roybase3"><img src="img/P4D1/JERSEY/design1-roy3.png" width="290" height="400" /></div>
                            <div id="silbase3"><img src="img/P4D1/JERSEY/design1-sil3.png" width="290" height="400" /></div>
                            <div id="tngbase3"><img src="img/P4D1/JERSEY/design1-tng3.png" width="290" height="400" /></div>
                            <div id="turbase3"><img src="img/P4D1/JERSEY/design1-tur3.png" width="290" height="400" /></div>
                            <div id="whtbase3"><img src="img/P4D1/JERSEY/design1-wht3.png" width="290" height="600" /></div>
                            
                                </div>
						
					</div>
                    <!-- Uniform Created End -->

					<div class="col-sm-6 col-md-4 m-b-sm-30">
                    
						<div align="center">
                        <table border="0" cellspacing="0">
                        <tr>
                        <p class="copyright text-center m-b-0"><a href="#con3" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Pricing Information</a></p>
                        </tr>
                        <tr>
                          <td colspan="13"><div align="center">Price starting at <font size="5px" color="ed1b24">$50.00</font></div></td>
                        </tr>
                        <tr>
                          <td colspan="13"><center>
                            <strong><font color="#6D6E71">Jersey</font></strong>
                          </center>
                            <center>
                            </center></td>
                        </tr>
                        <tr>
                          <td colspan="6"><div align="center">Primary Color</div></td>
                          <td>&nbsp;</td>
                          <td colspan="6"><div align="center">Secondary Color</div></td>
                        </tr>
                        <tr>
                          <td><span title="BLK"><img src="assets/images/Uniforms/swatches/blk.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onmouseout="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase1','','show','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'BLK'" /></span></td>
                          <td><span title="BUR"><img src="assets/images/Uniforms/swatches/bur.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnbur.png'" onmouseout="this.src='assets/images/Uniforms/swatches/bur.png'" alt="." width="20" height="20" onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','show','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'BUR'" /></span></td>
                          <td><span title="CHA"><img src="assets/images/Uniforms/swatches/cha.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwncha.png'" onmouseout="this.src='assets/images/Uniforms/swatches/cha.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','show','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'CHA'" /></span></td>
                          <td><span title="CHR"><img src="assets/images/Uniforms/swatches/chr.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnchr.png'" onmouseout="this.src='assets/images/Uniforms/swatches/chr.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','show','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'CHR'" /></span></td>
                          <td><span title="COL"><img src="assets/images/Uniforms/swatches/col.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwncol.png'" onmouseout="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','show','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'COL'" /></span></td>
                          <td><span title="GLD"><img src="assets/images/Uniforms/swatches/gld.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwngld.png'" onmouseout="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','show','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'GLD'" /></span></td>
                          <td>&nbsp;</td>
                          <td><span title="BLK"><img src="assets/images/Uniforms/swatches/blk.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onmouseout="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase2','','show','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'BLK'" /></span></td>
                          <td><em><span title="BUR"><img src="assets/images/Uniforms/swatches/bur.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnbur.png'" onmouseout="this.src='assets/images/Uniforms/swatches/bur.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','show','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'BUR'" /></span></em></td>
                          <td><span title="CHA"><img src="assets/images/Uniforms/swatches/cha.png" alt="s" width="20" height="8"onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','show','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'CHA'" onmouseover="this.src='assets/images/Uniforms/swatches/dwncha.png'" onmouseout="this.src='assets/images/Uniforms/swatches/cha.png'" /></span></td>
                          <td><span title="CHR"><img src="assets/images/Uniforms/swatches/chr.png" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','show','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'CHR'" onmouseover="this.src='assets/images/Uniforms/swatches/dwnchr.png'" onmouseout="this.src='assets/images/Uniforms/swatches/chr.png'" /></span></td>
                          <td><span title="COL"><img src="assets/images/Uniforms/swatches/col.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwncol.png'" onmouseout="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','show','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','lembase2','','hide','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'COL'" /></span></td>
                          <td><img src="assets/images/Uniforms/swatches/fuc.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnfuc.png'" onmouseout="this.src='assets/images/Uniforms/swatches/fuc.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','show','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'FUC'" /></td>
                        </tr>
                        <tr>
                          <td><span title="HUN"><img src="assets/images/Uniforms/swatches/hun.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onmouseout="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','show','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'HUN'" /></span></td>
                          <td><span title="KEL"><img src="assets/images/Uniforms/swatches/kel.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnkel.png'" onmouseout="this.src='assets/images/Uniforms/swatches/kel.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','show','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'KEL'" /></span></td>
                          <td><span title="LIM"><img src="assets/images/Uniforms/swatches/nav.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/nav.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','show','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'NAV'" /></span></td>
                          <td><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','show','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'ORG'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/pnk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpnk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pnk.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','show','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'PNK'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/pur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pur.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','show','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'PUR'" /></td>
                          <td>&nbsp;</td>
                          <td><img src="assets/images/Uniforms/swatches/gld.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwngld.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','show','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'GLD'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/hun.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','show','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'HUN'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/kel.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnkel.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/kel.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','show','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'KEL'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/lem.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnlem.png'" onmouseout="this.src='assets/images/Uniforms/swatches/lem.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','show','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'LEM'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/lim.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnlim.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/lim.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','show','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'LIM'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/nav.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/nav.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','show','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'NAV'" /></td>
                        </tr>
                        <tr>
                          <td><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','show','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'RED'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','show','silbase1','','hide','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'ROY'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/sil.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','show','turbase1','','hide','whtbase1','','hide');document.getElementById('ballcolor1').value = 'SIL'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/wht.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase1','','hide','burbase1','','hide','chabase1','','hide','chrbase1','','hide','colbase1','','hide','gldbase1','','hide','hunbase1','','hide','kelbase1','','hide','limbase1','','hide','navbase1','','hide','orgbase1','','hide','pnkbase1','','hide','purbase1','','hide','redbase1','','hide','roybase1','','hide','silbase1','','hide','turbase1','','hide','whtbase1','','show');document.getElementById('ballcolor1').value = 'WHT'" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="20" height="8"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','show','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'ORG'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/pnk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpnk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pnk.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','show','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'PNK'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/pur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pur.png'" alt="s" width="20" height="13"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','show','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'PUR'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','show','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'RED'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','show','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'ROY'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/sil.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','show','tngbase2','','hide','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'SIL'" /></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><img src="assets/images/Uniforms/swatches/tng.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwntng.png'" onmouseout="this.src='assets/images/Uniforms/swatches/tng.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','show','turbase2','','hide','whtbase2','','hide');document.getElementById('ballcolor2').value = 'TNG'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/tur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwntur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/tur.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','show','whtbase2','','hide');document.getElementById('ballcolor2').value = 'TUR'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/wht.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase2','','hide','burbase2','','hide','chabase2','','hide','chrbase2','','hide','colbase2','','hide','fucbase2','','hide','gldbase2','','hide','hunbase2','','hide','kelbase2','','hide','lembase2','','hide','limbase2','','hide','navbase2','','hide','orgbase2','','hide','pnkbase2','','hide','purbase2','','hide','redbase2','','hide','roybase2','','hide','silbase2','','hide','tngbase2','','hide','turbase2','','hide','whtbase2','','show');document.getElementById('ballcolor2').value = 'WHT'" /></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="13"><div align="center">Tertiary Color</div></td>
                        </tr>
                        <tr>
							<td>&nbsp;</td>
							<td><img src="assets/images/Uniforms/swatches/blk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase3','','show','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'BLK'" /></td>
							<td><img src="assets/images/Uniforms/swatches/bur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnbur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/bur.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','show','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'BUR'" /></td>
							<td><img src="assets/images/Uniforms/swatches/cha.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwncha.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/cha.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','show','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'CHA'" /></td>
							<td><img src="assets/images/Uniforms/swatches/chr.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnchr.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/chr.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','show','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'CHR'" /></td>
							<td><img src="assets/images/Uniforms/swatches/col.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwncol.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','show','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'COL'" /></td>
							<td><img src="assets/images/Uniforms/swatches/fuc.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnfuc.png'" onmouseout="this.src='assets/images/Uniforms/swatches/fuc.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','show','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'FUC'" /></td>
							<td><img src="assets/images/Uniforms/swatches/gld.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwngld.png'" onmouseout="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','show','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'GLD'" /></span></td>
							<td><img src="assets/images/Uniforms/swatches/hun.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnhun.png'" onmouseout="this.src='assets/images/Uniforms/swatches/hun.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','show','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'HUN'" /></span></td>
							<td><img src="assets/images/Uniforms/swatches/kel.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnkel.png'" onmouseout="this.src='assets/images/Uniforms/swatches/kel.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','show','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'KEL'" /></span></td>
							<td><img src="assets/images/Uniforms/swatches/lem.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnlem.png'" onmouseout="this.src='assets/images/Uniforms/swatches/lem.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','show','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'LEM'" /></td>
							<td><img src="assets/images/Uniforms/swatches/lim.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnlim.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/lim.png'" alt="s" width="20" height="20" onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','show','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'LIM'" /></td>
							<td>&nbsp;</td>
					  </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><img src="assets/images/Uniforms/swatches/nav.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnnav.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/nav.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','show','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'NAV'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/org.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnorg.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/org.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','show','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'ORG'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/pnk.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpnk.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pnk.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','show','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'PNK'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/pur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnpur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/pur.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','show','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'PUR'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','show','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'RED'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','show','silbase3','','hide','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'ROY'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/sil.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="34"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','show','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'SIL'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/tng.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwntng.png'" onmouseout="this.src='assets/images/Uniforms/swatches/tng.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','fucbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','lembase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','tngbase3','','show','turbase3','','hide','whtbase3','','hide');document.getElementById('ballcolor3').value = 'TNG'" /></td>
                          <td><img src="assets/images/Uniforms/swatches/tur.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwntur.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/tur.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','show','whtbase3','','hide');document.getElementById('ballcolor3').value = 'TUR'" /></td>
                          <td><span title="WHT"><img src="assets/images/Uniforms/swatches/wht.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onmouseout="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blkbase3','','hide','burbase3','','hide','chabase3','','hide','chrbase3','','hide','colbase3','','hide','gldbase3','','hide','hunbase3','','hide','kelbase3','','hide','limbase3','','hide','navbase3','','hide','orgbase3','','hide','pnkbase3','','hide','purbase3','','hide','redbase3','','hide','roybase3','','hide','silbase3','','hide','turbase3','','hide','whtbase3','','show');document.getElementById('ballcolor3').value = 'WHT'" /></span></td>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td colspan="13"><div align="center"><strong><font color="#6D6E71">Short</font></strong></div></td>
                        </tr>
                        <tr>
                          <td colspan="13"><div align="center">Main Color</div></td>
                        </tr>
                        <tr>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td><span title="BLK"><img src="assets/images/Uniforms/swatches/blk.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnblk.png'" onmouseout="this.src='assets/images/Uniforms/swatches/blk.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blksho1','','show','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'BLK'" /></span></td>
							<td><span title="BUR"><em><img src="assets/images/Uniforms/swatches/bur.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwnbur.png'" onmouseout="this.src='assets/images/Uniforms/swatches/bur.png'" alt="s" width="20" height="20" onclick="MM_showHideLayers('blksho1','','hide','bursho1','','show','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'BUR'" /></em></span></td>
							<td><span title="CHA"><img src="assets/images/Uniforms/swatches/cha.png" alt="s" width="20" height="8"onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','show','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'CHA'" onmouseover="this.src='assets/images/Uniforms/swatches/dwncha.png'" onmouseout="this.src='assets/images/Uniforms/swatches/cha.png'" /></span></td>
							<td><span title="CHR"><img src="assets/images/Uniforms/swatches/chr.png" alt="s" width="20" height="20"onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','show','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'CHR'" onmouseover="this.src='assets/images/Uniforms/swatches/dwnchr.png'" onmouseout="this.src='assets/images/Uniforms/swatches/chr.png'" /></span></td>
							<td><span title="COL"><img src="assets/images/Uniforms/swatches/col.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwncol.png'" onmouseout="this.src='assets/images/Uniforms/swatches/col.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','show','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'COL'" /></span></td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
						</tr>
						<tr>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td><span title="GLD"><img src="assets/images/Uniforms/swatches/gld.png" onmouseover="this.src='assets/images/Uniforms/swatches/dwngld.png'" onmouseout="this.src='assets/images/Uniforms/swatches/gld.png'" alt="s" width="20" height="20"onclick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','show','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'GLD'" /></span></td>
							<td><img src="assets/images/Uniforms/swatches/red.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnred.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/red.png'" alt="s" width="20" height="8"onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','show','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'RED'" /></td>
							<td><img src="assets/images/Uniforms/swatches/roy.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnroy.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/roy.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','show','silsho1','','hide','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'ROY'" /></td>
							<td><img src="assets/images/Uniforms/swatches/sil.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnsil.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/sil.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','show','tursho1','','hide','whtsho1','','hide');document.getElementById('shocolor1').value = 'SIL'" /></td>
							<td><img src="assets/images/Uniforms/swatches/wht.png" onMouseOver="this.src='assets/images/Uniforms/swatches/dwnwht.png'" onMouseOut="this.src='assets/images/Uniforms/swatches/wht.png'" alt="s" width="20" height="20"onClick="MM_showHideLayers('blksho1','','hide','bursho1','','hide','chasho1','','hide','chrsho1','','hide','colsho1','','hide','gldsho1','','hide','hunsho1','','hide','kelsho1','','hide','limsho1','','hide','navsho1','','hide','orgsho1','','hide','pnksho1','','hide','pursho1','','hide','redsho1','','hide','roysho1','','hide','silsho1','','hide','tursho1','','hide','whtsho1','','show');document.getElementById('shocolor1').value = 'WHT'" /></td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
							<td width="19">&nbsp;</td>
						</tr>
      <tr>
        <td colspan="13"><div align="center"><font color="#6D6E71"><strong>Socks</strong></font></div></td>
      </tr>
      <tr>
        <td width="19">&nbsp;</td>
        <td width="19">&nbsp;</td>
        <td width="19"><em><span title="BLK/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-BLKWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-BLKWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-BLKWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-BLK/WHT';MM_showHideLayers('blksoc','','show','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></span></em></td>
        <td width="19"><em><span title="BUR/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-BURWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-BURWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-BURWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-BUR/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','show','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td width="19"><em><span title="CHR/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-CHRBLK.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-CHRBLK.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-CHRBLK.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-CHR/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','show','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td width="19"><em><span title="COL/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-COLWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-COLWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-COLWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2','roysoc','','hide').value = '828-COL/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','show','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="GLD/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-GLDWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-GLDWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-GLDWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-GLD/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','show','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="HUN/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-HUNWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-HUNWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-HUNWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-HUN/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','show','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="NAV/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-NAVWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-NAVWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-NAVWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-NAV/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','show','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="ORG/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-ORGWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-ORGWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-ORGWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-ORG/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','show','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="RED/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-REDWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-REDWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-REDWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-RED/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','show','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><em><span title="ROY/WHT"><img src="assets/images/Uniforms/478/socks/swatches/828-ROYWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-ROYWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-ROYWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-ROY/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','show','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/BLK"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTBLK.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTBLK.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTBLK.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/BLK';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','show','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/BUR"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTBUR.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTBUR.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTBUR.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/BUR';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','show','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/GLD"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTGLD.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTGLD.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTGLD.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/GLD';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','show','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/HUN"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTHUN.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTHUN.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTHUN.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/HUN';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','show','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/NAV"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTNAV.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTNAV.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTNAV.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/NAV';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','show','wresoc','','hide','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/RED"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTRED.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTRED.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTRED.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/RED';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','show','wrosoc','','hide','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/ROY"><img src="assets/images/Uniforms/478/socks/swatches/828-WHTROY.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTROY.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTROY.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/ROY';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','show','wwhsoc','','hide')" /></span></em></td>
        <td><em><span title="WHT/WHT" style=""><img src="assets/images/Uniforms/478/socks/swatches/828-WHTWHT.png" onmouseover="this.src='assets/images/Uniforms/478/socks/swatches/down_828-WHTWHT.png'" onmouseout="this.src='assets/images/Uniforms/478/socks/swatches/828-WHTWHT.png'" alt="s" width="20" height="20" onclick="document.getElementById('ink2').value = '828-WHT/WHT';MM_showHideLayers('blksoc','','hide','bursoc','','hide','chrsoc','','hide','colsoc','','hide','gldsoc','','hide','hunsoc','','hide','navsoc','','hide','orgsoc','','hide','redsoc','','hide','roysoc','','hide','wblsoc','','hide','wbusoc','','hide','wglsoc','','hide','whusoc','','hide','wnasoc','','hide','wresoc','','hide','wrosoc','','hide','wwhsoc','','show')" /></span></em></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="20">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td colspan="13"><p class="copyright text-center m-b-0"><a href="#con2" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Description</a><br><a href="#con1" data-toggle="modal" class="btn btn-primary" role="button" style="margin-top:20px">Terms and Conditions</a><br>
        © 2018 <a href="#">SCORE</a>, <br />
          American Soccer Company, Inc.</p></td>
      </tr>
                        </table>  
                    </div>
                    </div>
                            <!-- Uniform Selection End-->

							<!-- Uniform Form-->
							<div class="col-sm-6 col-md-4 m-b-sm-30">
                    <div style="margin:auto; width:270px; height:600px; overflow:scroll; overflow-x:hidden">
                            <form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>

<fieldset >


<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div style="width:240px"><h2 align="center" style="margin-top:-10px"><input name="Design" id="design3" value="Pattern 2 - Design 2" type="hidden" /></h2>
</div>
<div class='short_explanation'>
  <div align="center">* required fields</div>
</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div style="width:240px">
    <label for='name' ><font color="#6D6E71">Contact Name*: </font></label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Organization*:</font></label><br/>
    <input type='text' name='Organization' id='org' value='<?php echo $formproc->SafeDisplay('org') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Email Address*:</font></label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Phone*:</font></label>
    <br/>
    <input type='text' name='phone' id='phone' value='<?php echo $formproc->SafeDisplay('phone') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Primary Jersey Color*:</font></label>
    <br/>
    <input type='text' name='Priamary Color' id='ballcolor1' value='<?php echo $formproc->SafeDisplay('ballcolor1') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Secondary Jersey Color*:</font></label>
    <br/>
    <input type='text' name='Secondary Color' id='ballcolor2' value='<?php echo $formproc->SafeDisplay('ballcolor2') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Tertiary Jersey Color*:</font></label>
    <br/>
    <input type='text' name='Tertiary Color' id='ballcolor3' value='<?php echo $formproc->SafeDisplay('ballcolor3') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Main Short Color*:</font></label>
    <br/>
    <input type='text' name='Main Short Color' id='shocolor1' value='<?php echo $formproc->SafeDisplay('shocolor1') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>

<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Accent Short Color*:</font></label>
    <br/>
    <input type='text' name='Accent Short Color' id='shocolor2' value='<?php echo $formproc->SafeDisplay('shocolor2') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Sock Color*:</font></label>
    <br/>
    <input type='text' name='Sock Color' id='ink2' value='<?php echo $formproc->SafeDisplay('ink2') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">Quantity*:</font></label>
    <br/>
    <input type='text' name='Quantity' id='qnt' value='<?php echo $formproc->SafeDisplay('qnt') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='email' ><font color="#6D6E71">In-Hand Date*:</font></label>
    <br/>
    <input type='text' name='In-Hand Date' id='ndate' value='<?php echo $formproc->SafeDisplay('ndate') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div style="width:240px">
    <label for='message' ><font color="#6D6E71">Comment Box:</font></label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="30" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
    <label for='message' ><font color="#6D6E71">*Please have decoration information ready to provide to your sales representative. </font></label><br/>
</div>
<div style="width:240px;display:none;">
    <label for='photo' ><font color="#6D6E71">Upload Logo:</font></label><br/>
    <input type="file" name='photo' id='photo' /><br/>
    <span id='contactus_photo_errorloc' class='error'></span>
</div>


<div style="width:240px">
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
        
        <section class="module">

			<div class="container">
        <div class="row">
        	
        		<p><center style="padding:20px" >All images and artwork are the exclusive property of SCORE, American Soccer Company, Inc. (except for customer trademarks) and are protected under U.S. And international copyright treaties. Artwork and image may not be copied, reproduced, redistributed, manipulated, projected, used or altered in any way without the prior express, written permission of SCORE, American Soccer Company, Inc.</center></p>
        	
        </div>
		</div>
        </section>

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
							<a href="http://scoresports.com/striker-no-9740.html">
								<img src="assets/images/portfolio/storeitems/3/si_0002_9740.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">Striker No.9740</h3>
									<div class="work-descr">
										PLAYER ACCESSORIE 
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/ball-bag-no-962.html">
								<img src="assets/images/portfolio/storeitems/3/si_0012_962-x-x.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">Ball Bag No.962</h3>
									<div class="work-descr">
										SOCCER BAG
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->

						<!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/942.html">
								<img src="assets/images/portfolio/storeitems/3/si_0014_942-org-x.jpg" alt="">
								<div class="work-caption font-alt">
									<h3 class="work-title">4" Disc Cone No.942</h3>
									<div class="work-descr">
										SOCCER ACCESSORIE
									</div>
								</div>
							</a>
						</div>
						<!-- /PORTFOLIO ITEM -->
                        
                        <!-- PORTFOLIO ITEM -->
						<div class="work-item design">
							<a href="http://scoresports.com/909.html">
							<img src="assets/images/portfolio/storeitems/3/si_0015_909-gld-a.jpg" alt="">
                            <div class="work-caption font-alt">
							  <h3 class="work-title">Pinnies No.909</h3>
									<div class="work-descr">
										PLAYER ACCESSORIE
									</div>
								</div>
							<a href="http://soccer.scoresports.com/soccer/accessories/coaches/captain-arm-band-no-699.html" class="inactiveLink1"></a>							
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
							<li><a href="https://www.facebook.com/Scoresports?_rdr=p"><h4>Facebook</h4></a></li>
							<li><a href="https://twitter.com/scoresports"><h4>Twitter</h4></a></li>
							<li><a href="https://instagram.com/scoresports/"><h4>Instagram</h4></a></li>
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
					   <li>Premier Kit: $90.00 youth/adult</li>
						   <ul>
							 <li>2 Jerseys</li>
							 <li>2 Pairs of Shorts</li>
							 <li>2 Pairs of Socks</li>
						 </ul>
					   <li>Elite Kit: $80.00 youth/adult</li>
						 <ul>    
							 <li>2 Jerseys</li>
							 <li>1 Pair of Shorts</li>
							 <li>2 Pairs of Socks</li>
						 </ul>
						 <li>Travel Kit: $75.00</li>
						   <ul>
							 <li>2 Jerseys</li>
							 <li>1 Pairs of Shorts</li>
							 <li>1 Pairs of Socks</li>
						 </ul>
					   <li>SCORE Kit: $50.00</li>
						 <ul>    
							 <li>1 Jerseys</li>
							 <li>1 Pair of Shorts</li>
							 <li>1 Pairs of Socks</li>
						 </ul>
						 <li>A La Carte Items</li>
						 <ul>    
							 <li>Jersey: $30.00</li>
							 <li>Shorts: $20.00</li>
							 <li>Elite 828 Socks: $6.25</li>
							 <li>Striped 8100 Socks: $4.45</li>
						 </ul>
						 
					   <li>Prices are based on basic custom uniform designs. Prices subject to change depending on uniform &amp; design specifications.</li>
					   <li>See terms &amp; conditions for additional information</li>
					   
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
			 <h3>Custom Uniform</h3>
			 </div>
			 <div class="modal-body">
					 <ul>
					   <li>Why Customize Your Uniform With Score?</li>
						   <ul>
							 <li>Brand your club with your colors</li>
							 <li>You are dealing directly with a vertical manufacturer</li>
							 <li>Please have club logo information ready to provide to your sales representative.</li>
							 <li>Easy step by step process</li>
						 </ul>
						 <li>SCORE Fabrics</li>
						 <ul>
							 <li>Moisture wicking fabric technology</li>
							 <li>Breathable fabric to accommodate all climates</li>
							 <li>State-of-the-art sublimation capabilities</li>
							 <li>Earth-Friendly dye production</li>
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
			 Custom Uniform Kits
					 <ul>
                         <li>150 Player minimum order. Minimum orders must be at least 150 per item & color.</li>
						 <li>3-year minimum contract is required.</li>
						 <li>Production time 8 weeks from the day the art and sample uniform are approved and order is processed.</li>
						 <li>Sales representative will review the custom uniform timeline.</li>
						 <li>Preliminary/Booking order is highly recommended.<br>Time frames may change depending on the time of the year the order is placed.</li>
						 <li>All remaining customized products must be purchased at the end of the agreement.</li>
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
					   <li>No custom uniforms will be manufactured between June ’18 thru September ’18.</li>
					   <li><font size="3"><b>Limited Time, Custom Uniform Expires April 30, 2018</b></font></li>
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