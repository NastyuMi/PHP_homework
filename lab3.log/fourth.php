<?php
$array2 = [];
$array3 = [];

for ($i = 10; $i <= 20; $i++) {
    $array2[] = pow($i,2);
}

for ($i = 1; $i <= 10; $i++) {
    $array3[] = pow($i,3);
}
$merged = array_merge($array2, $array3);
echo '<table border="1" >';
echo '<tr><td><pre>Square ';
print_r($array2);
echo '</pre></td><td><pre>Cube';
print_r($array3);
echo '</pre></td><td><pre>Merged  ';
print_r($merged);
echo '</pre></td></tr>';
echo '</table>';
