<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$string = "londondrugs";
$domainstring = str_split($string);

$glyphs['l'] = array("1", "I");
$glyphs['o'] = array("0");
$glyphs['n'] = array("ri");
$glyphs['d'] = array("cl", "cI", "c1");
// $glyphs['r'] = array("");
// $glyphs['u'] = array("");
$glyphs['g'] = array("q");
$glyphs['s'] = array("z");

// print_r($glyphs);

// $j = count($domainstring);
$j = 1;
for ($i=0; $i < $j; $i++) {
	$l = count($glyphs[$domainstring[$i]]);
	for ($k=0; $k < $l; $k++) {
		$output = $domainstring;
		$output[$i] = $glyphs[$domainstring[$i]][$k];
		$test = $glyphs[$domainstring[$i]][$k];
		echo "my test is $test<br>\n";
		$returnoutput = implode('',$output);
		echo "$returnoutput<br>\n";
	}
}
?>