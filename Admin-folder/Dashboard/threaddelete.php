<?php
require('../../Partials/_Db-connect.php');

 if (isset($_POST['threadid'])){
   $threadid = $_POST['threadid'];


$sql = "DELETE FROM thread WHERE `thread_id`= $threadid";
    
$result = mysqli_query($conn, $sql);


 if ($result) {
    // jab ye resutl true hoga to koi sure nh mangy ga wo delete ho jaega database sy 


     header('location: '.explode("?",$_SERVER['HTTP_REFERER'])[0].'?successMsg=deleted succesfully!');


    
  
    // echo   
    // <script>
    // swal({
    //    title: "Are you sure?",
    //    text: "You will not be able to recover this imaginary file!",
    //    type: "warning",
    //    showCancelButton: true,
    //    confirmButtonClass: "btn-danger",
    //  confirmButtonText: "Yes, delete it!",
    //    cancelButtonText: "No, cancel plx!",
    //  closeOnConfirm: false,
    //    closeOnCancel: false
    //  },
    //  function(isConfirm) {
    //    if (isConfirm) {
    //    swal("Deleted!", "Your imaginary file has been deleted.", "success");
    //    } else {
    //      swal("Cancelled", "Your imaginary file is safe :)", "error");
    //    }
    //  })
    // </script>)';
      
 }



 }


?> 



