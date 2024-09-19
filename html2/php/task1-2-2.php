<?php
// 商品名（文字列）
$productName = "鉛筆";

// 価格（整数）
$productPrice = 100;

// 消費税率（整数）
$taxRate = 10;

// 税込み価格の計算
$totalPrice = $productPrice + ($productPrice * $taxRate / 100);

// 出力
echo "商品名: " . $productName . "<br>";
echo "価格: " . $productPrice . "円<br>";
echo "税込価格: " . $totalPrice . "円";
?>
