#!/usr/bin/php
<?PHP

while (1)
{
	echo "Enter a number: ";
	if (($input = fgets(STDIN)) == NULL)
		break;
	if ($input)
	{
		$input = str_replace("\n", "", $input);
		if (is_numeric($input))
		{
			if ($input % 2 == 0)
				echo "The number $input is even\n";
			else
				echo "The number $input is odd\n";
		}
		else
			echo "'".$input."' is not a number\n";
	}
}
echo "\n";

?>