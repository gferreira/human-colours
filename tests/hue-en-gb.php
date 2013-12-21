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
<title>Correct names for hue values.</title>
<style>
body {
	font: 120%/1.5 georgia, serif;
	background: white;
	margin: 0;
	padding: 2em;
}
p {
	max-width: 24em;
	margin: 1em 0;
}
div {
	width: 7em;
	height: 7em;
	float: left;
}
</style>

<h1>Trying to map the correct human colour names to hsl-hue values.</h1>
<p>In order to set the correct colour names, saturation is set to 100%, and lightness to 50%. So <code>hsl(120,100%,50%)</code> might result in something like <q>A highly saturated green</q>. I <em>guess</em> this is a good setting for analyzing colours, if you know a better setting, let me know. Colours like <em>brown</em> will not appear with this setting — brown might be described like <q>an unsaturated, dark red</q> instead.</p>

<p>In this next table you'll see the value of the hue, and the human name behind it. If you know a better layout for such a table, please let me know. </p>
<p>We're looking for the correct names here <em>and</em> for the correct boundaries: does green really end at 163? If you know of a scientific approach, please let me know.</p>
<?php


$h1 = rand(0,360);
$s1 = rand(0,100);
$l1 = rand(0,100);
$colour1 = hueName($h1);
$saturation1 = saturationName($s1);
$lightness1 = lightnessName($l1);

$i = 0;

while ( $i < 360 ) {
	echo '<div style="background: hsl('.$i.', 100%, 50%)">'.$i.' = '.hueName($i).'</div>';
	$i++;
}

?>







