<?
	error_reporting(0);
?>
<?
$EDContactPerson=$_POST['EDContactPerson'];
$EDBarcouncil=$_POST['EDBarcouncil'];
$EDAddress=$_POST['EDAddress'];
$EDContactNo=$_POST['EDContactNo'];
$EDEMailID=$_POST['EDEMailID'];
$EDTypeofBusiness=$_POST['EDTypeofBusiness'];
$EDYourMessage=$_POST['EDYourMessage'];

session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		header('Location: advocate-registration.php?err=fail');
} else {
?>
<?
///////////////////////////////
	$TempFilename = "Resumes_".str_replace("-", "", date("Y-m-d")).date('h:i:s A');
	$TempFilename = str_replace(":", "", $TempFilename);
	$TempFilename = str_replace(" ", "", $TempFilename);
	$imagefilename=$TempFilename."_".$_FILES['File1']['name'];

$FileSChkA = pathinfo(strtolower($_FILES['File1']['name']), PATHINFO_EXTENSION);
if ($FileSChkA=='doc' or $FileSChkA=='docx' or $FileSChkA=='pdf')
{

	$Tempimagefilename=$_FILES['File1']['name'];
	if ($Tempimagefilename=="")
	{
		$imagename="na.doc";
	}
	else
	{
		$imagename=$imagefilename;
	}

	if(move_uploaded_file($_FILES['File1']['tmp_name'], 'resumes/'.$TempFilename."_".$_FILES['File1']['name'])) 
	{
//		echo "upload Successfully";
	}
	else
	{
//		echo "Failed to upload";
	}
}
else
{
}
////////////////////////////////
?>
<?
$email_subject ="Advocate Registration Form from www.andhralegalhouse.org";
$email_subjectMem ="Acknowledgement from www.andhralegalhouse.org";

$msgmem='<span style="font:11px arial;color:#333333;">Dear <span style="font:bold 12px arial;color:#F54E41;">'.$EDContactPerson.',</span><br><br>Thank you for Advocate Registration with <strong>www.andhralegalhouse.org</strong><br><br><strong><u>Advocate Details :</u></strong><br>
Name: '.$EDContactPerson.'<br>Barcouncil Registration Number: '.$EDBarcouncil.'<br>Address: '.$EDAddress.'<br>Contact No: '.$EDContactNo.'<br>E-Mail ID: '.$EDEMailID.'<br>Subject: '.$EDTypeofBusiness.'<br><br><strong><u>Comments:</u></strong><br>'.$EDYourMessage.'<br><br>
<strong><u>Uploaded DETAILS:</u></strong> <a href=https://andhralegalhouse.org/demo/resumes/'.$imagename.'>Download</a> <br><br>
<strong>We will get back to you shortly!</strong><br><br>-Regards<strong><br>Andhra Legal house Team<br>E-Mail: info@andhralegalhouse.org<br>Website: www.andhralegalhouse.org</strong></span>';

$fromadmin = "info@andhralegalhouse.org";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Andhra Legal house <info@andhralegalhouse.org>' . "\r\n";

$headersN  = 'MIME-Version: 1.0' . "\r\n";
$headersN .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersN .= 'From: '.$EDContactPerson.' <'.$EDEMailID.'>' . "\r\n";
//$headersN .= 'From: Andhra Legal house <info@andhralegalhouse.org>' . "\r\n";

$mail=mail($fromadmin,$email_subject,$msgmem,$headersN);
$mail=mail($EDEMailID,$email_subjectMem,$msgmem,$headers);

if($mail)
{
	$ut="true";
}
?>
<?

	header('Location: advocate-registration-FormDone.php?sts=success&NName='.$EDContactPerson);

?>
<?
};
?>