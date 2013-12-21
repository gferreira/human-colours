<?php 
/* hue */
function hueName($h) {
	if ($h < 15) { $hue = 'red'; }
	if ($h === 15) { $hue = 'reddish'; }
	if ($h > 15) { $hue = 'orange'; }
	if ($h > 45) { $hue = 'yellow'; }
	if ($h > 70) { $hue = 'lime'; }
	if ($h > 79) { $hue = 'green'; }
	if ($h > 163) { $hue = 'cyan'; }
	if ($h > 193) { $hue = 'blue'; }
	if ($h > 240) { $hue = 'indigo'; }
	if ($h > 260) { $hue = 'violet'; }
	if ($h > 270) { $hue = 'purple'; }
	if ($h > 291) { $hue = 'magenta'; }
	if ($h > 327) { $hue = 'rose'; }
	if ($h > 344) { $hue = 'red'; }
	return $hue;
}
/* saturation */
function saturationName($s) {
	if($s < 10) { $sat =  'almost hueless'; }
	if($s > 9) { $sat =  'very unsaturated'; }
	if($s > 30) { $sat =  'unsaturated'; }
	if($s > 60) { $sat =  'rather saturated'; }
	if($s > 80) { $sat =  'highly saturated'; }
	return $sat;
}
/* lightness */
function lightnessName($l) {
	if($l < 10) { $light = 'almost black'; }
	if($l > 9) { $light = 'very dark'; }
	if($l > 22) { $light = 'dark'; }
	if($l > 30) { $light = 'normal'; }
	if($l > 60) { $light = 'light'; }
	if($l > 80) { $light = 'very light'; }
	if($l > 94) { $light = 'almost white'; }
	return $light;
}
/* hsl */
function returnColor($h,$s,$l) {
	return 'hsl('.$h.', '.$s.'%, '.$l.'%)';
}

?>
