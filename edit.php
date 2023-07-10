<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
    <title>Edit Contents</title>

</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Your Entry (｡•̀ᴗ-)✧</h1>
            <div>
                <a href="index.php" class="btn btn-info">Back</a>
            </div>

        </header>
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            include("connect.php");
            $sql = "SELECT * FROM contents WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            ?>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" value="<?php echo $row["title"]; ?>" placeholder="Title:">
            </div>

            <div class="form-element my-4">
                <input type="date" class="form-control" name="date" value="<?php echo $row["date"]; ?>" placeholder="Date:">
            </div>

            <div class="form-element my-4">
                <textarea type="text" class="form-control" name="description" value="<?php echo $row["description"]; ?>" placeholder="Description:"></textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="form-element">
                <input type="submit" style="animation: bg-color 10s infinite;
                border-radius: 10px;
                background-color: white;
                color: white;
                border: 2px solid green;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;" class="btn btn-info" name="edit" value="Edit Content:">
            </div>
        </form>

            <?php
        }


        ?>

    </div>
    
</body>
</html>