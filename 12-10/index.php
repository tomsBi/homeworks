<!DOCTYPE html>
<html lang="en">
<body style="text-align: center">
<h1>SAFE PIN</h1>
<p>
    <?php
    session_start();
    require_once 'SafePin.php';
    $safePin = new SafePin(0000);
    $unlocked = false;
if(isset($_POST['pin'])){
    $safePin->save('pin');
}
$pin = $_SESSION['pin'];

if(strlen($pin) >= 4)
{
    unset($_SESSION['pin']);
    if($pin == $safePin->getPin()) {
        $unlocked = true;
    }
}
    ?>
</p>
<p>
<?php if(strlen($pin) === 4) { ?>
<?php echo $unlocked ? 'Unlocked' : 'Locked'; ?>
<?php }?>
</p>
<?php echo $safePin->symbols($pin); ?>
<form method="post" action="">
    <input name="pin" type="submit" value="1">
    <input name="pin" type="submit" value="2">
    <input name="pin" type="submit" value="3">
</form>
<form method="post" action="index.php">
    <input name="pin" type="submit" value="4">
    <input name="pin" type="submit" value="5">
    <input name="pin" type="submit" value="6">
</form>
<form method="post" action="index.php">
    <input name="pin" type="submit" value="7">
    <input name="pin" type="submit" value="8">
    <input name="pin" type="submit" value="9">
</form>
<form method="post" action="index.php">
    <input name="pin" type="submit" value="0">
</form>
</body>
</html>
