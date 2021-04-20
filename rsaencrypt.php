<html>

    <head>
        <title>RSAin't Gonna Read What I'm Sending</title>
    </head>

    <body>
        <h1>RSAin't Gonna Read What I'm Sending</h1>
        <br>
        <p>Encrypt the number 14 using the public key (33, 3) e.g. n=33 and e=3.</p>
        <br>
        <form name="form" action="" method="post">
            <label for="answer">Answer:</label>
            <input type="text" id="answer" name="answer">
            <input type="submit" value="Submit">
        </form>
        <?php
            $answer = $_POST['answer'];
            if ($answer == "5"){
                echo "<br>KEY{bmljZWVuY3J5cHRpb250aGVyZQ==}";
            }
        ?>
    </body>

</html>