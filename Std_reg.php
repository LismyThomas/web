<?php 

  $con = new mysqli("localhost","root","","php");

  if(isset($_POST['sb']))
  {
    $nm = $_POST['na'];
    $reg = $_POST['re'];
    $ph = $_POST['ph'];
    $dob = $_POST['dob'];
    $g = $_POST['g'];
    $cou = $_POST['co'];
    $se = $_POST['sem'];
    $roll = $_POST['rn'];
 
    $u = $_POST['em'];
    $p = $_POST['pa'];

    echo '$reg','$nm','$ph','$dob','$cou','$roll','$se','$roll','$g','$u','$p';

    $sql = "INSERT INTO `tbl_student`(`reg_no`, `name`, `phone`, `dob`, `course`, `sem`, `roll`, `Gender`, `email`, `password`) VALUES ('$reg','$nm','$ph','$dob','$cou','$se','$roll','$g','$u','$p')";

    $res = $con->query($sql);

    echo "$res";

    if($res){
      ?>
      <script>
      alert('Registration Completed')
      </script>
      <?php
      
      header("location:/student_mgt_system/std_login.php");
    }
    else{
      echo "failed";
    }

  }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Studnt Reg</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
   
   <form method="POST" class="form"> 


     <br><br>
     <h1 align="center" style="font-weight: bolder;">Student Registration</h1>
     
     <div class="home_div" align="center">
        <p style="font-weight: bolder;">Please Fill the Fields</p>
        <table align="center" style="font-weight: bolder;">

          <tr>
            <td>Registration No:</td>
            <td height="40"><input type="text" name="re" required></td>
          </tr>

        	<tr>
        		<td>Name</td>
        		<td height="40"><input type="text" pattern="[a-zA-Z ]{2,30}" required name="na"></td>
        	</tr>
          <tr>
            <td>Gender</td>
            <td height="40"><input type="radio" required name="g" value="Male">Male
                            <input type="radio" required name="g" value="Female">Female
            </td>
          </tr>
        	
        	<tr>
        		<td>Phone</td>
        		<td height="40"><input type="tel" pattern="[0-9]{10}" required name="ph"></td>
        	</tr>

          <tr>
            <td>DOB</td>
            <td height="40"><input type="date" required name="dob"></td>
          </tr>

        	<tr>
        		<td>Course</td>
        		<td height="40">
        			<select required name="co">
        				<option value="">--SELECT--</option>
        				<option value="B.Tech CS">B.Tech CS</option>
        				<option value="B.Tech EC">B.Tech EC</option>
        				<option value="MCA">MCA</option>
        				<option value="Tech Civil">M.Tech Civil</option>
        				<option value="Other">Other</option>
        			</select>
        		</td>
        	</tr>
        	<tr>
        		<td>Semester</td>
        		<td height="40">
        			<select required name="sem">
        				<option value="">--SELECT--</option>
        				<option value="1">1</option>
        				<option value="2">2</option>
        				<option value="3">3</option>
        				<option value="4">4</option>
        				<option value="5">5</option>
        				<option value="6">6</option>
        				<option value="7">7</option>
        				<option value="8">8</option>
        			</select>
        		</td>
        	</tr>
        	<tr>
        		<td>Roll.No</td>
        		<td height="40"><input type="number" name="rn" min="1" max="60" required></td>
        	</tr>
        	<tr>
        		<td>Email</td>
        		<td height="40"><input type="Email" required name="em"></td>
        	</tr>
          <tr>
            <td>Password</td>
            <td height="40"><input type="Password" required name="pa"></td>
          </tr>
        	

        	<tr>

        		<td></td>
        		<td height="40">
        			<input type="submit" value="REGISTER" name="sb" class="button">
        		</td>
        	</tr>

          <tr>

            <td></td>
            <td height="40">
               <a href="Home.php">Back To Home</a><br><br>

            </td>
          </tr>
        	
        </table>
        
    </div>

  </form>


</body>
</html>