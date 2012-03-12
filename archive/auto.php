<?php
/**
* NOT SURE WHY THIS FILE IS HERE. I'm leaving in case though. -ben.
* This is just an example how to generate a proper content.
*
* When you give the variable "html=true" it returns a list
* of choices as raw data, otherwise it will encode these
* <li> items as json array.
*/

$limit = 10;

$value = strtolower(@array_pop(@explode(' ', $_POST['value']) ) );

$data = array();

ini_set('memory_limit', '48M');

if (strlen($value) > 0) {
    $source = file_get_contents('types.txt');
    preg_match_all('/^'. preg_quote($value) .'(.*)$/mi', $source, $match);
    $data = array_slice(array_values(array_unique($match[0]) ), 0, $limit);
}

if (isset($_POST['html']) && $_POST['html']) {
    foreach($data as $choice)
    {
        echo "<li><span>$choice</span></li>";
    }
} else {
    header('Content-type: application/json');
    echo json_encode($data);
}

?>