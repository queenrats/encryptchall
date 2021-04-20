<html>

<head>
    <title>Hash 'n' Crypt</title>
</head>

<body>
    <h1>Hash 'n' Crypt</h1>
    <br>
    <p>This time, try hashing the input number by using the hash function before encrypting it.</p>
    <p></p>
    <p>Input Number: 6</p>
    <p>Hash Function: x<sup>2</sup> + 7</p>
    <p>Public Key: (119,5)</p>
    <br>
    <form name="form" action="" method="post">
        <label for="answer">Answer:</label>
        <input type="text" id="answer" name="answer">
        <input type="submit" value="Submit">
    </form>
    <?php

    $answer = $_POST['answer'];
    if ($answer == "8"){
        echo "<br>KEY{ZG9pbmdoYXNoaGVoZQ==}";
    }

    ?>
</body>

</html>