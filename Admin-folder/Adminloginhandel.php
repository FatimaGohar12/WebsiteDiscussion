<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //dbconnection
    require dirname(__DIR__) . "/Partials/_Db-connect.php";


    $loguser = $_POST['loguser'];
    $logpass = $_POST['logpass'];


    // VERIFY USERNAME
    $sql = "SELECT * FROM `admin` WHERE `ad-username`='$loguser'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if (Password_verify($logpass, $row['ad-password'])) {
            //start session here
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['ad-username']=$loguser;
            echo "loggedin ".$loguser;
        }
         
         header("Location:/Forum2/Admin-folder/Dashboard/AdminDashboard.php?loginsuccess=true");
         exit();
    }
    else{

        echo '<script>
            alert("Try Again Login Failed");
            </script>';

    }

//     {
//         header("Location:/Forum2/Admin-folder/AdminDashboard.php");
//    }
}
