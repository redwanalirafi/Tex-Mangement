<?php
    session_start();

    include_once 'dashboard/db.php';

    $user = $_POST['userid'];
    $pass = $_POST['password'];

    if(empty($user)){
        header("Location: index.php?error=Enter username");
        exit();
    }
    if(empty($pass)){
        header("Location: index.php?error=Enter password");
        exit();
    }

    $sql = "SELECT username, password,power FROM users where username='$user' AND password='$pass'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);
        //echo "Logged in";
        $_SESSION['username']=$user;
        
        if($row['power']=="admin"){
            $_SESSION['role']="admin";
        }
        else{
            $_SESSION['role']="user";
            echo "<script>top.window.location = './index.php'</script>";
        }
        if($_SESSION['role']!="user")header("Location: dashboard/index.php");
        else header("Location: dashboard/index.php");
    }
    else{
        header("Location: index.php?error=wrong password");
    }
        
    mysqli_close($conn);


?>