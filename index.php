<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>料理の感想アンケート</title>
    <style>
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            color: #333;
        }
        h1 {
            color: #00796b;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #00796b;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #004d40;
        }
    </style>
</head>
<body>

<h1>料理の感想アンケート</h1>

<form action="write.php" method="POST">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">メールアドレス:</label>
    <input type="email" id="email" name="email" required>

    <label for="feedback">料理の感想:</label>
    <textarea id="feedback" name="feedback" rows="4" required></textarea>

    <label for="rating">料理の評価 (星5つ):</label>
    <select id="rating" name="rating" required>
        <option value="5">★★★★★ (5)</option>
        <option value="4">★★★★☆ (4)</option>
        <option value="3">★★★☆☆ (3)</option>
        <option value="2">★★☆☆☆ (2)</option>
        <option value="1">★☆☆☆☆ (1)</option>
    </select>

    <input type="submit" value="送信">
</form>

</body>
</html>
