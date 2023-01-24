 <?php
require('../../Partials/_Db-connect.php');

 if (isset($_POST['delete'])){
   $id = $_POST['id'];


$sql = "DELETE FROM comments WHERE `comment_id`='$id'";
    
$result = mysqli_query($conn, $sql);


 if ($result) {
    
     echo   
     '<script>
     swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
          swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      })
     </script>';
 }

//  else{
//      echo 'not';
//  }


 }


?> 



