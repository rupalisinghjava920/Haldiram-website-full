
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

   

<link rel="stylesheet" href="css/healthy-snacking.css">

<body class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-white  fixed-navbar fixed-top">
    <div class=" container-fluid w-200">
        <div class=" d-flex align-items-center w-100 py-2">
            <!-- Logo -->
            <a class="navbar-brand me-3" href="index.php">
                <img src="images/haldiram.png" alt="Haldiram's" >
            </a>

            <!-- Mode (Delivery) -->
            <div class="me-4">
                <h6>Mode:</h6>
                <h5>Delivery</h5>
            </div>

            <!-- Location Dropdown -->
            <div class="me-3 ml-80">
                <button class="custom-location-btn border-1 border-danger rounded-pill  dropdown-toggle" type="button">
                    <i class="fas fa-map-marker-alt"></i> Noida, Uttar Pradesh
                </button>
            </div>

            <!-- Search Bar -->
            <!-- <form class="d-flex flex-grow-0 mx-20 ml-10">
                <div class="input-group-1 rounded-pill border border-danger overflow-hidden">
                    <span class="input-group-text bg-danger border-0">
                        <i class="fas fa-search text-white"></i>
                    </span>
                    <input class="form-control border-danger" type="search" placeholder="Search 200+ products">
                </div>
            </form> -->

            <div class="d-flex">
                <input class="custom-location-btn rounded-pill border border-danger" type="search" placeholder="Search 200+ products" >
                <i class="fas fa-search text-white"></i>
            </div>

            <!-- Icons (Cart, Wishlist, Profile) -->
            <div class="d-flex align-items-center ms-3 font-size-20"> 
                <a href="snacks-add-details.php" class="me-3"><i class="fas fa-shopping-cart"></i></a>
                <a href="user.php" class="me-3"><i class="fas fa-user"></i></a>
                <a href="heart.php" class="me-3"><i class="fas fa-heart"></i></a>
                <button id="menu-btn"><i class="fas fa-bars"></i></button>
            </div>

            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>


<!-- Sidebar -->
<div id="sidebar" class="text-start">
        <h1>All Categories</h1>
        <button id="close-btn" class="btn btn-danger position-absolute top-0 end-0 m-3">✖ </button>
        <ul class="list-unstyled mt-5 ps-3">
            <li><a href="" class="text-white d-block py-2">Home</a></li>
            <li><a href="healthy-snacking.php" class="text-white d-block py-2">Snacking</a></li>
            <li><a href="Mithai.php" class="text-white d-block py-2">Mithai</a></li>
            <li><a href="Bakery-Cookies-Chocolates.php" class="text-white d-block py-2">Bakery Cookies & Chocolates</a></li>
            <li><a href="Ready-To-Eat.php" class="text-white d-block py-2">Ready To Eat And Frozen</a></li>
            <li><a href="Pantry-And-Kitchen.php" class="text-white d-block py-2">Pantry And Kitchen</a></li>
            <li><a href="Trail-Mix.php" class="text-white d-block py-2">Trail Mix and Dry Fruits</a></li>
        </ul>
    </div>

    <!-- Backdrop -->
    <div id="backdrop"></div>

 <!-- Navigation Menu -->

 <div class="menu-container">
    <ul class="menu-items">
        <li><a href="index.php"> Home</a> </li>
        <li><a href="healthy-snacking.php"> Snacking</a> </li>
        <li><a href="Mithai.php"> Mithai</a> </li>
        <li><a href="Bakery-Cookies-Chocolates.php"> Bakery Cookies & Chocolates</a> </li>
        <li><a href="Ready-To-Eat.php"> Ready To Eat And Frozen </a> </li>
        <li><a href="Pantry-And-Kitchen.php"> Pantry And Kitchen </a> </li>
        <li><a href="Trail-Mix.php"> Trail Mix and Dry Fruits </a> </li>
    </ul> 
</div>

  <!-- Marquee -->
  <div class="marquee-container">
        <div class="marquee-text">
            <img src="https://mcstaging.haldiram.com/media/.renditions/wysiwyg/Group.png" alt="">
            <span> Great Taste since 1937 </span>
            <img src="https://mcstaging.haldiram.com/media/.renditions/wysiwyg/Group.png" alt="">
            <span> Evolving with India's tastes to deliver the finest Flavours</span>
        </div>
    </div>



  <!-- form heart banner -->
