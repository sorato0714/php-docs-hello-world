<?php
// おみくじの選択肢
$results = [
    "大吉 🎉 最強の運勢！今日は何しても上手くいく！",
    "中吉 😊 まあまあ良い感じ。小さな幸運があるかも！",
    "小吉 😌 少しラッキー。気楽に行こう！",
    "吉 🙂 安定した日。コツコツ進もう！",
    "末吉 🤔 最後に笑うタイプ。焦らずに！",
    "凶 😱 注意の日。落ち着いて行動しよう…！",
    "大凶 💀 逆にレア！ある意味ラッキー！？"
];

// ランダムに選ぶ
$todayResult = $results[array_rand($results)];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>今日の運勢！おみくじ</title>
    <style>
        body {
            font-family: sans-serif;
            background: linear-gradient(to bottom right, #f7cac9, #92a8d1);
            color: #333;
            text-align: center;
            padding-top: 100px;
        }
        h1 {
            font-size: 3em;
            margin-bottom: 30px;
        }
        .result {
            font-size: 2em;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        .reload {
            margin-top: 30px;
            display: block;
            color: #fff;
            background: #333;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>🎴 おみくじ 🎴</h1>
    <div class="result"><?= htmlspecialchars($todayResult, ENT_QUOTES, 'UTF-8') ?></div>
    <a class="reload" href="">もう一回ひく</a>
</body>
</html>
