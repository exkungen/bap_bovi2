
<?php

$numbers = array('2', '4', '6', '1', '3', '5');
$result = count($numbers);
echo 'Aantal getallen: ' . $result . "<br/>";

for($i = 0; $i < $result; $i++){
    echo $numbers[$i] . '<br/>';
}

echo '<hr/>';

$numbers[5] = 8;
echo 'Aantal getallen: ' . $result . "<br/>";

for($i = 0; $i < $result; $i++){
    echo $numbers[$i] . '<br/>';
}

echo '<hr/>';

array_push($numbers, 9, 7);
$result = count($numbers);
echo 'Aantal getallen: ' . $result . "<br/>";

for($i = 0; $i < $result; $i++){
    echo $numbers[$i] . '<br/>';
}

echo '<hr/>';

$mixed = array('4', 'januari', 'februari', '12', 'maart', '11', 'april');
$result = count($mixed);
echo 'Aantal getallen: ' . $result . "<br/>";

for($i = 0; $i < $result; $i++){
    echo $mixed[$i] . '<br/>';
}

echo '<hr/>';

$mixed[0] = 'fietspomp';
$mixed[1] = 'ventiel';
$mixed[2] = 'lucht';
echo 'Aantal getallen: ' . $result . "<br/>";

for($i = 0; $i < $result; $i++){
    echo $mixed[$i] . '<br/>';
}

echo '<hr/>';

$subject = array("PHP" => "Ingrid", "JavaScript" => "Ed", "Engels" => "Birgit");
echo $subject['PHP'] . '<br/>';
echo $subject['JavaScript'] . '<br/>';
echo $subject['Engels'] . '<br/>';
?>
