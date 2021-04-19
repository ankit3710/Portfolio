<?php
$con = mysqli_connect("sql6.freesqldatabase.com","sql6406727","1U8U4srgjr","sql6406727","3306") or die(mysqli_error($con));
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $contact = mysqli_real_escape_string($con, $_POST["contact"]);
    $message = mysqli_real_escape_string($con, $_POST["message"]);
    $query1 = "INSERT INTO users (name, email,contact,message) VALUES ('$name', '$email', '$contact','$message')";
    $result = mysqli_query($con, $query1) or die(mysqli_error($con));
    echo "Thankyou for contacting me!"
    
?>  
