<html>

<head>
    <title>Now You're Thinking with Stream Ciphers</title>
</head>

<body>
    <h1>Now You're Thinking with Stream Ciphers</h1>
    <br>
    <p>Simulate the output of a stream cipher by performing an XOR calculation on these two bytes:</p>
    <p></p>
    <p>01110010</p>
    <p>11010110</p>
    <br>
    <form name="form" action="" method="post">
        <label for="answer">Answer:</label>
        <input type="text" id="answer" name="answer">
        <input type="submit" value="Submit">
    </form>
    <?php

    $answer = $_POST['answer'];
    if ($answer == "10100100"){
        echo "<br>KEY{bmljZXhvcm1hdGhz}";
    }

    ?>
</body>

</html>