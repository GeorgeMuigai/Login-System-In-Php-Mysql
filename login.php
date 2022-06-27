<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Login System</title>
</head>

<body>
    <div class="container my-5">
        <?php
            if(isset($_GET['e'])){
                $message = $_GET['e'];

                if($message === "madftu"){
                    echo '<p class="text-start error">please fill in all the details</p>';
                }else if($message === "wd"){
                    echo '<p class="text-start error">invalid login</p>';
                }else if($message === "unf"){
                    echo '<p class="text-start error">invalid login!!</p>';
                }
            }
        ?>
        <h2 class="text-center">Sign In</h2>
        <form method="POST" action="includes/login.inc.php">
            <div class="mb-3">
                <label class="form-label">Username or email</label>
                <input type="text" class="form-control" placeholder="Enter username or email" name="user" autocomplete="off" value="<?php
                   if(isset($_SESSION['dUid'])) {
                        echo $_SESSION['dUid'];
                   }
                ?>">
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