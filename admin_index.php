<?php  
include('./conn.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Corner</title>
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
  </head>
  <body>
    <header>
		<img src="./kec.png" alt="" srcset="" class="img-logo">
      <p class="Logo"> STAFF AND STUDENT MANAGEMENT SYSTEM</p>
      <input type="checkbox" name="" class="btn" />
      <div class="nav">
        <ol>
          <li><a href="time_table.php">Time Table</a></li>
          <li><a href="addtendance_index.php">Attendence Entry</a></li>
          <li><a href="./reg_index.php">New Registration</a></li>
          <li><a href="./index.html">Logout</a></li>
        </ol>
      </div>
    </header>
  </body>
</html>
