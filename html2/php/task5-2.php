<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>曜日のリスト</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #333;
            font-size: 48px;
        }

        .day-list {
            font-family: Arial, sans-serif;
            list-style-type: none;
            padding: 0;
        }

        .day-list li {
            padding: 5px;
        }
    </style>
</head>
<body>

<ul class="day-list">
<?php
$days = ["日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日"];
$i = 0;
while ($i < count($days)) {
    echo "<li>・" . $days[$i] . "</li>";
    $i++;
}
?>
</ul>

</body>
</html>
