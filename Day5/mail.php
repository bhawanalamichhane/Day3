<?php
	$isSent = mail(
		"bhawanal77@gmail.com",
		"test mail",
		"testing mail of php"
	);
	echo $isSent;
	if ($isSent) echo "mail sent";
	else echo "failed";
?>

