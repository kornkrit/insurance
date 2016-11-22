<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Due Report</title>
<link href="css/copy.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="datepicker/css/smoothness/jquery-ui-1.7.2.custom.css"">
<script type="text/javascript" src="datepicker/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="datepicker/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(function(){
   
    $("#date_start").datepicker({ dateFormat: 'yy/mm/dd', isBuddhist: true , dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'] })
     $("#date_end").datepicker({ dateFormat: 'yy/mm/dd',  defaultDate: + 30 , isBuddhist: true , dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'] })
    

});
</script>
<?php  
    
	  include("config/dbc.php");
	  $date_start = $_POST['date_start'];
	  $date_end = $_POST['date_end'];
	  $search = $_POST['sv'];
	  
	 
?>

</head>


<body>


<table width="706" border="0" cellpadding="0">
  <tr>
    <td width="592"><form action="" method="post" name="peroid time" target="_self">
ค้นหารายงาน วันที่ <input type="text" name="date_start" id="date_start" placeholder="วันที่เริ่ม" /> ถึงวันที่ <input type="text" name="date_end"  placeholder="วันสิ้นสุด" id="date_end" />
<input name="save" type="submit" value="Search" style="width:100px;height:23px" id="search" />
<input type="hidden" name="sv" id="sv" value="1"/>
</form></td>
    <td width="108">
    <form action="" method="post" name="1mouth">
<input name="save" type="submit" value="1 Mouth" style="width:100px;height:23px" id="mouth" />
<input type="hidden" name="sv" id="sv" value="2"/>

</form></td>
  </tr>
</table>
<p>

<?php
 if($search==1 && $date_start <> "" && $date_end <> ""){
	 	  
	      print "<table width='1000'>";
	      print"<tr bgcolor=0066FF>";
	      print"<td width='50' align = center> ชื่อ </td>";
	      print"<td width='60' align = center> นามสกุล </td>";
	      print"<td align = center> ที่อยู่ </td>";
	      print"<td align = center> เบอร์โทรศัพท์ </td>";
	      print"<td align = center> อีเมล์ </td>";
		  print"<td align = center> ยี่ห้อ </td>";
		  print"<td align = center> ปี </td>";
		  print"<td align = center> ทะเบียน </td>";
		  print"<td align = center> บริษัท </td>";
		  print"<td align = center> วันหมดอายุ </td>";
		  print"<td align = center> Detail </td>";
	      print "</tr>";
	  
	 $period = mysql_query("SELECT * FROM  `insurance_policy` WHERE `date_end` BETWEEN '$date_start' AND '$date_end' ");
	  
	 while($row = mysql_fetch_row($period))
	 {
	    
	  $getmember = mysql_query("SELECT * FROM `member` WHERE `id` = $row[1]");
	  while($member = mysql_fetch_row($getmember)){
	   $cars = mysql_query("SELECT * FROM `cars` WHERE `member_id` = $row[1]");
	     while($car = mysql_fetch_row($cars)){
	      print"<tr bgcolor=00CCFF>";
	      print "<td>".$member[1]."</td>";
	      print "<td>".$member[2]."</td>";
	      print "<td>".$member[3]."</td>";
	      print "<td>".$member[4]."</td>";
	      print "<td>".$member[5]."</td>";
	      print "<td>".$car[2]."</td>";
	      print "<td>".$car[3]."</td>";
	      print "<td>".$car[5]."</td>";
		  print "<td>".$row[3]."</td>";
		  print "<td>".$row[5]."</td>";
		  print "<td>";
		  print " <a href='detail.php?MemberID=".$row[1]."' target='window name'> detail </a></td>";
    	  print "</tr>";
	     }}} 
	print"</table><br>";}
 else if($search==2){
	
	print "<table>";
	      print"<tr bgcolor=0066FF>";
	      print"<td align = center> ชื่อ </td>";
	      print"<td align = center> นามสกุล </td>";
	      print"<td align = center> ที่อยู่ </td>";
	      print"<td align = center> เบอร์โทรศัพท์ </td>";
	      print"<td align = center> อีเมล์ </td>";
		  print"<td align = center> ยี่ห้อ </td>";
		  print"<td align = center> ปี </td>";
		  print"<td align = center> ทะเบียน </td>";
		  print"<td align = center> บริษัท </td>";
		  print"<td align = center> วันหมดอายุ </td>";
		  
	      print "</tr>";
	 $get1mouth = mysql_query("SELECT * FROM `insurance_policy` WHERE `date_end` <= CURDATE() + 100 ");
	 
	 while($row = mysql_fetch_row($get1mouth))
	 {
	      
	  $getmember = mysql_query("SELECT * FROM `member` WHERE `id` = $row[1]");
	  while($member = mysql_fetch_row($getmember)){
	   
	   $cars = mysql_query("SELECT * FROM `cars` WHERE `member_id` = $row[1]");
	     while($car = mysql_fetch_row($cars)){	     
	      print"<tr bgcolor=00CCFF>";
	      print "<td>".$member[1]."</td>";
	      print "<td>".$member[2]."</td>";
	      print "<td>".$member[3]."</td>";
	      print "<td>".$member[4]."</td>";
	      print "<td>".$member[5]."</td>";
	      print "<td>".$car[2]."</td>";
	      print "<td>".$car[3]."</td>";
	      print "<td>".$car[5]."</td>";
		  print "<td>".$row[3]."</td>";
		  print "<td>".$row[5]."</td>";
		  print " <td><a href='detail.php?MemberID=".$row[1]."' target=window name> detail </a></td>";
    	  print "</tr>";
	    }}} print"</table>";}

?></p>
</body>
</html>