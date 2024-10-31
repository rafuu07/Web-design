


<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Player</title>
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

        <form method="GET" action="" id="src">
                <input type="text" name="search" placeholder="Search by username">
                <input type="submit" value="Search">
        </form>
        <table border="10" style="border-collapse: collapse;">
        <tr>
            <th>Serial no</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Sport name</th>
            <th colspan="2">Actions</th>
         
        </tr>

        <?php
            $con = mysqli_connect('localhost', 'root', '', 'sp');
            $search = isset($_GET['search']) ? $_GET['search'] : '';
            $query = "SELECT * from tm ";
            
            
            if (!empty($search)) {
                $query .= " WHERE fname LIKE '%$search%'";
            }
            
            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['fname'] ?></td>
            <td><?php echo $row['lname'] ?></td>
            <td><?php echo $row['stype'] ?></td>
            <td><a href="update.php?updateid=<?php echo $row['id']; ?>">Update</td>
            <td><a href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php
        endwhile;
        ?>

        </table>
    </body>
</html>