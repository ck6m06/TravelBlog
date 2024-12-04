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
        .icon {
            width:3%;
            position:relative;
            top:4px;
            right:5px;
        }

        .button{
            font-size: 15px;
            background-color: #C2E8EF;
            color:#3d5a80;
            border: 1.9px solid #3d5a80;
            padding:2px;
            border-radius: 3px;
            position: relative;
            left:45%;
        }
        .button:hover{
            background-color: #3d5a80;
            color:#C2E8EF;
        }
        .picture{
            display: flex;
            flex-wrap: wrap;
            /* justify-content: space-evenly; */
            align-content: flex-start;
            width:fit-content;
            padding-left: 40px;
            padding-right: 40px;

            
            /* margin:auto; */
        }
        /* .picture2{
            align-items: left;
        } */

    </style>
</head>
<body>
    <?php
        $db = new PDO("mysql:dbname=try", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $selectpost = $db->quote($_GET["selectpost"]);
        $posts = $db->query("SELECT * FROM photos WHERE Location = $selectpost "); ?>
        <h2><img class="icon" src="icon3.png">Remove photo</h2>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
            <form action="" method = "post">
                <div class="picture">
                    <!-- <div class="picture2"> -->
                    <?php
                        foreach ($posts as $post) {
                    ?>    
                        <label><input type="radio" value = "<?= $post['photo_path']; ?>" name = "photo"><img src="<?= $post['photo_path']; ?>" width="150px" height="150px" ></label>
                        <?php } ?>
                    <!-- </div> -->
                </div>
                <br /><br/>
                <input class="button" type="submit" value = "Remove">
                <input class="button" type = "button" onclick="location.href='../Posts/controlcenter.php'" value = "Cancel">
            </form>  
        <?php }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new PDO("mysql:dbname=try", "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $photo = $db->quote($_POST["photo"]);
            $deletephoto = "DELETE FROM photos WHERE photo_path = $photo LIMIT 1";
            
            if ($db->exec($deletephoto)) { 
                header("Location: ../Posts/controlcenter.php");
            } else {?>
                <p>Remove false.</p>
                <input type = "button" onclick="location.href='../Posts/controlcenter.php'" value = "Back">
            <?php }
            
        } ?>
</body>