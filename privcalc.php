<html>

<head>
    <title>Find the Keys to Get the Keys - 2</title>
</head>

<body>
    <h1>Find the Keys to Get the Keys - 2</h1>
    <br>
    <p>Now try working out the private key to complete the key pair!</p>
    <p>As a reminder:</p>
    <ul>
        <li>p = 5</li>
        <li>q = 11</li>
        <li>e = 3</li>
    </ul>
    <p></p>
    <p>This time, just put your value for d as your answer.</p>
    <br>
    <form name="form1" action="" method="post">
        <label for="answer1">Answer:</label>
        <input type="text" id="answer1" name="answer1">
        <input type="submit" value="Submit">
    </form>
    <?php

    $answer = $_POST['answer'];
    if ($answer == "10100100"){
        echo "<br>KEY{bmljZWpvYmZpbmRpbmd0aGVpbnZlcnNl}<br>";
    }

    ?>
</body>

</html>