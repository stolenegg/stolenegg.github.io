<?php
include("common.php");
pageHeader("contact");
?>
<script type="text/javascript">
<!--
function checkemail(str){
  var filter=/^.+@.+\..{2,3}$/
  return (filter.test(str))
}
function validateContactForm( form )
{    
  if (form.fullname.value == "") {
    alert( "Please enter your name." );
    form.fullname.focus();
    return false ;
  }
    

  if (form.email.value == "" || !checkemail(form.email.value)) {
    alert( "Please enter a valid e-mail address." );
    form.email.focus();
    return false ;
  }
	
	if (form.message.value == "") {
    alert( "Please enter your message." );
    form.message.focus();
    return false ;
  }    

  return true;
}

function submitContactForm()
{
	if (validateContactForm(document.forms.contactus)) {
		document.forms.contactus.submit()
	}
}
// -->
</script>
<h1 style="display:none">Contact</h1>

<h2>Talk to us! <strong>stolenegg</strong> will be taking on new projects from September 2007.</h2>


<div class="section">

	<h3>Contact details</h3>

  <p class="address">
  	<b>Stolenegg Ltd.</b><br />
		15 Allerton Grange Vale<br />
		Leeds<br />
		LS17 6LS<br />
		UK
		
	</p>
	
	<p>
		<b>T:</b> 0113 815 5399 / 07989 976 034<br />
		<b>E:</b> <a href="mailto:&#105;n&#102;&#111;&#64;&#115;&#116;&#111;&#108;e&#110;&#101;&#103;&#103;&#46;c&#111;&#109;">&#105;nfo&#64;&#115;&#116;&#111;&#108;&#101;&#110;eg&#103;&#46;&#99;&#111;&#109;</a>
	<p>
		Registered in England, no. 06358948<br />
		VAT reg. no. <em>TBC</em>
	</p>
	

</div>


<div class="section">

	<h3>Get in touch</h3>

	<p>	
		You can contact us using the details opposite or just fill in this form: 
	</p>

	<form name="contactus" id="contactus" action="sendmessage.php" method="post" onsubmit="return validateContactForm(this)">
		<table class="contactform" summary="contact form">
			<tr><th>Name</th><td><input type="text" name="fullname" /></td></tr>
			<tr><th>Company</th><td><input type="text" name="company" /></td></tr>
			<tr><th>E-mail</th><td><input type="text" name="email" /></td></tr>
			<tr><th>Telephone</th><td><input type="text" name="phone" /></td></tr>
			<tr><th colspan="2">Message<br /><textarea name="message"></textarea></th></tr>
			<tr>
				<td colspan="2">
				<div id="sendbutton"><a href="#" onclick="submitContactForm()">Send</a></div>
				</td>
		  </tr>
		</table>
	</form>	
	
	
</div>

<div class="section">	
	<h3>Location</h3>
	<p> 
		<strong>stolenegg</strong> is based in Leeds, UK.  
		We are happy to work remotely or on site, depending on your requirements.		
  </p>
  
  <img id="dude" src="dudewithphone.png" alt="dude" />
    
</div>

<?
pageFooter();
?>
