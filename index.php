<?php 
/* hue */
function hueName($h) {
	if ($h < 15) { $hue = 'red'; }
	elseif ($h === 15) { $hue = 'reddish'; }
	else if ($h > 15 && $h < 46) { $hue = 'orange'; }
	else if ($h > 45 && $h < 71) { $hue = 'yellow'; }
	else if ($h > 70 && $h < 80) { $hue = 'lime'; }
	else if ($h > 79 && $h < 164) { $hue = 'green'; }
	else if ($h > 163 && $h < 194) { $hue = 'cyan'; }
	else if ($h > 193 && $h < 241) { $hue = 'blue'; }
	else if ($h > 240 && $h < 261) { $hue = 'indigo'; }
	else if ($h > 260 && $h < 271) { $hue = 'violet'; }
	else if ($h > 270 && $h < 292) { $hue = 'purple'; }
	else if ($h > 291 && $h < 327) { $hue = 'magenta'; }
	else if ($h > 327 && $h < 345) { $hue = 'rose'; }
	else if ($h > 344 && $h < 360) { $hue = 'red'; }
	return $hue;
}
function saturationName($s) {
	if($s < 10) { $sat =  'n almost hueless'; }
	if($s > 9) { $sat =  ' very unsaturated'; }
	if($s > 30) { $sat =  'n unsaturated'; }
	if($s > 60) { $sat =  ' rather saturated'; }
	if($s > 80) { $sat =  ' highly saturated'; }
	return $sat;
}
function lightnessName($l) {
	if($l < 10) { $light = ', almost black, '; }
	if($l > 9) { $light = ', very dark '; }
	if($l > 22) { $light = ', dark '; }
	if($l > 30) { $light = ' '; }
	if($l > 60) { $light = ', light '; }
	if($l > 80) { $light = ', very light '; }
	if($l > 94) { $light = ', almost white, '; }
	return $light;
}
function returnColor($h,$s,$l) {
	return 'hsl('.$h.', '.$s.'%, '.$l.'%)';
}
?>