<section class="form-container">
    <div class="container">
        <form id="paypal-form" class="form-request js-ajax-form" action="" method="get">

        <h4 class="text-center mb-4">Welcome</h4>
        <h2 class="text-center mb-4">Login To Your Account</h2>
            <div class="form-group">
              <input class="form-control" name="phone" id="phone" placeholder="+ 91 Enter your mobile number" required type="phone">
            </div>

            <div class="view flex items-center space-x-2">
                <a href="#" class="font-bold">Request OTP</a>
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="22" fill="#CD9951"></circle>
                    <path d="M17 24H31.5M31.5 24L25.5 18M31.5 24L25.5 30" stroke="white" stroke-width="1.5"></path>
                </svg>
            </div>
            <p>
               By continuing, you agree to our <a href="">Terms of Service </a> 
               <br>
               and <a href="">Privacy Policy</a>
            </p>

        </form>
    </div>
</section>

<div class="border-container">
   <div class="p-8 flex-container">
        <div>
            <h1 class="text">With Love, From Haldiram's</h1>
            <p>Subscribe to our newsletter for Haldiram's offers.</p>
        </div>
        <div class="input-container">
            <input type="text" name="email" placeholder="Enter email Id" class="input-box" />
            <a href=""><i class="fa fa-arrow-right"></i></a>
        </div>
   </div>
</div>


<!-- footer code -->
 
<div class="footer">
   <div class="row">
        <div class="col-12 col-md-4">
            <img src="images/haldi.png" alt="Haldiram's" >
            <p><span>Haldiram Ethnic Foods Private Limited</span></p>
            <p><span>Haldiram Manufacturing Co. Private Limited</span></p>
            <p><span>Haldiram Products Private Limited</span></p>
            <p><span>Haldiram Marketing Private Limited</span></p>
        </div>

        <div class="col-md-2">
          <h1>Menu</h1>
            <ul>
                <li><a href="">Savouries</a></li>
                <li><a href="">Mithai</a></li>
                <li><a href="">Bakery Cookies and Chocolates</a></li>
                <li><a href="">Ready To Eat And Frozen</a></li>
                <li><a href="">Pantry And Kitchen</a></li>
                <li><a href="">Trail Mixes and Dry Fruits</a></li>
            </ul>
       </div>
       
       <div class="col-md-2">
          <h1>Support</h1>
           <ul>
              <li><a href="">Contact Us</a></li>
              <li><a href="">FAQs</a></li>
              <li><a href="">Find Your Nearest Store</a></li>
           </ul>
       </div>

       <div class="col-md-2">
          <h1>CORPORATE</h1>
           <ul>
             <li><a href="">About us</a></li>
             <li><a href="">Dealership Form</a></li>
           </ul>
       </div>

       <div class="col-md-2">
          <h1>POLICIES</h1>
            <ul>
                <li><a href="">Shipping Policy </a></li>
                <li><a href="">Returns & Cancellation</a></li>
                <li><a href="">Privacy Policy </a></li>
                <li><a href="">Terms & Conditions </a></li>
                <li><a href="">Follow @Haldirams</a></li>
            </ul>
            <div class="img-container">
                <div>
                    <img src="images/face.png" alt="face">
                </div>
                <div>
                    <img src="images/youtube.png" alt="youtube">
                </div>
                <div>
                    <img src="images/linked.png" alt="linked">
                </div>
                <div>
                    <img src="images/inster.png" alt="inster">
                </div>
            </div>
       </div>

   </div>
</div>

<div class="floating-button">
    <img src="images/logoside.png" alt="logoside">
</div>

    <!-- Cookie Consent -->
    <div class="cookie-consent">
        By continuing to use our website, you agree to our <a href="condition/discription.php"> Privacy Policy </a> and <a href="condition/term-condition.php"> Terms & Conditions </a>.
        <button class="btn-primary btn-sm ms-3 text-end">ACCEPT</button>
    </div>

    <script src="script/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>