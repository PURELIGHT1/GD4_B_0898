<?php
session_start();
if (isset($_POST['submit'])) {

    include('../db.php');
    $id = $_SESSION['user']['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenum = $_POST['phonenum'];
    $job = $_POST['job'];
    $query = mysqli_query($con, "UPDATE users SET name = '$name', email = '$email', phonenum = '$phonenum', job = '$job' WHERE id = '$id'") or die(mysqli_error($con));

    if ($query) {
        $user = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM users WHERE id = '$id'"));
        $_SESSION['user'] = $user;
        echo
        '<script>
                alert("Edit Profile Success");
                alert("Edit Success"); 
                window.location = "../page/detailProfilePage.php"
                </script>';
    } else {
        echo
        '<script>
                alert("Edit Profile Failed");
                window.location = "../page/editProfile.php"
                </script>';
    }
} else {
    echo
    '<script>
            window.location = "../page/viewProfilePage.php"
            </script>';
}
