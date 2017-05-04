<div class="introtext">
		<p>
        To register for one of our seminars, please fill in the form below.
    </p>
    
  
</div>

<div class="bodytext">

<? 

// most code in here is to retain submitted information if there is a validation error

$retrying = ($_GET['retry']=="1");
session_start(); // need this to make $_SESSION vars work

if (!$_SESSION['userlastaction']) 
	$_SESSION['userlastaction'] = 100;
else
  $_SESSION['userlastaction'] = $_SESSION['userlastaction']+1;

?>


<p>
<? if ($retrying) echo "<span style=\"color:red\">Please fill in all mandatory fields. </span>"; ?>
All fields marked (<span style="color:red">*</span>) are required.
 See our <a href="content.php?p=70">Privacy Statement</a>.</p>

<br style="clear: both" />
<h1>Your Details</h1>

<hr />

<form id="feedbackform" action="seminar_reg.php"
      onsubmit="return checkseminarform(this)"
      method="post">
    <input type="hidden" name="lastaction" value="<? echo $_SESSION['userlastaction']+1 ?>" />
    <input type="hidden" name="sourceIP" value="<? echo $_SERVER['REMOTE_ADDR'] ?>" />

<table>
  <tr>
  <td>
      <? if ($retrying && $_SESSION['formdata']['title']=="") 
           echo "<span style=\"color:red\">Title</span>\n";
         else
           echo "Title\n";
      ?>
      
      <br />
      <input name="title" size="2" tabindex="1"
       <? if ($retrying) echo "value=\"".$_SESSION['formdata']['title']."\""; ?> 
       
       />
  </td>
  <td>
      <? if ($retrying && $_SESSION['formdata']['first_name']=="") 
           echo "<span style=\"color:red\">First Name</span>\n";
         else
           echo "First Name\n";
      ?>
      
      <br />
      <input name="first_name" size="20" tabindex="2"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['first_name']."\""; ?> 
       />&nbsp;<span style="color:red">*</span>
  </td>
  
  <td>
			<? if ($retrying && $_SESSION['formdata']['last_name']=="") 
           echo "<span style=\"color:red\">Last Name</span>\n";
         else
           echo "Last Name\n";
      ?>
      <br />
      <input name="last_name" size="20" tabindex="3"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['last_name']."\""; ?> 
       />&nbsp;<span style="color:red">*</span>
  </td>
</tr>



<tr>
  <td>
			<? if ($retrying && $_SESSION['formdata']['company']=="") 
           echo "<span style=\"color:red\">Company/Organisation</span>\n";
         else
           echo "Company/Organisation\n";
      ?><br />
      <input name="company" size="20" tabindex="4" 
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['company']."\""; ?> 
      />&nbsp;<span style="color:red">*</span>
  </td>
  
  <td colspan="2">
			<? if ($retrying && $_SESSION['formdata']['job_title']=="") 
           echo "<span style=\"color:red\">Job Title</span>\n";
         else
           echo "Job Title\n";
      ?>
      <br />
      <input name="job_title" size="30" tabindex="5" 
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['job_title']."\""; ?> 
       />&nbsp;<span style="color:red">*</span>
  </td>

</tr>


<tr>
  <td rowspan="2"valign="top">
      <? if ($retrying && $_SESSION['formdata']['address_line1']=="") 
           echo "<span style=\"color:red\">Address</span>\n";
         else
           echo "Address\n";
      ?>  
      <br />
      <input name="address_line1" size="20" tabindex="8" 
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['address_line1']."\""; ?> 
      />&nbsp;<span style="color:red">*</span><br />
      
      <input name="address_line2" size="20" tabindex="9"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['address_line2']."\""; ?> 
      /><br />
      <input name="address_line3" size="20" tabindex="10"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['address_line3']."\""; ?> 
      />
  </td>
  
  <td valign="top">
      <? if ($retrying && $_SESSION['formdata']['postcode']=="") 
           echo "<span style=\"color:red\">Postcode/Zip code</span>\n";
         else
           echo "Postcode/Zip code\n";
      ?>  
      
      <br />
      <input name="postcode" size="20" tabindex="11"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['postcode']."\""; ?> 
      />&nbsp;<span style="color:red">*</span>
  </td>
  
  <td>
      <? if ($retrying && $_SESSION['formdata']['email']=="") 
           echo "<span style=\"color:red\">E-mail</span>\n";
         else
           echo "E-mail\n";
      ?>       
      <br />
      <input name="email" size="20" tabindex="13"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['email']."\""; ?> 
      />
      <span style="color:red">*</span>
  </td>
