<?php
$destinyname = 'Pedro';
$destinyaddr = 'pdrcosta90@gmail.com';

$sendername = 'Pedro';
$senderaddr = 'pedro@pfac.info';

$boundary = md5(time());

$header  = "MIME-Version: 1.0\r\n";
$header .= "From: $sendername <$senderaddr>\r\n";
$header .= "Reply-To: $sendername <$senderaddr>\r\n";
$header .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n";

$body  = "--$boundary\r\n";
$body .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n";
$body .= "plain text...\r\n";
$body .= "--$boundary\r\n";
$body .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
$body .= "<p><strong>HTML</strong> text</p>\r\n";
$body .= "--$boundary--\r\n";

if(mail("$destinyname <$destinyaddr>", 'Test', $body, $header))
{
	echo 'Success';
}
else
{
	echo 'Failure';
}

?>