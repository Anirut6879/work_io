<?php
session_start();
// echo '<pre>';
        // print_r($_SESSION);
// echo '</pre>';
include('condb.php');
$m_id = $_SESSION['m_id'];
$m_level = $_SESSION['m_level'];
if($m_level!='staff'){
Header("Location: logout.php");
}
//query member login
$queryemp = "SELECT * FROM tbl_emp WHERE m_id=$m_id";
$resultm = mysqli_query($condb, $queryemp) or die ("Error in query: $queryemp " . mysqli_error($condb));
$rowm = mysqli_fetch_array($resultm);
//เวลาปัจจุบัน
$timenow = date('H:i:s');
$datenow = date('Y-m-d');
//เวลาที่บันทึก
$queryworkio = "SELECT MAX(workdate) as lastdate, workin, workout FROM tbl_work_io WHERE m_id=$m_id AND workdate='$datenow' ";
$resultio = mysqli_query($condb, $queryworkio) or die ("Error in query: $queryworkio " . mysqli_error($condb));
$rowio = mysqli_fetch_array($resultio);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>M-studio</title>

    <style type="text/css">

@font-face {
font-family : "Elephant.ttf";
src : url('bootstrap/fonts/Elephant.ttf') format("truetype") ;
}

#topic{
font-family: Elephant ;
font-size: 20pt;
}
#small{
font-family: Elephant ;
font-size: 15pt;
}

#time{
font-family: Elephant ;
font-size: 10pt;
}



</style>

  </head>
  <body style="background-color: #e9eae9" >
    <div class="container">
      <div class="row">
        <div class="col col-sm-12">
          <br>
          <br>
          <div align="center">
           <img src="logo.png" width="100" height="100">
        </div>
          <br>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col col-sm-3">
          <img src="img/<?php echo $rowm['img'];?>" width='100%'>
          <br>
          <br>
          <div align="center">
          <a href="logout.php" class="btn btn-danger btn-sm-2" id="small" > logout </a>
          </div>  

           

        
        </div>
        <div class="col col-sm-9">
         <h3 id="small"> <b>
          NAME : <?php echo  $rowm['m_firstname'].' '.$rowm['m_name']. ' '.$rowm['m_lastname'];?>
          <br>
          POSITION : <?php echo $rowm['m_position'];?>
          </b>
          <br>
          DATE : <?php echo date('d-m-Y');?>
          <br></h3>
          <form action="save.php"  method="post" class="form-horizontal">
            <div class="form-group row">
              <div class="col col-sm-2">
                <label for="m_id">Employee ID</label>
                <input type="text" class="form-control"   name="m_id"   placeholder="รหัสพนักงาน"   value="<?php echo $rowm['m_id'];?>"  readonly>
              </div>
              <div class="col col-sm-3">
                <label for="m_id">Work In</label>
                <?php
                if($timenow < '17:00:00'){ 
                if(isset($rowio['workin'])){ ?>
                <input type="text" class="form-control"   name="workin"   value="<?php echo $rowio['workin'];?>"  disabled>
                <?php }else{ ?>
                <input type="text" class="form-control"   name="workin"   value="<?php echo date('H:i:s');?>"  readonly>
                <?php  } }?>
              </div>
              <div class="col col-sm-3">
                <label for="m_id">Work Out</label>
                <?php
                if($timenow > '17:00:00'){
                if(isset($rowio['workout'])){ ?>
                <input type="text" class="form-control"   name="workout"  value="<?php echo $rowio['workout'];?>"  disabled>
                <?php }else{ ?>
                <input type="text" class="form-control"   name="workout"  value="<?php echo date('H:i:s');?>"  readonly>
                <?php
                } //if(isset($rowio['workout'])){
                }else{  //if($timenow > '11:00:00'){
                echo '<br><font color="red"> หลัง 17.00 น. </font>';
                } ?>
              </div>
              <div class="col col-sm-2">
                
                <button type="submit" class="btn btn-warning" id="small" >submit</button>
              </div>
              
            </div>
          </form>
          ____________________________________________________________________________________________________________________________
          <br>
          <br>
          <div id="topic">History</div>
          <?php
          $querylist = "SELECT * FROM tbl_work_io WHERE m_id = $m_id ORDER BY workdate DESC";
          $resultlist = mysqli_query($condb, $querylist)  or die ("Error:" . mysqli_error($condb));
          echo "
          <table class='table table-bordered table-striped'>
          <thead>
            <tr class='table-warning'id='small'>
              <td>Date</td>
              <td>Work-In</td>
              <td>Work-Out</td>
            </tr>
            </thead>
            ";

            foreach ($resultlist as $value) {
            echo "<tr id='time'>";
              echo "<td>" .$value["workdate"] .  "</td> ";
              echo "<td>" .$value["workin"] .  "</td> ";
              echo "<td>" .$value["workout"] .  "</td> ";
            echo "</tr>";
            }
          echo '</table>';
          ?>
        </div>
      </div>
    </div>
    </body>
  </html>