<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <!-- 導入contactUs.css -->
        <link href = "contactUs.css" type = "text/css" rel = "stylesheet"/>
    </head>
    <body>

    <?php
        try {
            $db = new PDO("mysql:dbname=try", "root", "");
        } catch (PDOException $e) {?>
            <p>Sorry, a database error occured. Please try again later.</p>
            <p>(Error details: <?= $e->getMessage()?>)</p>
    <?php
    }?>

        <div class = "beginning">
            <img src="./backgound.jpg" class="back" >
            <h1>Contact   Us</h1>
        </div>
        <div class="navbar">
            <!-- <div class="nav-menu"> -->
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
                    <a class="nav-link" href="../Photo_php/blog_photo2.php">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Sign_in/Sign_in.php">Sign in</a>
                </li>
            </ul>
            <!-- </div> -->
        </div>
        <!-- frame for mail infrom -->
        <?php if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
        <div id="mail">
            <div class="right">
                <img src="email.png" class="icon">
                <p class = "box">Email</p>
                <div class="gmail">
                    <p>b094020022@g-mail.nsysu.edu.tw</p>
                    <p>b104020001@g-mail.nsysu.edu.tw</p>
                    <p>b104020002@g-mail.nsysu.edu.tw</p>
                    <p>b104020057@g-mail.nsysu.edu.tw</p>
                </div>
            </div>
            <!-- frame for comment block -->
            <div class="Comment_box">
                <div class="comment_icon"><p class="text" >MAKE CONTACT</p><img src="blogging.png" class="icon2"></div>
                <form action="" method="post" enctype="multipart/form-data">
                    <p>Name<input id="nameTag" type="text" name="name" placeholder="Your Name"></p>
                    <p>Email<input id="mailTag" type="text" name="email" placeholder="Email"> </p>
                    <p>Contact No.<input id="noTag" type="text" name="phonenumber" placeholder="Contact Number"></p>
                    <p>Comments</p>
                    <textarea id="comTag" rows="7" cols="50" name="comments" placeholder="Comments"></textarea><br>
                    <div class= "centerbutton">
                        <input class="clickbut" type="submit" name="submit" value="Submit"/>
                        <a id="mailTo"></a>
                    </div>
                </form>
    <?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
                
                <?php
                    if (isset($_POST["submit"])) {
                        $name = $_POST['name'];
                        $name = $db->quote($name);
                        $email = $_POST['email'];
                        $email = $db->quote($email);
                        $phone = $_POST['phonenumber'];
                        $phone = $db->quote($phone);
                        $comment = $_POST['comments'];
                        $comment = $db->quote($comment);

                        $sql = "INSERT INTO contact (name, email, phone_number, comment) VALUES ($name, $email, $phone, $comment)";
                        $db->exec($sql);
                    }
                ?>
            <div id="mail">
            <div class="right">
                <img src="email.png" class="icon">
                <p class = "box">Email</p>
                <div class="gmail">
                    <p>b094020022@g-mail.nsysu.edu.tw</p>
                    <p>b104020001@g-mail.nsysu.edu.tw</p>
                    <p>b104020002@g-mail.nsysu.edu.tw</p>
                    <p>b104020057@g-mail.nsysu.edu.tw</p>
                </div>
            </div>
            <!-- frame for comment block -->
            <div class="Comment_box">
                <div class="comment_icon"><p class="text" >MAKE CONTACT</p>
                    <img src="blogging.png" class="icon2">
                </div>
                <p id="message">Successfully submitted! Thanks for your precious feedback!</p>
                <p>Name<input id="nameTag" type="text" name="name" placeholder="Your Name"></p>
                <p>Email<input id="mailTag" type="text" name="email" placeholder="Email"> </p>
                <p>Contact No.<input id="noTag" type="text" name="phonenumber" placeholder="Contact Number"></p>
                <p>Comments</p>
                <textarea id="comTag" rows="7" cols="50" name="comments" placeholder="Comments"></textarea><br>
                <div class= "centerbutton">
                    <input class="clickbut" type="submit" name="submit" value="Submit"/>
                    <a id="mailTo"></a>
                </div>
            </div>
        </div>
    <?php } ?>
</body>
</html>