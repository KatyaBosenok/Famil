<?php
$person=[
	'lastName'=>'Иванов',
	'firstName'=>'Иван',
	'partonymicName'=>'Иванович',
	'ovgOrderlost'=>15000
];
$fields=[
	'lastName'=>'Фамилия',
	'firstName'=>'Имя',
	'partonymicName'=>'Отчество',
	
];
foreach ($person as $field=>$value){
	if (isset ($fields[$field])){
		echo "<p>".$fields[$field] .":". $value."</p>";
	}
}

?>