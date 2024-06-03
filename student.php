<?php
require "connection.php";
include "assests/php_code/scource_code.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assests/css/bootstrap_css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php if ($accountCreated): ?>
        <div class="success-container" style="display: flex;">
            <div class="circle">
            <span class="big-checkmark"></span>
                <div class="message">Success! Account has been created</div>
            </div>
        </div>
    <?php endif; ?>
    <div class="min-vh-100 d-flex flex-column align-items-center bg-light">
        <div class="w-100 bg-gradient-purple p-3 d-flex justify-content-between align-items-center">
            <button class="btn text-white">
                <img aria-hidden="true" alt="menu" src="https://placehold.co/24x24" />
            </button>
            <img class="rounded-circle" src="https://placehold.co/40x40" alt="user avatar" />
        </div>
        <form action="" method="POST" class="bg-white shadow rounded p-4 my-4 w-100 mx-auto" style="max-width: 24rem;">
            <div class="mb-3">
                <label for="first-name" class="form-label text-dark">First Name</label>
                <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First name" required>
            </div>
            <div class="mb-3">
                <label for="last-name" class="form-label text-dark">Last Name</label>
                <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last name" required>
            </div>
            <div class="mb-3">
                <label for="school-id" class="form-label text-dark">School ID</label>
                <input type="text" class="form-control" id="school-id" name="school_id" placeholder="School ID" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label text-dark">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-dark">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
                <label for="role-name" class="form-label text-dark">Role</label>
                <select class="form-select" id="role-name" name="role_name">
                    <?php foreach($role_data as $role_row){ ?>
                        <option value="<?php echo $role_row['role_id']; ?>"><?php echo $role_row['role_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary" name="btn_reg">Register Student</button>
            </div>
        </form>
    </div>dadsadsa

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>