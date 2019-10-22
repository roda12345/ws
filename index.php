<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
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
    
 
    <h1 id="q1">WELCOME TO MY HTML PAGE</h1>
    <H2 id="q1"> THE LIGHT EMITS THE SUN, TO BRING BRIGTHNESS TO THE WORLD. </H2>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
    </script>
</body>
</html>