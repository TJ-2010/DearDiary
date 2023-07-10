<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="indexStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new Content</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Your Entries (≖‿≖)</h1>
            <div>
                <a href="index.php" class="btn btn-info">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">

            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="title" required>
            </div>

            <div class="form-element my-4">
                <input type="date" class="form-control" name="date" required>
            </div>

            <div class="form-element my-4">
                <textarea type="text" class="form-control" name="description" placeholder="description"></textarea>
            </div>

            <div class="form-element my-4">
                <input type="submit" style="animation: bg-color 10s infinite;
                border-radius: 10px;
                background-color: white;
                color: white;
                border: 2px solid green;
                padding: 10px 20px;
                text-align: center;
                text-decoration: none;
                display: inline-block;"
                class="btn btn-info" name="create" value="Add Content">
            </div>            

        </form>
    </div>
    
</body>
</html>