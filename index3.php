<?php
$groups=[
	'101'=>4.2,
	'102'=>4.0,
	'103'=>4.8,
	'104'=>4.6,
	'105'=>3.8,
];
$max=0;

foreach ($groups as $field=>$value){
	if ($value>$max){
		$max=$value;
		$nomerGr=$field;
	}
		
}
echo "<p> Группа с наибольшим баллом:  $nomerGr <br/> Наибольший балл: $max";
?>