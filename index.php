<html>
  <head>
    <title> Máš zkažené zuby </title>
  </head>
  <body>
 <?php

$teethstains[0]  = "Bíle zuby";
$teethstains[1]  = "Trochu žluté zuby";
$teethstains[2]  = "Středně žluté zuby";
$teethstains[3]  = "Žluté zuby";
$teethstains[4]  = "Velice žluté zuby";
$teethstains[5]  = "Neexistující zuby";

$cavity[0]  = "No cavity";
$cavity[1]  = "Small amout cavity";
$cavity[2]  = "Visible cavities";
$cavity[3]  = "Huge amout of cavities";
$cavity[4]  = "Cavities on every tooth";
$cavity[5]  = "Teeth non existent";
 
$gum[0]   = "Healthy gums";
$gum[1]   = "Ok gums";
$gum[2]   = "Receding gums";
$gum[3]   = "Bleeding gums";
$gum[4]   = "Gingivitis";
$gum[5]   = "Periodontitis";

$toothbrush[0] = "Philips Sonicare ProtectiveClean 4500";
$toothbrush[1] = "Philips Sonicare ProtectiveClean 6100";
$toothbrush[2] = "Oral-B PRO 790";
$toothbrush[3] = "Oral-B iO 8 Black";
$toothbrush[4] = "ORAL-B GENIUS X";
$toothbrush[5] = "ORAL-B SMART 6 6000N";

$brace[0]  = "Full bracers";
$brace[1]  = "Half bracers";
$brace[2]  = "Four bracers";
$brace[3]  = "Three bracers";
$brace[4]  = "Two bracers";
$brace[5]  = "No bracers";

$subject[0] ['fullname']= "Šimon Siksta";
$subject[0] ['teethnumber'] = "32";
$subject[0] ['bracers'] = $brace[5];
$subject[0] ['toothbrushes'] = $toothbrush[3];
$subject[0] ['gumhealth']  = $gum[0];
$subject[0] ['cavityonteeth'] = $cavity[0];
$subject[0] ['stains'] = $teethstains[0];

$subject[1] ['fullname'] = "Martin Lédl";
$subject[1] ['teethnumber'] = "31";
$subject[1] ['bracers'] = $brace[5];
$subject[1] ['toothbrushes'] = $toothbrush[5];
$subject[1] ['gumhealth']  = $gum[0];
$subject[1] ['cavityonteeth'] = $cavity[0];
$subject[1] ['stains'] = $teethstains[0];

$subject[2] ['fullname'] = "Walter White";
$subject[2] ['teethnumber'] = "30";
$subject[2] ['bracers'] = $brace[5];
$subject[2] ['toothbrushes'] = $toothbrush[2];
$subject[2] ['gumhealth']  = $gum[0];
$subject[2] ['cavityonteeth'] = $cavity[0];
$subject[2] ['stains'] = $teethstains[0];
?>

<h1> Teeth tester </h1>

<?php
foreach($subject[0] as $a => $a_value) {
  echo $a . ": " . $a_value;
  echo "<br>";
}
?>
<br><br>
<?php
foreach($subject[1] as $b => $b_value) {
  echo $b . ": " . $b_value;
  echo "<br>";
}
?>
<br><br>
<?php
foreach($subject[2] as $c => $c_value) {
  echo $c . ": " . $c_value;
  echo "<br>";
}
?>
<br><br>
  </body>
</html>
