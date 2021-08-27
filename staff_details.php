<?php
include('./conn.php');
date_default_timezone_set('Asia/Kolkata');
$date= date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="search.js"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
table {
  border-collapse: collapse;
  width: 85%;
  margin-top: 20px;
  margin-left: 150px;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
form{
    margin-left: 50px;
}

</style>
  </head>
  <body>
    <header>
		<img src="./kec.png" alt="" srcset="" class="img-logo">
      <p class="Logo"> STAFF AND STUDENT MANAGEMENT SYSTEM</p>
      <input type="checkbox" name="" class="btn" />
      <div class="nav">
        <ol>
          <li><a href="./student_detils.php">Student Details</a></li>
          <li><a href="./staff_details.php">Staff Details</a></li>
          <li><a href="./admin_login.php">Admin Login</a></li>
        </ol>
      </div>
    </header>

    <div class="detbox">
        <form action="" method="POST">
            Select the Staff: <select name="sname" style="width: 350px; position:relative; left:20px;" >
    <option value="null">Select Staff name with Department</option>
    <?php 
        $qurey="SELECT * FROM staff_det;";
        $result=mysqli_query($conn,$qurey);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>
            
                <option value="<?php echo $row['name']?>-<?php echo $row['department']?>"><?php echo $row['name']."-".$row['department'];?></option>
            
<?php
        }
    
    
    ?></select>
            <br><br><input type="submit" name="submit" class="loginBtn" value="Get Details" style="width: 60%;"> 

        </form>
    </div>
<?php
if(isset($_POST['submit'])){
    $array=explode('-',$_POST['sname']);
    $name=$array[0];
    $dept=$array[1];
    $sql_staff_det="SELECT * FROM staff_det WHERE name='$name' AND department='$dept'";
    $res_staff_det=mysqli_query($conn,$sql_staff_det);
    $sql_staff_att="SELECT * FROM staff_attendance WHERE name='$name' AND date='$date'";
    $res_staff_att=mysqli_query($conn,$sql_staff_att);
    $row2=mysqli_fetch_array($res_staff_att,MYSQLI_ASSOC);
    
    

    ?>
    <table>
        <tr>
            <th>Staff Name</th>
            <th>Department</th>
            <th>Mobile Number</th>
            <th>Email id</th>
            <th>Status</th>
        </tr>
        <tr>
            <?php 
            while($row=mysqli_fetch_array($res_staff_det,MYSQLI_ASSOC)){
                ?>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['department']; ?></td>
            <td><?php echo $row['mob']; ?></td>
            <td><?php echo $row['email']; $email=$row['email'];?></td>
            <td><?php echo $row2['sts'];?></td>
            <?php } ?>  
        </tr>
    </table>
    <?php
    $sql_staff_tt="SELECT * FROM time_table WHERE name='$name' AND email='$email'";
    $res_staff_tt=mysqli_query($conn,$sql_staff_tt);

            $row1=mysqli_fetch_array($res_staff_tt,MYSQLI_ASSOC);

    ?>
    <table>
    <caption>Staff Time table</caption>
        <tr>
            <th>Day</th>
            <th>Period 1</th>
            <th>Period 2</th>
            <th>Period 3</th>
            <th>Period 4</th>
            <th>Period 5</th>
            
        </tr>
        <tr>
            <td>Monday</td>
            <td><?php echo $row1['m1']; ?></td>
            <td><?php echo $row1['m2']; ?></td>
            <td><?php echo $row1['m3']; ?></td>
            <td><?php echo $row1['m4']; ?></td>
            <td><?php echo $row1['m5']; ?></td>
            
        </tr>
        <tr>
            <td>Tuesday</td>
            <td><?php echo $row1['tu1']; ?></td>
            <td><?php echo $row1['tu2']; ?></td>
            <td><?php echo $row1['tu3']; ?></td>
            <td><?php echo $row1['tu4']; ?></td>
            <td><?php echo $row1['tu5']; ?></td>
            
        </tr>
        <tr>
            <td>Wednesday</td>
            <td><?php echo $row1['w1']; ?></td>
            <td><?php echo $row1['w2']; ?></td>
            <td><?php echo $row1['w3']; ?></td>
            <td><?php echo $row1['w4']; ?></td>
            <td><?php echo $row1['w5']; ?></td>
            
        </tr>
        <tr>
            <td>Thursday</td>
            <td><?php echo $row1['th1']; ?></td>
            <td><?php echo $row1['th2']; ?></td>
            <td><?php echo $row1['th3']; ?></td>
            <td><?php echo $row1['th4']; ?></td>
            <td><?php echo $row1['th5']; ?></td>
            
        </tr>
        <tr>
            <td>Friday</td>
            <td><?php echo $row1['fr1']; ?></td>
            <td><?php echo $row1['fr2']; ?></td>
            <td><?php echo $row1['fr3']; ?></td>
            <td><?php echo $row1['fr4']; ?></td>
            <td><?php echo $row1['fr5']; ?></td>
            
        </tr>
    </table>
<?php
}

?>