<?php
// for文 : 繰り返す条件を（）のなかで定義して、処理を繰り返します。
/*for ($i = 初期値; $i <= 回数; 増減式) {
処理
}
*/
/*
for ($i = 0; $i < 4; $i++) {
    echo $i;
}

for ($e = 1; $e <= 5; $e++) {
    echo $e * 2 . "<br />";
}
*/
// while文　ある条件が成り立っている間だけ処理を繰り返し実行します。 for 文と違う点は、カウンターにあたるものがなく、条件判定を行う変数は繰り返しの処理の中で変化させてループ回数を制御します。
/* 
while (条件) {
// 真の時に実行
// 繰り返しの処理の中で変数の値を変化させる
}

例）
<?php
$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}
*/
/*
$count = 0;

while ($count < 20) {
    $count += 1;
    echo $count . "<br />";
}


$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}

echo '<br />';

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}

echo '<br />';
*/
/*
$count = 0;
while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}


$num = 0;

do {
    echo "num = " . $num . '<br />';
    $num++;
} while ($num < 3);
*/

// Q. FizzBuzz問題を解いてみよう 


for ($i = 1; $i < 50; $i++) {
    if ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i %5== 0) {
        echo "Buzz";
    } elseif ($i % 15 == 0) {
        echo "FizzBuzz";
    } else {
        echo $i;
    }
}



/*
外側 ( $i の方 ) のプログラムが 1 回繰り返されるごとに、内側のプログラム ( $j の方) が 5 回繰り返されます。

内側のプログラム ( $j の方) 単体では「＊＊＊＊＊」が表示されます。
*/

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}

