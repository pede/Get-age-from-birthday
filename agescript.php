<?php
$birthday = '11-01-1992';
$today = date('d-m-Y');

$a_birthday = explode('-', $birthday);
$a_today = explode('-', $today);

$day_birthday = $a_birthday[0];
$month_birthday = $a_birthday[1];
$year_birthday = $a_birthday[2];
$day_today = $a_today[0];
$month_today = $a_today[1];
$year_today = $a_today[2];

$age = $year_today - $year_birthday;

if (($month_today < $month_birthday) || ($month_today == $month_birthday && $day_today < $day_birthday))
{
	$age--;
}

echo $age;
?>