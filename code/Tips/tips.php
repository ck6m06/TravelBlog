<!DOCTYPE html>
    <head>
        <title>Tips</title>
    </head>
    <body>
        <div class="top-photo">
            <img class="tips-photo" src="109861.jpg" alt="tips-photo">
            <div class="photo-text">Tips</div>
        </div>
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
                    <a class="nav-link" href="tips.php">Tips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Photo_php/blog_photo2.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact_us/ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Sign_in/Sign_in.php">Sign in</a>
                </li>
            </ul>
        </div>
        <?php
            try {
                $db = new PDO("mysql:dbname=try", "root", "");
            } catch (PDOException $e) {

            ?>
                <p>Sorry, a database error occured. Please try again later.</p>
                <p>(Error details: <?= $e->getMessage()?>)</p>
            <?php
            }
        ?>

        <?php
            // include("link.php");
        ?>
    
        <?php $locas = $db->query("SELECT Location FROM posts;"); ?>
        <?php $check = 0; ?>
        <div class="nav-column">
            <ul class="column-left">
                <?php foreach ($locas as $loca) { ?>
                    <li class="column-item">
                        <a class="column-link" href="#<?php print $loca['Location'];?>"><?php print $loca['Location'];?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
 
        <div class="body-content">
        <?php $locats = $db->query("SELECT Location FROM posts;"); ?>
            <?php foreach ($locats as $locat) { ?>
                <?php $tips = $db->query("SELECT * FROM tips WHERE Location='$locat[Location]';");?>
                <?php $check = 1;?>
                <div class="reveal">
                    <?php foreach ($tips as $tip) { ?>
                        <?php if ($check == 1) { ?>
                            <div class="tips-place" id="<?php print $tip['Location']?>"><?php print $tip['Location'];?></div>
                            <div class="tips-title"><?php print $tip['tip_title'];?></div>
                            <div class="tips-content"><?php print $tip['tip'];?></div>
                            <?php $check = 0;?>
                        <?php } else { ?>
                            <div class="tips-title"><?php print $tip['tip_title'];?></div>
                            <div class="tips-content"><?php print $tip['tip'];?></div>
                        <?php } ?>
                    <?php } ?>
                </div>
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

<style>

body{
    margin: 0;
}

.tips-photo{
    position:relative;
    width:100%;
    object-fit: fill;
    opacity:0.75;
    display:block; 
}

.photo-text {
    font-size: 6.5em;
    color:white;
    position:absolute;
    top:0;
    left:0; 
    margin-left:39.3%;
    margin-top:9.5%;
    width:fit-content;
    padding-top:10px;
    padding-bottom: 10px;
    padding-left:12px;
    padding-right:12px;
    border-color: white;
    border-style:solid;
}

.navbar {
    position:sticky;
    top:0;
}

ul.nav-menu {
    margin:0px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left:0;
    display:flex;
    justify-content: center;
    align-items: center;
    background-color: #C2E8EF;
    /* background-color: #CEEFEB; */
    /* background-color: #F0F8FF; */
}

li.nav-item {
    list-style: none;
    font-size:20px;
    padding-right:25px;
}

a.nav-link {
    color:#3d5a80;
    font-weight: bold;
    text-decoration: none;
    width:fit-content;
/* ++ */
/* https://www.30secondsofcode.org/css/s/hover-underline-animation */
    display: inline-block;
    position: relative;
}

a.nav-link::after {
    content: '';
    position:absolute;
    width:100%;
    transform:scaleX(0);
    height:2px;
    bottom:0;
    left:0;
    background-color: #79B4A9;
    transition: bottom right;
    transition: transform 0.25s ease-out;
}

a.nav-link:hover::after {
    transform: scaleX(1);
    transform-origin: bottom;
}
/* ++ */
a.nav-link:hover {
    color:#79B4A9;
    font-weight:bold;
}

.body-content {
    display:flex;
    flex-direction: column;
}

.text-content {
    padding-bottom:10%;
    align-items: center;
    justify-items: center;
    padding-left:5em;
}

.nav-column {
    padding-top:18%;
    padding-left:8%;
    padding-right:4%;
    position:sticky;
    width:fit-content;
    top:0;
    float:left;
}

.column-item {
    padding-bottom: 0.7em;
    list-style: none;
}

.column-left {
    padding:1em;
    padding-bottom:0.5em;
    border-radius: 10%;
    background-color: #edf6f9;
    margin:0px;

}

.column-link {
    font-size:15x;
    color:#3d5a80;
    text-decoration: none;
    font-weight: bold;

    /* ++ */
    display: inline-block;
    position: relative;
}

.column-link::after {
    content: '';
    position:absolute;
    width:100%;
    transform:scaleX(0);
    height:2px;
    bottom:0;
    left:0;
    background-color: #79B4A9;
    transition: bottom right;
    transition: transform 0.25s ease-out;
}

.column-link:hover::after {
    transform: scaleX(1);
    transform-origin: bottom;
}
/* ++ */
.column-link:hover {
    font-weight: bold;
    color:#79B4A9;
}

.tips-place {
    margin-left: 10%;
    padding-top:2.5em;
    padding-bottom:0.5em;
    font-size: 45px;
    width:fit-content;
}

.tips-title{
    margin-left:10%;
    padding-bottom:0.3em;
    font-size:25px;
}

.tips-content{
    margin-left:10%;
    width: 60%;
    padding-bottom:1em;
    font-size:1em;
    line-height: 1.5em;
}

.blank{
    margin-bottom:10%;
}

.footer {
    background-color:#2a6f97;
    color: white;
    margin: 5% 0% 0% 0%;
}

.footer p {
    text-align: center;
}

.social-media {
    text-align: center;
    padding: 2% 0px 0px 0px;
}

#ig img {
    width: 2.3%;
}

#fb img, #tw img {
    width: 2%;
    border-radius: 30%;
    position: relative;
    bottom: 2px;
}

#contact-info {
    color: white;
    font-size: 150%;
    padding: 10px;
}

#contact-info > p {
    border-bottom: 1px solid white;
    margin: 0% 40%;
}

</style>