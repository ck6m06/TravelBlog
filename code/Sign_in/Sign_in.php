<!-- sign-in interface -->

<?php
    include("link.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sing in</title>
        <link rel="stylesheet" type="text/css" href="Sign_in.css">
    </head>
    <body>
        <div class="top-photo">
            <img class="tips-photo" src="DSC_3277.JPG" alt="tips-photo">
            <div class="photo-text">Sign in</div>
        </div>
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
                    <a class="nav-link" href="../Contact_us/ContactUs.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Sign_in.php">Sign in</a>
                </li>
            </ul>
            <!-- </div> -->
        </div>
        <!-- <div class="content">
            <form action="Sign_in2.php" name="form" method="POST">
                <div class="sign-in">Sign in</div></br>
                <label>Status: </label>
                <select name="status">
                    <option value=""></option>
                    <option value="manager">Manager</option>
                    <option value="visitor">Visitor</option>
                </select></br></br>
                <label>Username: </label>
                <input type="text" name="username"></br></br>
                <lbel>Password: </lbel>
                <input type="password" name="password"></br></br>
                <input type="submit" name="submit" value="Sign in"></br></br>
            </form>
        </div> -->
        <?php 
            $Status = null;
            $Username = null;
            $Password = null;
            if($_SERVER["REQUEST_METHOD"] == "GET"){
        ?>
                <div class="content">
                    <form action="" name="form" method="POST">
                        <div class="sign-in">Sign in</div></br>
                        <label>Status: </label>
                        <select name="status">
                            <option value=""></option>
                            <option value="manager">Manager</option>
                            <!-- <option value="visitor">Visitor</option> -->
                        </select></br></br>
                        <label>Username: </label>
                        <input type="text" name="username"></br></br>
                        <label>Password: </label>
                        <input type="password" name="password"></br></br>
                        <input class="button" type="submit" name="submit" value="Sign in"></br></br>
                    </form>
                </div>
        <?php      
            }elseif($_SERVER["REQUEST_METHOD"] == "POST"){
        ?>
                <!-- link.php -->
                <?php
                if(isset($_POST["submit"])){

                    $Status = $_POST["status"];
                    $Username = $_POST["username"];
                    $Password = $_POST["password"];
                    $authenticated = false; //認證
                    
                    $Status = $db->quote($Status);
                    $Username = $db->quote($Username);
                    $Password = $db->quote($Password);

                    $rows = $db->query("SELECT * FROM users WHERE Statu=$Status AND Username=$Username AND Passwords=$Password");
                    $authenticated = false; //認證
                    
                    if($rows->rowCount() == 1){
                        $authenticated = true;
                        setcookie("user", $Username, time() + 60);
                        setcookie("pass", $Password, time() + 60);
                    }
                    if($authenticated){
                        header("Location:../Posts/controlcenter.php");
                    }
                    else if(!$authenticated){
                ?>
                        <form action="" name="form" method="POST">
                            <div class="sign-in">Sign in</div></br>
                            <label>Status: </label>
                            <select name="status">
                                <option value=""></option>
                                <option value="manager">Manager</option>

                            </select></br></br>
                            <label>Username: </label>
                            <input type="text" name="username"></br></br>
                            <label>Password: </label>
                            <input type="password" name="password"></br></br>
                            <input class="button"type="submit" name="submit" value="Sign in"></br></br>
                            <div class="wrong">Wrong username or password! Please try again!</div>
                        </form>
                <?php
                    }
                } 
                ?>
        <?php
            }
        ?>

    </body>
</html>
<!-- <option value="visitor">Visitor</option> -->








