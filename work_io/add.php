<?php 

$condb= mysqli_connect("localhost","root","","workshop_work_io") or die("Error: " . mysqli_error($condb));
mysqli_query($condb, "SET NAMES 'utf8' ");
date_default_timezone_set('Asia/Bangkok');

	session_start();

		if(isset($_SESSION["username"]))
		{

			if($_SESSION["username"]=="admin")
		{
				header("refresh:0; url=index.php");
		}
			if ($_SESSION["username"]=="member")
		{
				header("refresh:0; url=index.php");
		}
	}

?>


<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Add staff </title>
</head>
 
<body style="background-color: #e9eae9" >
  <br>
  <br>
  <div align="center">
           <img src="logo.png" width="100" height="100">
  </div>
  <br>
  <br>


<center>

<form action="save_add.php" method="post" enctype="multipart/form-data" name="add" id="add"><table width="20%" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td colspan="2" align="center">Insert</td>
    </tr>
  <td>username</td>
    <td><label for="username"></label>
      <input type="text" name="m_username" required="" /></td>
  </tr>
  <td>password</td>
    <td><label for="password"></label>
      <input type="password" name="m_password" required="" /></td>
  </tr>
  <td>firstname</td>
    <td><label for="firstname"></label>
      <input type="text" name="m_firstname" required="" /></td>
  </tr>
  <td>name</td>
    <td><label for="name"></label>
      <input type="text" name="m_name" required="" /></td>
  </tr>
  <td>lastname</td>
    <td><label for="lastname"></label>
      <input type="text" name="m_lastname" required="" /></td>
  </tr>
  <td>position</td>
    <td><label for="position"></label>
      <input type="text" name="m_position" required="" /></td>
  </tr>
  <tr>
  	<form action="save_add.php" method="post"enctype="multipart/form-data">
    <td>img</td>
    <td><label for="img"></label>
      <input type="file" name="img" required="" /></td>
  </tr>
  <td>phone</td>
    <td><label for="phone"></label>
      <input type="text" name="m_phone" required=""/></td>
  </tr>
  <td>email</td>
    <td><label for="email"></label>
      <input type="email" name="m_email"required="" /></td>
  </tr>
  <td>level</td>
    <td><label for="level"></label>
      <input type="text" name="m_level" required="" /></td>
  </tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="Save" /></td>
  </tr>
</table>
 
</form>
<br />
 
 
 
</center>
 
 
 
</body>
</html>