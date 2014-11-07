<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

$string = "londondrugs";

Function glyph($input) {
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
			if ($textarray[$i]['unglyphed']==0) {
				$output=$textarray;
				$output[$i]=$glyphs[$textarray[$i]][$k];
				$output[$i]['unglyphed']=0;
				$returnoutput[] = $output;
			}
		}
	}
	return $returnoutput;
}

$textarray = str_split($string);
$j = count($textarray);
for ($i=0; $i<$j; $i++) {
	$textarray[$i]['glyph']=0;
}

$blahblah = glyph($textarray);

$j = count($blahblah);
for ($i=0; $i<$j; $i++) {
	$temp = implode('',$blahblah[$i]);
}
?>