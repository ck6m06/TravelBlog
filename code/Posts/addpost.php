<!DOCTYPE html>

<head>
    <title>Add Post</title>
    <link href = "addpost.css" type = "text/css" rel = "stylesheet" />
</head>


<body>
    <div class = "top">
        <h2 class="h2"><img class="icon" src="icon5.png">Create New Post</h2>

    <?php if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="new-post">
                <h2 class="location">Location: <input type="text" name="location"/></h2>
                <div id="cover">
                    <h2>Choose Your Cover:</h2>
                    <div class="img-upload"><input type="file" name="blog_cover" required="required"/></div>
                </div>
                <h2 style="text-align:center; margin-left: 12px;">Sliding photo:</h2>
                <div class="imgup">    
                    <input class="imgfile" type="file" name="image1" required="required"/>
                    <input class="imgfile" type="file" name="image2" required="required"/>
                    <input class="imgfile" type="file" name="image3" required="required"/>
                    <input class="imgfile" type="file" name="image4" required="required"/>
                    <input class="imgfile" type="file" name="image5" required="required"/>
                </div>

                <h2 style="margin-top:30px;">Introduction:</h2>
                <div class="introduction">
                    <textarea name="introduction" rows="20" cols="50" placeholder="Type your introduction here."></textarea>
                </div>
                <div class="experience">
                    <div class="experience1">
                        <h2 class="exp-title">Title of Experience One: <input type="text" name="title1"/></h2>
                        <div class="exp-text">
                            <textarea name="experience1" rows="25" cols="50" placeholder="Type your 1st experience here."></textarea>
                        </div>
                        <div class="img-upload"><input type="file" name="image6" required="required"/></div>
                    </div>
                    <div class="experience2">
                        <h2 class="exp-title">Title of Experience Two: <input type="text" name="title2"/></h2>
                        <div class="exp-text">
                            <textarea name="experience2" rows="25" cols="50" placeholder="Type your 2nd experience here."></textarea>
                        </div>
                        <div class="img-upload"><input name="image7" type="file" required="required"/></div>
                    </div>
                </div>

                <div id="tips-section">
                    <div class="tip-title">
                        <p>Tip Title: <input type="text" name="tip-title1"/></p>
                        <p>Tip Content:</p>
                        <textarea name="tip1" rows="3" cols="50" placeholder="Share your tips"></textarea>
                    </div>
                </div>
                <!-- <p id="tips-total"></p> -->
                <p><button type="button" id="newtip" value="MORE" onclick="addTip(); return false;">MORE</button></p>

                <script type="text/javascript">

                    var count = 1;

                    function addTip() {
                        var a = document.getElementById("tips-section");
                        var ele1 = document.createElement("div");
                        a.appendChild(ele1);
                        var ele2 = document.createElement("p");
                        var txt1 = document.createTextNode('Tip Title: ');
                        ele2.appendChild(txt1);
                        var ele3 = document.createElement("input");
                        ele3.setAttribute("type", "text");
                        ele3.setAttribute("name", "tip-title" + (this.count + 1).toString());
                        ele2.appendChild(ele3);
                        a.appendChild(ele2);
                        var ele4 = document.createElement("p");
                        var txt2 = document.createTextNode('Tip Content:');
                        ele4.appendChild(txt2);
                        a.appendChild(ele4);
                        var ele5 = document.createElement("textarea");
                        ele5.setAttribute("name", "tip"+ (this.count + 1).toString());
                        ele5.setAttribute("rows", "3");
                        ele5.setAttribute("cols", "50");
                        ele5.setAttribute("placeholder", "Share your tips");
                        a.appendChild(ele5);
                        this.count += 1;
                        count = this.count;
                    };

                    var total = count;

                </script>
            </div>
            <p class="sub"><input class="button" type="submit" name="post" value="post"></p>
        </form>
        
       
    <?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
            <?php
                $db = new PDO("mysql:dbname=try", "root", "");

                $tips = $db->query("SELECT t.Location FROM tips t JOIN posts p ON t.Location=p.Location;");

                // $main_img = $_POST['image1'];
                $location = $_POST["location"];
                $introduction = $_POST["introduction"];

                $expone_title = $_POST["title1"];
                $expone = $_POST["experience1"];
                $exptwo_title = $_POST["title2"];
                $exptwo =  $_POST["experience2"];

                $location = $db->quote($location);
                $introduction = $db->quote($introduction);
                $expone_title = $db->quote($expone_title);
                $expone = $db->quote($expone);
                $exptwo_title = $db->quote($exptwo_title);
                $exptwo = $db->quote($exptwo); ?>
                
                <script type="text/javascript">
                    var num = 0;
                    var photos = [<?php $_POST['image1'];?>, <?php $_POST['image2'];?>, <?php $_POST['image3'];?>, <?php $_POST['image4'];?>, <?php $_POST['image5'];?>];

                    setInterval(function() {
                        document.getElementById("main-img").src = photos[num++];
                        if (num == photos.length) {
                            num = 0;
                        }
                    }, 3000);
                </script>

                <?php for ($j=1; $j <= 10; $j++) {
                    echo $j;
                    if (!isset($_POST["tip-title$j"])) {
                        break;
                    } else {
                        $tips_title = $_POST["tip-title$j"];
                        $tip_content = $_POST["tip$j"];
                        // $tip_content = $tip_content -> fetch()['tip'];
                        $sql = "INSERT INTO tips (tip_id, Location, tip_title, tip) VALUES ($j, $location, '$tips_title', '$tip_content');";
                        $db->exec($sql);
                    }
                }

                if (isset($_POST["post"])) {
                    $post_cover = $_FILES["blog_cover"]['name'];
                    $post_cover_temp = $_FILES["blog_cover"]['tmp_name'];
                    $post_cover_path = $post_cover;

                    $file_name1 = $_FILES["image1"]['name'];
                    $file_temp1 = $_FILES["image1"]['tmp_name'];
                    $allowed_ext = array("jpeg", "jpg", "gif", "png");
                    $exp1 = explode(".", $file_name1);
                    $ext1 = end($exp1);
                    $path1 = $file_name1;
                    
                    $file_name2 = $_FILES["image2"]['name'];
                    $file_temp2 = $_FILES["image2"]['tmp_name'];
                    $exp2 = explode(".", $file_name2);
                    $ext2 = end($exp2);
                    $path2 = $file_name2;

                    $file_name3 = $_FILES["image3"]['name'];
                    $file_temp3 = $_FILES["image3"]['tmp_name'];
                    $allowed_ext = array("jpeg", "jpg", "gif", "png");
                    $exp3 = explode(".", $file_name3);
                    $ext3 = end($exp3);
                    $path3 = $file_name3;
                    
                    $file_name4 = $_FILES["image4"]['name'];
                    $file_temp4 = $_FILES["image4"]['tmp_name'];
                    $exp4 = explode(".", $file_name4);
                    $ext4 = end($exp4);
                    $path4 = $file_name4;

                    $file_name5 = $_FILES["image5"]['name'];
                    $file_temp5 = $_FILES["image5"]['tmp_name'];
                    $allowed_ext = array("jpeg", "jpg", "gif", "png");
                    $exp5 = explode(".", $file_name5);
                    $ext5 = end($exp5);
                    $path5 = $file_name5;
                    
                    $file_name6 = $_FILES["image6"]['name'];
                    $file_temp6 = $_FILES["image6"]['tmp_name'];
                    $exp6 = explode(".", $file_name6);
                    $ext6 = end($exp6);
                    $path6 = $file_name6;
                                
                    $file_name7 = $_FILES["image7"]['name'];
                    $file_temp7 = $_FILES["image7"]['tmp_name'];
                    $exp7 = explode(".", $file_name7);
                    $ext7 = end($exp7);
                    $path7 = $file_name7;


                    if (in_array($ext1, $allowed_ext) && in_array($ext2, $allowed_ext) && in_array($ext3, $allowed_ext) && in_array($ext4, $allowed_ext) && in_array($ext4, $allowed_ext) && in_array($ext5, $allowed_ext) && in_array($ext6, $allowed_ext) && in_array($ext7, $allowed_ext)) {
                        if (move_uploaded_file($file_temp1, $path1) && move_uploaded_file($file_temp2, $path2) && move_uploaded_file($file_temp3, $path3) && move_uploaded_file($file_temp4, $path4) && move_uploaded_file($file_temp5, $path5) && move_uploaded_file($file_temp6, $path6) && move_uploaded_file($file_temp7, $path7)) {
                            try {
                                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "INSERT INTO posts (Location, Photo1, Photo1_path, Photo2, Photo2_path, Photo3, Photo3_path, Photo4, Photo4_path, Photo5, Photo5_path, Introduction, Title1, Experience1, Photo6, Photo6_path, Title2, Experience2, Photo7, Photo7_path) VALUES ($location, '$file_name1', '$path1', '$file_name2', '$path2', '$file_name3', '$path3', '$file_name4', '$path4', '$file_name5', '$path5', $introduction, $expone_title, $expone, '$file_name6', '$path6', $exptwo_title, $exptwo, '$file_name7', '$path7');";
                                $db->exec($sql);
                                

                            } catch (PDOException $e) {
                                echo $e->getMessage();
                            } ?>

                            <?php
                            $line = 0;
                            $tips_text = "";
                            $all_tips = $db->query("SELECT tip_title FROM tips WHERE Location=$location;"); ?>
                            <?php foreach ($all_tips as $tip) { ?>
                                <?php $line += 1;?>
                                <?php if ($line % 2 == 1) {
                                    // $tips_text = $tips_text.'<div class="tip-line">'.'<div class="gif-sec">'.'<img src="$" alt="no icon">'.'<p class="bullet">'.$tip['tip_title'].'</p>'.'</div>';
                                    $tips_text = $tips_text.'<div class="tip-line">'.'<p class="bullet">'.$tip['tip_title'].'</p>';
                                    } else {
                                            // $tips_text = $tips_text.'<div class="gif-sec">'.'<img src="" alt="no icon">'.'<p class="bullet">'.$tip['tip_title'].'</p>'.'</div>'.'</div>';
                                            $tips_text = $tips_text.'<p class="bullet">'.$tip['tip_title'].'</p>'.'</div>';
                                    } ?>
                            <?php } 

                            //$db = null;
                            //header("index.html");
        
                            // To-Do: create new .html file
                            $post_html = $_POST["location"].'.html';
                            $new_post = fopen($post_html, "w");
                            move_uploaded_file($post_cover_temp, $post_cover_path);
                            $blog_sql = "INSERT INTO main_page (Place, Blog, cover_name, cover_path) VALUES ($location, '$post_html', '$post_cover', '$post_cover_path');";
                            $db->exec($blog_sql);
                            $head = '<!DOCTYPE html>'.'<head>'.'<title>'.$_POST["location"].'</title>'.'<link href="placestyle.css" type="text/css" rel="stylesheet"/>'.'</head>';
                            
                            $navbar = '<div class="navbar">'.'<ul class="nav-menu">'.'<li class="nav-item">'.'<a class="nav-link" href="../index.html" >Home</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link " href="../About_us/About_us.html" >About us</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="blogs.php">Blogs</a>'.'</li>'.'<li class="nav-item" >'.'<a class="nav-link" href="../Tips/tips.php">Tips</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="../Photo_php/blog_photo2.php">Photos</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="../Contact_us/ContactUs.php">Contact Us</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="../Sign_in/Sign_in.php">Sign in</a>'.'</li>'.'</ul>'.'</div>';

                            $slidephoto = '<script>'.'var num = 0;'.'var photos = ["'.$file_name1.'","'.$file_name2.'","'.$file_name3.'","'.$file_name4.'","'.$file_name5.'"];'.'setInterval(function() {'.'document.getElementById("main-img").src = photos[num++];'.'if (num == photos.length) {'.'num = 0;'.'}'.'}, 3000);'.'</script>';

                            $text = '<div class="header">'.'<p>'.$_POST["location"].'</p>'.$navbar.'</div>'.'<div class="main-img-section">'.'<div class="frame-top">'.'</div>'.'<div class="main-img-sec">'.'<img id="main-img" src='.$file_name5.' alt="no pic">'.'</div>'.'<div class="frame-bottom">'.'</div>'.'</div>'.'<div class="introduction">'.'<h1>Introduction of '.$_POST["location"].'</h1>'.'<p>'.$_POST["introduction"].'</p>'.'</div>'.'<div class="experience">'.'<div class="exp-part-one">'.'<h2 class="exp-part-title">'.$_POST["title1"].'</h2>'.'<img src='.$path6.' alt="no pic">'.'<P>'.$_POST["experience1"].'</P>'.'</div>'.'<div class="exp-part-two">'.'<h2 class="exp-part-title">'.$_POST["title2"].'</h2>'.'<img src='.$path7.' alt="no pic">'.'<P>'.$_POST["experience2"].'</P>'.'</div>'.'</div>'.'<div class="tips-section">'.'<div id="tips-sec-title">'.'<h1>'.'Tips for your trip in '.$_POST["location"].'</h1>'.'</div>'.$tips_text.'</div>'.'</div>'.'</div>'.'<div class="footer">'.'<div id="footer-info-block">'.'<div class="social-media">'.'<a id="ig" href="https://www.instagram.com">'.'<img src="../footer-icon/instagram.png" alt="no pic">'.'</a>'.'<a id="fb" href="https://zh-tw.facebook.com">'.'<img src="../footer-icon/facebook.png" alt="no pic">'.'</a>'.'<a id="tw" href="https://twitter.com">'.'<img src="../footer-icon/twitter.png" alt="no pic">'.'</a>'.'</div>'.'<div id="contact-info">'.'<p>Contact Info</p>'.'<div id="email">'.'<p>E-mail: travellingblog@group14.com</p>'.'</div>'.'<div id="tel">'.'<p>Tel: +886 12345678</p>'.'</div>'.'</div>'.'</div>';

                            $text = $head.$slidephoto.'<body>'.'<div class="whole">'.$text.'</div>'.'</body>'.'</html>';
                            
                            // $text = base64_encode($text);
                            // $html_sql = "INSERT INTO main_page html_file VALUES $text;";
                            // $db->exec($html_sql);

                            fwrite($new_post, $text);
                            fclose($new_post);
                            
                            // create php file for photos
                            $photo_php = '../Photo_php/'.$_POST["location"].'.php';
                            $photo_php_loc = $_POST["location"].'.php';
                            $new_photo = fopen($photo_php, "w");
                            $photo_sql = "INSERT INTO photo_page (Location, photo_page, photo_page_location) VALUES ($location, '$photo_php', '$photo_php_loc');";
                            $db->exec($photo_sql);
                            
                            $photohead = '<!DOCTYPE html>'.'<html>'.'<head>'.'<title>'.$_POST["location"].'</title>'.'<meta name="viewport" content="width=device-width, initial-scale=1">'.'<link href="nextPg.css" type="text/css" rel="stylesheet"/>'.'</head>';
                            $phototext = '<div class="pictures">'.'<?php $db = new PDO("mysql:dbname=try", "root", "");'.'$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);'.'$posts = $db->query("SELECT * FROM photos WHERE Location = '.$location.'; ");'.'foreach ($posts as $post) { ?>'.'<div class="picture">'.'<a href="<?= $post["photo_path"]; ?>" class="downImg" download="downIng">'.'Download'.'</a>'.'<img src="<?= $post["photo_path"]; ?>" class="photoo">'.'</div>'.'<?php } ?>'.'</div>'.'<div class = "backset"><a class = "backbutton" href="./blog_photo2.php">back to "Photos" page</a></div>';
                            $phototext = $photohead.'<body>'.'<img src="background.jpg" class="cover" >'.'<h1>'.$_POST["location"].'</h1>'.$phototext.'</body>'.'</html>';

                            fwrite($new_photo, $phototext);
                            fclose($new_photo);
                        }
                    } else {
                        echo "<center><h3 class='text-danger'>Only image format can be upload</h3></center>";
                    }

                    header("Location: controlcenter.php");
                }
            ?>
    <?php
    }
    ?>
</body>

</html>