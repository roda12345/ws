<?php session_start();
if (!isset($_SESSION['login'])) {
    header("location: login.php");
}
include 'config.php';

if(isset($_GET['del'])){
  $id = $_GET['del'];
  $sql = mysqli_query($conn,"DELETE FROM tbl_login WHERE id = '$id'");
  header("location: welcome.php");
}

if(isset($_GET['edit'])){
  $id = $_GET['edit'];
  $sql = mysqli_query($conn,"SELECT * FROM tbl_login WHERE id = '$id'");
  $row= mysqli_fetch_array($sql);
}

if(isset($_POST['edit_user'])){
  $id = $_GET['edit'];
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $sql = "UPDATE `tbl_login` SET `username`='$username',`passwd`='$password' WHERE `id`= '$id'";
  mysqli_query($conn,$sql);
  header("location: welcome.php");
}

if(isset($_POST['reg'])){
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $sql = mysqli_query($conn,"INSERT INTO tbl_login (`username`, `passwd`) VALUES ('$username','$password')");
  header("location: welcome.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome page</title>
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
      <a class="brand-logo right dropdown-trig  ger " href="logout.php" data-target='dropdown1'>Log out</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="about.php"><i class="material-icons">info_outline</i></a></li>
          <li><a href="blog.php"><i class="material-icons">account_circle</i></a></li>
          <li><a href="shop.php"><i class="material-icons">shopping_cart</i></a></li>
      </ul>
    </div>
  </nav> 
<center><h1 class="q1">Welcome  <?php echo $_SESSION['uname']; ?></h1><br>
  <div class="container">
  <b>
  <table class="purple-text text-darken-3" style="margin-top: 28px; width:70%;">
    <tr>
    <form action="" method="post">
    <td colspan='2'><input type="text" name="user" placeholder="USERNAME"></td>
    <td ><input type="text" name = "pass" placeholder="PASSWORD"></td>
    <td >
    
    <?php
        if(isset($_GET['edit'])){
            
            echo '<button class="btn blue" name="edit_user">EDIT</button>';
        }else{
            echo '<button class="btn blue" name="reg">REGISTER</button>&nbsp;&nbsp;';
          
        }
    ?>
    </td>
    
    </form>
    </tr>
    <th>No.</th>
    <th>Username</th>
    <th>Password</th>
    <th>Opption.</th>
    <?php $result = mysqli_query($conn,"SELECT id,username,passwd FROM tbl_login") ;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td >".$row['id']."</td>"."<td class='q1'>".$row['username']."</td>"."<td class='q1'>".$row['passwd']."</td>"."<td>
        <a href='welcome.php?edit=$row[id]' type='btn' name='edit' class='waves-effect red darken-3 waves-light btn'>Edit</a></td>"."<td><a href='welcome.php?del=$row[id]' type='btn' name='delete' class='waves-effect pink lighten-1 waves-light btn'>Delete</a></td>";
    }
    ?>
    </table>
    
    </b></div>
</body>
</html>
