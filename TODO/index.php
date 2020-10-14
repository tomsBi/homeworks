<?php
require_once 'ToDoList.php';
$list = new ToDoList();

$file = fopen('./todo.csv', 'rw');
while (!feof($file)) {
    $todoData = fgetcsv($file);
    $array[] = $todoData[0];
}

if(isset($_POST['delete']))
{
    $id = $_POST['id'];

    if(isset($array[$id]))
    {
    unset($array[$id]);
    }

    file_put_contents('./todo.csv','');
   foreach ($array as $todo){
       file_put_contents('./todo.csv', $todo.PHP_EOL, FILE_APPEND);
   }
    fclose($file);
    $file = fopen('./todo.csv', 'rw');
    $array = [];
    while (!feof($file)) {
        $todoData = fgetcsv($file);
        $array[] = $todoData[0];
    }
    fclose($file);
}

?>

<html lang="en">
<body>
<ul>
    <?php foreach (array_filter($array) as $id => $todo) { ?>
        <li>
            <?php echo $todo; ?>
            <form method="post" action="./index.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="delete">X</button>
            </form>
        </li>
    <?php } ?>
</ul>
</body>
</html>
