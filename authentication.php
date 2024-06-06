<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
      
    $sql = "SELECT * FROM login WHERE username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        // Start the session
        session_start();
        // Store session data
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        // Redirect to login_2.php with success message
        header("location: login_2.php?login=success");
    }  
    else{  
        // Redirect to login_2.php with failure message
        header("location: login_2.php?login=failure");
    }     
?>