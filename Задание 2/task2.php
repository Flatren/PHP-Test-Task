<?php 
function GetArrayString($pref, $arraString)
{
	$array = array();
	$count = strlen($pref);
	foreach ( $arraString as $string ) {
		$i=0;
		$countString = strlen($string);
		$b = true;
		while ($b && $i < $count && $i < $countString) {
			$b=$b && $string[$i] == $pref[$i];
			$i++;
		}
		$b=$b && $i == $count;
		if($b)
		{
			array_push($array, $string);
		}
		
	}
	return $array;
}
$array = array("foo", "bar", "hallfo", "foworld");
$pref = "fow";
print_r(GetArrayString($pref,$array));
?>
