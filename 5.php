<?php
$conn = new mysqli("127.0.0.1", "root", "", "logdb");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $u = $_POST['name'];
    $p = $_POST['password'];
    $query = mysqli_query($conn, "select * from reg where username = '$u' and password = '$p'");

    if($query)
    {
        if(mysqli_num_rows($query) > 0)
            echo 'Login successfully';
        else
            echo 'Login failed';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <h2>Login Page - User Authentication</h2>
        <form action = "" method = "POST">
            Username : <input type = "text" name = "name" required><br><br>
            Password : <input type = "password" name = "password" required><br><br>
            <input type = "submit" value = "Submit">
        </form>
    </body>
</html>
