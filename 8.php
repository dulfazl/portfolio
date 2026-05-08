<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Portfolio</title>
        <style>
        body{font-family: Arial, sans-serif}.container{width: 60%; margin: auto}h2{text-align: center}.form-group{margin-bottom: 10px}
        input, textarea{width: 100%; padding: 8px; margin-top: 5px}button{padding: 8px 15px; background: #4CAF50; color: white; border: 0; cursor: pointer}
        </style>
    </head>
    <body>  
        <div class = "container">
        <h2>Create Your Student Portfolio</h2>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <?php
            $name = htmlspecialchars($_POST['name']??'');
            $age = htmlspecialchars($_POST['age']??'');
            $bio = nl2br(htmlspecialchars($_POST['bio']??''));
            $skills = nl2br(htmlspecialchars($_POST['skills']??''));
            ?>
            <h3><?php echo $name; ?></h3>
            <p><strong>Age: </strong> <?php echo $age; ?></p>
            <p><strong>Bio: </strong> <?php echo $bio; ?></p>
            <p><strong>Skills: </strong> <?php echo $skills; ?></p>
            <?php else: ?>
            <form method = "POST">
                <div class = "form-group"><label for = "name">Full Name: </label><input type = "text" id = "name" name = "name" required></div>
                <div class = "form-group"><label for = "age">Age: </label><input type = "number" id = "age" name = "age" required></div>
                <div class = "form-group"><label for = "bio">Short Bio: </label><textarea id = "bio" name = "bio" rows = "4" required></textarea></div>
                <div class = "form-group"><label for = "skills">Skills (comma separated): </label><input type = "text" id = "skills" name = "skills" required></div>
                <button type = "submit">Create Portfolio</button>
            </form>
        <?php endif; ?>
        </div>
    </body>
</html>
