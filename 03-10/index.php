<html lang="en">
<head>
    <style>
        input[type=button], input[type=submit], input[type=reset] {
            background-color: #686d76;
            border: outset;
            color: #19d3da;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
    <title>Rock Paper Scissors Lizard Spock</title>
</head>
<body style="background-color:#eeeeee;text-align:center;">
<h1 style="color:#373a40; font-size:300%">ROCK PAPER SCISSORS LIZARD SPOCK</h1>
<p style="color:#19d3da;">
    <?php
    require_once 'init.php';

    $arr = [
        $paper = new Paper(),
        $rock = new Rock(),
        $scissors = new Scissors(),
        $lizard = new Lizard(),
        $spock = new Spock()
    ];

    $aiChoice = $arr[rand(0, count($arr) - 1)];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['action'] == 'Rock') {
            $result = $rock->beats($aiChoice);
            echo $result->getMessage();
        } elseif ($_POST['action'] == 'Paper') {
            $result = $paper->beats($aiChoice);
            echo $result->getMessage();
        } elseif ($_POST['action'] == 'Scissors') {
            $result = $scissors->beats($aiChoice);
            echo $result->getMessage();
        } elseif ($_POST['action'] == 'Lizard') {
            $result = $lizard->beats($aiChoice);
            echo $result->getMessage();
        } elseif ($_POST['action'] == 'Spock') {
            $result = $spock->beats($aiChoice);
            echo $result->getMessage();
        }
    }
    ?>
</p>
<p style="color:#19d3da; font-size:xx-large;">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['action'] == 'Rock') {
            echo $rock->getName() . ' : ' . $aiChoice->getName();
        } elseif ($_POST['action'] == 'Paper') {
            echo $paper->getName() . ' : ' . $aiChoice->getName();
        } elseif ($_POST['action'] == 'Scissors') {
            echo $scissors->getName() . ' : ' . $aiChoice->getName();
        } elseif ($_POST['action'] == 'Lizard') {
            echo $lizard->getName() . ' : ' . $aiChoice->getName();
        } elseif ($_POST['action'] == 'Spock') {
            echo $spock->getName() . ' : ' . $aiChoice->getName();
        }
    }
    ?>
</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="action" value="Rock">
    <input type="submit" name="action" value="Paper">
    <input type="submit" name="action" value="Scissors">
    <input type="submit" name="action" value="Lizard">
    <input type="submit" name="action" value="Spock">
</form>
</body>
</html>

