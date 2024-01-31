<?php
	$students=array('mg mg','lin lin','oo oo','mg kyain');
	array_splice($students,2,1,'hla naing');

	$student_string='mg mg,lin lin,oo oo,mg kyain';
	$students=explode(',',$student_string,4);

	$students_string=implode('|',$students);

	//$mg_mg=array(roll_num=>1011,grade=>3.5,gender=>'male');
	list($name,$roll_num,$grade,$gender)=array('hnu war',1011,2.1,'female');
	
	$workers=array('ba nay','vin ga');
	$array_add=array_merge($students,$workers);

	array_pop($students);
	array_push($students,'ba din');
	array_shift($students);

	end($students);
	print_r($students);
	var_dump(in_array('oo oo',$students));
?>