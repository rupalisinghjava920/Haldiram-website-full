
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



<div class="container-1">
    <div class="row">
        <div class="col-12">
            <nav class="breadcrumb">
                    <a href="index.php"> Home </a> > 
                    <a href="Pantry-And-Kitchen.php"> Pantry And Kitchen </a> > 
                    <span>Breakfast Mixes </span>

                <div class="header-container">
                    <div class="sort-box">
                        <span>Sort by Position <i class="fas fa-caret-down"></i></span>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar (col-md-4) -->
        <div class="col-12 col-md-4">
            <div class="sidebar">
                <ul>
                    <li><a href="Pantry-And-Kitchen.php">Breakfast Mixes</a></li>
                    <li><a href="Chutney-Papad-Pickle.php">Chutney Papad & Pickle</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content (col-md-8) -->

        <div class="col-12 col-md-8">
            <div class="card-container">
                <h1>Breakfast Mixes </h1>

                    <div class="card-row">  
                    <div class="card-1">
                        <img src="images/r1.png" alt="Product 1">
                        <h2>Rava Idli</h2>

                        <div>
                            <span>₹150.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/r2.png" alt="Product 2">
                        <h2>Ragi Dosao</h2>

                        
                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹100.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid-2">
    <div class="card-container-1">
        <div class="card">
            <img src="images/SAVORIES_6.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/PANTRY-_-KITCHEN_7.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/MITHAI_1.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/READY-TO-EAT-_-FROZEN_1.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/BAKERIES.png" alt="Kaju Katli">
        </div>
    </div>
</div>


<div class="HealthySnacks">
    <div class="text-root">
            <h2>
                <span><strong>Breakfast Mixes: A Quick and Easy Start to Your Day</strong></span>
            </h2>
            
            <p>
                <span>Mornings in most households can be a rush. However, with Haldiram’s 
                    breakfast mixes, you can make delicious breakfast easily, in minutes. 
                    From traditional Indian flavors to a quick mix, our instant breakfast 
                    mixes are the perfect solution. Explore our wide range of options, including
                     Rics Idli, Tomato Masala Oats, Smart White Oats, and more to enjoy the 
                     taste of home-cooked meals without the lengthy preparation time.</span>
            </p>

            <p>
                <span>With our quick breakfast mixes, you can enjoy the authentic taste of your 
                    favorite dishes like dosa, upma, poha, and more. All you need to do is, 
                    add water, and your meal is ready! Whether you are working from home or on
                     the go, Haldiram’s easy breakfast mixes are your go-to solution.</span>
            </p>

            <h2>
                <span><strong>Why Shop from Haldiram’s?</strong></span>
            </h2>

            <ul>
                <li>
                    <strong>Authentic Taste:  </strong>
                    <span> For the past few decades, Haldiram’s has been synonymous with 
                        authentic Indian flavors. Our instant breakfast mixes are carefully 
                        made to deliver the perfect taste of a home-cooked meal.
                    </span>
                </li>

                <li>
                    <strong>High-Quality Ingredients: </strong>
                    <span> All our products are made from premium-quality ingredients, 
                        ensuring a healthy and delicious meal, every time.
                    </span>
                </li>

                <li>
                    <strong>Wide Range of Options:</strong>
                    <span> From upma to poha and many others, our Minute khana breakfast 
                        options have something for every taste bud.
                    </span>
                </li>

                <li>
                    <strong>Convenience:</strong>
                    <span> Our quick breakfast mixes allow you to enjoy your favorite meals 
                        in minutes, making them perfect for busy mornings.
                    </span>
                </li>

                <li>
                    <strong>Easy Availability: </strong>
                    <span> You can now purchase our easy breakfast mixes at any store near 
                        you or shop from our online store to get your purchased products 
                        delivered right to your doorstep.

                    </span>
                </li>
            </ul>

            <p>
            <span >Enjoy the perfect start to your day with Haldiram’s breakfast mixes- the 
                perfect blend of taste, convenience, and quality!</span>
            </p>

    </div>
</div>


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