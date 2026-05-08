<!DOCTYPE html>
<html>
    <head>
        <title>XML File Loader</title>
    </head>
    <body>
        <h2><u>XML File Loader</u></h2>
        <?php
            if($xml = simplexml_load_file('2.xml'))
            {
                echo"<h3><u>Book information: </u></h3>";
                foreach($xml->book as $book)
                    echo"Title: ".$book->title."<br>Author: ".$book->author."<br>Price: ".$book->price."<br><br>";
            }
            else
            {
                echo"<p>Error loading XML file.</p>";
            }
        ?>
    </body>
</html>