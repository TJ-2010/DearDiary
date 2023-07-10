<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content List</title>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="box">
                <a href="create.php" class="btn btn-info">Add New Entry</a>
                <a href="about.html" class="btn btn-info" style="justify-content: left;">About</a>
            </div>
        </header>

        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>

        <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <!--<th>#</th> -->
                    <th>Title</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
  
            <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM contents";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <!--<td><?php echo $data['id']; ?></td>-->
                <td><?php echo $data['title']; ?></td>
                <td><?php echo $data['date']; ?></td>
                <!--<td><?php echo $data['description']; ?></td> -->
            
                <td>
                    <a href="view.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Read More</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-info">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>

            </tbody>

        </table>
    </div>
         <footer>
            <div class="ticker-wrap">
                <div class="ticker">
                  <div class="ticker__item">-------------------------------------------------</div>
                  <div class="ticker__item">There's something inside you It's hard to explain</div>
                  <div class="ticker__item">-------------------------------------------------</div>
                </div>
        </footer>   
</body>
</html>