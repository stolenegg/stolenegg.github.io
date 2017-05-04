

function checkemail(str){
  var filter=/^.+@.+\..{2,3}$/
  return (filter.test(str))
}

function validateFields() {
	var frmSubmitButton = document.getElementById('contactFormSubmitButton');
	
	var frmEl = document.getElementById('cForm');
	var posName = document.getElementById('fullname');
	var posEmail = document.getElementById('email');
	var posRegard = document.getElementById('company');
	var posText = document.getElementById('message');
	//var strCC = document.getElementById('selfCC');
	var whiteSpace = /^[\s]+$/;
	
	frmSubmitButton.blur();
	
	if (posName.value == "") {
		alert( "Please enter your name." );
		posName.focus();
		return false;
	}
   

	if (posEmail.value == "" || !checkemail(posEmail.value)) {
		alert( "Please enter a valid e-mail address." );
		posEmail.focus();
		return false;
	}

	if ( posText.value == '' || whiteSpace.test(posText.value) ) {
		alert("Please enter your message.");
		posText.focus();
		return false;
	}


	//else {
		sendPosEmail();
		return true;
	//}
}

function sendPosEmail () {
	var success = document.getElementById('emailSuccess');
	var posName = document.getElementById('fullname');
	var posEmail = document.getElementById('email');
	var posRegard = document.getElementById('company');
	var posText = document.getElementById('message');
	//var strCC = document.getElementById('selfCC').value;
	var page = "scripts/xmlHttpRequest.php?contact=true&xml=true";
	
	showContactTimer(); // quickly begin the load bar
	success.style.display = 'none'; // hide the success bar (incase this is a multi-email
	
	// convert (&, +, =) to string equivs. Needed so URL encoded POST won't choke.
	var str1 = posName.value;
	str1 = str1.replace(/&/g,"**am**");
	str1 = str1.replace(/=/g,"**eq**");
	str1 = str1.replace(/\+/g,"**pl**");
	var str2 = posEmail.value;
	str2 = str2.replace(/&/g,"**am**");
	str2 = str2.replace(/=/g,"**eq**");
	str2 = str2.replace(/\+/g,"**pl**");
	var str3 = posRegard.value;
	if (str3) { str3 = str3.replace(/&/g,"**am**");
	str3 = str3.replace(/=/g,"**eq**");
	str3 = str3.replace(/\+/g,"**pl**");
	}
	var str4 = posText.value;
	str4 = str4.replace(/&/g,"**am**");
	str4 = str4.replace(/=/g,"**eq**");
	str4 = str4.replace(/\+/g,"**pl**");
	
	//var stuff = "selfCC="+strCC+"&posName="+str1+"&posEmail="+str2+"&posRegard="+str3+"&posText="+str4;
	var stuff = "fullname="+str1+"&email="+str2+"&company="+str3+"&message="+str4;
	loadXMLPosDoc(page,stuff);
}
function showContactTimer () {
	var loader = document.getElementById('loadBar');
	var button = document.getElementById('sendbutton');
	
	loader.style.display = 'block';
	button.style.display = 'none';
	sentTimer = setTimeout("hideContactTimer()",3000);
}

function hideContactTimer () {
	var loader = document.getElementById('loadBar');
	var success = document.getElementById('emailSuccess');
	var button = document.getElementById('sendbutton');

	var fieldArea = document.getElementById('contactFormArea');
	var inputs = fieldArea.getElementsByTagName('input');
	var inputsLen = inputs.length;
	var tAreas = fieldArea.getElementsByTagName('textarea');
	var tAreasLen = tAreas.length;
	// Hide the load bar alas! Done Loading
	loader.style.display = "none";
	success.style.display = "block";
	button.style.display = "block";
	success.innerHTML = grabPosXML("confirmation");
	// Now Hijack the form elements
	for ( i=0;i<inputsLen;i++ ) {
		if ( inputs[i].getAttribute('type') == 'text' ) {
			inputs[i].value = '';
		}
	}
	for ( j=0;j<tAreasLen;j++ ) {
		tAreas[j].value = '';
	}
}

function ajaxContact() {
var frmEl = document.getElementById('cForm');
var frmSubmitButton = document.getElementById('contactFormSubmitButton');
addEvent(frmEl, 'submit', validateFields, false);
addEvent(frmSubmitButton, 'click', validateFields, false);

frmEl.onsubmit = function() { return false; }
frmSubmitButton.onclick = function() { return false; }
}
addEvent(window, 'load',ajaxContact, false);