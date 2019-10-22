<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
        <!-- =========css & script=============== -->
    <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src="./assets/js/materialize-css.min.js"></script>
    <script src="./assets/js/scrip2"></script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a class="brand-logo right dropdown-trig  ger " href="login.php" data-target='dropdown1'>Log in</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons">home</i></a></li>
        <li><a href="about.php"><i class="material-icons">info_outline</i></a></li>
        <li><a href="blog.php"><i class="material-icons">account_circle</i></a></li>
        <li><a href="shop.php"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </div>
  </nav>
    <center><h1>WELCOME TO MY PHP</h1></center>
<br><br><br>
<div class="container">
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <form action="" method="post">
                        <input type="text" name="uname" placeholder="Username"><br>

                        <input type="password" name="password" placeholder="Password"><br>

                        <button name="login" type="submit">Log in</button>
                    </form>        
                    <?php 
                    if (isset($_POST['login'])) {
                        $uname = $_POST['uname'];
                        $pass = $_POST['password'];
                        $query = mysqli_query($conn,"SELECT username,passwd FROM tbl_login WHERE username = '$uname' AND passwd = '$pass'");
                        if($query->num_rows>0){
                            session_start();
                            $_SESSION['uname']=$uname;
                            $_SESSION['login']=true;
                            header("location: welcome.php");
                        }else {
                            echo "Invalid password/user!!";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>    
    </div>
</div>


</body>
</html>