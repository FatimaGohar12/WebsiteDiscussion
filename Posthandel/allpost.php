<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Posts</title>
</head>
<style>
    body {
        background-color: #eee;
        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }

    .height {
        height: 100vh;
    }


    .search {
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1);

    }

    .search input {

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


    }


    .search input:focus {

        box-shadow: none;
        border: 2px solid blue;


    }

    .search .fa-search {

        position: absolute;
        top: 20px;
        left: 16px;

    }

    .search button {

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: blue;

    }

    .card {
        box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: -4px 10px 28px -1px rgba(0, 0, 0, 0.75);
        transition: all 0.5s ease-in-out;



    }

    .card:hover {
        cursor: pointer;
        background-color: RGBA(47, 0, 80, 0.06);
        transform: scale(0.9);

    }
</style>

<body>
    <?php

    //Database-connection include
    include '../Partials/_Db-connect.php';
    // Header include
    require '../navbar/_header.php';


    ?>


    <div class="container my-3">
        <div class="row d-flex justify-content-center align-items-center">

            <div class="col-md-8">

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control rounded-pill" placeholder="Serach Post here...">
                    <button class="btn btn-primary btn-sm rounded-pill">Search</button>
                </div>

            </div>

        </div>
    </div>
    <!-- POST-HERE -->
    <div class="container my-4" id="ques">

        <h2 class="text-center my-4 ">iDiscuss-Posts</h2>

        <div class="row my-4">

            <!-- CATEGORIES-SHOW -->
            <?php

            //Querry likhi hai jo categories table ka reccord database sa fetch kar ka lah ka aye ghi 

            $sql = "SELECT * FROM `posts`";
            $result = mysqli_query($conn, $sql);
            //While loop lagain gah reccord ko iterate kena ka lia

            while
            //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
            ($row = mysqli_fetch_assoc($result)) {
                $id = $row['post_id'];
                $postTitle = $row['post_title'];
                $postcontent = $row['post_content'];


                //Ya cards ka code hai 
                echo '
<div class="col-md-4 my-2">
<div class="card" style="width: 18rem;">
    
    <div class="card-body">
        <h5 class="card-title"><a href ="./threadlist.php?id=' . $id . '"> ' . $postTitle . '</a></h5>


        <p class="card-text">' . substr($postcontent, 0, 90) . '</p>
        <a href="./postreccord.php?id=' . $id . ' " class="btn btn-success">View Posts</a>
        
    </div>
</div>
</div>';
            }
            ?>
        </div>
    </div>

    <!-- footer -->

    <footer class="pt-3 mt-4 text-muted border-top text-center">
        © 2022
    </footer>
    </div>

</body>

</html>