<head>
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
</style>
<body>
  <?php
  $fortunes = [
      "大凶" => 5,
      "凶" => 15,
      "吉" => 30,
      "中吉" => 30,
      "大吉" => 20
  ];

  $random = rand(1, 100);
  $sum = 0;
  $fortune = "";

  foreach ($fortunes as $key => $value) {
      $sum += $value;
      if ($random <= $sum) {
          $fortune = $key;
          break;
      }
  }

  echo "<h1>今日の運勢は" . $fortune . "です。</h1>";
  ?>
</body>
</head>