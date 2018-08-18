<?php
class baza{
	const USERNAME="root";
	const PASSWORD="";
	const DBNAME="work_test";
	const SERVER="localhost";
	function __construct($name=NULL){
		if($mysqli=new mysqli(self::SERVER, self::USERNAME,
			self::PASSWORD, self::DBNAME)){
			$this->connection=$mysqli;
}//then
else{
	echo "Не удается соединиться с сервером MySQL";
	exit;
}//if
if($name){
	$this->name=$name;
}
}//__construct
function _destruct(){
	$this->connection->close();
}//_destruct
}
?>