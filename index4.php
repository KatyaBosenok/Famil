<?php
$groups=[
	'101'=>4.2,
	'102'=>4.0,
	'103'=>4.8,
	'104'=>4.6,
	'105'=>3.8,
];
$max=0;
$Summ=0;
foreach ($groups as $field=>$value){
	$Summ=$Summ+$value;
}
$avg=$Summ/count($groups);
echo "Средний балл: $avg";
echo "<br/>Группы с наибольшим баллом: <br/>" ;
foreach ($groups as $field=>$value){
	if ($value>=$avg){
		echo "$field <br/>";
	}
}
?>