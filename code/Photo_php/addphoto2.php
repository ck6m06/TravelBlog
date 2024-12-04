<!DOCTYPE html>
<head>
    <title>Add photo</title>
    <style>
        body{
            margin:0;
        }
        h2{
            text-align: center;
            font-size: 37px;
            padding: 14px;
            background-color: #C2E8EF;
            color:#3d5a80;
            margin-top:0px;
            
        }
        .icon{
            width:3%;
            position:relative;
            top:4px;
            right:5px;
        }
        .imgs{
            width: 150px;
            height: 150px;
        }
        .form{
            width:fit-content;
            margin:auto;
        }
        .button{
            font-size: 15px;
            background-color: #C2E8EF;
            color:#3d5a80;
            border: 1.9px solid #3d5a80;
            padding:2px;
            border-radius: 3px;
            margin-bottom: 30px;
        }
        .button:hover{
            background-color: #3d5a80;
            color:#C2E8EF;
        }
        .pictures{

            /* justify-content: space-evenly; */
            width:fit-content;
            padding-left: 40px;
            padding-right: 40px;
            margin:auto;
            margin-bottom:20px;

            
            /* margin:auto; */
        }

    </style>
</head>
<body>
    <?php 
        $db = new PDO("mysql:dbname=try", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $selectpost = $db->quote($_GET["selectpost"]);
        $posts = $db->query("SELECT * FROM photos WHERE Location = $selectpost "); ?>
    <h2><img class="icon" src="icon2.png">Add photo</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
            <div class="pictures">
            <?php
                foreach ($posts as $post) {
            ?>    
                <img class="imgs" src="<?= $post['photo_path']; ?>">
                <?php } ?>
            </div>
            <form action = "" method = "post" enctype="multipart/form-data" class="form">
                <input type="file" name = "addphoto" accept="image/*"  >
                <input type="hidden" name = "selectpost" value = "<?= $selectpost ?>">
                <input class="button" type="submit" value = "Upload">
                <input class="button" type = "button" onclick="location.href='../Posts/controlcenter.php'" value = "Cancel">
            </form>
        <?php }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $db = new PDO("mysql:dbname=try", "root", "");
            
            
            $photoname = $_FILES['addphoto']['name'];
            $phototmp = $_FILES['addphoto']['tmp_name'];
            $allowed_ext = array("jpeg", "jpg", "gif", "png");
            $exp = explode(".", $photoname);
            $ext = end($exp);
            $path = "photos/".$photoname;
            $location = $_POST["selectpost"];
            if (in_array($ext, $allowed_ext)) {
                if (move_uploaded_file($phototmp, $path)){
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql="INSERT INTO photos (Location, photo, photo_path) VALUES ($location, '$photoname', '$path');";
                    $db->exec($sql);
                }
                header("Location: ../Posts/controlcenter.php");
            }
            else {
                echo "<h3>Upload false.</h3>"; ?>
                <input type = "button" onclick="location.href='../Posts/controlcenter.php'" value = "Back">
            <?php }
        } ?>
</body>
