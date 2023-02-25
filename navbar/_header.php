<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Headers</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- link-for-css -->
  <link rel="stylesheet" href="style.css">
  <!-- <a href="../Posthandel/allpost.php"></a> -->


</head>

<body>
  <?php


  ?>
  <?php
  session_start();

  // Nav-bar
  echo '
      <nav class="navbar navbar-expand-lg   navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iDiscuss</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" 
          href="/Forum2/index.php" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-down-fill" viewBox="0 0 16 16" >
          <path d="M12.5 9a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm.354 5.854 1.5-1.5a.5.5 0 0 0-.708-.707l-.646.646V10.5a.5.5 0 0 0-1 0v2.793l-.646-.646a.5.5 0 0 0-.708.707l1.5 1.5a.5.5 0 0 0 .708 0Z"/>
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
          <path d="m8 3.293 4.712 4.712A4.5 4.5 0 0 0 8.758 15H3.5A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
        </svg> Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Top Categories
          </a>
          <div class="dropdown-menu" arial-labelledby="navbarDropdown">';

  $sql = "SELECT `cat-name` , `cat-id` FROM `categories` LIMIT 4";
  $result = mysqli_query($conn, $sql);

  //While loop lagain gah reccord ko iterate kena ka lia
  while
  //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
  ($row = mysqli_fetch_assoc($result)) {

    echo '
   <a class="dropdown-item" href="threadlist.php?catid=' . $row['cat-id'] . '">
    '  . $row['cat-name'] . '</a>
  ';
  }




  echo '</div>        
        </li>
        <li class="nav-item">
        <a  class="nav-link text-white" href="http://localhost/Forum2/posthandel/allpost.php"> <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-stickies" viewBox="0 0 16 16">
        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5z"/>
        <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zM3 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V9h-4.5A1.5 1.5 0 0 0 9 10.5V15H3.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V10.5a.5.5 0 0 1 .5-.5h4.293L10 14.793z"/>
      </svg> Posts
        </a>

        </li>';

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

   

    echo '
       
        <li class="nav-item">
        <a  class="nav-link text-white" href="http://localhost/Forum2/Posthandel//Mypost.php?' . $_SESSION['user_email'] . '" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sticky" viewBox="0 0 16 16">
        <path d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zM2 2.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V8H9.5A1.5 1.5 0 0 0 8 9.5V14H2.5a.5.5 0 0 1-.5-.5v-11zm7 11.293V9.5a.5.5 0 0 1 .5-.5h4.293L9 13.793z"/>
      </svg> My Post</a>
        </li>
        
        <li class="nav-item"><a class="nav-link text-white" aria-current="page" 
        href="http://localhost/Forum2/Posthandel/addpost.php">
        <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
</svg> Add Post </a>
      </li>
      </ul>';
  }

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '
    <div class="row mx-2">

      <form class="d-flex my-2 my-lg-0 justify-content-around" action="http://localhost/Forum2/serach.php//" method="get">
        <input class="form-control mr-sm-2 my-2" name="serach" type="serach" placeholder="Serach thread here.." aria-label="serach"style="height: 40px; width:80%;">
        <button class="btn btn-success my-2  mx-3" type="submit" style="height: 40px;width:30%;">Serach</button>
        <p class ="text-light  mx-2 my-2">Welcome ' . $_SESSION['user_email'] . '</p>
        <a href="http://localhost/Forum2/navbar/_logout.php" class="btn btn-danger ml-2 mx-3 my-2" 
        style="width:200px;height: 40px;"    
         >Log-Out</a>
        
        </form>';
  } else {
    echo '
    <div class="mx-2">
  
        <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal"
            data-bs-target="#LoginModal">Login</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#sign-upModal">Register</button>
    
            ';

    include './navbar/_signupmodal.php';
    include './navbar/_loginmodal.php';
  }

  echo '</div>
    </div>
  </div>
</nav>
';

  // AGAR signupsuccess hai ur wo true hai tou ya ho gah get parameter sa a rhah hai 
  if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '
  <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
    <strong>Successfully</strong> Your Account Created Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }

  //YA PHP JAB AP LOGIN HON GAH SUCCESSFULLY
  if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "true") {

    echo '
     <div class="alert alert-success alert-dismissible fade show my-0" role="alert">
 <strong>Success</strong> Login Successfully.
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 ';
  }

  ?>