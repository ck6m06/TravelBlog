<!DOCTYPE html>
<html>

<head>
    <title>Remove Post</title>
</head>

<body>

    <?php
    $db = new PDO("mysql:dbname=try", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $selectpost = $db->quote($_GET["selectpost"]);
    $main_page = "DELETE FROM main_page WHERE Place=$selectpost";
    $db->exec($main_page);

    $posts = "DELETE FROM posts WHERE Location=$selectpost";
    $db->exec($posts);

    $photo_page = "DELETE FROM photos WHERE Location=$selectpost";
    $db->exec($photo_page);

    $photos = "DELETE FROM photo_page WHERE Location=$selectpost";
    $db->exec($photos);

    $tips = "DELETE FROM tips WHERE Location=$selectpost";
    $db->exec($tips);
    ?>

    <?php header("Location: controlcenter.php");?>

</body>

</html>