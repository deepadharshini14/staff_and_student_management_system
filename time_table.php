<?php


include('./admin_index.php');
?>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="search.js"></script>
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

<div style="overflow-x:auto;">
<form action="" method="post">
Name:<select name="sname" style="width: 350px; position:relative; left:20px;" >
    <option value="null">select Staff name with email</option>
    <?php 
        $qurey="SELECT * FROM staff_det;";
        $result=mysqli_query($conn,$qurey);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>
            
                <option value="<?php echo $row['name']?>-<?php echo $row['email']?>"><?php echo $row['name']."-".$row['email'];?></option>
            
<?php
        }
    
    
    ?></select>
  <table>
    <tr>
      <th>Days</th>
      <th>Period 1</th>
      <th>Period 2</th>
      <th>Period 3</th>
      <th>Period 4</th>
      <th>Period 5</th>
      
    </tr>
    <tr>
      <td>Monday</td>
      <td><input type="text" name="m1" id=""></td>
      <td><input type="text" name="m2" id=""></td>
      <td><input type="text" name="m3" id=""></td>
      <td><input type="text" name="m4" id=""></td>
      <td><input type="text" name="m5" id=""></td>
    </tr>
    <tr>
      <td>Tuesday</td>
      <td><input type="text" name="tu1" id=""></td>
      <td><input type="text" name="tu2" id=""></td>
      <td><input type="text" name="tu3" id=""></td>
      <td><input type="text" name="tu4" id=""></td>
      <td><input type="text" name="tu5" id=""></td>
      
      
    </tr>
    <tr>
      <td>Wednesday</td>
      <td><input type="text" name="w1" id=""></td>
      <td><input type="text" name="w2" id=""></td>
      <td><input type="text" name="w3" id=""></td>
      <td><input type="text" name="w4" id=""></td>
      <td><input type="text" name="w5" id=""></td>
    </tr>
    <tr>
      <td>Thursday</td>
      <td><input type="text" name="th1" id=""></td>
      <td><input type="text" name="th2" id=""></td>
      <td><input type="text" name="th3" id=""></td>
      <td><input type="text" name="th4" id=""></td>
      <td><input type="text" name="th5" id=""></td>
    </tr>
    <tr>
      <td>Wednesday</td>
      <td><input type="text" name="fr1" id=""></td>
      <td><input type="text" name="fr2" id=""></td>
      <td><input type="text" name="fr3" id=""></td>
      <td><input type="text" name="fr4" id=""></td>
      <td><input type="text" name="fr5" id=""></td>
    </tr>
  </table>
  <input type="submit" name="submit" class="loginBtn" value="Register" style="width: 200px; float:right; margin-right:150px; margin-top:50px;"> 
  </form>
</div>

<?php

if(isset($_POST['submit'])){
    $array=explode('-',$_POST['sname']);
    $name=$array[0];
    $email=$array[1];
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];
    $m3=$_POST['m3'];
    $m4=$_POST['m4'];
    $m5=$_POST['m5'];
    $tu1=$_POST['tu1'];
    $tu2=$_POST['tu2'];
    $tu3=$_POST['tu3'];
    $tu4=$_POST['tu4'];
    $tu5=$_POST['tu5'];
    $w1=$_POST['w1'];
    $w2=$_POST['w2'];
    $w3=$_POST['w3'];
    $w4=$_POST['w4'];
    $w5=$_POST['w5'];
    $th1=$_POST['th1'];
    $th2=$_POST['th2'];
    $th3=$_POST['th3'];
    $th4=$_POST['th4'];
    $th5=$_POST['tu5'];
    $fr1=$_POST['fr1'];
    $fr2=$_POST['fr2'];
    $fr3=$_POST['fr3'];
    $fr4=$_POST['fr4'];
    $fr5=$_POST['fr5'];


    $sql_timetanle="INSERT INTO time_table( `name`, `email`, `m1`, `m2`, `m3`, `m4`, `m5`, `tu1`, `tu2`, `tu3`, `tu4`, `tu5`, `w1`, `w2`, `w3`, `w4`, `w5`, `th1`, `th2`, `th3`, `th4`, `th5`, `fr1`, `fr2`, `fr3`, `fr4`, `fr5`) VALUES ('$name', '$email', '$m1', '$m2', '$m3', '$m4', '$m5', '$tu1', '$tu2', '$tu3', '$tu4', '$tu5', '$w1', '$w2', '$w3', '$w4', '$w5', '$th1', '$th2', '$th3', '$th4', '$th5', '$fr1', '$fr2', '$fr3', '$fr4', '$fr5');";
    $res_timetable=mysqli_query($conn,$sql_timetanle);
    if(!mysqli_error($conn)){
        echo "<script>alert('Time table added');</script>";
    }
    else{
        echo mysqli_error($conn);
    }
}
    ?>