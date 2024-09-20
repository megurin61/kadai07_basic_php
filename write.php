<?php
// ファイルに保存するパスを指定
$file = 'feedback.csv';

// フォームがPOSTで送信されているか確認
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 必要なフィールドがすべてセットされているか確認
    if (isset($_POST['name'], $_POST['email'], $_POST['feedback'], $_POST['rating'])) {
        // POSTデータを取得
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        $rating = $_POST['rating'];

        // データをCSV形式に整形
        $data = array($name, $email, $feedback, $rating);

        // データをファイルに保存 (追記モード)
        $fileHandle = fopen($file, 'a');
        fputcsv($fileHandle, $data);
        fclose($fileHandle);

        echo "アンケートが登録されました。<br>";
        echo '<a href="read.php">アンケート結果を見る</a>';
    } else {
        echo "エラー: 必要なデータがすべて送信されていません。<br>";
        echo '<a href="index.php">アンケートフォームに戻る</a>';
    }
} else {
    echo "エラー: フォームが正しく送信されていません。<br>";
    echo '<a href="index.php">アンケートフォームに戻る</a>';
}
?>
