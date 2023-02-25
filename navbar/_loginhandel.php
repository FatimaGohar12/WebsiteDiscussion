<!-- loginhandel for handeling login -->

<?php
$showError = "false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //dbconnection
    require dirname(__DIR__) . "/Partials/_Db-connect.php";
    $email = $_POST['loginemail'];
    $pass = $_POST['loginPassword'];
    // VERIFY EMAIL
    $sql = "SELECT * FROM `users` WHERE `user_email` = '$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if (Password_verify($pass, $row['user_pass'])) {
            //start session here
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['sno'];
            $_SESSION['user_email'] = $email;
            echo "loggedin " . $email;
        }

        // header("Location:/Forum2/index.php");
        header("Location:/Forum2/index.php?loginsuccess=true");
        exit();
        
    } 

     {
         header("Location:/Forum2/index.php");
    }
}
?>

