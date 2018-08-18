<?php
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

function __autoload($class){
  include("classes/class_".$class.".php");
}
//$t=new students;
//$student_list=$t->student_list();
$page=new vivod;
$list=$page->fromdb();

 echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script  src="js/index.js"></script>

</body>
</html>'
?>