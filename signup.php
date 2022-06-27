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
                $error = $_GET['e'];
                if($error === "madftu"){
                    echo '<p class="text-start error">please fill in all the details</p>';
                 }else if($error === "uaeitdb"){
                    echo '<p class="text-start error">username or email already taken, try another one</p>';
                 }else if($error === "pdnm"){
                    echo '<p class="text-start error">passwords do not match</p>';
                 }else if($error === "sww"){
                    echo '<p class="text-start error">something went wrong on our side</p>';
                 }else if($error === "adis"){
                    echo '<p class="text-start success">Registration successful!!</p>';
                    echo '<p>click here to <a href="login.php" class="link-success">login</a></p>';
                    session_destroy();
                 }
            }
        ?>
        <h2 class="text-center">Sign Up</h2>
        <form method="POST" action="includes/signup.inc.php">
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" placeholder="Enter your full name" name="name" value="<?php
                    if(isset($_SESSION['name'])){
                        echo $_SESSION['name']; 
                    }
                ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email address" name="email" value="<?php
                    if(isset($_SESSION['email'])){
                        echo $_SESSION['email']; 
                    } 
                ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" placeholder="Enter your preferred username" name="uid" value="<?php
                    if(isset($_SESSION['uid'])){
                        echo $_SESSION['uid']; 
                    }  
                ?>" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="pwd" value="" autocomplete="off">
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm password</label>
                <input type="password" class="form-control" placeholder="confirm your password" name="cPwd" value="" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
        </form>
    </div>
</body>

</html>