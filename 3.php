<?php
    $conn = new mysqli("127.0.0.1", "root", "", "registration");
    if($conn -> connect_error)die("Connection failed: ".$conn -> connect_error);

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if($conn -> query($sql) === TRUE)
            echo"Registration successful!";
        else
            echo"Error: $sql<br>".$conn -> error;

        $conn -> close();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Email Registration Form</title>
    </head>
    <body>
        <h2>Email Registration Form</h2>
        <form method = "post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            Name: <input type = "text" name = "name" required><br><br>
            Email: <input type = "email" name = "email" required><br><br>
            <input type = "submit" value = "Register">
        </form>
    </body>
</html>