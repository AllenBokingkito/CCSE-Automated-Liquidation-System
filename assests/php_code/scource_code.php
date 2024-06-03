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
?>  