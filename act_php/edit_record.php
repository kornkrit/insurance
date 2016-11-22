<?php session_start(); ?>

<?php 
     include("../config/dbc.php");
     $i = 0;
	 $ref = $_SERVER['HTTP_REFERER'];
     $fullname = $_POST['fullname'];
     $surname  = $_POST['surname'];
	 $address  = $_POST['address'];
     $phone    = $_POST['phone'];
     $email    = $_POST['email'];
	 $ref = $_SERVER['HTTP_REFERER'];
	 $id = $_POST['id'];
	  mysql_query("UPDATE `insurance`.`member` SET`fullname` = '$fullname', `surname` = '$surname', `address` = '$address', `phone` = '$phone', `email` = '$email' WHERE  `member`.`id` = '$id' ");
	 	 
	 $mander = $_POST['mander'];
     $type  = $_POST['type'];
	 $vehicle_registration = $_POST['vehicle_registration'];
	 $city  = $_POST['city'];
	 $year  = $_POST['year'];
     $last_member_id = mysql_insert_id(); // คืนค่า id ที่ insert ล่าสุด
	 $id = $_POST['id'];
     mysql_query("UPDATE `insurance`.`cars` SET `mander` = '$mander', `year` = '$year',`type`='$type' ,`vehicle_registration`='$vehicle_registration' ,`country`='$city' WHERE  `cars`.`member_id` = '$id'") ;
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
	 mysql_query("UPDATE  `insurance`.`insurance_policy`  SET `company`='$company' ,`class`='$class' ,`date_start`='$date_start' ,`date_end`='$date_end',`net_cowrie`='$net_cowire' ,`duty`='$duty' ,`tax`='$tax' ,`total`='$total' ,`comission`='$commission' ,`payment`='$payment',`paid_date`='$date_paid' ,`note`='$note' WHERE  `insurance_policy`.`member_id` = '$id'");
	 
	
?>

    
