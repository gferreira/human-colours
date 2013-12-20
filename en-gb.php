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
//example usage:
?>
<!doctype html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>A random coloured background.</title>
<style>
body {
	background: white;
	margin: 0;
	padding: 0;
}
p {
	position: absolute;
	bottom: 0;
	right: 0;
	max-width: 24em;
	margin: 0 1em 1em;
	background: rgba(255,255,255,.5)
}
</style>
<?php


$h1 = rand(0,360);
$s1 = rand(0,100);
$l1 = rand(0,100);
$colour1 = hueName($h1);
$saturation1 = saturationName($s1);
$lightness1 = lightnessName($l1);

echo '<body style="background: '.returnColor($h1,$s1,$l1).'">';
echo '<p>You are probably looking at a'.$saturation1.$lightness1.$colour1.' browser screen.</p>';
echo '</body>';

?>







