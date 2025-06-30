<pre>
<?php
print_r($_POST);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['select'] === "1") {
        echo  " Your email has been hashed to " . md5($_POST['email']) . " mt5 Algo,";
        echo " Your password has been hashed to " . md5($_POST['password']) . " mt5 Algo";
    } else {
        echo  " Your email has been hashed to " . sha1($_POST['email']) . " SHA1 Algo,";
        echo  " Your password has been hashed to " . sha1($_POST['email']) . " SHA1 Algo";
    }
} else {
    header("location:hashing.html");
}

?>