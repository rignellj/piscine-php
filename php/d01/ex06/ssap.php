#!/usr/bin/php
<?PHP

function ft_split(string $str)
{
	$tab = trim(preg_replace('/\s+/', ' ', $str));
	if ($tab == NULL)
		return (NULL);
	$tab = explode(' ', $tab);
	sort($tab);
	return ($tab);
}
$array = [];
array_shift($argv);
foreach($argv as $elem)
	array_push($array, $elem);
$tab = ft_split(implode(" ", $array));
foreach($tab as $elem)
	echo "$elem\n";
?>