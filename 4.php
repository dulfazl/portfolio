<!DOCTYPE html>
<html>
    <head>
        <title>Student Marks Card</title>
        <style>
            td, th{border: 1px solid #ddd; padding: 8px;}
            th{background-color: pink;}
        </style>
    </head>
    <body>
        <?php
            $conn = new mysqli("127.0.0.1", "root", "", "student");
            if($conn -> connect_error)die("Connection failed: ".$conn->connect_error);

            $result = $conn -> query("SELECT * FROM student_marks");
            if($result -> num_rows)
            {
                echo "<table><tr><th>Roll Number</th><th>Name</th><th>Subject</th><th>Marks</th></tr>";
                while($row = $result -> fetch_assoc())
                {
                    echo 
                    "<tr>
                    <td>{$row['roll_number']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['subject']}</td>
                    <td>{$row['marks']}</td>
                    </tr>";
                }
                echo "</table>";
            }
            else
            {
                echo "No records found.";
            }
            $conn -> close();
        ?>
    </body>
</html>
