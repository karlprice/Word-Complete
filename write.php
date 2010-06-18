<?php
	$output = $_GET['dat'];
	
	$output = str_replace( "<br>", "\n", $output);
	
	$fh = fopen("list_out.txt", 'a') or die("can't open file");
	fwrite($fh, $output);

	fclose($fh);
	
	echo "File Written Successfully."
?>
