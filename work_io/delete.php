<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//สร้างตัวแปรสำหรับรับค่า member_id จากไฟล์แสดงข้อมูล
$m_id = $_REQUEST["m_id"];
 
//ลบข้อมูลออกจาก database ตาม member_id ที่ส่งมา
 

$sql = "DELETE FROM tbl_emp WHERE m_id = '$m_id' ";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
 
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('delete Succesfuly');";
  echo "window.location = 'staff.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to delete again');";
  echo "</script>";
}
?>