<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ระบบบันทึกเวลาการทำงาน</title>
    <style type="text/css">

@font-face {
font-family : "Elephant.ttf";
src : url('bootstrap/fonts/Elephant.ttf') format("truetype") ;
}

#topic{
font-family: Elephant ;
font-size: 15pt;
}

</style>
    
  </head>

    
  <body style="background-color: #e9eae9" >

        <br>
        <br>
        <br>
        <div align="center">
           <img src="logo.png" width="100" height="100">
        </div>

        <br>
        <br>  

      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col col-sm-4">
          <form action="authen.php"  method="post">
            <div class="form-group">
              <div id="topic" for="m_username">Username</div>
              <input type="text" class="form-control" id="m_username" name="m_username"   placeholder="Username" minlength="2"  required>
            </div>
            <div class="form-group">
              <div id="topic" for="m_password">Password</div  >
              <input type="password" class="form-control" id="m_password" name="m_password" placeholder="Password" minlength="2"  required>
            </div>
            <div align="center">
            <button type="submit" class="btn btn-warning" id="topic" >Login</button>
          </div>
          </form>
          <div class="row">
            <div class="col-sm-12">
              
            </div>

          </div>
        </div>
      </div>
    </div>
 
    </body>
     </div>
  </html>