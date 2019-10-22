<?php
require('./config.php');
session_start();
if(!isset($_SESSION['login'])){
    header("location: login.php");
}

if(isset($_POST['add_user'])){
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($conn,"INSERT INTO tbl_login (`user`, `passwd`) VALUES ('$username','$password')");
header("location: user.php");
}

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $sql = mysqli_query($conn,"DELETE FROM tbl_login WHERE id = '$id'");
    header("location: user.php");
}

$username = '';
$password = '';
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = mysqli_query($conn,"SELECT * FROM tbl_login WHERE id = '$id'");

if ($sql->num_rows>0){
$row1 = $sql->fetch_assoc();
$username = $row1['user'];
$password = $row1['passwd'];
}
}

if(isset($_POST['edit_user'])){
    $id = $_GET['edit'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "UPDATE `tbl_login` SET `user`='$username',`passwd`='$password' WHERE `id`= '$id'";
    mysqli_query($conn,$sql);
    header("location: user.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Online -->
    <!-- Compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    <!-- Offline -->
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
                          <!-- Online -->
    <!-- Compiled and minified JavaScript -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->

</head>
<body>
<header>
   <nav>
        <div class="nav-wrapper grey darken-3">
            <a href="#!" class="brand-logo right">Logo</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down">
                    <li><a href="index.php"><i class="material-icons">home</i>Home</a></li>
                    <li><a href="user.php">USER</a></li>
                    <li><a href="logout.php">Logout?</a></li>
                </ul>
        </div>
    </nav>

   </header>
        <div class="page-wrapper" >
    <table>
        <thead>
          <tr>
              <th>No</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Middle Name</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
               
                <td>
                <a data-did="{{ data.emp_id }}" class="btnDel btn-floating btn-medium waves-effect waves-light red btn modal-trigger" href="#delE"><i class="material-icons left">delete</i></a>
                <a data-uid="{{ data.emp_id }}" data-mn="{{ data.m_name }}" data-fn="{{ data.f_name }}" data-ln="{{ data.l_name }}" class="btnUp btn-floating btn-medium waves-effect waves-light orange btn modal-trigger" href="#upE"><i class="material-icons left">edit</i></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
        <tr>
              
         <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">INSERT</a>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>USER</h4>

    

    <div class="input-field col s6">
                <input id="ifn" name="ifn" type="text" class="validate">
                <label class="active" for="ifn">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="imn" name="imn" type="text" class="validate">
                <label for="imn">Middle Name</label>
            </div>
            <div class="input-field col s6">
                <input id="iln" name="iln" type="text" class="validate">
                <label for="iln">Last Name</label>
            </div>
    
  </div>
  <div class="modal-footer">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat">AGREE</a>
  

  

  </div>
</div>    


        </tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
        <tr>
        </tfoot>
      </table>

 
      </div>
 <!-- Modal Structure -->
<div id="delE" class="modal">
    <form action="{{ url_for('delete') }}" method="post">
    <div class="modal-content">
        <h3 class="red-text"><i class="medium material-icons red-text left">delete</i>Delete</h3>
        <input id="dfn" name="did" type="number" class="validate" hidden>
        <p>Are you sure you want to delete this employee?</p>
    </div>
    <div class="modal-footer">
        <button class="btn waves-effect waves-white red white-text btn-flat">Yes</button>
        <a href="#!" class="modal-close waves-effect waves-white green white-text btn-flat">No</a>
    </div>
    </form>
</div>

 <!-- Modal Structure -->
 <div id="upE" class="modal">
    <form action="{{ url_for('update') }}" method="post">
    <div class="modal-content">
        <h3 class="orange-text"><i class="medium material-icons left orange-text">account_circle</i>Employee</h3>
        <div class="input-field col s6">
            <input id="uid" name="uid" type="number" class="validate" hidden>
            <input id="fn" name="fn" type="text" class="validate">
            <label for="fn">First Name</label>
        </div>
        <div class="input-field col s6">
            <input id="mn" name="mn" type="text" class="validate">
            <label for="mn">Middle Name</label>
        </div>
        <div class="input-field col s6">
            <input id="ln" name="ln" type="text" class="validate">
            <label for="ln">Last Name</label>
        </div>
    </div>
    <div class="modal-footer">
            <button class="btn waves-effect waves-white orange white-text btn-flat">Update</button>
            <a href="#!" class="modal-close waves-effect waves-white green white-text btn-flat">Cancel</a>
    </div>
    </form>
</div>

<!-- Modal Structure -->

<div id="inE" class="modal">
    <form action="{{ url_for('insert') }}" method="post">
        <div class="modal-content">
            <h3 class="blue-text"><i class="medium material-icons left blue-text">person_add</i>Employee</h3>
            
            <div class="input-field col s6">
                <input id="ifn" name="ifn" type="text" class="validate">
                <label class="active" for="ifn">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="imn" name="imn" type="text" class="validate">
                <label for="imn">Middle Name</label>
            </div>
            <div class="input-field col s6">
                <input id="iln" name="iln" type="text" class="validate">
                <label for="iln">Last Name</label>
            </div>
        </div>
        <div class="modal-footer">
                <button class="btn waves-effect waves-white blue white-text btn-flat">Insert</button>
                <a href="#!" class="modal-close waves-effect waves-white orange white-text btn-flat">Cancel</a>
        </div>
    </form>
</div>

    </div>          
    <footer class="page-footer black">
            <div class="footer-copyright">
                <div class="container">
                <center>All Rights Reserved 2019 ECV © WS101</center>
            </div>
        </footer>
    <!-- Offline -->
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
    M.AutoInit();
    </script>
</body>
</html>