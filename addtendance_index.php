<?php
include('./admin_index.php');
?>
<head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="search.js"></script>
</head>
<button class="btn-reg" onclick="staff_reg()" id="btn-staff"> Staff Attendence</button><br>
<button class="btn-reg" onclick="student_reg()" id="btn-student"> Student Attendence</button>

<div class="staff_reg" id="staff_reg">
<div class="reg">
    
    <div class="container1">
        <p class="heading">Staff Attendence</p>
        <form action="" method="post">
            <p>Name</p>
            <div>
            <select name="sname" style="width: 350px;" >
    <option value="null">select your name with email</option>
    <?php 
        $qurey="SELECT * FROM staff_det;";
        $result=mysqli_query($conn,$qurey);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>
            
                <option value="<?php echo $row['name']?>-<?php echo $row['email']?>"><?php echo $row['name']."-".$row['email'];?></option>
            
<?php
        }
    
    
    ?></select>
        </div>
        <div class="box">
            <p>Date</p>
            <div>
                <input type="date" name="dob" id="" placeholder="Enter Your Password">
            </div>
        </div> 
        
            <p>Status</p>
            <div>
                <select name="sts" id="" style="width: 350px;">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
        <input type="submit" name="submit" class="loginBtn" value="Register"> 
        </form>
    </div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
    echo "staff";
    $array=explode('-',$_POST['sname']);
    $name=$array[0];
    echo $name;

    $date=$_POST['dob'];
    $email=$array[1];

    $sts=$_POST['sts'];
    $sql_att_reg="INSERT INTO `staff_attendance`(`name`, `email`, `date`, `sts`) VALUES ('$name','$email','$date','$sts')";
    $res_att_reg=mysqli_query($conn,$sql_att_reg);
    if(!mysqli_error($conn)){
        echo "<script> alert('Staff Attendance Registered')  </script>";
    }
    else{
        echo mysqli_error($conn);
    }
}


?>
<div class="student_reg" id="student_reg">
<div class="reg">
    
    <div class="container1">
        <p class="heading">Student Attendence</p>
        <form action="" method="post">
            <p>Roll Number</p>
            <div>
            <select name="sname" style="width: 350px;" >
    <option value="null">select your Roll Number</option>
    <?php 
        $qurey="SELECT * FROM student_det;";
        $result=mysqli_query($conn,$qurey);
        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            ?>
            
                <option value="<?php echo $row['roll_number']?>"><?php echo $row['roll_number']?></option>
            
<?php
        }
    
    
    ?></select>
        </div>
        <div class="box">
            <p>Date</p>
            <div>
                <input type="date" name="dob" id="" placeholder="Enter Your Password">
            </div>
        </div> 
        
            <p>Status</p>
            <div>
                <select name="sts" id="" style="width: 350px;">
                    <option value="present">Present</option>
                    <option value="absent">Absent</option>
                </select>
            </div>
        <input type="submit" name="submit1" class="loginBtn" value="Register"> 
        </form>
    </div>
</div>
</div>
<?php
if(isset($_POST['submit1'])){
   $roll=$_POST['sname'];
    $date=$_POST['dob'];

    $sts=$_POST['sts'];
    $sql_att_reg1="INSERT INTO `student_attendance`(`roll_number`, `date`, `sts`) VALUES ('$roll','$date','$sts')";
    $res_att_reg1=mysqli_query($conn,$sql_att_reg1);
    if(!mysqli_error($conn)){
        echo "<script> alert('Student Attendance Registered')  </script>";
    }
    else{
        echo mysqli_error($conn);
    }
}


?>
<script>
    document.getElementById('staff_reg').style.visibility='hidden';
    document.getElementById('student_reg').style.visibility='hidden';

function staff_reg(){
    document.getElementById('staff_reg').style.visibility='visible';
    document.getElementById('student_reg').style.visibility='hidden';
    document.getElementById('btn-staff').style.backgroundColor='#70e000';
    document.getElementById('btn-student').style.backgroundColor='#4ea8de';

}
function student_reg(){
    document.getElementById('staff_reg').style.visibility='hidden';
    document.getElementById('student_reg').style.visibility='visible';
    document.getElementById('btn-student').style.backgroundColor='#70e000';
    document.getElementById('btn-staff').style.backgroundColor='#4ea8de';

}


</script>


