<?php
    include 'functions.inc.php';
    include 'db.inc.php';

    if(isset($_POST['submit'])){
        $uid = $_POST['user'];
        $pwd = $_POST['pwd'];

        session_start();
        $_SESSION['dUid'] = $uid;

        if(isEmptyLogin($uid, $pwd)){
            header("location: ../login.php?e=madftu");
        }else {
            if(uidExists($uid, $uid) !== false){
                $result = uidExists($uid, $uid);

                $hashedPass =  $result['passwordHash'];
                $checkPassword = password_verify($pwd, $hashedPass);

                if(!$checkPassword){
                    header("location: ../login.php?e=wd");
                }else{
                    session_destroy();

                    session_start();
                    $_SESSION['username'] = $uid;

                    header("location: ../index.php");
                }
            }else{
                header("location: ../login.php?e=unf");
            }
        }
    }
?>