<?
	error_reporting(0);
?>
<?
	date_default_timezone_set ("Asia/Calcutta");

$MUsername="Public";
$DateofPosting=date("Y-m-d");//$_POST['DateofPosting'];
$EDCompanyName=$_POST['EDCompanyName'];
$EDContactPerson=$_POST['EDContactPerson'];
$EDDesignation=$_POST['EDDesignation'];
$EDContactNo=$_POST['EDContactNo'];
$EDEMailID=$_POST['EDEMailID'];
$EDAddress=$_POST['EDAddress'];
$EDTypeofBusiness=$_POST['EDTypeofBusiness'];
$EDYourMessage=$_POST['EDYourMessage'];
$EDSStatus="Pending";//$_POST['EDSStatus'];

session_start(); 
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
		header('Location: contact.php?err=fail');
} else {
?>
<?
	$connEnquiryDataInsert=mysql_connect("localhost","andhralegalhouse","andhra!@#123");
	mysql_select_db("andhralegalhouse",$connEnquiryDataInsert);
	$sqlEnquiryDataInsert="insert into EnquiryData(MUsername,DateofPosting,EDCompanyName,EDContactPerson,EDDesignation,EDContactNo,EDEMailID,EDAddress,EDTypeofBusiness,EDYourMessage,EDSStatus) values('$MUsername','$DateofPosting','$EDCompanyName','$EDContactPerson','$EDDesignation','$EDContactNo','$EDEMailID','$EDAddress','$EDTypeofBusiness','$EDYourMessage','$EDSStatus')";
	mysql_query($sqlEnquiryDataInsert,$connEnquiryDataInsert);
?>
<?
$email_subject ="Enquiry from www.andhralegalhouse.org";
$email_subjectMem ="Acknowledgement from www.andhralegalhouse.org";

$msgmem='<span style="font:11px arial;color:#333333;">Dear <span style="font:bold 12px arial;color:#F54E41;">'.$EDContactPerson.',</span><br><br>Thank you for enquiry with <strong>www.andhralegalhouse.org</strong><br><br><strong><u>Enquiry Details :</u></strong><br>
Date of Posting: '.$DateofPosting.'<br>Company Name: '.$EDCompanyName.'<br>Contact Person: '.$EDContactPerson.'<br>Designation: '.$EDDesignation.'<br>Contact No: '.$EDContactNo.'<br>E-Mail ID: '.$EDEMailID.'<br>Address: '.$EDAddress.'<br>Type of Business: '.$EDTypeofBusiness.'<br><br><strong><u>Comments:</u></strong><br>'.$EDYourMessage.'<br><br>
<strong>We will get back to you shortly!</strong><br><br>-Regards<strong><br>Andhra Legal House Team<br>E-Mail: info@andhralegalhouse.org<br>Website: www.andhralegalhouse.org</strong></span>';

$fromadmin = "info@andhralegalhouse.org";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Andhra Legal House <info@andhralegalhouse.org>' . "\r\n";

$headersN  = 'MIME-Version: 1.0' . "\r\n";
$headersN .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersN .= 'From: '.$EDContactPerson.' <'.$EDEMailID.'>' . "\r\n";
//$headersN .= 'From: Andhra Legal House <info@andhralegalhouse.org>' . "\r\n";

$mail=mail($fromadmin,$email_subject,$msgmem,$headersN);
$mail=mail($EDEMailID,$email_subjectMem,$msgmem,$headers);

if($mail)
{
	$ut="true";
}
?>
<?

	header('Location: EnquiryDataDone.php?sts=success&NName='.$EDContactPerson);

?>
<?
};
?>