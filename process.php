<?php

include("connect.php");

if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);

    $sql = "INSERT INTO contents (title, date, description)
            VALUES ('$title', '$date', '$description')";

if (mysqli_query($conn, $sql)) {
    session_start();
    $_SESSION["create"] = "Contents Added Succesfully !! :) ";
    header("Location:index.php");
}else{
    die("Something went wrong! ");
}
}

if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $date = mysqli_real_escape_string($conn, $_POST["date"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "UPDATE contents SET title='$title', date='$date', description='$description'
            WHERE id=$id"; 

    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["create"] = "Content Updated Successfully!";
        header("Location:index.php");
    }else {
        die("Something went gae my Liege. :)");
    }
}

?>