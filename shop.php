<!DOCTYPE html>
<html>
<head>
    <title>Roda's Shop</title>
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

    
  <h4 id="a1"> Welcome To RFL Shop</h4>

  <!-- <pre>
<h3>
       <img src="./assets/img/1.jpg" width="300" height="300">        <img src="./assets/img/2.jpg" width="300" height="300">     <img src="./assets/img/3.jpg" width="300" height="300">
            Price:P450.00                         Price:P30,000.00                              Price:P20,000.00
            Name: All in                  Name: Bag                       Name: Shoe
</h3>  
                    <button type="button">BUY!</button>                                          <button type="button">BUY!</button>                                                  <button type="button">BUY!</button> 

   -->

<div class="container">
                    <?php echo "<table>"; 
require('./config.php');
$sql = mysqli_query($conn,"SELECT * FROM tbl_shop");

if ($sql->num_rows>0){
// output data of each row
while($row = $sql->fetch_assoc()) {
echo  "<tr><td>" . $row["Pro_name"] . "</td><td>". $row["Pro_Price"]. "</td>". "</td><td><img src=". $row["Pro_img"]. " width='300' height='300'></td>";
// echo "<td>
    //     <a class='btn' href='user.php?edit=$row[ID]'>EDIT</a>
    //     <a class='btn' href='user.php?del=$row[ID]'>DELETE</a>
    //   </td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</table>
                    </div>

</body>
</html>