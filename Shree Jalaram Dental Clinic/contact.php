<?php
    $server = "localhost";
    $username = "root";
    $password = "Harshil#2@9723032911";
    $con = mysqli_connect($server , $username , $password);
    if(!$con){
        die("Connection Failed");
    }
    $full_name = $_POST['full_name'];
    $email_address = $_POST['email_address'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];
    $sql_query = "INSERT INTO `shreejalaramdentalclinic`.`contact_db`(`full_name`, `email_address`, `phone_number`, `message`) VALUES ('$full_name','$email_address','$phone_number','$message');";
    if($con->query($sql_query) == true){
        echo "<script>alert('data inserted successfully');location.href = 'contact.html';</script>";
    }
    else{
        echo "Not inserted";
    }
?>