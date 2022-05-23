<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Matarial icon-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
		rel="stylesheet">
		<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
		<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> -->
		<!-- <script src="js/bootstrap.min.js"></script> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <title>Header</title>   
</head>
<body>
    <nav class="myNav">
        <div class="myLogo">My Logo</div>
        <!-- toggle menu -->
        <span class="tMenu" onclick="openNav()">&#9776</span>
        <div class="navLinks">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Collection</a></li>
            </ul>
        </div>
    </nav>
    <div class="sideNav" id="sideNav">
        <a href="#" class="closebtn" onclick="closeNave()">&#10006</a>
        <a href="">Home</a>
        <a href="">Explore</a>
        <a href="">About</a>
        <a href="">Collection</a>
    </div>
   <i class="material-icons">face</i> 


   <script>
       function openNav(){
           document.getElementById("sideNav").style.width = "60%"; 
       }
       function closeNave(){
           document.getElementById("sideNav").style.width = "0%"; 
       }
   </script>
</body>
</html>