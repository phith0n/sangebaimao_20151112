<html>
<head>
    <meta charset="utf-8">
    <title>show your files</title>
</head>
<body>
    <h3>all files</h3>
    <ul>
    <?php
    foreach ($userinfo as $filename) {
        $filename = htmlspecialchars($filename);
        echo "<li><a href=\"/{$filename}\" target=\"_blank\">" . $filename . "</a></li>\n";
    }
    ?>
    </ul>
    <a href="/index.php">Index</a>
    <a href="/index.php?act=list">file list</a>
</body>
</html>