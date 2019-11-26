<!DOCTYPE html>
<html>
<head>
  <title>PHP練習問題</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="practice_stylesheet.css">
</head>
<body>
  <h1>PHP練習問題</h1>
  <br>
  <!-- ここに好きな言葉をechoしてみましょう -->
  <?php
  echo "今から課題を始めます。";
  
  ?>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】おみくじ1
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】おみくじ1</div>
  <div class="box7"><p>
    <!-- おみくじ出力場所 -->
    <?php
    $luck = array(
      "大吉","中吉","小吉","末吉","吉","凶");

     shuffle($luck);
     
     echo "今日の運勢は【".$luck[0]."】";


    ?>
  </p></div>
  <br><br>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】おみくじ2
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】おみくじ2</div>
  <div class="box7"><p>
    <!-- おみくじ出力場所 -->
    <?php
    $luck = array(
      "大吉","中吉","小吉","末吉","吉","凶");

     shuffle($luck);
     
     echo $now = date('Y年m月d日')."の運勢は【".$luck[0]."】";


    ?>
  </p></div>
  <br><br>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】数字を文字に変換
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】数字を文字に変換</div>
    <!-- ここにHTMLでフォームを追加 -->
  <br>
  <div class="result"><p>
    <!-- ここにPHPの処理を書いて変換結果を出力してみよう -->
  </p></div>

  <br><br>
  <!-- 
  ▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼▼　
  【問題】文字数を数える 
  ▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲▲
  -->
  <div class="font01">【問題】文字数を数える</div>
    <!-- ここにHTMLでフォームを追加 -->
  <br>
  <div class="result"><p>
    <!-- ここにPHPの処理を書いて変換結果を出力してみよう -->
  </p></div>

</body>
</html>
