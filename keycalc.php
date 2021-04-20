<html>

<head>
    <title>Find the Keys to Get the Keys</title>
</head>

<body>
    <h1>Find the Keys to Get the Keys</h1>
    <br>
    <p>Try to calculate the public key for the prime number pair p=5  and q=11. Use 3 as the public exponent e.g. e=3.</p>
    <p></p>
    <p>Give your answer in the form (n,e)</p>
    <br>
    <form name="form1" action="" method="post">
        <label for="answer1">Answer:</label>
        <input type="text" id="answer1" name="answer1">
        <input type="submit" value="Submit">
    </form>
    <?php

    $answer = $_POST['answer'];
    if ($answer == "(33,3)"){
        echo "<br>KEY{bW9kdWx1c2lzZGlmZmljdWx0}<br>";
        echo "<a href='privcalc.php'>Onto Part 2!</a>";
    }

    ?>
</body>

</html>