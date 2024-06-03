<?php
include "connection.php";
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
    <div class="min-vh-100 bg-light d-flex flex-column align-items-center">
      <div class="bg-gradient-purple w-100 p-4 d-flex justify-content-between align-items-center">
        <button class="btn text-white p-0">
          <img src="https://placehold.co/24x24" alt="menu icon" />
        </button>
        <img src="https://placehold.co/40x40" alt="user avatar" class="rounded-circle" />
      </div>
      <?php if (isset($user_row)) { ?>
      <form action="" method="POST" class="w-100 mt-8 p-4 bg-white rounded-lg shadow-md" style="max-width: 24rem; margin-top: 2rem;">
        <div class="mb-4">
          <label for="username" class="form-label text-dark">Username</label>
          <div class="input-group custom-border">
            <input type="text" id="username" value="<?php echo $user_row['email']; ?>" class="form-control custom-input" readonly />
            <button class="btn" type="button" onclick="copyToClipboard('username')">
              <img src="https://placehold.co/24x24" alt="copy icon" />
            </button>
          </div>
        </div>
        <div class="mb-4">
          <label for="password" class="form-label text-dark">Password</label>
          <div class="input-group custom-border">
            <input type="text" id="password" value="<?php echo $user_row['password']; ?>" class="form-control custom-input" readonly />
            <button class="btn" type="button" onclick="copyToClipboard('password')">
              <img src="https://placehold.co/24x24" alt="copy icon" />
            </button>
          </div>
        </div>
        <div class="mb-4">
          <label for="position" class="form-label text-dark">Role</label>
          <div class="input-group custom-border">
            <input type="text" id="position" value="<?php echo $user_row['role_name']; ?>" class="form-control custom-input" readonly />
          </div>
        </div>
      </form>
      <?php } else { ?>
      <div class="w-100 mt-8 p-4 bg-white rounded-lg shadow-md" style="max-width: 24rem; margin-top: 2rem;">
        <p class="text-center text-dark">No data found</p>
      </div>
      <?php } ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
