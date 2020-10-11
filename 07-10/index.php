<html lang="en">
<body style="text-align:center">
<h1>Enter your name!</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label>Name:</label>
    <label for="name"></label><input type="text" id="name" name="name"/><br><br>
    <input type="submit" value="Submit">
</form>
<p>
    <?php
    $name = $_POST['name'] ?? 'Toms';
    $file = fopen('file.csv', 'rw+');
    $person = null;
    while (!feof($file)) {
        $personData = (array)fgetcsv($file);
        if ($name === $personData[0]) {
            $person = [
                'name' => $personData[0]
            ];
        }
    }
    if ($person === null) {
        echo 'Getting info from AGIFY!' . PHP_EOL;
        $response = file_get_contents('https://api.agify.io/?name=' . $name);
        $person = json_decode($response, true);

        fputcsv($file, [
            $person['name'],
            $person['age'],
            $person['count']
        ]);
    }

    ?>
</p>
<p>
    <?php
    echo $person['name'];
    ?>
</p>

</body>
</html>

