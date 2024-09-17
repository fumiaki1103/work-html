<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品情報</title>
</head>
<body>
    <?php
    $tax_rate = 10;
    $pencil_price = 100;
    $eraser_price = 200;
    ?>
    <p>現在、消費税は<?php echo $tax_rate; ?>%です。</p>
    <p>鉛筆が<?php echo $pencil_price; ?>円で税込<?php echo $pencil_price * (1 + $tax_rate / 100); ?>円です。</p>
    <p>消しゴムが<?php echo $eraser_price; ?>円で税込<?php echo $eraser_price * (1 + $tax_rate / 100); ?>円です。</p>
</body>
</html>
