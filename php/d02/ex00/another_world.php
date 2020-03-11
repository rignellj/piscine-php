#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$tab = trim(preg_replace('/[ \t]+/', ' ', $argv[1]));
	print ("$tab\n");
}

?>