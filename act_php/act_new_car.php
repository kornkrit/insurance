<?php session_start(); ?>

<?php 
     include("../config/dbc.php");
     $i = 0;
	 $id = $_POST['id'];
	 	 
	 $mander = $_POST['mander'];
     $type  = $_POST['type'];
	 $vehicle_registration = $_POST['vehicle_registration'];
	 $city  = $_POST['city'];
	 $year  = $_POST['year'];
     $last_member_id = mysql_insert_id(); // คืนค่า id ที่ insert ล่าสุด
	 $id = $_POST['id'];
      mysql_query("INSERT INTO `insurance`.`cars` (`id` ,`member_id` ,`mander`,`year`,`type` ,`vehicle_registration` ,`country`) VALUES (NULL, '$id', '$mander', '$year', '$type', '$vehicle_registration', '$city')");
	 $company = $_POST['company'];
     $date_start = $_POST['date_start'];
	 $date_paid = $_POST['date_paid'];
	 $date_end = $_POST['date_end'];
	 $net_cowire  = $_POST['net_cowire'];
	 $duty = ceil($net_cowire/250);
	 $tax = (($net_cowire + $duty)*7)/100;
	 $total = $net_cowire+$duty+$tax;
	 $dis = $_POST['discount'];
	 $com = $_POST['commission'];
	 $commission = ($com*$net_cowire)/100;
	 $payment = $total - $commission;
	 $note = $_POST['note'];
	 $class = $_POST['class'];
	 $last_cars_id = mysql_insert_id();
	 $id = $_POST['id'];
	  mysql_query("INSERT INTO  `insurance`.`insurance_policy` (`id` ,`member_id` ,`cars_id` ,`company` ,`class` ,`date_start` ,`date_end` ,`net_cowrie` ,`duty` ,`tax` ,`total` ,`comission` ,`payment` ,`discount` ,`paid_date` ,`note`)VALUES (
NULL , ' $id', '$last_cars_id','$company','$class','$date_start', ' $date_end',' $net_cowire','$duty',' $tax','$total','$payment','0.0','$discount',' $date_paid','$note');");
	 
	
?>

    
