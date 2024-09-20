<?php
// CSVファイルのパス
$file = 'feedback.csv';

// ファイルが存在する場合は中身を空にする
if (file_exists($file)) {
    // ファイルの内容を消去
    file_put_contents($file, '');
    echo "アンケート結果が削除されました。<br>";
} else {
    echo "削除するデータがありません。<br>";
}

// アンケート結果ページへのリンク
echo '<a href="read.php">アンケート結果に戻る</a>';
?>
