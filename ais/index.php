<?php
include "db_conn.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>Welcome to Art Club</title>
<link rel="icon" type="image/x-icon" href="image/logo.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>

    
  

body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-pink w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <img src="image/logo.png" width="100">
    <h3 class="w3-padding-54"><b>Welcome to<br>Art<br>Club (AC)</b></h3>
  </div>
  <br>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About Us</a> 
    <a href="#committe" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">AC Committee</a> 
    <a href="#membership" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Membership</a> 
    <a href="#activities" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Activities</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
 <a href="crud/index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Administrator</a>

  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-pink w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-pink w3-margin-right" onclick="w3_open()">☰</a>
  <span>AC, UiTMCK</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->

  <div class="w3-container" style="margin-top:80px" id="showcase">
    
    <h1 class="w3-xxxlarge w3-text-pink"><b>Home</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
  </div>
  
  <p align="center">Welcome to Art Club!</p>
    <p align="justify">At Art Club, we believe that art has the power to inspire, connect, and transform. Our club is a vibrant community of passionate artists and art enthusiasts who come together to celebrate creativity in all its forms.
    </p>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- About Us -->
  <div class="w3-container" id="about" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-pink"><b>About Us</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
    
<div class="w3-bar w3-pink">
  <button class="w3-bar-item w3-button" onclick="openCity('Mission Statement')">Mission Statement</button>
  <button class="w3-bar-item w3-button" onclick="openCity('What We Offer')">What We Offer</button>
  <button class="w3-bar-item w3-button" onclick="openCity('Our Values')">Our Values</button>
</div>

<div id="Mission Statement" class="w3-container city">
  <h2>Mission:</h2>
  <p align="justify">Our mission is to foster a supportive and inclusive environment for individuals of all skill levels to explore and express their artistic talents. We aim to cultivate a love for art, encourage collaboration, and provide a platform for members to share their unique perspectives through various artistic mediums.</p>
</div>

<div id="What We Offer" class="w3-container city" style="display:none">
  <h2>We offer:</h2>
  <p align="justify">* Diverse Artistic Exploration: Whether you're a seasoned artist or just starting your creative journey, Art Club offers a space for you to experiment with different artistic styles and techniques.

    <br><br>* Workshops and Events: We organize regular workshops, demonstrations, and art-related events to enhance your skills, broaden your artistic horizons, and connect with fellow members who share your passion.

    <br><br>* Community Engagement: Art Club actively engages with the community through outreach programs, art exhibitions, and collaborative projects. We believe in the power of art to make a positive impact on society, and we strive to contribute to our local community through our creative endeavors.</p> 
</div>

  <div id="Our Values" class="w3-container city" style="display:none">
  <h2>Our values:</h2>
  <p align="justify">* Inclusivity: We welcome individuals of all backgrounds, experiences, and artistic interests. Art Club is a space where diversity is celebrated, and everyone's unique perspective is valued.

    <br><br>* Creativity: We embrace creativity in all its forms, from traditional painting and drawing to digital art, sculpture, and beyond. Our club is a hub for those who seek to push artistic boundaries and think outside the canvas.

    <br><br>* Supportive Community: Art Club is more than just a club; it's a supportive community where members uplift and inspire one another. Whether you're looking for constructive feedback or just want to share your latest masterpiece, you'll find a welcoming and encouraging atmosphere here.</p>
</div>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

  
  <!-- AC Committe -->
  <div class="w3-container" id="committe" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-pink"><b>AC Committe</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
    <p>The best team in the world.</p>
    <p>Art Club welcomes individuals who are passionate about the arts to join our committee. If you have a love for creativity and a desire to contribute to the artistic community, we invite you to get involved and make a difference.
    </p>
    <p><b>Our committe have great experience</b>:</p>
  </div>

  <!-- Advisor -->
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="image/kira.jpeg" alt="Syakira" width="200" height="200">
        <div class="w3-container">
          <h3>Ms Siti Nursyakira</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Won the Award for Artistic Transformation in 2020,2021,2022</p>

        </div>
      </div>

    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="image/amalin.jpeg" alt="Amalin" width="200" height="200">
        <div class="w3-container">
          <h3>Ms Amalin Eliana</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Won the Award for Epic Visual Artistic Achievement in 2021,2022.</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="image/adibah.jpeg" alt="Adibah" width="200" height="200">
        <div class="w3-container">
          <h3>Ms Adibah Maisarah</h3>
          <p class="w3-opacity">Advisor</p>
          <p>Won the Award for Futuristic <br> Art Technology in 2019,2022,2023.</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="image/rifqi.jpeg" alt="Syakira" width="200" height="200">
        <div class="w3-container">
          <h3>Arif Rifqi</h3>
          <p class="w3-opacity">Club President</p>
        </div>
      </div>

    </div>
    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="image/yaya.jpeg" alt="Amalin" width="200" height="200">
        <div class="w3-container">
          <h3>Siti Nor Alia</h3>
          <p class="w3-opacity">Club Deputy President</p>
        </div>
      </div>
    </div>

    <div class="w3-col m4 w3-margin-bottom w3-center">
      <div class="w3-light-grey">
        <img src="image/iqah.jpeg" alt="Adibah" width="200" height="200">
        <div class="w3-container">
          <h3>Nur Syafiqah</h3>
          <p class="w3-opacity">Club Vice President</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Membership -->
   <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
  
  <div class="w3-container" id="membership" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-pink"><b>AC Membership</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
   <p align="center"><h3>Membership form for Art Club Information System</h3></p>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Gender</th>
         
        </tr>
      </thead>
      <tbody>
   
        <?php
        $sql = "SELECT * FROM `members`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["gender"] ?></td>
        
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>


  <!-- Activities -->
  <div class="w3-container" id="activities" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-pink"><b>Activites</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
    <p>Welcome to Art Club, where creativity knows no bounds! Our art club is a dynamic community that thrives on a diverse range of artistic activities, providing a platform for members to express themselves, learn new techniques, and collaborate with fellow artists. Here's a glimpse into the exciting activities we offer:</p>
  </div>

  <div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="image/act1.jpeg" width="285" height="200">
      <div class="w3-container">
        <h5>Weekly Art Jam Session</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="image/act2.jpeg" width="285" height="200">
      <div class="w3-container">
        <h5>Workshops and Skill Building</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="image/act3.jpeg" width="285" height="200">
      <div class="w3-container">
        <h5>Community Art Projects</h5>
      </div>
    </div>
  </div>
</div>

<div class="w3-row-padding w3-margin-top">
  <div class="w3-third">
    <div class="w3-card">
      <img src="image/act4.jpeg" width="285" height="200">
      <div class="w3-container">
        <h5>Art Exhibitions and Showcases</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="image/act5.jpeg" width="285" height="200">
      <div class="w3-container">
        <h5>Artistic Outings and Field Trips</h5>
      </div>
    </div>
  </div>

  <div class="w3-third">
    <div class="w3-card">
      <img src="image/act6.jpeg" width="285" height="200">
      <div class="w3-container">
        <h5>Art Appreciation Sessions</h5>
      </div>
    </div>
  </div>
</div>
  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-pink"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid pink" class="w3-round">
    <p>Any inquiries? Fill out the form and fill me in with the details :) We love meeting new people!</p>
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" requipink>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" requipink>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" requipink>
      </div>
      <a href="action_page.php" class="w3-button w3-pink">Send Message</a>    
    </form>  

  </div>


<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by Art Club</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
<!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
