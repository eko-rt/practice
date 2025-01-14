<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$radio = htmlspecialchars($_POST['radio'], ENT_QUOTES);
$num = htmlspecialchars($_POST['num'], ENT_QUOTES);


print "私の名前は、" . $name . "<br>";;
print "ご希望の商品は、" . $radio . "<br>";;
print "注文数は、" . $num;