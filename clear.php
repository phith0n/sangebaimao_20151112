<?php
if(isset($req["confirm"]) && $req["confirm"] ) {
    setcookie("userinfo", "", time() - 10);
    redirect("/index.php");
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>confirm</title>
</head>
<body>
    <h3>clear all file cookie?</h3>
    <form action="/index.php?act=clear" method="post">
        <input type="hidden" name="confirm" value="1">
        <input type="submit" value="Yes">
    </form>
    <a href="/index.php">Index</a>
    <a href="/index.php?act=list">file list</a>
</body>
</html>