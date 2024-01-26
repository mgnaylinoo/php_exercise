<?php 
$weather_string='';
echo "City:".$_POST['city']."<br>";
echo "Month:".$_POST['month']."<br>";
echo "Weather:";
if(isset($_POST['weather'])){
	$weather=$_POST['weather'];
foreach($weather as $season){
	 $weather_string.=$season.',';
}
	$weather_string[strlen($weather_string)-1]='.';
	echo $weather_string;
}
echo "<br>";
echo "Date:".$_POST['date']."<br>";
 ?>