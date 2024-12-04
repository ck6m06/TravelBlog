<!DOCTYPE html>
<html>
    <head>
        <title>Blog's Photos</title>
        <link href = "blog_pho.css" type = "text/css" rel = "stylesheet" />
    </head>
    <body>
<!-- +++++ -->
        <div class="top-photo">
            <img src="background.jpg" class="bg" >
            <div class="photo-text">Photos</div>
        </div>
        <!-- navbar -->
        <div class="navbar">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../About_us/About_us.html" >About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Posts/blogs.php">Blogs</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="../Tips/tips.php">Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog_photo2.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact_us/ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Sign_in/Sign_in.php">Sign in</a>
                </li>
            </ul>
        </div>
        <div class="main">
            <?php
                $db = new PDO("mysql:dbname=try", "root", "");

                $locations = $db->query("SELECT Location FROM photo_page;");
                
                foreach ($locations as $location) { ?>
                    <?php
                        $photo_page_link = $db->query("SELECT photo_page_location FROM photo_page WHERE Location='$location[Location]' LIMIT 1;");
                        $main_photo = $db->query("SELECT photo_path FROM photos WHERE Location='$location[Location]' LIMIT 1;");
                    ?>
                    
                    <a href="<?php print $photo_page_link->fetch()['photo_page_location'];?>" class="main_photo">
                        <img src="<?php print $main_photo->fetch()['photo_path'];?>" alt="no pic" class="photoo">
                        <p class="placename"><?= $location['Location'];?></p>
                    </a> 
                    
                <?php } ?>
        </div>
        <div class="footer">
            <div id="footer-info-block">
                <div class="social-media">
                    <a id="ig" href="https://www.instagram.com"><img src="../footer-icon/instagram.png" alt="no pic"></a>
                    <a id="fb" href="https://zh-tw.facebook.com"><img src="../footer-icon/facebook.png" alt="no pic"></a>
                    <a id="tw" href="https://twitter.com"><img src="../footer-icon/twitter.png" alt="no pic"></a>
                </div> <!--put some social media icons here-->
                <div id="contact-info">
                    <p>Contact Info</p>
                    <div id="email">
                        <p>E-mail: travellingblog@group14.com</p>
                    </div>
                    <div id="tel">
                        <p>Tel: +886 12345678</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>