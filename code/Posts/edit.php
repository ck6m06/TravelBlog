<!DOCTYPE html>
<html>

<head>
    <title>Edit Post</title>
    <link href = "edit.css" type = "text/css" rel = "stylesheet" />
</head>

<body>
    <h2 class="title1"><img class="icon" src="icon4.png">Edit Post</h2>
    <?php
        $db = new PDO("mysql:dbname=try", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $selectpost = $db->quote($_GET["selectpost"]);
        $blogs = $db->query("SELECT * FROM posts ps JOIN main_page mp ON ps.Location=mp.Place WHERE ps.Location=$selectpost;");
        $blog = $blogs->fetch();
        $tips_num = 0;

        // echo $blog['Photo1_path'];
        $tips = $db->query("SELECT tip_title, tip FROM tips WHERE Location=$selectpost;");
        $num_of_tips = $tips->rowCount();

        if ($_SERVER["REQUEST_METHOD"] == "GET") {?>
            <form action = "" method = "post" enctype="multipart/form-data" >
            <?php //foreach ($blogs as $blog) { ?>
                    <!-- name(locname) -->
                <div class="new-post">
                    <h2 class="title">Location: <span id="location-title"><?= $blog['Location'] ?></span></h2>
                    <input type="hidden" name="location" value="<?= $blog['Location'] ?>">
                    
                    <div id="cover">
                        <h2 class="title">Choose Your Cover:</h2>
                        <div class="img-upload">
                            <img src="<?= $blog['cover_name'];?>" width="30%" height="30%" >
                            <input type="hidden" name="blog_origin_cover" value="<?= $blog['cover_name'] ?>">
                            <input type="file" name="blog_cover" />
                        </div>
                    </div>

                    <!-- pictures -->
                    <h2 class="title">Sliding photo: </h2>
                    <div class="slide-photos-section">
                        <div class="sub-slide-photos-section">
                            <img src="<?= $blog['Photo1'];?>" width="20%" height="20%"/>
                            <input type="hidden" name="img1" value = "<?= $blog['Photo1'] ?>">
                            <input class="slidephotos" type="file" name="slidephoto1"/><br />

                            <img src="<?= $blog['Photo2'];?>" width="20%" height="20%"/>
                            <input type="hidden" name="img2" value = "<?= $blog['Photo2'];?>"/>
                            <input class="slidephotos" type="file" name="slidephoto2"/><br />
                        </div>

                        <div class="sub-slide-photos-section">
                            <img src="<?= $blog['Photo3']; ?>" width="20%" height="20%"/>
                            <input type="hidden" name="img3" value = "<?= $blog['Photo3'] ?>">
                            <input class="slidephotos" type="file" name="slidephoto3"/><br />

                            <img src="<?= $blog['Photo4']; ?>" width="20%" height="20%"/>
                            <input type="hidden" name="img4" value = "<?= $blog['Photo4'] ?>">
                            <input class="slidephotos" type="file" name="slidephoto4"/><br />
                        </div>
                        <div class="sub-slide-photos-section" id="sub-slide-photos-section-5">
                            <img src="<?= $blog['Photo5']; ?>" width="20%" height="20%"/>
                            <input type="hidden" name="img5" value = "<?= $blog['Photo5'] ?>">
                            <input class="slidephotos" type="file" name="slidephoto5"/>
                        </div>
                    </div>
                    <!-- introduction(intro) -->
                    <h2 class="title" style="margin-top:30px;">Introduction: </h2>
                    <div class="introduction">
                        <textarea name="introduction" cols="50" rows="20"><?= $blog['Introduction'] ?></textarea>
                    </div>

                    <div class="experience">
                        <!-- experience 1(exp1) -->
                        <div class="experience1">
                            <h2 class="exp-title">Title of Experience One: <input type="text" name="title1" value="<?= $blog["Title1"];?>"/></h2>
                            <div class="exp-section">
                                <div class="exp-text">
                                    <textarea name="experience1" rows="25" cols="50" placeholder="Type your 1st experience here."><?= $blog['Experience1'] ?></textarea>
                                </div>
                                <div class="img-upload">
                                    <img src="<?= $blog['Photo6']; ?>" width="100px" height="100px"/>
                                    <input type="hidden" name="img6" value="<?= $blog['Photo6'];?>">
                                    <input type="file" name="image1"/>
                                </div>
                            </div>
                        </div>
                        <div class="experience2">
                            <h2 class="exp-title">Title of Experience Two: <input type="text" name="title2" value="<?= $blog["Title2"]?>"/></h2>
                            <div class="exp-section">
                                <div class="exp-text">
                                    <textarea name="experience2" rows="25" cols="50" placeholder="Type your 2nd experience here."><?= $blog['Experience2'] ?></textarea>
                                </div>
                                <div class="img-upload">
                                    <img src="<?= $blog['Photo7'];?>" width="100px" height="100px"/>
                                    <input type="hidden" name="img7" value="<?= $blog['Photo7'] ?>">
                                    <input type="file" name="image2"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="tips-section">
                    <?php $tips_num = 0;?>
                    <?php foreach ($tips as $tip) {?>
                        <?php $tips_num += 1; ?>
                        <div class="tip-title">
                            <p>Tip Title: <input type="text" name="tip-title<?= $tips_num?>" value="<?= $tip['tip_title'];?>"/></p>
                            <p>Tip Content:</p>
                            <textarea name="tip<?= $tips_num?>" rows="3" cols="50" placeholder="Share your tips"><?= $tip['tip'];?></textarea>
                        </div>
                        <!-- echo $tips_num; -->
                    <?php } ?>
                    </div>
                <!-- <p><button type="button" id="newtip" value="MORE" onclick="addTip(); return false;">MORE</button></p> -->

                <script type="text/javascript">
    
                    var count = <?= $tips_num;?>;

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
                <div id="confirm-button"><input class="button" type="submit" name="edit" value="Confirm" style="cursor: pointer;"></div>
            </form>
            <?php
           // } ?>
        <?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
            $db = new PDO("mysql:dbname=try", "root", "");
            
            $location = $db->quote($_POST["location"]);
            
            //intro
            $intro = $db->quote($_POST["introduction"]);
            //echo $blog['Photo1_path'];

            // exps
            $exp_title1 = $db->quote($_POST['title1']);
            $exp1 = $db->quote($_POST["experience1"]);
            $exp_title2 = $db->quote($_POST['title2']);
            $exp2 = $db->quote($_POST["experience2"]);

            // echo $tips_num;
            $count_tips = $tips->rowCount();
            echo $count_tips;
            for ($t = 1; $t <= $count_tips; $t++) {
                // echo $t;
                echo $_POST["tip-title$t"];
                $tip_tit = $_POST["tip-title$t"];
                $tip_cont = $_POST["tip$t"];
                $sql = "UPDATE tips SET tip_title='$tip_tit', tip='$tip_cont' WHERE Location=$selectpost AND tip_id=$t";
                $db->exec($sql);
            }

            $allowed_ext = array("jpeg", "jpg", "gif", "png");

            if (isset($_POST['edit'])) {
                if (!empty($_FILES["blog_cover"]['name'])) {
                    $cover = $_FILES["blog_cover"]['name'];
                    $cover_temp = $_FILES["blog_cover"]['tmp_name'];
                    $cover_exp = explode(".", $cover);
                    $cover_ext = end($cover_exp);
                    if (in_array($cover_ext, $allowed_ext) && move_uploaded_file($cover_temp, $cover)) {
                        // $blog_sql = "UPDATE main_page SET cover_name='$cover', cover_path='$cover_temp' WHERE Place=$selectpost;";
                        $blog_sql = "UPDATE main_page SET cover_name='$cover', cover_path='$cover' WHERE Place=$selectpost;";
                        $db->exec($blog_sql);
                    } else {
                        $cover = $blog['cover_path'];
                    }
                }

                // imgs
                // img1
                if (!empty($_FILES["slidephoto1"]['name'])) {
                    $imgname1 = $_FILES["slidephoto1"]['name'];
                    $imgtmp1 = $_FILES["slidephoto1"]['tmp_name'];
                    $imgname1_exp = explode(".", $imgname1);
                    $imgname1_ext = end($imgname1_exp);
                    if (in_array($imgname1_ext, $allowed_ext) && move_uploaded_file($imgtmp1, $imgname1)) {
                        $sql = "UPDATE posts SET Photo1='$imgname1', Photo1_path='$imgname1' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname1 = $blog['Photo1_path'];
                }

                // img2
                if (!empty($_FILES["slidephoto2"]['name'])) {
                    $imgname2 = $_FILES["slidephoto2"]['name'];
                    $imgtmp2 = $_FILES["slidephoto2"]['tmp_name'];
                    $imgname2_exp = explode(".", $imgname2);
                    $imgname2_ext = end($imgname2_exp);
                    if (in_array($imgname2_ext, $allowed_ext) && move_uploaded_file($imgtmp2, $imgname2)) {
                        $sql = "UPDATE posts SET Photo2='$imgname2', Photo2_path='$imgname2' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname2 = $blog['Photo2_path'];
                }
                
                // img3
                if (!empty($_FILES["slidephoto3"]['name'])) {
                    $imgname3 = $_FILES["slidephoto3"]['name'];
                    $imgtmp3 = $_FILES["slidephoto3"]['tmp_name'];
                    $imgname3_exp = explode(".", $imgname3);
                    $imgname3_ext = end($imgname3_exp);
                    if (in_array($imgname3_ext, $allowed_ext) && move_uploaded_file($imgtmp3, $imgname3)) {
                        $sql = "UPDATE posts SET Photo3='$imgname3', Photo3_path='$imgname3' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname3 = $blog['Photo3_path'];
                }

                // img4
                if (!empty($_FILES["slidephoto4"]['name'])) {
                    $imgname4 = $_FILES["slidephoto4"]['name'];
                    $imgtmp4 = $_FILES["slidephoto4"]['tmp_name'];
                    $imgname4_exp = explode(".", $imgname4);
                    $imgname4_ext = end($imgname4_exp);
                    if (in_array($imgname4_ext, $allowed_ext) && move_uploaded_file($imgtmp4, $imgname4)) {
                        $sql = "UPDATE posts SET Photo4='$imgname4', Photo4_path='$imgname4' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname4 = $blog['Photo4_path'];
                }

                // img5
                if (!empty($_FILES["slidephoto5"]['name'])) {
                    $imgname5 = $_FILES["slidephoto5"]['name'];
                    $imgtmp5 = $_FILES["slidephoto5"]['tmp_name'];
                    $imgname5_exp = explode(".", $imgname5);
                    $imgname5_ext = end($imgname5_exp);
                    if (in_array($imgname5_ext, $allowed_ext) && move_uploaded_file($imgtmp5, $imgname5)) {
                        $sql = "UPDATE posts SET Photo5='$imgname5', Photo5_path='$imgname5' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname5 = $blog['Photo5_path'];
                }

                // img6
                if (!empty($_FILES["image1"]['name'])) {
                    $imgname6 = $_FILES["image1"]['name'];
                    $imgtmp6 = $_FILES["image1"]['tmp_name'];
                    $imgname6_exp = explode(".", $imgname6);
                    $imgname6_ext = end($imgname6_exp);
                    if (in_array($imgname6_ext, $allowed_ext) && move_uploaded_file($imgtmp6, $imgname6)) {
                        $sql = "UPDATE posts SET Photo6='$imgname6', Photo6_path='$imgname6' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname6 = $blog['Photo6_path'];
                }

                // img7
                if (!empty($_FILES["image2"]['name'])) {
                    $imgname7 = $_FILES["image2"]['name'];
                    $imgtmp7 = $_FILES["image2"]['tmp_name'];
                    $imgname7_exp = explode(".", $imgname7);
                    $imgname7_ext = end($imgname7_exp);
                    if (in_array($imgname7_ext, $allowed_ext) && move_uploaded_file($imgtmp7, $imgname7)) {
                        $sql = "UPDATE posts SET Photo7='$imgname7', Photo7_path='$imgname7' WHERE Location=$selectpost;";
                        $db->exec($sql);
                    }
                } else {
                    $imgname7 = $blog['Photo7_path'];
                }
            
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
                <?php } ?>

                    // To-Do: create new .html file
                    <?php $post_html = $_POST["location"].'.html';
                    $new_post = fopen($post_html, "w");

                    $exps = $db->query("SELECT Photo6_path, Photo7_path FROM posts WHERE Location=$location;");
                    
                    $sql = "UPDATE posts SET Introduction=$intro, Title1=$exp_title1, Experience1=$exp1, Title2=$exp_title2, Experience2=$exp2 WHERE Location=$selectpost;";
                    $db->exec($sql);
            
                    $head = '<!DOCTYPE html>'.'<head>'.'<title>'.$_POST["location"].'</title>'.'<link href="placestyle.css" type="text/css" rel="stylesheet"/>'.'</head>';

                    $navbar = '<div class="navbar">'.'<ul class="nav-menu">'.'<li class="nav-item">'.'<a class="nav-link" href="../index.html" >Home</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link " href="../About_us/About_us.html" >About us</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="blogs.php">Blogs</a>'.'</li>'.'<li class="nav-item" >'.'<a class="nav-link" href="../Tips/tips.php">Tips</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="../Photo_php/blog_photo2.php">Photos</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="../Contact_us/ContactUs.php">Contact Us</a>'.'</li>'.'<li class="nav-item">'.'<a class="nav-link" href="../Sign_in/Sign_in.php">Sign in</a>'.'</li>'.'</ul>'.'</div>';

                    $slidephoto = '<script>'.'var num = 0;'.'var photos = ["'.$imgname1.'","'.$imgname2.'","'.$imgname3.'","'.$imgname4.'","'.$imgname5.'"];'.'setInterval(function() {'.'document.getElementById("main-img").src = photos[num++];'.'if (num == photos.length) {'.'num = 0;'.'}'.'}, 3000);'.'</script>';

                    $text = '<div class="header">'.'<p>'.$_POST["location"].'</p>'.$navbar.'</div>'.'<div class="main-img-section">'.'<div class="frame-top">'.'</div>'.'<div class="main-img-sec">'.'<img id="main-img" src='.$imgname5.' alt="no pic">'.'</div>'.'<div class="frame-bottom">'.'</div>'.'</div>'.'<div class="introduction">'.'<h1>Introduction of '.$_POST["location"].'</h1>'.'<p>'.$_POST["introduction"].'</p>'.'</div>'.'<div class="experience">'.'<div class="exp-part-one">'.'<h2 class="exp-part-title">'.$_POST["title1"].'</h2>'.'<img src='.$imgname6.' alt="no pic">'.'<P>'.$_POST["experience1"].'</P>'.'</div>'.'<div class="exp-part-two">'.'<h2 class="exp-part-title">'.$_POST["title2"].'</h2>'.'<img src='.$imgname7.' alt="no pic">'.'<P>'.$_POST["experience2"].'</P>'.'</div>'.'</div>'.'<div class="tips-section">'.'<div id="tips-sec-title">'.'<h1>'.'Tips for your trip in '.$_POST["location"].'</h1>'.'</div>'.$tips_text.'</div>'.'</div>'.'</div>'.'<div class="footer">'.'<div id="footer-info-block">'.'<div class="social-media">'.'<a id="ig" href="https://www.instagram.com">'.'<img src="../footer-icon/instagram.png" alt="no pic">'.'</a>'.'<a id="fb" href="https://zh-tw.facebook.com">'.'<img src="../footer-icon/facebook.png" alt="no pic">'.'</a>'.'<a id="tw" href="https://twitter.com">'.'<img src="../footer-icon/twitter.png" alt="no pic">'.'</a>'.'</div>'.'<div id="contact-info">'.'<p>Contact Info</p>'.'<div id="email">'.'<p>E-mail: travellingblog@group14.com</p>'.'</div>'.'<div id="tel">'.'<p>Tel: +886 12345678</p>'.'</div>'.'</div>'.'</div>';

                    $text = $head.$slidephoto.'<body>'.'<div class="whole">'.$text.'</div>'.'</body>'.'</html>';

                    fwrite($new_post, $text);
                    fclose($new_post);
                }

            header("Location: controlcenter.php");
        }
        ?>

</body>
</html>