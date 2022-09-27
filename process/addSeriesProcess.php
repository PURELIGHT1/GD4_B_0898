<?php

if (isset($_POST['submit'])) {

    include('../db.php');

    $name = $_POST['name'];
    // $genre = $_POST['genre'];
    $genre = implode(" , ", $_POST['genre']);
    $realease = $_POST['realease'];
    $episode = $_POST['episode'];
    $season = $_POST['season'];
    $synopsis = $_POST['synopsis'];

    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query($con, "INSERT INTO series(name, genre, realease, episode, season, synopsis) VALUES('$name', '$genre', '$realease', '$episode' ,'$season', '$synopsis')") or die(mysqli_error($con));
    // perintah mysql yang gagal dijalankan  ditangani oleh perintah “or die”
    // var_dump($query);
    // exit();
    if ($query) {
        echo
        '<script>
                alert("Add Series Success");
                window.location = "../page/listSeriesPage.php"
                </script>';
    } else {
        echo
        '<script>
                alert("Add Movies Failed");
                 window.location = "../page/listSeriesPage.php"
                </script>';
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
