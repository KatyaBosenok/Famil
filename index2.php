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
		$fieldName=$fields[$field];
	}
	else {
		$fieldName=$field;
	}
	echo "<p> $fieldName: $value</p>";
}

?>