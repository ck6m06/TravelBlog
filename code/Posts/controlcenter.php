<head>
    <style>
        body {
            margin: 0px;
        }

        .control {
            display: flex;
            justify-content: center;
        }
        .title{
            height: fit-content;
        }
        .icon{
            position: relative;
            width: 3%;
            top:10px;
            left:-7px;
        }
        h1 {
            text-align: center;
            font-size: 37px;
            padding: 14px;
            background-color: #C2E8EF;
            color:#3d5a80;
        }

        table {
            /* border: 2px solid black;
            border-collapse: collapse;
            font-size: 24px;
            margin-top: 20px; */
            font-size: 24px;
            margin-top: 50px;
            margin-bottom: 60px;
        }

        th {
            /* font-size: 32px; */
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 32px;
            background-color: #8CABD9;
            color:white;
        }
        .action{
            padding-left: 60px;
            padding-right: 60px;
        }
        .photo-control{
            padding-left:80px;
            padding-right:80px;
        }
        th, td {
            /* padding: 10px; */
            /* border: 1.8px solid black; */ 
            border: 1.5px solid black;
            text-align: center;
            align-items: center;
            /* background-color: #FAD689; */
        }

        .buttonsets {
            font-size: 20px;
            background-color: #C2E8EF;
            color:#3d5a80;
            border: 2px solid #3d5a80;
            border-radius: 3px;
        }
        .buttonsets:hover{
            background-color: #3d5a80;
            color:#C2E8EF;
        }

        #sign_out {
            float: right;
            color:white;
            background-color: #3d5a80;
            position:relative;
            left: -10px;
            top:2px;
            border-radius: 10px;
            padding:6px;
        }
        #sign_out:hover{
            color:#3d5a80;
            background-color: white;
        }
        .button-form{
            margin-top: 15px; 
            margin-bottom: 15px;
    
        }
        .down{
            padding-top:5px;
            padding-bottom:5px;
        }

    </style>
</head>
<body>
    <div class = "whole">
        <div class = "title">
            
            <h1><img class="icon" src="icon1.png">Posts Control Center<input type="button" class="buttonsets" id="sign_out" onclick="location.href='blogs.php'" value = "Sign out"></h1>
        </div>
        
        <?php
            // $db = new PDO("mysql:dbname=imgtest", "root", "");
            $db = new PDO("mysql:dbname=try", "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $posts = $db->query("SELECT Location FROM posts;"); 
        ?>
        <div class = "control">
            <table>
                <tr><th>Locations</th><th class="action" colspan = "2">Actions</th><th class="photo-control" colspan = "2">Photo Control</th></tr>
                <?php
                    foreach ($posts as $post) {
                ?>
                <tr>
                    <td><?= $post['Location'] ?></td>
                    <td><form action="edit.php" method = "get" class="button-form">
                        <input type="hidden" name="selectpost" value = "<?= $post['Location'] ?>">
                        <input type="submit" class ="buttonsets" value="Edit">
                    </form></td>
                    <td><form action="removepost.php" method = "get" class="button-form">
                        <input type="hidden" name = "selectpost" value = "<?= $post['Location'] ?>">
                        <input type="submit"  class = "buttonsets" value = "Remove">
                    </form></td>
                    <td><form action="../Photo_php/addphoto2.php" method = "get" class="button-form">
                        <input type="hidden" name = "selectpost" value = "<?= $post['Location'] ?>">
                        <input type="submit"  class = "buttonsets" value = "Add photo">
                    </form></td>
                    <td><form action="../Photo_php/removephoto2.php" method = "get" class="button-form">
                        <input type="hidden" name = "selectpost" value = "<?= $post['Location'] ?>">
                        <input type="submit"  class = "buttonsets" value = "Remove photo">
                    </form></td>
                </tr>
                <?php } ?>
                <tr><td class="down" colspan="5"><input type="button" class="buttonsets" onclick="location.href='addpost.php'" value = "Add post"></td></tr>
            </table>
        </div>
    </div>
</body>

    
    