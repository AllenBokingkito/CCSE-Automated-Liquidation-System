<?php

//#region:role
$sql_role = "SELECT * FROM tbl_role";
$sql_role = mysqli_query($conn,$sql_role);
    while($role_row = $sql_role -> fetch_assoc()){
        $role_data[] = $role_row;
    }

//#end region

//#region:insert
$accountCreated = false;

if(isset($_POST['btn_reg'])){
    $role_id = $_POST['role_name'];
    $school_id = $_POST['school_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date('y-m-d h-m-s',strtotime('today'));
    
    
    $sql_insert = "INSERT INTO tbl_users (role_id, school_id, first_name, last_name, email, password, created_at) 
    VALUES ('$role_id', '$school_id', '$first_name', '$last_name', '$email', '$password', '$date')";
//$sql_insert = mysqli_query($conn,$sql_insert);

    if (mysqli_query($conn, $sql_insert)) {
        $accountCreated = true;
        header("Refresh: 1; URL=view.php");
}
}
//#end region

//region:view
//$sql_user = "SELECT * FROM tbl_users JOIN tbl_role ON tbl_role.role_id = tbl_users.role_id";
$sql_user = "SELECT * FROM tbl_users 
             JOIN tbl_role ON tbl_role.role_id = tbl_users.role_id 
             ORDER BY tbl_users.user_id DESC 
             LIMIT 1";
$result = mysqli_query($conn, $sql_user);
    while ($user_row = $result->fetch_assoc()) {
        $user_data[] = $user_row;
    }
 foreach($user_data as $user_row){
    
 }

//#end region

//region:users

$sql = "SELECT * FROM tbl_users 
        JOIN tbl_role ON tbl_role.role_id = tbl_users.role_id 
        ORDER BY tbl_users.user_id  ";
$result = mysqli_query($conn, $sql);


 //#end region

//region:update
if(isset($_GET['user_id'])){ //check if there is an ID being passed
    $user_id = $_GET['user_id'];
    
    $sql = "SELECT * FROM tbl_users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $user_id = $row['user_id'];
        $role_id = $row['role_id'];
        $school_id = $row['school_id'];
        $full_name = $row['first_name'] . " " . $row['last_name'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
    }
    } else {
        echo "<h3>No records found!</h3>";
    }
}

if(isset($_POST['btnupdate'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "UPDATE tbl_users SET first_name='$first_name', last_name='$last_name', email='$email', password='$password'
    WHERE user_id=$user_id";
        
    if (mysqli_query($conn, $sql)) {
        header("location:users.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    }

//#end region

//region:delete
if(isset($_POST['btndelete'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "DELETE FROM tbl_users WHERE user_id='$user_id';";
        
    if (mysqli_query($conn, $sql)) {
        header("location:users.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    }

//#end region

?>  