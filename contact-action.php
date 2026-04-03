<?php

$ef_name=$_POST["ef_name"];
$ef_email=$_POST["ef_email"];
$ef_phone=$_POST["ef_phone"];
$ef_subject=$_POST["ef_subject"];
$ef_message=$_POST["ef_message"];
$ef_company=$_POST["ef_company"];
$dt=date('Y-m-d H:i:s');


$toemail="info@i-raysolutions.com";
$submsg="I-RAY IT SOLUTIONS - Enquiry Details";
$headers = "From:info@irayitsolutions.com/\r\n"."X-Mailer: php";
$headers.= "MIME-Version: 1.0\n"; 
$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";

$body="<html><body><center><table width='100%' border='0' cellspacing='0' cellpadding='0' bordercolorlight='#' bgcolor='#FFFFFF' bordercolordark='#FFFFFF'>
<TR><TD align=left width=716 colSpan=2 height='25' bgcolor=#0A1D3E><FONT face=Arial color='#FFFFFF' size=3>&nbsp;<b>I-RAY IT SOLUTIONS - Enquiry Details</b></FONT></TD></TR>
<tr bgcolor='#f2f2f2'>
<td width='716' valign='middle' height='25'><font face='Arial' size=2>&nbsp;Name</font></td>
<td width='716' height='25' class='green'><strong><font face='Arial' size=2>&nbsp;$ef_name</font></strong></td>
</tr>
<tr bgcolor='#ffffff'>
<td width='716' valign='middle' height='25'><font face='Arial' size=2>&nbsp;Email</font></td>
<td width='716' height='25' class='green'><strong><font face='Arial' size=2>&nbsp;$ef_email</font></strong></td>
</tr>
<tr bgcolor='#f2f2f2'>
<td width='716' valign='middle' height='25'><font face='Arial' size=2>&nbsp;Phone</font></td>
<td width='716' height='25' class='green'><strong><font face='Arial' size=2>&nbsp;$ef_phone</font></strong></td>
</tr>
<tr bgcolor='#ffffff'>
<td width='716' valign='middle' height='25'><font face='Arial' size=2>&nbsp;Services/Solutions</font></td>
<td width='716' height='25' class='green'><strong><font face='Arial' size=2>&nbsp;$ef_subject</font></strong></td>
</tr>
<tr bgcolor='#f2f2f2'>
<td width='716' valign='middle' height='25'><font face='Arial' size=2>&nbsp;Company Name</font></td>
<td width='716' height='25' class='green'><strong><font face='Arial' size=2>&nbsp;$ef_company</font></strong></td>
</tr>
<tr bgcolor='#ffffff'>
<td width='716' valign='middle' height='25'><font face='Arial' size=2>&nbsp;Message</font></td>
<td width='716' height='25' class='green'><strong><font face='Arial' size=2>&nbsp;$ef_message</font></strong></td>
</tr>
</table>
</body></html>";
//echo($body);
//exit();
	if (mail($toemail, $submsg, $body, $headers))
	{
		$URL="contact-us.php?id=success";header ("Location: $URL");
	}
	else
	{
		echo("<p>Message delivery failed...</p>");
	}
?>