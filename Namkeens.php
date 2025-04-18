
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
<nav class="navbar navbar-expand-lg navbar-light bg-white  fixed-navbar">
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
                <button class="custom-location-btn border-1 border-danger rounded-pill dropdown-toggle" type="button">
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

    
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/Savouries.png" class="d-block w-100" alt="Image 1">
        
        <div class="savouries-consent">
            <div class="title-container">
                <i class="fas fa-star"></i>
                <h1>SAVOURIES</h1>
                <p>Indulge in our wide assortment of namkeens, from spicy flavours to nut mixtures, that are sure to satisfy your cravings.</p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="breadcrumb">
                    <a href="index.php"> Home </a> > 
                    <a href="healthy-snacking.php"> Savouries </a> > 
                    <span> Namkeens </span>

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
                    <li><a href="healthy-snacking.php">Healthy Snacking</a> </li>
                    <li><a href="Namkeens.php">Namkeens</a> </li>
                    <li><a href="Chai-Time-Snacks.php">Chai Time Snacks</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content (col-md-8) -->

        <div class="col-12 col-md-8">
            <div class="card-container">
                <h1>Namkeens</h1>

                <div class="card-row">  
                    <div class="card-1">
                        <img src="images/1.png" alt="Product 1">
                        <h2>Ratlami Mixture</h2>
                        <div>
                            <span>₹55.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/2.png" alt="Product 2">
                        <h2>Aloo Bhujia</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹52.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/3.png" alt="Product 2">
                        <h2>Bhujia</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹60.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/4.png" alt="Product 2">
                        <h2>Peanut Salted</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹55.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/5.png" alt="Product 2">
                        <h2>Panchrattan</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹100.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/6.png" alt="Product 2">
                        <h2>Navrattan</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹50.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/7.png" alt="Product 2">
                        <h2>Moong Dal</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹60.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/8.png" alt="Product 2">
                        <h2>Khatta Meetha</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹50.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/9.png" alt="Product 2">
                        <h2>Kaju Mixture</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹150.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/10.png" alt="Product 2">
                        <h2>Dal Biji</h2>
                        
                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹60.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/11.png" alt="Product 2">
                        <h2>Cornflakes Mixture</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹80.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/12.png" alt="Product 2">
                        <h2>Plain Bhujia</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹60.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/13.png" alt="Product 2">
                        <h2>Aloo Bhujia</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹120.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/14.png" alt="Product 2">
                        <h2>All in One</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹100.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/15.png" alt="Product 2">
                        <h2>Gup Shup Peanuts</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹137.00</span>
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
                <span><strong>Get Delicious Healthy Snacks Only at Haldiram’s</strong></span>
            </h2>
            <p>
            <span>Are you looking for healthy snacks at best prices?</span>
            </p>
            <p>
                <span >Check out Haldiram’s- your ultimate destination for healthy savoury snacks- the perfect 
                delight for your taste buds without compromising on nutrition. 
                Whether you are looking for healthy evening snacks to relish after a long day, 
                healthy snacks for kids that are tasty and nutritious, or high-protein snacks for your 
                active lifestyle, we have something for everyone.</span>
            </p>
            <h2>
                <span><strong>Our Popular Healthy Snacks</strong></span>
            </h2>
            <p>
                <span>Although we have an expansive selection of healthy Indian snacks, here are our top picks-</span>
            </p>
            <ul>
                <li>
                    <strong>Nut Cracker Crispy Crunchy:</strong>
                    <span> Perfect blend of nuts and spices- a 
                        satisfactory crunch, healthy, and appetizing.
                    </span>
                </li>

                <li>
                    <strong>Makhana Salt n Pepper:</strong>
                    <span> Light-as-air fox nuts seasoned with a tangy mix of 
                        salt and pepper, perfect for a guilt-free snack.
                    </span>
                </li>

                <li>
                    <strong>Roasted Crushed Peanuts:</strong>
                    <span> High in protein, full of flavor-wholesome joy at
                        any time of the day.
                    </span>
                </li>

                <li>
                    <strong>Roasted Chana Cracker Masala:</strong>
                    <span> Crunchy roasted channa with spicy masala laced on 
                        them, which bursts flavors with every bite.
                    </span>
                </li>
            </ul>
            
            <h2>
                <span><strong>Why Choose Haldiram’s for Your Healthy Snacking Needs?</strong></span>
            </h2>

            <p>
                <span>
                We at Haldiram’s firmly believe that healthy eating should never compromise on taste. Here’s what makes us stand out-
                </span>
            </p>

            <ul>
                <li>
                    <strong>Quality Ingredients:</strong>
                    <span> Only the best ingredients are used to make sure 
                        our snacks, while delicious, can be healthy to consume.
                    </span>
                </li>

                <li>
                    <strong>Authentic Taste:</strong>
                    <span> Healthy Indian snacks bring the vast array of 
                        flavours from India right into your snack bowl.
                    </span>
                </li>

                <li>
                    <strong>Variety:</strong>
                    <span> Ranging from high protein snacks to healthy snacks
                        to buy, definitely, there is something to please every palate and satisfy every
                        dietary preference.
                    </span>
                </li>

                <li>
                    <strong>Brand Valued over Trust: </strong>
                    <span>Haldiram's is a name synonymous with quality, 
                        thereby making us your friend in healthy snacking.
                    </span>
                </li>
            </ul>
            <p>
            <span style="font-weight: 400;">For a delightful assortment of healthy snacks, choose Haldiram’s!</span>
            </p>
            <p>
            <span style="font-weight: 400;">Enjoy our delicious offerings and make tasty choices every day. Explore and shop from 
                our collection today!</span>
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