</tr>
<tr>
  <td>
      <? if ($retrying && $_SESSION['formdata']['country']=="") 
           echo "<span style=\"color:red\">Country</span>\n";
         else
           echo "Country\n";
      ?>       
  
		  <br />
      <input type="text" name="country" tabindex="12"
      <?
      if ($retrying) 
        echo "value=\"".$_SESSION['formdata']['country']."\"";
      else
       echo "value=\"United Kingdom\"";      
      ?> 
      />&nbsp;<span style="color:red">*</span>
  </td>
  <td>      
      <? if ($retrying && $_SESSION['formdata']['phone']=="") 
           echo "<span style=\"color:red\">Telephone</span>\n";
         else
           echo "Telephone\n";
      ?>       
      <br />
      <input name="phone" size="20" tabindex="14"
      <? if ($retrying) echo "value=\"".$_SESSION['formdata']['phone']."\""; ?> 
      />&nbsp;<span style="color:red">*</span>
  </td>
</tr>

</table>

<br />

<h1>Additional Colleagues</h1>
<hr />
<table>
  <tr>
    <td>
    Title <br /><input name="colleague1_title" size="20" tabindex="29" 
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague1_title']."\""; ?> /><br />
    
    Title <br /><input name="colleague2_title" size="20" tabindex="32" 
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague2_title']."\""; ?> /><br />
    
    Title <br /><input name="colleague3_title" size="20" tabindex="35"
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague3_title']."\""; ?> />
    </td>
    
    <td>
    First Name <br /><input name="colleague1_firstname"  size="20" tabindex="30" 
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague1_firstname']."\""; ?> /><br />
    
    First Name <br /><input name="colleague2_firstname" size="20" tabindex="33" 
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague2_firstname']."\""; ?> /><br />
    
    First Name <br /><input name="colleague3_firstname" size="20" tabindex="36" 
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague3_firstname']."\""; ?> />
    
    </td>
    
    <td>
    Last Name <br /><input name="colleague1_surname"  size="20" tabindex="31" 
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague1_surname']."\""; ?> /><br />    
    
    Last Name <br /><input name="colleague2_surname" size="20" tabindex="34"
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague2_surname']."\""; ?> /><br />    
    
    
    Last Name <br /><input name="colleague3_surname" size="20" tabindex="37"
    <? if ($retrying) echo "value=\"".$_SESSION['formdata']['colleague3_surname']."\""; ?> />    
    </td>

  </tr>

</table>

<br />

<h1>Seminar Venue</h1>
<hr />

<div>
<? if ($retrying && $_SESSION['formdata']['seminar_choice']=="") 
     echo "<span style=\"color:red\">Which seminar do you wish to attend:</span>\n";
   else
     echo "Which seminar do you wish to attend:\n";
?>       

<select name="seminar_choice" tabindex="38">
  <option value="">--please choose--</option>  
  
  <option 
  <? if ($retrying && $_SESSION['formdata']['seminar_choice']=="London20070503") echo " selected";?>
  value="London20070503">London 3rd May 2007</option>
  
  <option 
  <? if ($retrying && $_SESSION['formdata']['seminar_choice']=="Edinburgh20070509") echo " selected";?>
  value="Edinburgh20070509">Edinburgh 9/10th May 2007</option>
</select>

&nbsp;<span style="color:red">*</span>
</div>

<p>If you do not wish to receive further information from us in the future tick this box 
<input type="checkbox" name="opt_out" tabindex="48"
<? if ($retrying && $_SESSION['formdata']['opt_out']=="on") echo " checked";?>
/>
</p>

<input type="submit" value="Submit" tabindex="49" />
<input type="hidden" name="go" value="1" />

</form>

</div>
