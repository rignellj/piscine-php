#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$tab = trim(preg_replace('/\s+/', ' ', $argv[1]));
	print ("$tab\n");
}

?>