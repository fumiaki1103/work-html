<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>商品価格表</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }

        table {
            width: 50%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        td {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body>
    <?php
    // 商品と価格の連想配列
    $products = [
        "apple" => 100,
        "banana" => 200
    ];

    // 消費税率
    $taxRate = 0.10;

    echo "<table>";
    echo "<tr><th>商品</th><th>価格</th><th>税込価格</th><th>1Dzの価格</th></tr>";

    foreach ($products as $product => $price) {
        $taxInPrice = $price + ($price * $taxRate);
        $dozenPrice = $taxInPrice * 12;
        echo "<tr>
                <td>{$product}</td>
                <td>{$price}円</td>
                <td>" . round($taxInPrice) . "円</td>
                <td>" . round($dozenPrice) . "円</td>
              </tr>";
    }

    echo "</table>";
    ?>
</body>
</html>
