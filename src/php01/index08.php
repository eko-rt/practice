<?php

// 配列と連想配列
/*
変数と同じく、配列名は$から始まります。
配列名に使えるのは、変数と同じく以下の文字になります。

英大文字小文字（a～zもしくはA～Z）
数字（ただし、先頭には使えません。）
_(アンダーバー)
*/

/*
$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);

/*TIP：var_dumpとは
「var_dump」関数は、与えられた変数の値を詳細に出力します。 出力結果には、配列の要素数と各要素のデータ型、値、値の長さ（文字列の場合）が含まれます。 これにより、プログラムのデバッグに役立てることができます。 */

// echo "<br />";
// echo $people[0];


// 多次元配列
$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[1]["last_name"];

echo "<br />";

// foreach 文
// foreach 文では、配列の要素の数だけ処理が繰り返し行われます。
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}


// 添え字
// foreach で配列と値を引数として指定しますが、そのとき値をキー => 値(下の例だと$person => $name)の形にします。すると、元の配列にキーが指定されていない場合にはデフォルトで添字が当てられます。

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

// 問題
$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}