<?php 
include_once "common.inc.php";
if(isset($req["act"]) && preg_match('/^[a-z0-9_]+$/is', $req["act"])) {
    include_once __DIR__ . "/" . $req["act"] . ".php";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>sangebaimao</title>
</head>
<body>
    <form action="/index.php?act=upload" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="102400" />
        Select image to upload:
        <input type="file" name="attach" >
        <input type="submit" value="Upload Image">
    </form>
    <p>
    <a href="/index.php">Index</a>
    <a href="/index.php?act=list">file list</a>
    <a href="/index.php?act=clear">clear cookie</a>
    </p>
</body>
</html>