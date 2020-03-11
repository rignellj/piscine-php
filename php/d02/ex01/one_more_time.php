#!/usr/bin/php
<?PHP

if ($argv[1])
{
	$days = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi", "Dimanche");
	$months = array("Janvier"=>"January", "Février"=>"February", "Mars"=>"Mars", "Avril"=>"April", "Mai"=>"May", "Juin"=>"June", "Juillet"=>"July", "Août"=>"August", "Septembre"=>"September", "Octobre"=>"October", "Novembre"=>"November", "Décembre"=>"December");
	$tab = explode(" ", $argv[1]);
	if (count($tab) != 5)
	{
		print("Wrong Format\n");
		exit(1);
	}
	if (!array_search($tab[0], $days))
	{
		print("Wrong Format\n");
		exit(2);
	}
	if (array_search($tab[2], $months))
	{
		print("Wrong Format\n");
		exit(4);
	}
	$month = $tab[2];
	$check = strtotime("$tab[1] $months[$month] $tab[3] $tab[4]");
	if (!$check)
	{
		print("Wrong Format\n");
		exit(5);
	}
	print ("$check\n");
}
?>