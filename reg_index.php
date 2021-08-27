<?php
include('./admin_index.php');
?>

<button class="btn-reg" onclick="staff_reg()" id="btn-staff"> Staff Registration</button><br>
<button class="btn-reg" onclick="student_reg()" id="btn-student"> Student Registration</button>

<div class="staff_reg" id="staff_reg">
<div class="reg">
    
    <div class="container1">
        <p class="heading">Staff Registration</p>
        <form action="" method="post">
        <div class="box">
            <p>Name</p>
            <div>
                <input type="text" name="name" id="" placeholder="Enter Your name">
            </div>
        </div>
        <div class="box">
            <p>Password</p>
            <div>
                <input type="password" name="pass" id="" placeholder="Enter Your Password">
            </div>
        </div> 
        <div class="box">
            <p>Moblie numer</p>
            <div>
                <input type="number" name="mob" id="" placeholder="Enter Your Mobile Number">
            </div>
        </div> 
        <div class="box">
            <p>Date of Birth</p>
            <div>
                <input type="date" name="dob" id="" placeholder="Enter Your DOB">
            </div>
        </div> 
        <div class="box">
            <p>Email id</p>
            <div>
                <input type="email" name="email" id="" placeholder="Enter Your Email ID">
            </div>
        </div> 
        <div class="box">
            <p>Department</p>
            <div>
                <input type="text" name="dept" id="" placeholder="Enter Your Department">
            </div>
        </div> 

        <input type="submit" name="submit" class="loginBtn" value="Register"> 
        </form>
    </div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
    echo "staff";
    $name=$_POST['name'];
    $password=$_POST['pass'];
    $mob=$_POST['mob'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $sql_staff_reg="INSERT INTO `staff_det`(`name`, `email`, `password`, `dob`, `mob`, `department`) VALUES ('$name','$email','$password','$dob','$mob','$dept')";
    $res_staff_reg=mysqli_query($conn,$sql_staff_reg);
    if(!mysqli_error($conn)){
        echo "<script> alert('Staff Details Registered')  </script>";
    }
    else{
        echo mysqli_error($conn);
    }
}


?>
<div class="student_reg" id="student_reg">
<div class="reg">
    
    <div class="container1">
        <p class="heading">Student Registration</p>
        <form action="" method="post">
        <div class="box">
            <p>Name</p>
            <div>
                <input type="text" name="name" id="" placeholder="Enter Your name">
            </div>
        </div>
        <div class="box">
            <p>Roll Number</p>
            <div>
                <input type="text" name="roll" id="" placeholder="Enter Your Roll NUmber">
            </div>
        </div>
        <div class="box">
            <p>Password</p>
            <div>
                <input type="password" name="pass" id="" placeholder="Enter Your Password">
            </div>
        </div> 
        <div class="box">
            <p>Moblie numer</p>
            <div>
                <input type="number" name="mob" id="" placeholder="Enter Your Mobile Number">
            </div>
        </div> 
        <div class="box">
            <p>Date of Birth</p>
            <div>
                <input type="date" name="dob" id="" placeholder="Enter Your DOB">
            </div>
        </div> 
        <div class="box">
            <p>Email id</p>
            <div>
                <input type="email" name="email" id="" placeholder="Enter Your Email ID">
            </div>
        </div> 
        <div class="box">
            <p>Department</p>
            <div>
                <input type="text" name="dept" id="" placeholder="Enter Your Department">
            </div>
        </div> 

        <input type="submit" name="submit1" class="loginBtn" value="Register"> 
        </form>
    </div>
</div>

</div>
<?php

if(isset($_POST['submit1'])){
    echo "sudent";
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $password=$_POST['pass'];
    $mob=$_POST['mob'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $sql_student_reg="INSERT INTO `student_det`(`roll_number`,`name`, `email`, `password`, `dob`, `mob`, `department`) VALUES ('$roll','$name','$email','$password','$dob','$mob','$dept')";
    $res_student_reg=mysqli_query($conn,$sql_student_reg);
    if(!mysqli_error($conn)){
        echo "<script> alert('Student Details Registered')  </script>";
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


