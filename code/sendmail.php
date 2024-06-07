<meta http-equiv="refresh" content="0;url=thankyou.html">

<?php



$to	= "www.weddingshagun@gmail.com"; 

    $subject = 'New Inquiry.';

	$name    = $_GET['name'];	

	$email    = $_GET['email'];

	$mobile = $_GET['phone'];

	$comments = $_GET['message'];

	$message  = '

<TABLE cellSpacing=0 cellPadding=0 width=550 border=0><TBODY>

<TR><TD width=550 background=""><br><TABLE style="BORDER-COLLAPSE: collapse" bordercolor="#eeeeee" cellspacing="2" cellpadding="2" width="90%" align="center" border="1" class="pagedetails">



<TR><TD><span class="style9">name</span></TD>

<TD><span class="style5">:</span></TD>

<TD><span class="style5"><STRONG><font color="#0000FF"> '.$name.'</font></STRONG></span></TD>

</TR>

<TR>

  <TD>email</TD>

  <TD>:</TD>

  <TD><STRONG><font color="#0000FF">'.$email.'</font></STRONG></TD>

</TR>

<TR>

  <TD><span class="style9">mobile</span></TD>

  <TD><span class="style5">:</span></TD>



<TD><span class="style5"><STRONG><font color="#0000FF">'.$mobile.'</font></STRONG></span></TD></TR>

<TR>

  <TD><span class="style9">message</span></TD>

  <TD><span class="style5">:</span></TD>



<TD><span class="style5"><STRONG><font color="#0000FF">'.$comments.'</font></STRONG></span></TD></TR>



<TR>

  <TD colspan="3">From IP: '.$_SERVER['REMOTE_ADDR'].'</TD>

  </TR>          



</TABLE>

<P style="PADDING-LEFT: 52px; FONT-SIZE: 11px; MARGIN-RIGHT: 51px; PADDING-TOP: 0px; FONT-FAMILY: verdana"><SPAN style="PADDING-LEFT: 0px; FONT-SIZE: 11px; MARGIN-RIGHT: 51px; PADDING-TOP: 10px; FONT-FAMILY: verdana">Warm regards, <BR>

<B>help@weddingshagun.com</B> <BR> 

 <br>

 <BR>

 <BR>

 <BR>

 </SPAN></P></TD></TR><TR><TD vAlign=top width=550 background="" height="19" align="center">&nbsp;</TD>

</TR></TBODY></TABLE>

';

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail_sent = mail($to, $subject, $message, $headers, 

   '-fenquiry@weddingshagun.com');

if($mail_sent)

{echo "Mail sent";}

else{echo "can not sent";}

?>





