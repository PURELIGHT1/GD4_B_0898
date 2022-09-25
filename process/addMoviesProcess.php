<?php

if (isset($_POST['submit'])) {

    include('../db.php');

    $name = $_POST['name'];
    $genre = $_POST['genre'];
    $realese = $_POST['realese'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query($con, "INSERT INTO movies(name, genre, realese, season, synopsis) VALUES('$name', '$genre', '$realese', '$season', '$synopsis')") or die(mysqli_error($con));
    // perintah mysql yang gagal dijalankan  ditangani oleh perintah “or die”
    // var_dump($query);
    // exit();
    if ($query) {
        echo
        '<script>
                alert("Add Movies Success");
                window.location = "../page/listMoviesPage.php"
                </script>';
    } else {
        echo
        '<script>
                alert("Add Movies Failed");
                 window.location = "../page/listMoviesPage.php"
                </script>';
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
