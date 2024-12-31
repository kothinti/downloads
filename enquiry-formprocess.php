<?
$NName=$_POST['NName'];
$Address=$_POST['Address'];
$PhoneNo=$_POST['PhoneNo'];
$EMailID=trim($_POST['EMailID']);
$WhenToContact=$_POST['WhenToContact'];
$CComments=$_POST['CComments'];

session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		header('Location: contact.php?err=fail');
} else {
$email_subject ="Enquiry from www.andhralegalhouse.org";
$msg = "Name : $NName <br>
Address : $Address <br>
Contact No : $PhoneNo <br>
Email ID : $EMailID <br>
Subject : $WhenToContact <br>
Comments : $CComments <br>
";
$msgmem = "Dear, $NName <br><br>
Thanks for contacting us, we will get back to you shortly!! <br><br>
Regards <br>
Andhra Legal House.<br>
www.andhralegalhouse.org <br>
";

$fromadmin = "info@andhralegalhouse.org
";
$fromadminA = "info@andhralegalhouse.org";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: info@andhralegalhouse.org' . "\r\n";
$headers .= 'From: Andhra Legal House. <info@andhralegalhouse.org
>' . "\r\n";
//$headers .= 'From: '.$EMailID." \r\n";

$headersN  = 'MIME-Version: 1.0' . "\r\n";
$headersN .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headersN .= 'From: info@andhralegalhouse.org' . "\r\n";
//$headersN .= 'From: Andhra Legal House. <info@andhralegalhouse.org>' . "\r\n";
//$headersN .= 'From: '.$EMailID." \r\n";
$headersN .= 'From: '.$NName.' <'.$EMailID.'>' . "\r\n";

$mail=mail($fromadmin,$email_subject,$msg,$headersN);
$mail=mail($fromadminA,$email_subject,$msg,$headersN);
$mail=mail($EMailID,$email_subject,$msgmem,$headers);

if($mail)
{
	header('Location: enquiry-formprocessdone.php?sts=success&NName='.$NName);
}
/////////////////////////////////////
};
?>