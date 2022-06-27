<?php
    function isEmpty($name, $email, $uid, $pwd, $cPwd){
        if(empty($name) || empty($email) || empty($uid) || empty($pwd) || empty($cPwd)){
            return true;
        }else{
            return false;
        }
    }

    function checkIfUserExists($uid, $email){
        include 'db.inc.php';

        $sql = "SELECT * FROM users WHERE uid = ? OR email = ?";
        $stmt = mysqli_stmt_init($con);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: signup.php?sww");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        echo mysqli_fetch_assoc($result);
        
        if($row = mysqli_fetch_assoc($result)){
            echo "user found";
        }else{
            echo "user not found";
            return false;
        }

        mysqli_stmt_close($stmt);
    }

    function passwordMatch($pwd, $cPwd){
        if($pwd === $cPwd){
            return true;
        }else{
            return false;
        }
    }
?>