<?php

$x = 5;

if ($x > 4) {
    echo "kadasrt";
  }  

if ($x < 4) {
    echo "kadasrt";
}

// Первое задание 

$a =4;
$b =8;

if ($a>0 && $b>0) {
    echo $a-$b;
}elseif ($a<0 && $b<0) {
    echo $a*$b;
}elseif (($a<0 && $b>0) || ($a>0 && $b<0)) {
    echo $a+$b;
}

// Второе задание

function sum (int $x, int $y): int
{
    return $x +$y;
}

function div(int $x, int $y): ?float 
{
    if ($y != 0) {
        return $x / $y
    }
    return "Произошла ошибка!!!";
}

// Шестое задание

function pow(int $x, int $pow) {
    if ($pow ==1) {
        return $x;
    }
    return $x * pow($x, pow $pow-1);
}

pow(x:5, pow:-1);

function hoursEnding (int $count, string $ending1, string $ending2, string $ending3): string 
{
    $ending = '';

    if ($count >20) {
        $count %= 10;
    }

    if ($count == 0 || $count >4) {
        $ending = $ending1;
    } elseif ($count == 1) {
        $ending = $ending2;
    } else {
        $ending = $ending3;
    }
    return $ending;
}

function minutesEnding (int $minutes): string
{

}


$hours =12;
echo $hours . "" . hoursEnding($hours, ending1:"часов", ending2:"час", ending3:"часа");
echo $hours . "" . hoursEnding($hours, ending1:"минут", ending2:"минута", ending3:"минуты");
echo $hours . "" . hoursEnding($hours, ending1:"часов", ending2:"час", ending3:"часа");

?>