<?php
// 定数の定義
define("TAX_RATE", "現在、消費税は10%です。");

// 変数の定義
$product1 = "鉛筆が100円で税込110円です。";
$product2 = "消しゴムが200円で税込220円です。";

// 出力
echo TAX_RATE . "<br>";
echo $product1 . "<br>";
echo $product2;
?>
