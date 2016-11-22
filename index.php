<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insurance System</title>
<link href="css/copy.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div class="width"><div class="menu">
  <ul id="webdesign-nav-horizontal">
      <li><a href="index.php">Home</a></li>
      <li>File
          <ul>
              <li><a href="index.php?page=add_new_record">New Record</a></li>
              <li><a href="index.php?page=add_new_car">New Car</a></li>
              <li>Delete Record</li>
              <li><a href="index.php?page=edit_report_id">Edit Record</a></li>
          </ul>
      </li>
      <li>Report
          <ul>
              <li><a href="index.php?page=due_report">Due Report</a></li>
              <li><a href="index.php?page=add_new_car">View Report</a></li>
          </ul>
      </li>
  </ul>
</div></div>
<center><div id ="element">
<div align="left">
<?php 
  switch ($_GET[page]){
	  		
			case add_new_record :
			include ('new_record.php');
			break;
			
			
			case due_report :
			include ('due_report.php');
			break;
			
			case edit_report_id :
			include ('edit_record_id.php');
			break;
			
			case add_new_car :
			include ('add_new_car.php');
			break;
					
						
			default :
			{
				include ('home.php');
				break;
			}
	  }
?></div>
</div></center>


</body>
</html>