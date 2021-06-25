<?php
  session_start();
  if(!isset($_SESSION['valid']))
  {
    header('location: index.html');
    die();
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
      <title>Weather Application</title>
      <style type="text/css">
        body
        {
          background-color: white;
        }
        .bg
        {
          background-repeat: round;
          height: 500px;
          position: fixed;
          width: 1500px;
        }
        .container
        {
              width: 50%;
              height: 350px;
              margin-top: 100px;
              margin-left: 400px;
              margin-right: 400px;
        }
        .header
        {
              height: 100px;
              background-color: orange;
              border-top-left-radius: 20px;
              border-top-right-radius: 20px;
              text-align: center;
              position: relative;
        }
        .search
        {
            position: absolute;
            margin-top: 35px;
            margin-left: 250px;
        }
        #search-txt 
        {
                color: black;
                height:35px;
                border-radius: 12px;
                border-style:none;
                text-align:center;
                font-size: 20px;
                align-self: center;
        }
        #search-btn 
        {
                color: #eee;
                font-size: 18px;
        }
        #main 
        {
          width: 100%;
          height: 100%;
          position: relative;
        }
        .city-icon  
        {
                height: 100%;
                width: 100%;
                border-bottom-left-radius: 20px;
                border-bottom-right-radius: 20px;
                background-color: #FFC107;
        }
        .city-icon-holder 
        {
                position:absolute;
                left: 18%;
                top: 30%;   
        }
        #city-name 
        {
                font-family: "candara";
                font-size: 40px;
                font-weight: bold;
                color: white;
        }
        #icon 
        {
          width:100%;
        }
        .temperature 
        {
                position: absolute;
                left: 50%;
                top:0%;
                height: 50%;
                width: 50%;
                background-color: #9C27B0;
                text-align: center;
        }
        .humidity 
        {
                position:absolute;
                height: 50%;
                width: 50%;
                left:50%;
                top:50%;
                border-bottom-right-radius: 20px;
                background-color: #E91E63; 
        }
        #temp, #humidity-div  
        {
                font-family: "candara";
                font-weight: bold;
                font-size: 50px;
                color: white;
                position: absolute;
                left: 40%;
                top: 30%;
                text-align: center;
        }
      </style>
</head>
<body background="f7.jpg" class="bg">
    <br></br>
    <h4><a style="color: white;font-size: 20px;left: 4500px;" href="logout.php">LOGOUT</a></h4>
    <div class="container">
        <header class="header">
          <div class="search">
                <input type="text" placeholder="Enter City Name" id="search-txt">
                <a id="search-btn"><i class="fas fa-search"></i></a>
          </div>
        </header>
      <main id="main">
          <div class="city-icon">
                <div class="city-icon-holder">
                    <div id="city-name" style="font-family:candara;font-size: 40px;">City</div>
                    <img src="" id="icon">
                </div>
          </div>
          <div class="temperature">
                    <div id="temp" style="font-family:candara;font-size: 30px; align-self: center; padding-top: 10px;">Temp.</div>
          </div>
          <div class="humidity">
                    <div id="humidity-div" style="font-family:candara;font-size: 30px; align-self: center;padding-top: 10px;">Humid.</div>
          </div>
      </main>
    </div>
  <script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>
  <script  src="main.js"></script>
</body>
</html>