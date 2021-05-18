<meta charset="utf-8">
<body style="background-color: #e9eae9" >
  <br>
  <br>
  <div align="center">
           <img src="logo.png" width="100" height="100">
  </div>
  <br>
  <br>

<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM tbl_emp ORDER BY m_id asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ชื่อ</td><td>นามสกุล</td><td>ตำเเหน่ง</td><td>อีเมล์</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["m_id"] .  "</td> "; 
  echo "<td>" .$row["m_name"] .  "</td> ";  
  echo "<td>" .$row["m_lastname"] .  "</td> ";
  echo "<td>" .$row["m_position"] .  "</td> ";
  echo "<td>" .$row["m_email"] .  "</td> ";

  //ลบข้อมูล
  echo "<td><a href='Delete.php?m_id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
echo "</table>";

//5. close connection

?>
 <center>
    <div class="row">
    <div class="col-lg-12" >
    	 <br>
          <a href="admin.php" class="btn btn-primary btn-lg"> กลับ </a>
    </div>
    </div>
	</center>

</body>