<?php
    include 'db.inc.php';
    include 'functions.inc.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $cPwd = $_POST['cPwd'];

        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['uid'] = $uid;

        if(isEmpty($name, $email, $uid, $pwd, $cPwd)){
            header("location: ../signup.php?e=madftu");
        }else if(checkIfUserExists($uid, $email) !== false){
            header("location: ../signup.php?e=uaeitdb");
        }else if(!passwordMatch($pwd, $cPwd)){
            header("location: ../signup.php?e=pdnm");
        }else{
            $sql = "INSERT INTO users (name, email, uid, passwordHash) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($con);

            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("location: signup.php?e=sww");
                exit();
            }

            $passwordHash = password_hash($pwd, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $uid, $passwordHash);
            mysqli_stmt_execute($stmt);
            header("location: ../signup.php?e=adis");
            mysqli_stmt_close($stmt);
        }
    }
?>
