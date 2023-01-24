<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // require '/Forum2/Partials/_Db-connect.php';
    require dirname(__DIR__) . "/Partials/_Db-connect.php";

    $username = $_POST['user'];
    $registerpass = $_POST['registerpass'];
    $registercpass = $_POST['registercpass'];

    // check this username exist

    $existsql = "SELECT * FROM `admin` WHERE `ad-username` = '$username'";
    $result = mysqli_query($conn, $existsql);
    $numRows = mysqli_num_rows($result);
    if ($numRows > 0) {

        echo '<script>
        alert("Username alreday in use");
        </script>';
    }

    //Check password match with confirm password

    else {
        if ($registerpass == $registercpass) {
            //ya line password ka hash banana ka lia likhi hai
            $hash = password_hash($registerpass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `admin` (`ad-username`, `ad-password`) VALUES ('$username', '$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "true";
                header("Location:./adminlogin.php?signupsuccess=true");
                exit();
            }
        } else {
            echo '<script>
            alert("Password is not match");
            </script>';
        }
    }
    // header("Location:/Forum2/index.php?signupsuccess=false&error=$showError");
}
