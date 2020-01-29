<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  
<head>

<meta charset="utf-8">

 
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
  

 <div class="container-fluid">
    
<div class="row">
   <!-------------side nav bar coloumn start--------->
  <div class="col-lg-1">
    
      <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <span><a style="color: black;" href="index.html"><i class="fa fa-home"></i>&nbsp;Home</a></span>
          <span><a style="color: black;" href="index.html"><i class="fa fa-clock-o"></i>&nbsp;Latest</a></span>
          <span><a style="color: black;" href="index.html"><i class="fa fa-paper-plane"></i>&nbsp;Trends</a></span>
         
<hr>     
<h5>My Collections</h5>   
         <a href="#about">Music</a>
          <a href="#services">Games</a>
          <a href="#clients">Cartoons</a>
          <a href="#contact">Movie</a>
          <a href="#contact">Sports</a>
         
          <a href="#contact">Fashion</a>
          <hr>

        

        </div>
  
        <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "230px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
            }
            </script>
        
  
  



  
  </div>

  <!--------side navigation bar completed------------->
   <!----------video blog container start-------------->
  <div class="col-lg-11">
<!-------------search barcol start---------->
<div class="row">
 
    <span style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776; </span>  <img src="images/logo.png" alt="logo"/>
    <form class="example" action="" style=" width:600px; margin-top: 8px;">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>

      &nbsp;
      <a href="Registration.php" class="button"><b><i class="fa fa-user-circle-o"></i>&nbsp;SIGN UP</b></a>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="login.php" class="button"><b><i class="fa fa-user-circle-o"></i>&nbsp;SIGN IN</b></a>
     </div>
<!-------------search bar row completed----------><br><br>
<div class="container">
  <h3>Recent</h3><br>
  <div class="row">
    <div class="col-lg-3">
   
        <video width="600" controls id="res">
            <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
            
            Your browser does not support HTML5 video.
            </video>
            <h5>Title</h5>
    </div>
    <div class="col-lg-3">
        <video width="600" controls id="res">
            <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
            
            Your browser does not support HTML5 video.
            </video>
            <h5>Title</h5>
      
      </div>
      <div class="col-lg-3">
          <video width="600" controls id="res">
              <source src="videos/v3.mp4" type="video/mp4" id="res">
              
              Your browser does not support HTML5 video.
              </video>
              <h5>Title</h5>
              
      
        </div>
        <div class="col-lg-3">
            <video width="600" controls id="res">
             
                <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                
                Your browser does not support HTML5 video.
                </video>
                <h5>Title</h5>
      
          </div>
  </div><br>
  <!--recent row1 completed-->
  <div class="row">
      <div class="col-lg-3">
     
          <video width="600" controls id="res">
              <source src="videos/v3.mp4" type="video/mp4" id="res">
              
              Your browser does not support HTML5 video.
              </video>
              <h5>Title</h5>
      </div>
      <div class="col-lg-3">
          <video width="600" controls id="res">
              <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
              
              Your browser does not support HTML5 video.
              </video>
              <h5>Title</h5>
        
        </div>
        <div class="col-lg-3">
            <video width="600" controls id="res">
                <source src="videos/v3.mp4" type="video/mp4" id="res">
                
                Your browser does not support HTML5 video.
                </video>
                <h5>Title</h5>
                
          </div>
          <div class="col-lg-3">
              <video width="600" controls id="res">
                  <source src="videos/video3.mp4" type="video/mp4" id="res">
                  
                  Your browser does not support HTML5 video.
                  </video>
                   <h5>Title</h5>
        
            </div>
    </div>
    <!--------recent video complete-->
    <!---trend video start--><hr class="new1">

    <h3>Trends</h3><br>
    <div class="row">
      <div class="col-lg-3">
     
          <video width="600" controls id="res">
              <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
              
              Your browser does not support HTML5 video.
              </video>
              <h5>Title</h5>
      </div>
      <div class="col-lg-3">
          <video width="600" controls id="res">
              <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
              
              Your browser does not support HTML5 video.
              </video>
              <h5>Title</h5>
        
        </div>
        <div class="col-lg-3">
            <video width="600" controls id="res">
                <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                
                Your browser does not support HTML5 video.
                </video>
                <h5>Title</h5>
                
        
          </div>
          <div class="col-lg-3">
              <video width="600" controls id="res">
                  <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                  
                  Your browser does not support HTML5 video.
                  </video>
                  <h5>Title</h5>
        
            </div>
    </div><br>
    <!--recent row1 completed-->
    <div class="row">
        <div class="col-lg-3">
       
            <video width="600" controls id="res">
                <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                
                Your browser does not support HTML5 video.
                </video>
                <h5>Title</h5>
        </div>
        <div class="col-lg-3">
            <video width="600" controls id="res">
                <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                
                Your browser does not support HTML5 video.
                </video>
                <h5>Title</h5>
          
          </div>
          <div class="col-lg-3">
              <video width="600" controls id="res">
                  <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                  
                  Your browser does not support HTML5 video.
                  </video>
                  <h5>Title</h5>
                  
          
            </div>
            <div class="col-lg-3">
                <video width="600" controls id="res">
                    <source src="videos/mov_bbb (1).mp4" type="video/mp4" id="res">
                    
                    Your browser does not support HTML5 video.
                    </video>
                     <h5>Title</h5>
          
              </div>
      </div>








      <!---trend video start-->
</div>
<!--container complete for all video blog -->
</div>
<!----------only video container end  col-sm-11 with search bar-------------->

  </div>
 <!----row completed both 11/1-->  
</div>

<!---------main container-fluid end-->
   
</body>
</html> 
