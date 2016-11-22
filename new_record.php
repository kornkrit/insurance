<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Record</title>
<link href="css/copy.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="datepicker/css/smoothness/jquery-ui-1.7.2.custom.css"">
<script type="text/javascript" src="datepicker/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="datepicker/js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript">
$(function(){
   
    $("#date_start").datepicker({ dateFormat: 'yy/mm/dd', isBuddhist: true , dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'] });
     
    $("#date_paid").datepicker({ dateFormat: 'yy/mm/dd', isBuddhist: true , dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'] });
         
    $("#date_end").datepicker({ dateFormat: 'yy/mm/dd',  defaultDate: + 365 , isBuddhist: true , dayNames: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
              dayNamesMin: ['อา.','จ.','อ.','พ.','พฤ.','ศ.','ส.'],
              monthNames: ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'],
              monthNamesShort: ['ม.ค.','ก.พ.','มี.ค.','เม.ย.','พ.ค.','มิ.ย.','ก.ค.','ส.ค.','ก.ย.','ต.ค.','พ.ย.','ธ.ค.'] });
    
});
</script>


</head>


<body>
<form action="act_php/act_new_record.php" method="post" name="new_recored" target="_blank">
<div>
<!-- New Record Member -->
<div>
  <h1>Genaral Information</h1> 
  <p>Name :  <input type="text" name="fullname" id="fullname" placeholder="Fullname" />&nbsp;&nbsp;&nbsp;  
    Surname : <input type="text" name="surname" id="surname" placeholder="Surname" /></br>
  </p>
  <p> Address </p>
  <p>
  <textarea name="address" cols="70" id="address" placeholder="Address"></textarea></br>
  <p>
    Phone :  <input type="text" name="phone" id="phone" placeholder="089-451-4236" />&nbsp;&nbsp;&nbsp;  
    Email : <input type="text" name="email" id="email" placeholder="yourmail@domain.com" /></br>
  </p>
</div><br/>
<!-- New Record Cars -->
<div>
  <h1>Cars Information</h1> 
  <p>Mander :  
    <label for="mander"></label>
    <select name="mander" id="mander">
      <option value="Audi">Audi</option>
      <option value="BMW">BMW</option>
      <option value="Chevrolet">Chevrolet</option>
      <option value="Ford">Ford</option>
      <option value="Honda">Honda</option>
      <option value="Hyundai">Hyundai</option>
      <option value="Isuzu">Isuzu</option>
      <option value="KIA">KIA</option>
      <option value="Land Rover">Land Rover</option>
      <option value="Lexus">Lexus</option>
      <option value="Mazda">Mazda</option>
      <option value="Mercedes-benz">Mercedes-benz</option>
      <option value="Mini">Mini</option>
      <option value="Mitsubishi">Mitsubishi</option>
      <option value="Nissan">Nissan</option>
      <option value="Peugeot">Peugeot</option>
      <option value="Proton">Proton</option>
      <option value="Suzuki">Suzuki</option>
      <option value="Toyota">Toyota</option>
      <option value="Volkswagen">Volkswagen</option>
      <option value="Volvo">Volvo</option>
    </select>
  </p>
  <p>Year : 
    <label for="year"></label>
    <select name="year" id="year">
      <option value="1988">1988</option>
      <option value="1989">1989</option>
      <option value="1990">1990</option>
      <option value="1991">1991</option>
      <option value="1992">1992</option>
      <option value="1993">1993</option>
      <option value="1994">1994</option>
      <option value="1995">1995</option>
      <option value="1996">1996</option>
      <option value="1997">1997</option>
      <option value="1998">1998</option>
      <option value="1999">1999</option>
      <option value="2000">2000</option>
      <option value="2001">2001</option>
      <option value="2002">2002</option>
      <option value="2003">2003</option>
      <option value="2004">2004</option>
      <option value="2005">2005</option>
      <option value="2006">2006</option>
      <option value="2007">2007</option>
      <option value="2008">2008</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    </select>
  </p>
  <p>Type : 
    <label for="type"></label>
    <select name="type" id="type">
      <option value="รย.1">รถยนต์นั่งส่วนบุคคลไม่เกิน 7 คน (รย.1)</option>
      <option value="รย.2">รถยนต์นั่งส่วนบุคคลเกิน 7 คน (รย.2)</option>
      <option value="รย.3">รถยนต์บรรทุกส่วนบุคคล (รย.3</option>
      <option value="รย.4">รถยนต์สามล้อส่วนบุคคล (รย.4)</option>
      <option value="รย.5">รถยนต์รับจ้างระหว่างจังหวัด (รย.5)</option>
      <option value="รย.6">รถยนต์รับจ้างบรรทุกคนโดยสารไม่เกิน 7 คน (รย.6)</option>
      <option value="รย.7">รถยนต์สี่ล้อเล็กรับจ้าง (รย.7)</option>
      <option value="รย.8">รถยนต์รับจ้างสามล้อ (รย.8)</option>
      <option value="รย.9">รถยนต์บริการธุรกิจ (รย.9)</option>
      <option value="รย.10">รถยนต์บริการทัศนาจร (รย.10)</option>
      <option value="รย.11">รถยนต์บริการให้เช่า (รย.11)</option>
    </select>
  </p>
  <p>Vehicle Registration : 
    <label for="vehicle_registration"></label>
    <input type="text" name="vehicle_registration" id="vehicle_registration" />
  </p>
  <p>City :  
    <select name="city" id="city">
      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
      <option value="กระบี่">กระบี่</option>
      <option value="กาญจนบุรี">กาญจนบุรี</option>
      <option value="กาฬสินธุ์">กาฬสินธุ์</option>
      <option value="กำแพงเพชร">กำแพงเพชร</option>
      <option value="ขอนแก่น">ขอนแก่น</option>
      <option value="จันทบุรี">จันทบุรี</option>
      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
      <option value="ชลบุรี">ชลบุรี</option>
      <option value="ชัยนาท">ชัยนาท</option>
      <option value="ชัยภูมิ">ชัยภูมิ</option>
      <option value="ชุมพร">ชุมพร</option>
      <option value="เชียงราย">เีชียงราย</option>
      <option value="เชียงใหม่">เชียงใหม่</option>
      <option value="ตรัง">ตรัง</option>
      <option value="ตราด">ตราด</option>
      <option value="ตาก">ตาก</option>
      <option value="นครนายก">นครนายก</option>
      <option value="นครปฐม">นครปฐม</option>
      <option value="นครพนม">นครพนม</option>
      <option value="นครราชสีมา">นครราชสีมา</option>
      <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
      <option value="นครสวรรค์">นครสวรรค์</option>
      <option value="นนทบุรี">นนทบุรี</option>
      <option value="นราธิวาส">นราธิวาส</option>
      <option value="น่าน">น่าน</option>
      <option value="บึงกาฬ">บึงกาฬ</option>
      <option value="บุรีรัมย์">บุรีรัมย์</option>
      <option value="ปทุมธานี">ปทุมธานี</option>
      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
      <option value="ปราจีนบุรี">ปราจีนบุรี</option>
      <option value="ปัตตานี">ปัตตานี</option>
      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
      <option value="พังงา">พังงา</option>
      <option value="พัทลุง">พัทลุง</option>
      <option value="พิจิตร">พิจิตร</option>
      <option value="พิษณุโลก">พิษณุโลก</option>
      <option value="เพชรบุรี">เพชรบุรี</option>
      <option value="เพชรบูรณ์">เพชรบูรณ์</option>
      <option value="แำพร่">แพร่</option>
      <option value="พะเยา">พะเยา</option>
      <option value="ภูเก็ต">ภูเก็ต</option>
      <option value="มหาสารคาม">มหาสารคาม</option>
      <option value="มุกดาหาร">มุกดาหาร</option>
      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
      <option value="ยะลา">ยะลา</option>
      <option value="ยโสธร">ยโสธร</option>
      <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
      <option value="ระนอง">ระนอง</option>
      <option value="ระยอง">ระยอง</option>
      <option value="ราชบุรี">ราชบุรี</option>
      <option value="ลพบุรี">ลพบุรี</option>
      <option value="ลำปาง">ลำปาง</option>
      <option value="ลำพูน">ลำพูน</option>
      <option value="เลย">เลย</option>
      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
      <option value="สกลนคร">สกลนคร</option>
      <option value="สงขลา">สงขลา</option>
      <option value="สตูล">สตูล</option>
      <option value="สมุทรปราการ">สมุทรปราการ</option>
      <option value="สมุทรสงคราม">สมุทรสงคราม</option>
      <option value="สมุทรสาคร">สมุทรสาคร</option>
      <option value="สระแก้ว">สระแก้ว</option>
      <option value="สระบุรี">สระบุรี</option>
      <option value="สิงห์บุรี">สิงห์บุรี</option>
      <option value="สุโขทัย">สุโขทัย</option>
      <option value="สุพรรณบุรี">สุพรรณบุรี</option>
      <option value="สุราษฎร์ธานี ">สุราษฎร์ธานี </option>
      <option value="สุรินทร์">สุรินทร์</option>
      <option value="หนองคาย">หนองคาย</option>
      <option value="หนองคาย">หนองคาย</option>
      <option value="อ่างทอง">อ่างทอง</option>
      <option value="อุดรธานี ">อุดรธานี </option>
      <option value="อุทัยธานี">อุทัยธานี</option>
      <option value="อุตรดิตถ์ ">อุตรดิตถ์ </option>
      <option value="อุบลราชธานี ">อุบลราชธานี </option>
      <option value="อำนาจเจริญ">อำนาจเจริญ</option>
    </select>
  </p>
  <p><a href="upload.html" target="new" >สำเนาทะเบียนรถ</a>
  <img><? echo $_SESSION['img']; ?></img>
  <p><br/>
  <!-- New Record Policy -->
  <div>
  <h1>Insurance Policies</h1> 
  <p>
  Company : <select name="company" id="company">
    <option value="cp" selected="selected">เจ้าพระยา</option>
    <option value="smk">สินมั่นคง</option>
    <option value="indara">อินทร</option>
    <option value="viriya">วิริยะ</option>
  </select>
  Class : 
  <label for="class"></label>
  &nbsp;&nbsp;&nbsp; <select name="class" id="class">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="2+">2+</option>
    <option value="3">3</option>
    <option value="3+">3+</option>
  </select>
  </p>
  <p>Date Start : <input type="text" name="date_start" id="date_start" /> 
  Date End : 
  <input type="text" name="date_end" id="date_end" />
  </p>
  <p>Net Premiem : 
    <label for="net_cowire"></label>
    <input type="text" name="net_cowire" id="net_cowire" />
</p>
  <p>Discount : 
    <input name="discount" type="text" id="discount" size="4" />
  %</p>
  <p>Commission :
    <input name="comission" type="text" id="comission" size="4" />
  %</p>
  <p>Paid Date : <input type="text" name="date_paid" id="date_paid" /> </p>
  <p>Note </p>
  <p>
    <label for="note"></label>
    <textarea name="note" cols="70" id="note"></textarea>
  </p>
  <p>&nbsp;</p>
</div>
</div>
<div class="right">
<input name="save" type="submit" value="Save" style="width:100px;height:30px" id="save" />
<input name="save2" type="reset" value="Clear" style="width:100px;height:30px" id="save2" />
</div>
</form>
</div>
</body>
</html>