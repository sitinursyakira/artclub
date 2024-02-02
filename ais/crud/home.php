<!DOCTYPE html>
<html>
<head>
<title>Art Club Information System</title>
<link rel="icon" type="image/x-icon" href="images/logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">


<!-- Top container -->
<div class="w3-bar w3-top w3-pink w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Art Club</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/logo.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding w3-pink"><i class="fa fa-home fa-fw"></i>  Home</a>
    <a href="club.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Club</a>
    <a href="membership.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Memberships</a>
    <a href="activity.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Activities</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-share-alt fa-fw"></i>  Contact</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Sign Out</a>
   <br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->

  
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-pale-red w3-hover-pink w3-padding-16">
        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Club</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-pale-red w3-hover-pink w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Membership</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-pale-red w3-hover-pink w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Activities</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-pale-red w3-hover-pink w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
        </div>
        <div class="w3-clear"></div>
        <h4>Contact</h4>
      </div>
    </div>
    
  </div>

<br>
<br>
<br>
<br>

<h4>If you have any problem, you can reach these person-in-charge;</h4>
<br>
<!-- Advisor -->
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="images/kira.jpeg" alt="Syakira" width="200" height="200">
        <div class="w3-container">
          <h3>Ms Siti Nursyakira</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Phone No: 017-727 3121</p>
          <p>Room No: D105</p>

        </div>
      </div>

    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="images/amalin.jpeg" alt="Amalin" width="200" height="200">
        <div class="w3-container">
          <h3>Ms Amalin Eliana</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Phone No: 013-600 3267</p>
          <p>Room No: D101</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="images/adibah.jpeg" alt="Adibah" width="200" height="200">
        <div class="w3-container">
          <h3>Ms Adibah Maisarah</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Phone No: 011-5870 2365</p>
          <p>Room No: D100</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>




  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey w3-right">
    <p>Powered by Art Club</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
</body>
</html>
