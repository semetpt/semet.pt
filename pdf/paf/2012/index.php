<?php
	$scriptname = basename( $_SERVER['SCRIPT_NAME'] );

	#header('Content-Type: text/plain; charset=UTF-8');
	#echo 'Hello! I am ', $scriptname, "\n";
	if ( $dir = opendir('.') )
	{
		#echo 'Dir open!', "\n";
		while ( ( $filename = readdir($dir) ) )
		{
			#echo $filename;
			if ( $filename != $scriptname && is_file( $filename ) )
			{
				#echo '; is a file';
			 	if ( ( $time = filemtime( $filename ) ) !== false )
			 	{
			 		#echo '; modified in ', $time;
			 		if ( $time > $last_time )
			 		{
			 			#echo '; new last';
			 			$last = $filename;
			 			$last_time = $time;
			 		}
				}
			}
			#echo "\n";
		}
	}
	if ( ! isset($last) )
		$last = '..';
	#echo $last, "\n";
	header("Location: $last");
?>