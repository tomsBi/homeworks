<!DOCTYPE html>
<html lang="en">
<body style="text-align: center">
<h1>Investment calculator</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="investment">Investment</label><br><br><input type="number" id="investment" name="investment"/><br><br>
    <label for="years">Years</label><br><br><input type="number" id="years" name="years"/><br><br>
    <label for="interest">Interest</label><br><br><input type="number" id="interest" name="interest"/><br><br>
    <input name="submit" type="submit" value="Result"><br><br>
</form>

    <?php
    $investment = $_POST['investment'];
    $years = 1;
?>
   <p><?php while($years <= $_POST['years']) { ?></p>
       <?php $investment = $investment * (1 + $_POST['interest'] / 100);
        echo 'Year: ' . $years . ' Amount: $' . number_format($investment,2) . PHP_EOL;
        $years++; ?>
   <?php } ?>

</body>
</html>