<!DOCTYPE html>
<html lang="en-us">
<body style="text-align: center; background-color: darkseagreen">
<h1 style="color: darkblue">Person Register</h1>
<form id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Name</label><br><br>
    <label for="name"></label><input type="text" id="name" name="name"/><br><br>
    <label>Surname</label><br><br>
    <label for="surname"></label><input type="text" id="surname" name="surname"/><br><br>
    <label>Person ID</label><br><br>
    <label for="personId"></label><input type="text" id="personId" name="personId"/><br><br>
    <label>Address</label><br><br>
    <label for="address"></label><input type="text" id="address" name="address"/><br><br>
    <input name="submit" type="submit" value="Submit">
</form>
<h2 style="color: lightblue">Search Person</h2>
<form id="form2" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Person ID</label><br><br>
    <label for="personIdSearch"></label><input type="text" id="personIdSearch" name="personIdSearch"/><br><br>
    <input name="search" type="submit" value="Search">
</form>

<p style="font-size: 200%; color: dodgerblue">
    <?php
    require_once 'PersonData.php';
    $person = new PersonData('./personRegister.csv');
    if (isset($_POST['submit'])) {
        $person->saveData($_POST['name'], $_POST['surname'], $_POST['personId'], $_POST['address']);
    } elseif (isset($_POST['search'])) {
        echo $person->search();
    }
    ?>
</p>
</body>
</html>
