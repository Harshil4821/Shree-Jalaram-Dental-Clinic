<?php
    $server = "localhost";
    $username = "root";
    $password = "Harshil#2@9723032911";
    $con = mysqli_connect($server , $username , $password);
$feedback = $_POST['message'];
$name = $_POST['name'];
$sql = "INSERT INTO `shreejalaramdentalclinic`.`feedback_db`(`feedback` , `name`) VALUES ('$feedback','$name');";
if($con->query($sql) == true){
    ?>
    <script>
        alert("Thank You for your feedback.");
        location.href = 'testimonials.php';
    </script>
    <?php
}
?>