<?php
require "connection.php";
include "assests/php_code/scource_code.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php echo $_SESSION['message']; ?></div>
    <form action="" method="POST">
        
    <button type="submit" name="btn_delete">Delete</button>
    </form>
</body>
</html>