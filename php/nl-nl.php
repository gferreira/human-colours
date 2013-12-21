<?php 
/* hue */
function hueName($h) {
	if ($h < 15) { $hue = 'rode'; }
	if ($h === 15) { $hue = 'rood-oranje'; }
	if ($h > 15) { $hue = 'oranje'; }
	if ($h > 45) { $hue = 'gele'; }
	if ($h > 70) { $hue = 'limoen-groene'; }
	if ($h > 79) { $hue = 'groene'; }
	if ($h > 163) { $hue = 'cyaan'; }
	if ($h > 193) { $hue = 'blauwe'; }
	if ($h > 240) { $hue = 'indigo'; }
	if ($h > 260) { $hue = 'violette'; }
	if ($h > 270) { $hue = 'paarse'; }
	if ($h > 291) { $hue = 'magenta'; }
	if ($h > 327) { $hue = 'roze'; }
	if ($h > 344) { $hue = 'rode'; }
	return $hue;
}
/* saturation */
function saturationName($s) {
	if($s < 10) { $sat =  'bijna kleurloze'; }
	if($s > 9) { $sat =  'erg onverzadigde'; }
	if($s > 30) { $sat =  'onverzadigde'; }
	if($s > 60) { $sat =  'flink verzadigde'; }
	if($s > 80) { $sat =  'enorm verzadigde'; }
	return $sat;
}
/* lightness */
function lightnessName($l) {
	if($l < 10) { $light = 'bijna zwart'; }
	if($l > 9) { $light = 'zeer donker'; }
	if($l > 22) { $light = 'donker'; }
	if($l > 30) { $light = 'normaal'; }
	if($l > 60) { $light = 'licht'; }
	if($l > 80) { $light = 'zeer licht'; }
	if($l > 94) { $light = 'bijna wit'; }
	return $light;
}
/* hsl */
function returnColor($h,$s,$l) {
	return 'hsl('.$h.', '.$s.'%, '.$l.'%)';
}

?>
