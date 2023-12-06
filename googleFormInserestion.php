<?php
    include_once 'form_processing.php';
    // session_start();

    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $major = $_POST['major'];
    $_SESSION['major'] = $major;

    $sql = "INSERT INTO `form_data`(`name`, `email`, `major`) VALUES ('$name','$email','$major');";
    if (mysqli_query($con, $sql))
    //$sql = "INSERT INTO `form_data`(`name`) VALUES ('$name');",
    //"INSERT INTO `form_data`(`email`) VALUES ('$email');","INSERT INTO `form_data`(`text`) VALUES ('$text');";
    //$sql = "INSERT INTO `form_data`(`email`) VALUES ('$email');";
    //$sql = "INSERT INTO `form_data`(`text`) VALUES ('$text');";
    //if (mysqli_query($con, $sql))
    {
        echo '<script>alert("Logged In");</script>';
        header("Location: https://web.njit.edu/~fq3/it220_response_submitted.html", true, 301);
        
    }
    else
    {
        echo '<script>alert("ERROR. You will be redirected to main page");</script>';
        header("Location: https://www.google.com/gmail/about/", true, 301);  
    }
?>
