<?php
session_start();
require_once 'PinEntry.php';
$pinEntry = new PinEntry();
if(isset($_POST['submit'])){
    unset($_SESSION);
    $pinEntry->search();

}
var_dump($_SESSION);

?>
<html lang="en">
<head>
    <title>PIN ENTRY</title>
    <style>
        .body{
            text-align: center;
        }
        </style>
</head>
<body class="body">
<form action="" method="post">
<label>Enter PIN</label><br><br>
    <label>
        <input name="pin" type="text"/>
    </label><br><br>
    <input name="submit" type="submit" value="Submit"/>
</form>
    </body>
</html>