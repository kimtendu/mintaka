<?php

$text = "
Happy, age b-day name.
Today start a new Tehilim Chapter - tehilimChapterNumber
";

$name = $_GET['name'];
$age = $_GET['age'];

$tehilimChapterNumber = $age+1;

echo 'Happy, '.$age.' b-day '.$name.'. <br> Today start a new Tehilim Chapter - '.$tehilimChapterNumber;