<?php
if($_FILES["attach"]["error"] == 0) {
    if($_FILES["attach"]['size'] > 0 && $_FILES["attach"]['size'] < 102400) {
        $typeAccepted = ["image/jpeg", "image/gif", "image/png"];
        $blackext = ["php", "php5", "php3", "html", "swf", "htm"];
        $filearr = pathinfo($_FILES["attach"]["name"]);
        if(!in_array($_FILES["attach"]['type'], $typeAccepted)) {
            exit("type error");
        }
        if(in_array($filearr["extension"], $blackext)) {
            exit("extension error");
        }
        $filename = randmd5() . "." . $filearr["extension"];
        if(move_uploaded_file($_FILES["attach"]["tmp_name"], $filename)) {
            array_push($userinfo, $filename);
            setcookie("userinfo", serialize($userinfo), time() + 60 * 60 * 24 * 30);
            echo htmlspecialchars("upload success, new filename is {$filename} .");
        } else {
            echo "upload error!";
        }
    }
} else {
    echo "no upload file";
}
?>
<p>
<a href="/index.php">Index</a>
<a href="/index.php?act=list">file list</a>
</p>