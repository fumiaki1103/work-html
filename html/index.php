<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Okabe Fumiaki</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      header("Location: contact");
      exit();
  }
  ?>
  <div class="wrapper">
    <div class="header">
      <div class="botton">
        <h1>ここには会社名が入ります。</h1>
        <div class="button_01">
          <a href="#" class="head_btn1">ボタン01</a>
        </div>
        <div class="button_02">
          <a href="#" class="head_btn2">ボタン02</a>
        </div>
      </div>
    </div>
      <div class="menu">
        <a href="php" class="menu1">メニュー01</a>
        <a href="#" class="menu2">メニュー02</a>
        <a href="#" class="menu3">メニュー03</a>
    </div>
    <div class="photo_content">
        <img src="mv.png" alt="メインビジュアル">
      <div class="content_01">
        <div class="text1">
        <h1>ここにはタイトルが入ります</h1>
       <ul>ここにはテキストが入ります。ここにはテキストが入ります。</ul>
           <ul>ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。</ul>
          <ul> ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。</ul>
           <ul>ここにはテキストが入ります。ここにはテキストが入ります。</ul>
        </div>
        <div class="photo1">
        <img src="img_01.png" alt="コンテンツ画像">
        </div>
      </div>
    </div>
    <h1>ここにはタイトルが入ります</h1>
    <div class="content_02">
      <div class="content_02_01">
      <img src="img_02.png" alt="コンテンツ画像">
      <p>テキスト</p>
      </div>
      <div class="content_02_01">
      <img src="img_02.png" alt="コンテンツ画像">
      <p>テキスト</p>
      </div>
    </div>
    <div class="content_03">
      <img src="img_03.png" alt="コンテンツ画像">
      <div class="text03">
      <h1>ここにはタイトルが入ります</h1>
      <p>ここにはテキストが入ります。ここにはテキストが入ります。</p>
      <p>ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。</p>
      <p>ここにはテキストが入ります。ここにはテキストが入ります。ここにはテキストが入ります。</p>
    </div>
    </div>
    <div class="title04">
    <h1>ここにはタイトルが入ります</h1>
    </div>
    <section class="gallery">
      <div class="photo">
          <img src="img_04.png" alt="Airplane 1">
          <h3>タイトルが入りますタイトルが入ります</h3>
          <p>🕓 0000.00.00</p>
      </div>
      <div class="photo">
          <img src="img_04.png" alt="Airplane 2">
          <h3>タイトルが入りますタイトルが入ります</h3>
          <p>🕓 0000.00.00</p>
      </div>
      <div class="photo">
          <img src="img_04.png" alt="Airplane 3">
          <h3>タイトルが入りますタイトルが入ります</h3>
          <p>🕓 0000.00.00</p>
      </div>
    </section>
    <div class="container">
      <div class="container2">
        <div class="btn-wrapper">
          <p>こちらからご購入ください</p>
            <button class="btn pink">ネットショップ</button>
        </div>
        <div class="btn-wrapper">
          <form action="" method="post">
            <p>お気軽にお問い合わせください</p>
            <button type="submit" class="btn green">お問い合わせ</button>
          </form>
        </div>
    </div>
  </div>
    <div class="content_07">
      <ul>
        <li class="logos">ここには会社名が入ります</li>
        <li>住所が入ります</li>
        <li>03-1234-6574</li>
        <li>営業時間:9:00～18:00</li>
      </ul>
    </div>
    <div class="link">
      <nav class="nav-menu">
        <div class="link_nav">
        <a href="#">リンク1</a>
        </div>
        <div class="link_nav">
        <a href="#">リンク2</a>
        </div>
        <div class="link_nav">
          <a href="#">リンク3</a>
        </div>
        <div class="link_nav">
          <a href="#">リンク4</a>
        </div>
        <div class="link_nav">
          <a href="#">リンク5</a>
        </div>
        <div class="link_nav">
        <a href="#">リンク6</a>
        <a href="#">リンク7</a>
        </div>
        </nav>
        </div>
        </div>
  <div class="content8">
  <p>ここには会社名が入りますCopyright</p>
  </div>
</body>
</html>
