<h1> If-else </h1>

<?php

//Hey This is first file

//if then - else

$x = 5;
if ($x > 5) {
    echo 'more then 5';
} else {
    echo 'less that 5';
}

if ($x > 5) {
    echo 'more then 5';
} elseif ($x === 5) {
    echo 'this is 5';
} else {
    echo 'less that 5';
}

?>
<h1> Loops </h1>

<?php
for ($i = 0; $i < 15; $i++) {
    echo '$i:' . $i . '<br>';
}

$y = 0;

while ($y < 5) {
    echo '$y:' . $y . '<br>';
    $y++;
}


$z = 0;

do {
    echo '$z :' . $z . '<br>';
    $z++;
} while ($z < 5);