<?php
//Newsletter Form
if(isset($_REQUEST['submit'])){
$adminEmail="example@gmail.com"; // Change with your email address
$subject = "Newsletter Subscribe"; // Change with your subject
$name="Newsletter";
if($_REQUEST['email'])
 $email = $_REQUEST['email'];
else
$email = "Not Specified";
$to=$adminEmail.",".$email; 



$msgg='<table width="100%" border="0" cellspacing="5" cellpadding="5">
			  <tr>
				<td width="50%" align="left" class="blacktext01">Email Address: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$email.'</span></td>
			  </tr>
	   </table>';
	   $message=$msgg;
        $headers  = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-MSMail-Priority: Normal\n";
		$headers .= "X-Mailer: php\n";
		$headers .="From:".$name."<".$email.">\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail($to, $subject, $message, $headers);
}

//Contect Form 
if(isset($_REQUEST['send'])){
$adminEmail="example@gmail.com"; // Change with your email address
$subject = "Contect Form"; // Change with your subject
if($_REQUEST['name'])
$name = $_REQUEST['name'];
else
$name = "Not Specified"; 
if($_REQUEST['contactemail'])
 $contactemail = $_REQUEST['contactemail'];
else
$contactemail = "Not Specified"; 
$to=$adminEmail.",".$contactemail; 
if($_REQUEST['message'])
 $msg = $_REQUEST['message'];
else
$msg = "Not Specified"; 

$msgg='<table width="100%" border="0" cellspacing="5" cellpadding="5">
			  <tr>
				<td width="50%" align="left" class="blacktext01">Name: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$name.'</span></td>
			  </tr>
			  <tr>
				<td width="50%" align="left" class="blacktext01">Email Address: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$contactemail.'</span></td>
			  </tr>
			  <tr>
				<td width="50%" align="left" class="blacktext01">Message: </td>
				<td width="50%" align="left"><span class="blacktext01">'.$msg.'</span></td>
			  </tr>
	   </table>';
	   $message=$msgg;
        $headers  = "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "X-Priority: 3\n";
		$headers .= "X-MSMail-Priority: Normal\n";
		$headers .= "X-Mailer: php\n";
		$headers .="From:".$name."<".$email.">\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail($to, $subject, $message, $headers);
}