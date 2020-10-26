<?php
$file = fopen('./photos.csv', 'rw+');
?>
<html lang="en">
<head>
    <title>Like/Dislike</title>
    <style>
        .button {
            background-color: #f7be16;
            border: none;
            color: #293462;
            padding: 5px 40px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 150%;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 16px;
        }

        .image {
            border-style: solid;
            border-color: #f7be16;
            border-radius: 16px;
        }

        .text {
            font-size: 150%;
            color: white;
            font-family: "Lucida Console", Monaco, monospace;
        }

        .heading {
            font-family: "Lucida Console", Monaco, monospace;
            color: white;
            font-size: 300%;
            letter-spacing: 5px;
        }
    </style>
</head>
<body style="text-align: center; background-color: #293462">
<h1 class="heading">PHOTOS DATABASE</h1>
<p>
    <?php
    require_once 'Photos.php';
    $photosDatabase = new Photos();
    $photos = $photosDatabase->load();

    if (isset($_POST['add'])) {
        $imageId = $_POST['id'] - 1;
        $newValue = $photos[$imageId][1] + 1;

        if (isset($photos[$imageId])) {
            unset($photos[$imageId][1]);
        }
        array_push($photos[$imageId], $newValue);
        foreach ($photos as $photo) {
            fputcsv($file, $photo);
        }
    }
    if (isset($_POST['remove'])) {
        $imageId = $_POST['id'] - 1;
        $newValue = $photos[$imageId][1] - 1;

        if (isset($photos[$imageId])) {
            unset($photos[$imageId][1]);
        }

        array_push($photos[$imageId], $newValue);
        foreach ($photos as $photo) {
            fputcsv($file, $photo);
        }
    }
    ?>
</p>
<?php $id = 0;
foreach ($photosDatabase->load() as $line) { ?>
    <?php $id += 1; ?>
    <div>
        <img class="image" src="<?php echo $line[0]; ?>" alt="">
    </div>
    <p class="text">
        <?php echo 'Likes: ' . $line[1]; ?>
    </p>
    <form action="" method="post">
        <p>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button class="button" type="submit" name="add">+</button>
            <button class="button" type="submit" name="remove">-</button>
        </p>
    </form>
<?php } ?>
</body>
</html>