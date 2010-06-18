<?php
	$output = $_POST['dat'];
	
	$fh = fopen("list_out.txt", 'a') or die("can't open file");
	fwrite($fh, $output);

	fclose($fh);
	
	echo "File Written Successfully."
?>
