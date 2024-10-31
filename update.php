<?php
        $uid = $_GET['updateid'];
        $con = mysqli_connect('localhost', 'root', '', 'sp');
		$result = mysqli_query($con, "SELECT * FROM tm where id='$uid'");
		$row=mysqli_fetch_assoc($result);
		$f_name=$row['fname'];
		$l_name=$row['lname'];
		$s_type=$row['stype'];

		if(isset($_POST['update'])) {                                                                                                            
			$firstname = $_POST['f_name'];
			$lastname = $_POST['l_name'];
			$sptype = $_POST['s_type'];
			$con = mysqli_connect('localhost', 'root', '', 'sp');
			$query = mysqli_query($con, "UPDATE  tm SET fname='$firstname',lname='$lastname',stype='$sptype' WHERE id ='$uid'"); 
			if($query){
                echo "Data update Successful";
            }
            else {
                echo "Failed to updeate";
            }                          
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update form</title>
	<link rel="stylesheet" href="design/style.css">
</head>
<body>
<div class="nav">
            <div class="text">
            
            <a href="http://localhost/Project/"><img src="img/download.png" alt="" width="30px" height="30px"></a>
                <h1><a href="http://localhost/Project/">Sport Academy</a></h1>
            </div>
            <ul>
                <li ><a href="http://localhost/Project/">Home</a></li>
                <li ><a href="http://localhost/Project/view.php">View</a></li>
                <li ><a href="">Objective</a></li>
                <li ><a href="">Motivation</a></li>
                <li ><a href="http://localhost/Project/insert.php">Register</a></li>
                <li ><a href="http://localhost/Project/login.php">Sign Up</a></li>
            </ul>
        </div>


	<div class="frm">
	<h1> Update player information</h1>
	<form method= "post" action="">

<input type="text" name="f_name" value="<?php echo $f_name ?>"><br>    

<input type="text" name="l_name" value="<?php echo $l_name ?>"><br>
<input type="text" name="s_type" value="<?php echo $s_type ?>"><br>

<input type="submit" value="Update" name="update"><br>

</form>
	</div>
</body>
</html>