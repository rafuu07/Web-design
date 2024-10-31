<?php

    if(isset($_POST['register'])) {                                                                                                            
        $firstname = $_POST['f_name'];
        $lastname = $_POST['l_name'];
        $sptype = $_POST['s_type'];
        
        $error=array();

        if($firstname==NULL) {
            $error['firstname'] = "No first name entered";
        }
        if($lastname==NULL) {
            $error['lastname'] = "No last name entered";
        }
        if($sptype==NULL) {
            $error['$sptype'] = "No sports type entered";
        }

        if(count($error)==0){
            $con = mysqli_connect('localhost', 'root', '', 'sp');
            $query = mysqli_query($con, "INSERT INTO tm (fname, lname, stype)                             
            VALUES ('$firstname',   '$lastname','$sptype')");                                                               
            if($query){
                echo "Data inserted Successful";
            }
            else {
                echo "Failed to insert";
            }

        }      
    }

?>




<html>
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Form</title>
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
        <h1>Sign up to this nice form</h1>

    <form method= "post" action="">

        <input type="text" name="f_name" placeholder="Enter your first name"><br>    
        <?php
        if (isset($error['firstname'])) {
            echo $error['firstname'].'<br>';
        }
        ?>

        <input type="text" name="l_name" placeholder="Enter your last name"><br>
        <?php
        if (isset($error['lastname'])) {
            echo $error['lastname'].'<br>';
        }
        ?>
        <input type="text" name="s_type" placeholder="Enter your selected sports"><br>
        <?php
        if (isset($error['$sptype'])) {
            echo $error['$sptype'].'<br>';
        }
        ?>

        <input type="submit" value="Register" name="register"><br>

    </form>
        </div>


        
        
        
    </body>


</html>