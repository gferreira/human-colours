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
	if($s < 10) { $sat =  'almost hueless'; }
	if($s > 9) { $sat =  ' very unsaturated'; }
	if($s > 30) { $sat =  'unsaturated'; }
	if($s > 60) { $sat =  'rather saturated'; }
	if($s > 80) { $sat =  'highly saturated'; }
	return $sat;
}
function lightnessName($l) {
	if($l < 10) { $light = 'almost black'; }
	if($l > 9) { $light = 'very dark'; }
	if($l > 22) { $light = 'dark '; }
	if($l > 30) { $light = 'normal?'; }
	if($l > 60) { $light = 'light '; }
	if($l > 80) { $light = 'very light '; }
	if($l > 94) { $light = 'almost white, '; }
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
<title>Correct names for saturation values.</title>
<style>
body {
	font: 120%/1.5 georgia, serif;
	background: white;
	margin: 0;
	padding: 2em;
}
h1 {
	max-width: 24em;
}
p {
	max-width: 24em;
	margin: 1em 0;
	-moz-hyphens: auto;
	hyphens: auto;
}
div {
	width: 7em;
	height: 7em;
	float: left;
}
</style>

<h1>Trying to map the correct human lightness names to hsl-lightness values</h1>
<p>In order to set the correct lightness names, colour is set to 120 (green), and saturation to 100%. So <code>hsl(120,100%,15%)</code> might result in something like <q>A rather saturated, very dark green</q>. I <em>guess</em> this is a good setting for analyzing lightness, if you know a better setting, let me know. </p>

<p>In this next table you'll see the value of the lightness, and the human name behind it. If you know a better layout for such a table, please let me know. </p>
<p>We're looking for the correct names here <em>and</em> for the correct boundaries: does <em>almost black</em> really end at 9? If you know of a scientific approach, please let me know.</p>
<?php


$h1 = rand(0,360);
$s1 = rand(0,100);
$l1 = rand(0,100);
$colour1 = hueName($h1);
$saturation1 = saturationName($s1);
$lightness1 = lightnessName($l1);

$i = 1;

while ( $i < 101 ) {
	echo '<div style="background: hsl(120, 100%, '.$i.'%)">'.$i.' = '.lightnessName($i).'</div>';
	$i++;
}

?>







