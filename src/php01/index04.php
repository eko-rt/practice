<?php
// $a = 20;
// $b = 5;
// $c = 10;
// $d = 5;

// $answer1 = $a + $b;
// $answer2 = $a - $b;
// $answer3 = $a * $b;
// $answer4 = $a / $b;
// $answer5 = $a % $c;

// $a = $b;
// $b *= $d;

// *Q1算術演算子
// echo $answer1;
// echo "<br />";
// echo $answer2;
// echo "<br />";
// echo $answer3;
// echo "<br />";
// echo $answer4;
// echo "<br />";
// echo $answer5;

// *Q2代入演算子と複合演算子
// echo $a;
// echo "<br />";
// echo $b;

// *Q3比較演算子
/*
==	等しいこと	$a == $b	$a が $b に等しい時に TRUE
===	型まで等しいこと	$a === $b	$a が $b に等しく同じ型でである場合に TRUE
!=	等しくないこと	$a != $b	$a が $b に等しくない場合に TRUE
<>	等しくないこと	$a <> $b	$a が $b に等しくない場合に TRUE
!==	型も含めて等しくないこと	$a !== $b	$a が $b と等しくないか、同じ型でない場合に TRUE
<	より少ない	$a < $b	$a が $b より少ない時に TRUE
>	より多い	$a > $b	$a が $b より多い時に TRUE
<=	より少ないか等しい	$a <= $b	$a が $b より少ないか等しい時に TRUE
>=	より多いか等しい	$a >= $b	$a が $b より多いか等しい時に TRUE
*/


// echo $a > $b;

// *Q4論理演算子
/*
!	! $a	$a が TRUE でない場合 TRUE
&&	$a && $b	$a および $b が共に TRUE の場合に TRUE
||	$a || $b	$a または $b のどちらかが TRUE の場合に TRUE
and	$a and $b	$a および $b が共に TRUE の場合に TRUE
or	$a or $b	$a または $b のどちらかが TRUE の場合に TRUE
xor	$a xor $b	$a または $b のどちらかが TRUE でかつ両方とも TRUE でない場合に TRUE
??	$a ?? $b	$a がnullや未定義の場合、$bを返しそれ以外の場合は$aを返す 
*/
// echo ($a > 10 and 30 > $a);


// *Q5加算子と減算子
/*
++$a	$a に 1 を加え、$a を返します。
$a++	$a を返し、$a に 1 を加えます。
--$a	$a から 1 を引き、$a を返します。
$a--	$a を返し、$a から 1 を引きます。
 */

$a = 10;
$b = 10;
$c = 5;
$d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;