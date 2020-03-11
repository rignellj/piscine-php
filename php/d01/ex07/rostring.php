#!/usr/bin/php
<?PHP

if (argv[1])
{
	$s1 = trim(preg_replace('/\s+/', ' ', $argv[1]));
	$array = explode(" ", $s1);
	if (count($array) == 1)
		{
			print ("$s1\n");
			return ;
		}
	$first_str = $array[0];
	array_shift($array);
	echo implode(" ", $array);
	echo " $first_str\n";
}

?>