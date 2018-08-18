<?php
$mysqli = new mysqli("localhost", "root", "", "test");

/* проверка соединения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}

echo '<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>pure css drawer</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>';

 echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script  src="js/index.js"></script>

</body>
</html>'
?>