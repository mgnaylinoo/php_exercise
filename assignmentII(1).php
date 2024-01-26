<?php 
$students=array(
				'Ms Baby'=>80,
				'Ms Kyi Kyi'=>100,
				'Ms Aye Aye'=>70,
				'Ms Ei Ei'=>25,
				'Ms San San'=> 66,
				'Ms Swe Swe'=> 50,
				'Ms Wai Wai'=> 64,
				'Ms Than Than'=> 38,
				'Ms Win Win'=> 38,
				'Ms Thet Thet'=> 40,
				);
function yourGrade($mark){
	if($mark>=80)
		return 'A';
	if($mark>=60)
		return 'B';
	if($mark>=40)
		return 'C';
	if($mark<40)
		return 'D';
}
function result($mark){
	if($mark<40){
		return 'Fail';
	}else{
		return 'Pass';
	}
}
$percent_string='';
$students_number=count($students);
foreach($students as $name => $mark){
	$percent_string.=yourGrade($mark);
}
function percentage($class){
	global $percent_string;
	if($class=='P'){
		$pass=0;
		$pass+=substr_count($percent_string,'A') ;
		$pass+=substr_count($percent_string,'B') ;
		$pass+=substr_count($percent_string,'C') ;
		return ($pass/10)*100;
	}
	
	return (substr_count($percent_string,$class)/10)*100;
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Assignment II</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<th>No</th>
 			<th>Students</th>
 			<th>Marks</th>
 			<th>Grade</th>
 			<th>Status</th>
 		</tr>
 		<?php 
 		$no=1;
 		foreach($students as $name => $mark){
 			echo '<tr>';
 			echo '<td>'.$no++.'</td>';
 			echo '<td>'.$name.'</td>';
 			echo '<td>'.$mark.'</td>';
 			echo '<td>'.yourGrade($mark).'</td>';
 			echo '<td>'.result($mark).'</td>';
 			echo '</tr>';
 		}
 		?>
 	</table>
 	<div>For Grade A percent:<?php echo percentage('A')?></div>
 	<div>For Grade B percent:<?php echo percentage('B')?></div>
 	<div>For Grade C percent:<?php echo percentage('C')?></div>
 	<div>For Grade D percent:<?php echo percentage('D')?></div>
 	<div>For Pass percentage:<?php echo percentage('P')?></div>
 	<div>For Fail percentage:<?php echo percentage('D')?></div>
 </body>
 </html>