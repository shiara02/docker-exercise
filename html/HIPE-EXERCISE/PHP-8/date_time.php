<?php

date_default_timezone_set('Asia/Manila'); // Philippines timezone
$date = date("m/d/Y");
$timestamp = strtotime($date); // convert date string to timestamp
$month_in_words = date('F', $timestamp); // full month name
$day = date('d', $timestamp); // get day
$year = date('Y', $timestamp); // get year


echo "The date and time is: " . date("Y/m/d") . " " . date("h:i:sa") . "<br>";
echo "The date and time is: " . $date . " " . date("H:i:sa") . "<br>";
echo "The date and time is: " . date("n/j/Y") . " " . date("h:ia") . "<br>";
echo "The date and time is: " . $month_in_words . " " . $day . ", " . $year . " " . date("H:ia") . "<br>";