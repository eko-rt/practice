<?php
/* 関数　
処理の材料となる値のことを 引数（パラメータ） といい、結果の値のことを 戻り値（返り値） といいます。 また、関数名、引数名は基本自由ですが関数名はビルド関数で使用されていないものでなければなりません。

function outputNumber($a)
{
  echo "引数の値は" . $a . "です";
  return;
}

outputNumber(2);
outputNumber(4);

*/

// Q1
/*
function prac($c){
    echo $c;
    return;
}

prac(5);

function addNumber($a, $b)
{
  $add = $a + $b;
  return $add;
}

$total = addNumber(2, 3);
print $total;

*/


// Q2

function exam($score1, $score2, $score3) {
    $total = $score1+ $score2+ $score3;
    if($total > 210){
        echo "合計点は" . $total . "なので合格です";
    } else{
        echo "合計点は" . $total . "なので不合格です";
    }
}

exam(35, 90, 90);

echo "<br />";

function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

