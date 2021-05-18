<meta charset="utf-8">
<?php 

include("condb.php");
session_start();

 date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_his");
	$numrand = (mt_rand());
	$m_img = (isset($_REQUEST['img']) ? $_REQUEST['img'] : '');
	$upload=$_FILES['img'];
	if($upload <> '') { 
	$path="img/";
	$type = strrchr($_FILES['img']['name'],".");
	$newname =$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_file_img="img/".$m_img;
	move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  
	}

		 	$m_datesave = date('Y-m-d ');
			$m_id = mysqli_real_escape_string($condb,$_POST["m_id"]);
			$m_username = mysqli_real_escape_string($condb,$_POST["m_username"]);
			$m_password = mysqli_real_escape_string($condb,$_POST["m_password"]);
			$m_firstname = mysqli_real_escape_string($condb,$_POST["m_firstname"]);
			$m_name = mysqli_real_escape_string($condb,$_POST["m_name"]);
			$m_lastname = mysqli_real_escape_string($condb,$_POST["m_lastname"]);
			$m_position = mysqli_real_escape_string($condb,$_POST["m_position"]);
			$m_phone = mysqli_real_escape_string($condb,$_POST["m_phone"]);
			$m_email = mysqli_real_escape_string($condb,$_POST["m_email"]);
			$m_level = mysqli_real_escape_string($condb,$_POST["m_level"]);
			$add = mysqli_real_escape_string($condb,$_POST["add"]);
			$condb= mysqli_connect("localhost","root","","workshop_work_io") or die("Error: " . mysqli_error($condb));

			$sql = "INSERT INTO tbl_emp
			( m_id,m_username,m_password,m_firstname,m_name,m_lastname,m_position,img, m_phone,m_email,m_level,m_datesave)
			VALUES
			('$m_id','$m_username','$m_password','$m_firstname','$m_name','$m_lastname','$m_position','$newname',
			'$m_phone','$m_email','$m_level','$m_datesave')";
			$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error($condb));

					mysqli_close($condb);
					if($result){
					echo "<script type='text/javascript'>";
					echo "alert('บันทึกข้อมูลสำเร็จ');";
					echo "window.location = 'profile.php'; ";
					echo "</script>";
					}else{
					echo "<script type='text/javascript'>";
					echo "alert('Error');";
					echo "window.location = 'profile.php'; ";
					echo "</script>";
					}
?>
	