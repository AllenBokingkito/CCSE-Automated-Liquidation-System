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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to bottom, #9d4edd, #6610f2);
            color: #fff;
        }
        .bg-gradient-purple {
            background: none;
        }
        .custom-input {
            background-color: #fff;
            border: none;
            border-radius: 9999px;
            padding: 1rem;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(153, 102, 255, 0.25);
        }
        .custom-input:focus {
            border-color: #ffffff;
            box-shadow: 0 0 0 0.2rem rgba(153, 102, 255, 0.5);
        }
        .btn-custom {
            background-color: #ffffff;
            color: #000;
            border-radius: 9999px;
            padding: 1rem;
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(153, 102, 255, 0.25);
        }
        .btn-custom:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column align-items-center justify-content-center min-vh-100">
        <img src="https://placehold.co/150" alt="Logo" class="w-32 h-32 mb-3">
        <div class="w-100 max-w-xs">
            <div class="mb-3">
                <input type="text" placeholder="Username" class="form-control custom-input">
            </div>
            <div class="mb-3">
                <input type="password" placeholder="Password" class="form-control custom-input">
            </div>
            <button class="btn btn-custom btn-block">Login</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
