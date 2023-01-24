<!-- Jab user sign up kare gah tou is page pa aye gah  -->

<?php
 $showError="false";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // require '/Forum2/Partials/_Db-connect.php';
    require dirname(__DIR__)."/Partials/_Db-connect.php";
    $email = $_POST['signupemail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];


    // check this email exists
    $existsql = "SELECT * FROM `users` WHERE `user_email`= '$email'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if ($numRows>0) {
        $showError = "Email already in use";
    }

    //Check password match with confirm password

else{

    if ($pass == $cpass) {
        //ya line password ka hash banana ka lia likhi hai 
        $hash =password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) VALUES ('$email', '$hash', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            //redirect function 
            $showAlert=true;
            header("Location:/Forum2/index.php?signupsuccess=true");
            exit();
        }
    }
    else{
        $showError="pass not match";
    }
}

header("Location:/Forum2/index.php?signupsuccess=false&error=$showError");

}

?>