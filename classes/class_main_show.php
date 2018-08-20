<?php

class vivod extends baza
{
	
	function fromdb($des)
	{
		$obj = new baza; 
		$obj->mysql_connect(); 
		$data = $obj->mysql_query("SELECT * FROM Description WHERE id > :user_id;", array('user_id' => '1'), TRUE); 
		foreach ($data as $row) {
		echo $row['Description'];
	}
	$obj->mysql_destroy();
	/*$obj->mysql_query("INSERT into Description (Description) VALUES (:des);", array('des' => $des), FALSE); 
	foreach ($data as $row) {
	echo $row['Description'];
}*/
/*$sql="SELECT * FROM Description"; 
$result=$this->connection->query($sql);
while($row = $result->fetch_assoc()){
echo "Тестим".$row["id"]." ".$row["Description"];
}*/
//$smtp = $pdo->prepare("SELECT * FROM Description WHERE id = :user_id");
//$stmt-execute( array ('user_id' => '1' ) );
}
function footer(){
echo '<div id="footer">
	<ul>
		<p>Спорт</p>
		<li><a href="#home">Тренажёрный зал</a></li>
		<li><a href="#news">Самбо</a></li>
		<li><a href="#contact">Бокс</a></li>
		<li><a href="#about">Йога</a></li>
		<li><a href="#about">Фитнес</a></li>
		<li><a href="#about">Тренеры</a></li>

	</ul>
	<ul >
		<p>О нас</p>
		<li><a href="#home">Тренерский состав</a></li>
		<li><a href="#news">Наши достижения</a></li>

	</ul>
	<ul>
		<p>Контакты</p>
		<li><a href="#home">Адрес</a></li>
		<li><a href="#news">Мы в социальных сетях</a></li>
	</ul>
</div>';
}

function header(){
echo '<div class="header">
	<div class="header-right">
	    <a href="#contact">Вы вошли как гость</a>
		<a class="active" id="myBtn" href="#home">Авторизация</a>
		<a href="#contact">Регистрация</a>
	</div>
</div>';
}
function forms_au(){
echo ' 
<div id="myModal" class="modal">
  <div class="modal-content">
  <span class="close">&times;</span>
	<div class="form">
	<form action="index.php" method="post" enctype="multipart/form-data" class="login-form">
		<input type="text" placeholder="логин" name="login"/>
		<input type="password" placeholder="пароль" name="password"/>
		<button name="sub">Авторизация</button>

	</form>

</div>
</div>
</div>';
}

function authorise(){
	if(isset($_POST[sub])){
		$obj = new baza; 
		$obj->mysql_connect(); 
		$data = $obj->mysql_query("SELECT * FROM users;",null , TRUE); 
		foreach ($data as $row) {
			if($_POST[login]==$row["login"]) {
				//if(password_hash($_POST[password], PASSWORD_DEFAULT)==$row["password"])
				if(password_verify($_POST[password], $row[password]))
				{
					echo $row['login'];
					echo "<script>
					alert('Engter!!!!');
					</script>";
				}
				else{
					echo "<script>
					alert('looooser');
					</script>";
				}
			}
		}
			$obj->mysql_destroy();
	}

}
function registration($login, $password){
	if(isset($_POST[reg_submit])){
		$obj = new baza; 
		$obj->mysql_connect(); 
		//$data = $obj->mysql_query("SELECT * FROM users;", null , FALSE); 
		$obj->mysql_query("INSERT into users (login, password) VALUES (:log, :pass);", array('log' => trim($login,' '), 'pass'=>password_hash($_POST[password], PASSWORD_DEFAULT)), FALSE); 
		
	}
}


}

?>