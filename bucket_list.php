<?php

$woeshoem = array();
echo "Hoe veel activiteiten wil je toevoegen?";
$hvl = readline();
if (is_numeric($hvl)){
;}else {
  echo "Dit is geen cijfer, boeler.";
  exit;
}
for ($i=0; $i <= $hvl; $i++) {
  echo "Wat wil je toevoegen aan jouw bucket list?";
  $B = readline(">") . PHP_EOL;
  $woeshoem[] = $B;
}
echo "Op jouw bucketlist staat: " . PHP_EOL ;
foreach ($woeshoem as $key => $value) {
echo $key . $value . PHP_EOL;
}
 ?>
