<?php
include("classes/class_baza.php");
include("classes/class_main_show.php");
$page=new vivod;
echo '<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>pure css drawer</title>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id=content>
    <div id=bg>
      <video  loop muted autoplay poster="video/Boxing-gym.jpg" id="fullscreen-bg__video">
        <source src="video/Boxing-gym.mp4" type="video/mp4">
          <source src="video/Boxing-gym.webm" type="video/webm">
          </video>
        </div>';
     $header=$page->header();
     $form_authorise=$page->forms_au();
     $authorise=$page->authorise();
      echo '</div>
    </div>
  </div>

<form action="index.php" method="post" enctype="multipart/form-data" class="login-form">
    <input type="text" placeholder="логин" name="login"/>
    <input type="password" placeholder="пароль" name="password"/>
        <input type="password" placeholder="повторите пароль" name="repeat_password"/>
    <button name="reg_submit">Регистрация</button>

  </form>

  ';
  //$list=$page->fromdb('123456779');
  if(strlen($_POST[login])<>0 && strlen($_POST[password])<>0 && strlen($_POST[repeat_password])<>0){
    if($_POST[password]==$_POST[repeat_password]){

    $registration=$page->registration($_POST[login],$_POST[password]);
  }
  else echo "<script>alert('Разные пароли!!')</script>";
}
  else echo "<script>alert('Пусто!!')</script>";
  $footer=$page->footer();
  echo '<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script  src="js/index.js"></script>

</body>
</html>';

?>