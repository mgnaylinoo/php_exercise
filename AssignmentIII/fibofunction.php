<?php 
function fibonacci($number){
	if($number==0){
		return 0;
	}
	if($number==1){
		return 1;
	}

		return fibonacci($number-1)+fibonacci($number-2);
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<style type="text/css">
 		table{
 			border-collapse:collapse;
 			width: 20%;
 		}
 		th{
 			background-color:#A9A9A9;
 			text-align: left;
 		}
 		td,th{
 			border: none;
 		}
 		tr:nth-child(odd){
 			background-color: #D3D3D3;
 		}
 	</style>
 	<title>Assignment III 1</title>
 </head>
 <body>
 <table border="1">
 	<tr>
 		<th>Sequence#</th>
 		<th>Value</th>
 	</tr>
 	<?php for($i=0;$i<11;$i++){
 		echo "<tr>";
 		echo "<td>F<sub>".$i."</sub></td>";
 		echo "<td>".fibonacci($i)."</td>";
 		echo "</tr>";
 	} 
 	?>
 </table>
 </body>
 </html>
