<?php
session_start();
if (isset($_POST['submit'])) {

    include('../db.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $genre = implode(" , ", $_POST['genre']);
    // $genre = $_POST['genre'];
    $realease = $_POST['realease'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];
    $query = mysqli_query($con, "UPDATE series SET name = '$name', genre = '$genre', realease = '$realease', episode = '$episode', season = '$season', synopsis = '$synopsis' WHERE id = '$id'") or die(mysqli_error($con));

    if ($query) {
        echo
        '<script>
                alert("Edit Series Success");
                alert("Edit Success"); 
                window.location = "../page/listSeriesPage.php"
                </script>';
    } else {
        echo
        '<script>
                alert("Edit Profile Failed");
                window.location = "../page/listSeriesPage.php"
                </script>';
    }
} else {
    echo
    '<script>
            window.location = "../page/listSeriesPage.php"
            </script>';
}
