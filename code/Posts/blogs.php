<!DOCTYPE html>
    <head>
        <title>Traveling Blog</title>
    
<style>
    @media only screen and (min-width: 375px) {
    /* +++++ */
        body{
            margin:0;
        }

        .whole {
            margin: 0px;
            background-color: rgb(240, 240, 240);
        }
/* 
        #preloader {
            transition-duration: 3s;
            position: fixed;
            background-color: rgb(5, 41, 53);
            width: 100%;
            height: 100%;
            opacity: 0;
            animation-name: animate;
            animation-duration: 3s;
            z-index: 100;
            margin: 0px;
            padding: 0px;
        } */

        #preloader p {
            text-align: center;
            font-size: 100px;
            color: white;
            font-weight: bold;
            z-index: -1;
            position: fixed;
            top: 30%;
            left: 30%;
        }

        /* https://www.php.cn/css-tutorial-486030.html */
        @keyframes animate {
            0%{opacity:1;}
            99%{opacity:1;}
            100%{opacity:0;}
        }

        .top {
            text-align: center;
            /* margin: 0% 0% 2% 0%; */
            margin: 0% 0% 0% 0%;
        }

        .top img {
            width: 100%;
            /* height: 650px; */
            /* height: 550px; */
            height: 600px;
            opacity: 0.8;
            z-index: -1;

            /* +++++ */
            display: block;
        }

        .top span {
            position: absolute;
            top: 30%;
            left: 45%;
            color: white;
            font-size: 100px;
            font-weight: bold;
            z-index: 1;
            border:solid;
            padding:1.5%;
        }

        .flex-container {
            flex-wrap: wrap;
            display: flex;
            justify-content: center;
        }

        /* +++++ */
        .navbar{
            position:sticky;
            top:0;
        }
        ul.nav-menu{
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
        
        li.nav-item{
            list-style: none;
            font-size:20px;
            padding-right:25px;
        }
        .nav-item > a.nav-link{
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
        /* +++++ */
        
        .img-info {
            padding-top: 25px;
            padding-right: 20px;
            padding-left: 20px;
            margin-right: 30px;
            margin-top: 20px;
            background-color: white;
            box-shadow: 12px 12px 7px rgb(75, 75, 75); /* http://blog.shihshih.com/drop-shadow-vs-box-shadow/ */
            border-radius: 1%;
        }

        .blog img {
            display: block;
            height: 320px;
            width: 290px;
        }

        .description {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .blog {
            text-decoration: none;
        }

        a:hover, a:visited, a:active, a:link {
            text-decoration: none;
            color: black;
        }

        .img-info:hover {
            text-decoration: none;
            color: black;
            transform: scale(1.05);
            transition: 0.5s;
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

        .img-info {
            display: none;
            visibility: hidden;
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

        #button-section {
            display: flex;
            flex-direction: column;
            padding: 5% 40%;
        }

        #load-more {
            font-family:serif;
            font-weight: bold;
            color:#3d5a80;
            padding-top: 8%;
            padding-bottom: 8%;
            background-color: lightblue;
            border: 0px;
            font-size: 20px;
            border-radius: 15px;
        }

        #load-more:hover {
            cursor: pointer;
            transform: scale(1.05);
            transition: 0.5s;
            /* opacity: 0.7; */
            color:white;
            background-color: #3d5a80;
        }

        #no-result {
            text-align: center;
            font-size: 24px;
            color: #3d5a80;
        }
    }

    @media only screen and (max-width: 1366px) {
        /* +++++ */
        body{
            margin:0;
        }
        .top span {
            position: absolute;
            top: 250px;
            left: 400px;
        }
    }
</style>

<body>

    <div class="whole">
        <div class="top">
            <span>Blogs</span>
            <img src="homepage.JPG" alt="no pic">
        </div>
        <!-- +++++ -->
        <div class="navbar">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link" href="../index.html" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../About_us/About_us.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.php">Blogs</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="../Tips/tips.php">Tips</a>
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
        <!-- +++++ -->
        <?php //if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
        <?php
            $db = new PDO("mysql:dbname=try", "root", "");

            $locations = $db->query("SELECT p.Location FROM main_page mp JOIN posts p ON mp.Place=p.Location;");
        ?>
        <div class="places">
            <div class="flex-container">
                <?php foreach ($locations as $location) { ?>
                    <?php
                        $post_link = $db->query("SELECT Blog FROM main_page WHERE Place='$location[Location]';");
                        $post_cover = $db->query("SELECT cover_name FROM main_page WHERE Place='$location[Location]';");
                    ?>
                    <div class="img-info">
                        <a class="blog" href="<?php print $post_link->fetch()['Blog'];?>">
                            <img src="<?php print $post_cover->fetch()['cover_name'];?>" alt="no pic">
                            <p class="description"><?php print $location['Location'];?></p>
                        </a>
                    </div>
                <?php } ?>

                <!-- <p class="button-section"><button id="load-more" value="LOAD MORE" onclick="loadMore();">LOAD MORE</button></p> -->
            </div>
        </div>
    
        <p id="button-section">
            <button id="load-more" value="LOAD MORE" onclick="loadMore();">LOAD MORE</button>
        </p>

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
    </div>

    <script>
       
    var count = document.getElementsByClassName('img-info').length;
    var default_case = 0;
    if (default_case == 0) {
        for (var i = 0; i < 5; i++) {
            document.getElementsByClassName('img-info')[i].style.display = "block";
            document.getElementsByClassName('img-info')[i].style.visibility = "visible";
        }
    }

    var j = 5;
    function loadMore() {
        default_case += 1;
        var i = 0;

        for (i = 0; i < 5; i++) {
            document.getElementsByClassName('img-info')[i + j].style.display = "block";
            document.getElementsByClassName('img-info')[i + j].style.visibility = "visible";

            if (count == (i + j + 1)) {
                document.getElementById('load-more').style.display = "none"; //no more post
                var a = document.getElementById('button-section')
                var ele1 = document.createElement('p');
                ele1.setAttribute("id", "no-result");
                var txt1 = document.createTextNode('No more posts');
                ele1.appendChild(txt1);
                a.appendChild(ele1);
            }
            if(i == 4){
                j = j + 5 * default_case;
            }
        }
        
    };

</script>
</body>

</html>