<?php
$month=array('Jan','Feb','Mar','Apirl','May');
$delete='Mar';
unset($month[array_search($delete, $month)]);
print_r($month);
?>