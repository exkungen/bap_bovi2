<?php

$teachers =  array('ingrid ','erwin','jelle');

//echo $teachers[1];


//maak van jelle ed


//$teachers[1] = 'ed';

//var_dump($teachers);
//print_r($teachers);
//for($i = 0;$i <3;$i++) {
//    echo '<p>'. $teachers. '</p>'[$i];
//}
//$teachers[] = 'theo';

array_push($teachers, 'theo' , 'paul' , 'hugo');

foreach ($teachers as $one_teacher) {
    echo '<p>'. $one_teacher .'</p>';
}

//assosictiave array

$subjects = array('ingrid' => 'bap', 'joey' => 'pro', 'jelle' => 'fro');


//echo $subjects['ingrid'];

foreach ($subjects as $docent => $subject) {
    echo $docent . 'teaches' . $subject . '<br>';
}

