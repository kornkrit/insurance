<?php session_start(); ?>

<?php 
     $id = $_GET["CarID"];
	 $ref = $_SERVER['HTTP_REFERER'];
	 include("../config/dbc.php");
	 
	 $ins_id = mysql_query("SELECT * FROM  `insurance_policy` WHERE `cars_id`= $id ");
	 while($row = mysql_fetch_row($ins_id))
	 {$insurance_id = $row[0];}
	 
	 
	 mysql_query("DELETE FROM `cars` WHERE `cars`.`id` = '$id'");
	 mysql_query("DELETE FROM `insurance_policy` WHERE `insurance_policy`.`id` = '$insurance_id'");
?>

<script type="text/javascript">
   window.close();
</script>
