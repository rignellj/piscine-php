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

?>