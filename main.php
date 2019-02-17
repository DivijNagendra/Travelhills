<!DOCTYPE html>
<?php
 

$host="localhost";
$user="root";
$password="";
$db="travelhills";
$con=mysqli_connect($host,$user,$password,$db);

  if($con)
{
    echo"";
}

 if(isset($_GET['submit']))
{   
   $name=$_GET['name'];
   $email=$_GET['email'];
   $mobile=$_GET['mobile'];
   $comments=$_GET['comments'];

     $query="INSERT INTO comments VALUES('$name', '$email','$mobile', '$comments');";
    
    $data=mysqli_query($con,$query);
     
    if($data)
    {
        
     echo "<script> alert('Thankyou $name !!'); window.location.assign('main.php'); </script>"; 
        exit();
    }
      
    
   else
    {
       echo "<script>
alert('error');
</script>";
    }
  }

?>





<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="css/main1.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travelhills</title>
</head>

<body id="home" class="scrollspy">
  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class="red daarken-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="navbar-brand" ><img src="img/logod.png" style="max-width:2333px "></a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="#home">HOME</a>
            </li>
            <li>
              <a href="#search">SEARCH</a>
            </li>
            <li>
              <a href="#popular">POPULAR PACKAGES</a>
            </li>
            <li>
              <a href="#gallery">GALLERY</a>
            </li>
            <li>
              <a href="#contact">CONTACT</a>
            </li>
            
            <li>
                <a class="btn red darken-4 z-depth-3 " href="logout.php">logout</a>
            </li>  
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <ul class="sidenav" id="mobile-nav">
    <li>
      <a href="#home">HOME</a>
    </li>
    <li>
      <a href="#search">SEARCH</a>
    </li>
    <li>
      <a href="#popular">POPULAR PACKGES</a>
    </li>
    <li>
      <a href="#gallery">GALLERY</a>
    </li>
    <li>
      <a href="#contact">CONTACT</a>
    </li>
     <li>
      <a href="logout.php">LOGOUT<?php 
          session_start(); ?></a>
    </li>
  </ul>

  <!-- Section: Slider -->
  <section class="slider">
    <ul class="slides">
      <li>
        <img src="img/resort1.jpg">
        <!-- random image -->
        <div class="caption center-align">
          <h2>Take Your Dream Vacation</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">YOUR DREAM DESTINATION IN OUR HANDS</h5>
        </div>
      </li>
      <li>
        <img src="img/resort2.jpg">
        <!-- random image -->
        <div class="caption left-align">
          <h2>We Work With All Budgets</h2>
          <h5 class="light grey-text text-lighten-3 hide-on-small-only">“Jobs fill your pocket, but adventures fill your soul.”</h5>
        </div>
      </li>
      <li>
        <img src="img/resort3.jpg">
        <!-- random image -->
        <div class="caption right-align">
          <h2>Group & Individual Getaways</h2>
          <h5 class="light white-text text-lighten-1 hide-on-small-only">Take only memories, leave only footprints.....</h5>
        </div>
      </li>
    </ul>
  </section>

  <!-- Section: Search -->
  <section id="search" class="section section-search red darken-1 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Search Destinations</h3>
          <div class="input-field">
            <input type="text" class="white grey-text autocomplete" id="autocomplete-input" placeholder="Search your dreamland">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large red-text">room</i>
            <h4>FAVOURITE LOCATIONS</h4>
            <p>Why wait, <br>when you can travel<br> to your DREAMLAND</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large red-text">store</i>
            <h4>Travel Shop</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, tempore?</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large red-text">airplanemode_active</i>
            <h4>Fly Cheap</h4>
            <p>Book Early,<br>Reduce your expense</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Popular Packages -->
  <section id="popular" class="section section-popular grey lighten-5 scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="red-text">Popular</span> Packages</h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="dest/nothindia.jpg" alt="">
                <span class="card-title"><h3>North India</h3></span>
                 <a class="btn-floating halfway-fab waves-effect waves-light red pulse" href="northindia.html"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              Travel to the Historic, Majestic and Celestial destinations.<br>A big hit with honeymooners, adventure enthusiasts and nature lovers. 
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="dest/southindia.jpg" alt="">
                <span class="card-title"><h3>South India</h3></span>
                <a class="btn-floating halfway-fab waves-effect waves-light red" ><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              What can be more daydream worthy than the images of enchanting beaches with shimmering sand, swaying palms, dramatic sea waves and smiling sun.
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="dest/abroad.jpg" alt="">
                <span class="card-title"><h3>Overseas</h3></span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              Cross the national borders, and have an overwhelming feast of foreign culture, with a glimpse of homliness. 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    
  <!-- Section: Follow -->
  <section class="section section-follow red darken-2 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow Travelhills</h4>
          <p>Follow us on social media for special offers</p>
          <a href="#" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-google-plus fa-4x"></i>
          </a>
          <a href="#" class="white-text">
            <i class="fab fa-pinterest fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
 
    
  <!-- Section: Gallery -->
  <section id="gallery" class="section section-gallery  scrollspy">
    <div class="container">
      <h4 class="center">
        <span class="red-text">Photo</span> Gallery
      </h4>
         <div class="row">
        <div class="col s12 m3">
          <img src="dest/hampi.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="dest/Kerala.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="dest/coorg.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="dest/wayanad.jpg" alt="" class="materialboxed responsive-img">
        </div>
      </div>
        
      <div class="row">
        <div class="col s12 m3">
          <img src="dest/mushi.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="dest/ganga.png" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="dest/gulmarg.jpg" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="dest/tajmahal.jpg" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?water" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?building" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?trees" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?cruise" alt="" class="materialboxed responsive-img">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?beaches" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?traveling" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?bridge" alt="" class="materialboxed responsive-img">
        </div>
        <div class="col s12 m3">
          <img src="https://source.unsplash.com/1600x900/?beach, travel,boat" alt="" class="materialboxed responsive-img">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Contact -->
  <section id="contact" class="section section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel red white-text center">
            <i class="material-icons">email</i>
            <h4>Contact Us For Booking</h4>
              <h6>Join us, Travel and Explore your Dream Destinations</h6><br>
                &#9742;:76761 76761
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">TravelHills Agency</li>
            <li class="collection-item">Hesarghatta road, Chikkasandra</li>
            <li class="collection-item">Jalahalli West, Bengaluru, Karnataka 560057</li>
            <li class="collection-item">Timings: 9:30a.m-7.00p.m</li>  
            <li class="collection-item">&#9742;          76761 76761, 7676  76762</li>
         </ul>
        </div>
          <form action="#" method="GET">
        <div class="col s12 m6">
          <div class="card-panel grey lighten-3">
            <h5>Your Suggestions and Comments</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" name="name">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Email" name="email">
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" name="mobile">
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Add Comments" name="comments"></textarea>
            </div>
            <input type="submit" name="submit" value="submit" class="btn" value="comments">
          </div>
        </div></form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="section red darken-2 white-text center">
      <p class="flow-text"><H4>TRAVELHILLS &copy; 2018 </H4></p>
  </footer>
<!-- Fixed button -->
    <div class="fixed-action-btn">
       <a class="btn-floating btn-large red" href="profile.php">
       <i class="large material-icons">person</i>
       </a>
    </div>
  <!--JavaScript at end of body for optimized loading-->
     <script src='https://code.jquery.com/jquery-3.3.1.min.js'> </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

  <script>
    // Sidenav
    const sideNav = document.querySelector('.sidenav');
    M.Sidenav.init(sideNav, {});

    // Slider
    const slider = document.querySelector('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      transition: 500,
      interval: 6000
    });

    // Autocomplete
    const ac = document.querySelector('.autocomplete');
    M.Autocomplete.init(ac, {
      data: {
        "Aruba": null,
        "Cancun Mexico": null,
        "Hawaii": null,
        "Florida": null,
        "California": null,
        "Jamacia": null,
        "Europe": null,
        "Agra": null,  
          "Mathura": null,
          "Brindavan": null,
          "Bengaluru": null,
      }
    });

    // Material Boxed
    const mb = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(mb, {});

    // ScrollSpy
    const ss = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(ss, {});

     
  </script>

</body>

</html>