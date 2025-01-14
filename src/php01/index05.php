<?php
/* if文
if( 条件 ){
// 真の時に実行される処理
}else{
// 偽の時に実行される処理
}
*/
// $a = 5;

/* if($a == 5){
    echo "\$aは5です";
}
    */

// $a = 7;
/*
if($a===5){
    echo "\$aは5です";
}else{
    echo "\$aは5以外です";
}
*/
/*
if ($a === 5) {
    echo "\$aは5です";
}else if ($a === 7) {
    echo "\$aは7です";
}else{
    echo "\$aは5と7以外です";
}
*/

//switch文 
/*
switch (値) {
    case 条件1:
        // 条件1が真の時に実行される処理
        break;
    case 条件2:
        // 条件2が真の時に実行される処理
        break;
    default:
        // どの条件にも当てはまらない時に実行される処理
        break;
}
*/
$people = "Saburo";

switch($people) {
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
}
echo "<br/>";

// 三頂演算子
// $result = (条件式) ? "TRUE時の値" : "FALSE時の値";

$a = 7;

$b = ($a = 7) ? "TRUE" : "FALSE";
echo $b;