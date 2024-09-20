<?php
// ファイルからデータを読み込む
$file = 'feedback.csv';

// データが存在するか確認
if (file_exists($file)) {
    $fileHandle = fopen($file, 'r');
    $feedbacks = [];
    
    // ファイルの内容を一行ずつ取得
    while (($data = fgetcsv($fileHandle)) !== FALSE) {
        $feedbacks[] = $data;
    }
    fclose($fileHandle);
} else {
    echo "アンケートデータがありません。";
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アンケート結果</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            color: #333;
        }
        h1 {
            color: #00796b;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #00796b;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .delete-button {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            background-color: #d32f2f;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .delete-button:hover {
            background-color: #b71c1c;
        }
    </style>
</head>
<body>

<h1>アンケート結果</h1>

<?php if (!empty($feedbacks)): ?>
<table>
    <tr>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>感想</th>
        <th>評価</th>
    </tr>
    <?php foreach ($feedbacks as $feedback): 
        $rating = intval($feedback[3]); 
    ?>
        <tr>
            <td><?php echo htmlspecialchars($feedback[0]); ?></td>
            <td><?php echo htmlspecialchars($feedback[1]); ?></td>
            <td><?php echo htmlspecialchars($feedback[2]); ?></td>
            <td><?php echo str_repeat('★', $rating) . str_repeat('☆', 5 - $rating); ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
    <p>表示するアンケートデータがありません。</p>
<?php endif; ?>

<!-- 削除ボタン -->
<a href="delete.php" class="delete-button" onclick="return confirm('アンケート結果をすべて削除してもよろしいですか？');">アンケート結果を削除</a>

</body>
</html>
