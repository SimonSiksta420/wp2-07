<html>
  <head>
    <title> Máš zkažené zuby </title>
  </head>
  <body>
 <?php
$teethcount[0] ['teethnumber'] = "32";
$teethcount[1] ['teethnumber'] = "30";
$teethcount[2] ['teethnumber'] = "28";
$teethcount[3] ['teethnumber'] = "25";
$teethcount[4] ['teethnumber'] = "22";
$teethcount[5] ['teethnumber'] = "19";

$teethstains[0] ['stains'] = "Bíle zuby";
$teethstains[1] ['stains'] = "Trochu žluté zuby";
$teethstains[2] ['stains'] = "Středně žluté zuby";
$teethstains[3] ['stains'] = "Žluté zuby";
$teethstains[4] ['stains'] = "Velice žluté zuby";
$teethstains[5] ['stains'] = "Neexistující zuby";

$cavity[0] ['cavityonteeth'] = "No cavity";
$cavity[1] ['cavityonteeth'] = "Small amout cavity";
$cavity[2] ['cavityonteeth'] = "Visible cavities";
$cavity[3] ['cavityonteeth'] = "Huge amout of cavities";
$cavity[4] ['cavityonteeth'] = "Cavities on every tooth";
$cavity[5] ['cavityonteeth'] = "Teeth non existent";
 
$gum[0] ['gumhealth']  = "Healthy gums";
$gum[1] ['gumhealth']  = "Ok gums";
$gum[2] ['gumhealth']  = "Receding gums";
$gum[3] ['gumhealth']  = "Bleeding gums";
$gum[4] ['gumhealth']  = "Gingivitis";
$gum[5] ['gumhealth']  = "Periodontitis";

$toothbrush[0] ['toothbrushes'] = "Philips Sonicare ProtectiveClean 4500";
$toothbrush[1] ['toothbrushes'] = "Philips Sonicare ProtectiveClean 6100";
$toothbrush[2] ['toothbrushes'] = "Oral-B PRO 790";
$toothbrush[3] ['toothbrushes'] = "Oral-B iO 8 Black";
$toothbrush[4] ['toothbrushes'] = "ORAL-B GENIUS X";
$toothbrush[5] ['toothbrushes'] = "ORAL-B SMART 6 6000N";

$brace[0] ['bracers'] = "Full bracers";
$brace[1] ['bracers'] = "Half bracers";
$brace[2] ['bracers'] = "Four bracers";
$brace[3] ['bracers'] = "Three bracers";
$brace[4] ['bracers'] = "Two bracers";
$brace[5] ['bracers'] = "No bracers";

$name[0] ['fullname'] = "Martin Ledl";
$name[1] ['fullname'] = "Sorin Eni";
$name[2] ['fullname'] = "Sismon Siksta";
$name[3] ['fullname'] = "Jesse Pinkman";
$name[4] ['fullname'] = "Walter White";
$name[5] ['fullname'] = "Walter White Junior";

$subject[1] ['fullname'] = $name[0];
$subject[1] ['teethnumber'] = $teethcount[0];
$subject[1] ['bracers'] = $brace[5];
$subject[1] ['toothbrushes'] = $toothbrush[3];
$subject[1] ['gumhealth']  = $gum[0];
$subject[1] ['cavityonteeth'] = $cavity[0];
$subject[1] ['stains'] = $teethstains[0];

?>

<h1> Zdravý zubů </h1>

<?=print_r($subject[1])?>

  </body>
</html>
