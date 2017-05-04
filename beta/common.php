<?php
function pageHeader($pagename) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>stolenegg &raquo; Web Design, Software Development, Design &amp; Branding consultancy for Leeds, Yorkshire &amp; UK</title>

<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="description" content="" />
<meta name="author" content="Dan Eggleston" />
<meta name="copyright" content="Stolenegg" />
<meta name="company" content="Stolenegg" />
<meta name="revisit-after" content="3 days" />

<!-- Favicon -->
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />


<!-- CSS -->
<link rel="stylesheet" href="se.css" type="text/css" media="screen"  />
<link rel="stylesheet" href="nav.css" type="text/css" media="screen"  />

<!-- old IE versions can't do .png alpha transparency - ditch the background image effects -->
<!--[if lt IE 7]>
<link rel="stylesheet" href="old_ie.css" type="text/css" media="screen"  />
<![endif]-->
 
 
<script type="text/javascript">
<!--
function clientLogin() {
	document.forms.login.submit();
}
// -->
</script>

</head>

<body id="<? echo $pagename; ?>" class="lbox">
<div id="page">

<!-- client login -->
<div id="loginbox">

<form id="login" action="login.php" method="post">
  Username <input class="logintxt" type="text" name="se_username" />
	Password <input class="logintxt"  type="password" name="se_password" />
	&nbsp;
	<div id="loginbutton"><a href="#" onclick="clientLogin()">Login</a></div>
</form>

</div> <!-- // loginbox -->



<!-- logo -->
<div id="selogo">
	<a href="index.php"><img src="se_logo.gif" alt="stolenegg: software &amp; design services" /></a>
</div><!-- //logo -->

<!-- main navigation -->
<div id="nav" >
<ol>
  <li<?=(($pagename=="default")?" class=\"current\"":"")?> id="n-services"><a href="index.php" title="The services we offer" >services</a></li>
  <li<?=(($pagename=="about")?" class=\"current\"":"")?> id="n-about"><a href="about.php" title="Find out more about stolenegg">about</a></li>
  <li<?=(($pagename=="portfolio")?" class=\"current\"":"")?> id="n-portfolio"><a href="portfolio.php" title="Examples of our work" >portfolio</a></li>	
  <li<?=(($pagename=="contact")?" class=\"current\"":"")?> id="n-contact"><a href="contact.php" title="Get in touch, hire us or ask a question">contact</a></li>
  <li<?=(($pagename=="extras")?" class=\"current\"":"")?> id="n-extras"><a href="extras.php" title="Extra bits &amp; free downloads">extras</a></li>
</ol>

</div><!-- // nav -->

<!-- start of the main content -->
<div id="maincontent">

<? 
}


function pageFooter() {
?>
</div><!-- //maincontent -->

<br />
<div id="footer">
&copy; stolenegg 2007
</div>

</div>
</body>
</html>

<?
}
?>