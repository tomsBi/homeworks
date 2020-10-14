<!DOCTYPE html>
<html lang="en-us">
<body style="text-align: center;background-color: lightseagreen">
<h1>Search person</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Phone number</label><br><br>
    <label for="phoneNumber"></label><input type="text" id="phoneNumber" name="phoneNumber"/><br><br>
    <input name="submit" type="submit" value="Submit">
</form>
<p style="color: yellow;font-size: 300%">
    <?php
    require_once 'PhoneRegister.php';
    $register = new PhoneRegister('./database.csv');
    if (isset($_POST['submit'])) {
        echo $register->search();
    }

    ?>
</p>
</body>
</html>
