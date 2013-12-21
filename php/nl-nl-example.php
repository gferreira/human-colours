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
function saturationName($s) {
	if($s < 10) { $sat =  ' bijna kleurloos'; }
	if($s > 9) { $sat =  ' erg onverzadigd'; }
	if($s > 30) { $sat =  ' onverzadigd'; }
	if($s > 60) { $sat =  ' flink verzadigd'; }
	if($s > 80) { $sat =  ' enorm verzadigd'; }
	return $sat;
}
function lightnessName($l) {
	if($l < 10) { $light = ', bijna zwart '; }
	if($l > 9) { $light = ', zeer donker '; }
	if($l > 22) { $light = ', donker '; }
	if($l > 30) { $light = ' '; }
	if($l > 60) { $light = ', licht '; }
	if($l > 80) { $light = ', zeer licht '; }
	if($l > 94) { $light = ', bijna wit '; }
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
<title>A willekeurig gekleurdeachtergrond</title>
<style>
body {
	font: 120%/1.5 georgia, serif;
	background: white;
	margin: 0;
	padding: 0;
}
p {
	max-width: 24em;
	margin: 0;
	padding: 1em;
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
echo '<p>De kans is groot dat u kijkt naar een '.$saturation1.$lightness1.$colour1.' browser-scherm.</p>';
echo '</body>';

?>







