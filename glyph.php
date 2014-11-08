<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);



Function glyph($textarray) {
	$glyphs['l'] = array("1", "I");
	$glyphs['o'] = array("0");
	$glyphs['n'] = array("ri");
	$glyphs['d'] = array("cl", "cI", "c1");
	$glyphs['r'] = NULL;
	$glyphs['u'] = NULL;
	$glyphs['g'] = array("q");
	$glyphs['s'] = array("z");
	$j = count($textarray[0][$array]);
	for ($i=0; $i<$j; $i++) {
		$l = count($glyphs[$textarray[0][$array][$i]]);
		for ($k=0; $k<$l; $k++) {
			if ($textarray[0][$array][$i]['glyph']==0) {
				$output=$textarray[0][$array];
				$output[$i]=$glyphs[$textarray[0][$array][$i]][$k];
				$output[$i]['glyph']=0;
				$returnoutput[] = $output;
			}
		}
	}
	return $returnoutput;
}


$string = "londondrugs";
$temp = str_split($string);
$j = count($temp);
for ($i=0; $i<$j; $i++) {
	$textarray[$i]['string'] = $string;
	$textarray[$i]['array'] = array(
		$i => $temp[$i],
		'glyph' => 0
	);
}

$blahblah = glyph($textarray);

$j = count($blahblah);
for ($i=0; $i<$j; $i++) {
	$temp = implode('',$blahblah[$i]);
}
?>