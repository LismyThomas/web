<?php
session_start();

$user=$_SESSION['login_id'];

$con = new mysqli("localhost","root","","php");

$sql="SELECT * FROM `tbl_student` WHERE s_id=$user";
$result=$con->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
	<title>Studnt Profile</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
   
   <form class="form"> 


     <br><br>
     <h1 align="center" style="font-weight: bolder;">My Profile</h1>
     
     <div class="home_div" align="center">
<br>
        <table align="center" style="font-weight: bolder;">

          <?php 
            while ($row=mysqli_fetch_assoc($result)) {
            ?>

        	<tr>

            <td>Registration No:</td>
            <td height="40"><input type="text" value="<?php echo $row['reg_no']; ?>" readonly></td>
            
            <td></td>
            <td></td>

        		<td>Name</td>
        		<td><input type="text" value="<?php echo $row['name']; ?>" readonly></td>

        
            <td></td>
            <td></td>

            <td>Phone</td>
            <td><input type="text" value="<?php echo $row['phone']; ?>" readonly></td>

        	</tr>
        	
        	<tr>

            <td>DOB</td>
            <td height="40"><input type="text" value="<?php echo $row['dob']; ?>" readonly></td>
            
            <td></td>
            <td></td>

            <td>Course</td>
            <td><input type="text" value="<?php echo $row['course']; ?>" readonly></td>

        
            <td></td>
            <td></td>

            <td>Sem</td>
            <td><input type="text" value="<?php echo $row['sem']; ?>" readonly></td>

            <td></td>
            <td></td>


          </tr>

          <tr>

            <td>Gender</td>
            <td height="40"><input type="text" value="<?php echo $row['Gender']; ?>" readonly></td>
            
            <td></td>
            <td></td>

            <td>Email</td>
            <td><input type="text" value="<?php echo $row['email']; ?>" readonly></td>

        
            <td></td>
            <td></td>


            <td>Roll.No</td>
            <td><input type="text" value="<?php echo $row['roll']; ?>" readonly></td>

          </tr>

          <?php
          }
          ?>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td height="40">
               <a href="Std_home.php">Back To Home</a><br><br>

            </td>
          </tr>
        	
        </table>
        
    </div>

  </form>
</body>
</html>