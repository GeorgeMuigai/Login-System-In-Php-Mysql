<?php
    include 'includes/db.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login System</title>
</head>

<body>
    <div class="container my-5">
        <h2 class="text-center">Sign In</h2>
        <form>
            <div class="mb-3">
                <label class="form-label">Username or email</label>
                <input type="text" class="form-control" placeholder="Enter username or email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="pwd" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
        </form>
    </div>
</body>

</html>