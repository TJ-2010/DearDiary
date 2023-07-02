<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Contents Details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
        }        
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Contents Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>

        </header>

        <div class="book-details my-4">
            <?php
                #echo $_GET["id"]; #will show the id of the data from the table
                if (isset($_GET["id"])) {
                    # if id set the data will shown
                    # data will be shown in html div
                    # so separation on html and php code is needed
                    # before that connection of database is first needed
                    $id = $_GET["id"];
                    include("connect.php");
                    $sql = "SELECT * FROM contents WHERE id=$id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                    ?>
                        <h3>Title:</h3>
                        <p><?php echo $row["title"]; ?></p>
                        <h3>Date</h3>
                        <p><?php echo $row["date"]; ?></p>
                        <h3>Description:</h3>
                        <p><?php echo $row["description"]; ?></p>
                    <?php
                }
            ?>

        </div>



    </div>
    
</body>
</html>