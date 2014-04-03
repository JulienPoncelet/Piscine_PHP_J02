#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$split = explode(" ", $str);
	$len = count($split);
	$i = 0;
	while ($i < $len)
	{
		if (!$split[$i])
		{
			array_splice($split, $i, 1);
			$len--;
		}
		else
			$i++;
	}
	return $split;
}

if ($argc > 1)
{
	$tmp = preg_replace("/\t/", " ", $argv[1]);
	$tmp = ft_split($tmp);
	foreach ($tmp as $key => $value)
	{
		if ($key)
			print(" ".$value);
		else
			print($value);
	}
	print("\n");
}

?>
