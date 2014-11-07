<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$string = "londondrugs";

Function glyph($input) {
	$textarray = str_split($input);

	$glyphs['l'] = array("1", "I");
	$glyphs['o'] = array("0");
	$glyphs['n'] = array("ri");
	$glyphs['d'] = array("cl", "cI", "c1");
	$glyphs['r'] = NULL;
	$glyphs['u'] = NULL;
	$glyphs['g'] = array("q");
	$glyphs['s'] = array("z");

	$j = count($textarray);
	for ($i=0; $i<$j; $i++) {
		$l = count($glyphs[$textarray[$i]]);
		for ($k=0; $k<$l; $k++) {
			$output=$textarray;
			$output[$i]=$glyphs[$textarray[$i]][$k];
			$test = implode('',$output);
			echo "this is a test: $test<br>\n";
			$returnoutput[] = implode('',$output);
		}
	}
	return $returnoutput;
}

$blahblah = glyph($string);
print_r($blahblah);

/*
$j = count($blahblah);

for ($i=0; $i<$j; $i++) {
	echo $blahblah[$i];
}
*/
?>