<?php
include "connection.php";
include "assests/php_code/scource_code.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>User Data</h1>

<table>
    <thead>
        <tr>
            <th>Full name</th>
            <th>Role Name</th>
            <th>School ID</th>
            
        </tr>
    </thead>
    <tbody>
    <?php
    
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                ?>
            <tr>
                <td scope="row"><?php echo $row['first_name'] . " " . $row['last_name']; ?></td>
                <td><?php echo $row['role_name']; ?></td>
                <td><?php echo $row['school_id']; ?></td>
                <td><a href="update.php?user_id=<?php echo $row["user_id"];?>">Update</a></td>
            </tr>
            <?php 
            }
            } else {
            echo "<h3>No records found!</h3>";
            }

            ?>
            
    </tbody>
</table>

</body>
</html>