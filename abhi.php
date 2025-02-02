<?php
$con = mysqli_connect("localhost", "root", "abhinav@2010", "abhi");
if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $password = $_POST['pass'];

    $query = "INSERT INTO student (name,email,password) values ('$name','$email','$password');";
    $run = mysqli_query($con, $query);
}
?>
<html>
    <body>
        <h2>Your Data is Send to Database</h2>
        <a href="index.html">Go to Regestration Page</a>
    </body>
</html>