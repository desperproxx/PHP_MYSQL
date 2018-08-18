<?php

class vivod extends baza
{
	
	function fromdb()
	{
		$sql="SELECT * FROM Description"; 
		$result=$this->connection->query($sql);
		while($row = $result->fetch_assoc()){
			echo "Тестим".$row["id"]." ".$row["Description"];
		}
	}
}

?>