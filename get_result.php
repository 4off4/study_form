<?php

$name = $_GET["name"];
$id = $_GET["id"];
$email = $_GET["email"];

?>


<html>
<head>
    <title>Post Result</title>
</head>
<body>
    <h1>Get Example</h1>
    <?php
    echo $name."님의 ID는 ".$id.", E-mail 주소는 ".$email."입니다.";
    ?>
</body>
</html>