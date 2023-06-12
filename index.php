<?php

require  'function.php';
if(isset($_POST['todo_submit'])){
    createTodo($_POST);
}



?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Todo List</title>
</head>

<body>
    <div class="container"> 
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3>My Todo List</h3>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Todo</label>
                                <input type="text" class="form-control" name="todo" placeholder="Enter Your Todo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1">Todo Time</label>
                                <input type="date" class="form-control" name="todo_time">
                            </div>

                            <button type="submit" name="todo_submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>