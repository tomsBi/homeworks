<?php
session_start();
$login = false;
require_once 'PinEntry.php';
$pinEntry = new PinEntry();
if (isset($_POST['submit'])) {
    $pinEntry->search($pinEntry->load());
    if ($_SESSION != null) {
        $login = true;
    }
}
if (isset($_POST['send'])) {
    $message = $_POST['message'];
    $id = $_SESSION['id'];
    file_put_contents('./messages.csv', $id . ',' . $message . PHP_EOL, FILE_APPEND);
    $login = true;
}
if (isset($_POST['logout'])) {
    session_unset();
    $login = false;
}
?>
<html lang="en">
<head>
    <title>PIN ENTRY</title>
    <style>
        .body {
            text-align: center;
            background-color: #fff8cd;
        }

        .name {
            color: #646464;
            font-size: 250%;
        }

        .heading {
            font-size: 300%;
            color: #646464;
            text-space: 3px;
        }

        .button {
            background-color: #ff9642;
            border: 2px solid #646464;
            color: #646464;;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 15px;
        }

        .write {
            color: #646464;
            font-size: 130%;
        }
    </style>
</head>
<body class="body">
<form action="" method="post">
    <label class="heading">Enter PIN</label><br><br>
    <label>
        <input name="pin" type="text"/>
    </label><br><br>
    <input class="button" name="submit" type="submit" value="Login"/>
</form>
<form action="" method="post">
    <label>
        <input class="button" name="logout" type="submit" value="Log Out"/>
    </label>
</form>
<?php if ($login == true) { ?>
    <p class="name">
        <?php echo 'Welcome ' . $pinEntry->getName($pinEntry->load()) . '!'; ?>
    </p>
    <form action="" method="post">
        <label class="write ">Write Message</label><br><br>
        <label>
            <input name="message" type="text"/>
        </label><br><br>
        <input class="button" name="send" type="submit" value="Send">
    </form>
<?php } ?>
</body>
</html>