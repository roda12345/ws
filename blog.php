<!DOCTYPE html>
<html>
<head>
    <title>Roda's Blog</title>
     <!-- =========css & script=============== -->
     <link rel="stylesheet" href="./assets/css/style2.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/materializecss.min.css">
    <link rel="stylesheet" href="./assets/css/materializecss-icons.css">
    <script src="./assets/js/materialize-css.min.js"></script>
    <script src="./assets/js/scrip2"></script>
</head>

<script>
        function commentSubmit(){
            if(form1.name.value == '' && form1.comments.value == ''){ //exit if one of the field is blank
                alert('Enter your message !');
            return;
            }
            var name = form1.name.value;
            var comments = form1.comments.value;
            var xmlhttp = new XMLHttpRequest(); //http request instance
    
            xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
            if(xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
            }
        }
        xmlhttp.open('GET', 'ins.php?name='+name+'&comments='+comments, true); //open and send http request
        xmlhttp.send();
    }

    $(document).ready(function(e) {
        $.ajaxSetup({cache:false});
        setInterval(function() {$('#comment_logs').load('logs.php');}, 2000);
    });
    
</script>
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
    <h1 id="s1">WELCOME TO MY BLOG</h1>
        <center><img src="./assets/img/me.jpg" alt="my pic." width="200" height="200" title="my pic."></center>
            <h3 id="e1">
    <pre id="e1">
              
        Hi, Im Roda fe Landiza. I live in Brgy. Minsapinit Gingoog City. I am a BSIT III student.
        My dream in life is to help my family and to become the President of the Philippines. 
        I am Single for 3years now. Im looking for a partner, that is single and ready to mingle!
        just visit my profile for further information! Thank you, and God Bless! 
        See you, when I see you :)!!
    </pre>
    </div>
</main>
<div style="background-color:#FFF;width:50%;padding:10px;margin:20px;margin-left:auto;margin-right:auto;">
    <div class="page_content">
    	Comment Here....
    </div>	
        <div id="comment_input">
            <form name="form1">
        	    <span style="color:black;"><input type="text" name="name" placeholder="Name..."/></span><br><br>
                <textarea name="comments"  style="color:black;" placeholder="Leave Comments Here..." style="width:610px; height:100px;"></textarea><br><br>
                <a href="#" onClick="commentSubmit()" class="button">Post</a><br>
            </form>
        </div>
        <div id="comment_logs">
    	    Loading comments...
        </div>
    </div>

    <footer class="page-footer"  style="background-color:#4e342e;">            
        <div class="footer-copyright">
            <div class="container">
                <center>All Rights Reserved 2019 © Roda Fe Landiza</center>
            </div>        
    </footer>
    <script src="./assets/js/materialize-css.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems);
    });
    </script>
            
</body>
</html>