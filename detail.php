<?php session_start();?>
<?
 
 include("config/dbc.php");
 $id = $_GET["MemberID"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Detail <? echo " ".$_GET["MemberID"]; ?></title>
<link href="css/copy.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#element .margin table {
	color: #00F;
	font-weight: bold;
	font-family: Tahoma, Geneva, sans-serif;
}
#element .margin table tr td {
	font-weight: bold;
}
</style>
<script>
function confirmDelete(delUrl) {
  if (confirm("Are you sure you want to delete")) {
    document.location = delUrl;
  }
}
</script>
</head>


<body><center>
<div id="element" align="center">
<p>
  <?php
	 $getmember = mysql_query("SELECT * FROM `member` WHERE `id` = '$id' ");
	 if($member = mysql_fetch_row($getmember)){
		$name = $member[1];
	    $surname = $member[2];
	    $address = $member[3];
	    $phone = $member[4];
	    $email=$member[5];
	  
	?>
</p><div class="margin">
<table width="1000" border="0" cellpadding="0">
  <tr>
    <td colspan="4">Member Id : <? print $id; ?></td>
  </tr>
  <tr>
    <td width="106" height="39">ชื่อ</td>
    <td width="208"> <? print $name; ?></td>
    <td width="103">นามสกุล</td>
    <td width="573"> <? print $surname; ?></td>
  </tr>
  <tr>
    <td height="37">ที่อยู่</td>
    <td colspan="3"> <? print $address; ?></td>
  </tr>
  <tr>
    <td height="29">เบอร์โทรศัพท์</td>
    <td> <? print $phone; ?></td>
    <td>อีเมล์</td>
    <td> <? print $email; ?></td>
  </tr>
  <tr>
    <td height="29">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="new_car.php?<? echo "MemberID=".$member[0];?>">เพิ่มรถยนต์</a></td>
  </tr>
  
</table>
</div><br><br>
<?
  $cars = mysql_query("SELECT * FROM `cars` WHERE `member_id` = $id");
	 while($car = mysql_fetch_row($cars)){
  $insurance = mysql_query("SELECT * FROM  `insurance_policy` WHERE `member_id`= $id ");
	 if($row = mysql_fetch_row($insurance))
	 {	  
	print "<div class=margin>";
	print "<table width=1000 border=0 cellpadding=0>";
	print "<tr>";
	print "<td colspan=4>Car id :". $car[0] ."</td>";
	print "</tr>";
	print "<tr>";
	print "<td>ยี่ห้อ :</td>";
	print "<td>".$car[2]."</td>";
	print "<td>ปี</td>";
	print "<td>".$car[3]."</td>";
	print "</tr>";
	print "<tr>";
    print "<td>แบบรถยนต์ :</td>";
    print "<td>".$car[4]."</td>";
    print "<td>&nbsp;</td>";
    print "<td>&nbsp;</td>";
    print "</tr>";
	print "<tr>";
    print "<td>ทะเบียน :</td>";
    print "<td>".$car[5]." ".$car[6]."</td>";
    print "<td>&nbsp;</td>";
    print "<td>สำเนาทะเบียนรถ</td>";
    print "</tr>";
	print "<br>";
	print "<tr>";
	print "<td>บริษัท :</td>";
	print "<td>".$row[3]."</td>";
	print "<td>ชั้น</td>";
	print "<td>".$row[4]."</td>";
	print "</tr>";
	print "<tr>";
	print "<td>วันที่เริ่ม :</td>";
	print "<td>".$row[5]."</td>";
	print "<td>สิ้นสุดวันที่ :</td>";
	print "<td>".$row[6]."</td>";
	print "</tr>";
	print "<tr>";
	print "<td>ราคาสุทธิ :</td>";
	print "<td>".$row[7]."</td>";
	print "<td>วันที่จ่ายเงิน :</td>";
	print "<td>".$row[14]."</td>";
	print "</tr>";
	print "<tr>";
	print "<td>ส่วนลด :</td>";
	print "<td>".$row[13]."</td>";
	print "<td>คอมมิชชั่น :</td>";
	print "<td>".$row[11]."</td>";
	print "</tr>";
	print "<tr>";
	print "<td>Note :</td>";
	print "<td colspan=3>".$row[15]."</td>";
	print "</tr>";
    print "</table>";
	print "<a href='edit_record.php?CarID=".$car[0]."'> แก้ไข </a>";
	?>
	<a href="act_php/delete_record.php?<? echo "CarID=".$car[0];?>" onclick="return confirm('คุณกำลังลบข้อมูลรถ id ที่ <?=$car[0]?> ')">ลบ</a>
<?	print "</div>";
	print "<br><br>"; 
	     }}}
?>
<form>
<p align="right">
<input type=button style="width:150px;height:27px;" value="ปิดหน้าต่างนี้" onClick="javascript:window.close();"> </form><br />
</div></center>

</body>
</html>
<?
mysql_close();
?>