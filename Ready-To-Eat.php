
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    .container{
        margin: 200px;
    }
   </style>
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
                <button class="custom-location-btn border-1 border-danger rounded-pill dropdown-toggle " type="button">
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
                    <a href="Ready-To-Eat.php"> Ready To Eat And Frozen </a> > 
                    <span> Heat And Eaty </span>

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
                    <li><a href="Ready-To-Eat.php">Heat And Eat</a></li>
                    <li><a href="Cup-Meals.php">Cup Meals</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content (col-md-8) -->

        <div class="col-12 col-md-8">
            <div class="card-container">
                <h1>Heat And Eat </h1>

                    <div class="card-row">  
                    <div class="card-1">
                        <img src="images/h1.png" alt="Product 1">
                        <h2>Minute Khana Dal Tadka with Plain Rice</h2>

                        <div>
                            <span>₹150.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h2.png" alt="Product 2">
                        <h2>Minute Khana Veg Pulao</h2>

                        <div>
                            <span>₹100.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h3.png" alt="Product 2">
                        <h2>Minute Khana Shahi Paneer</h2>

                        <div>
                            <span>₹165.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/h4.png" alt="Product 2">
                        <h2>Minute Khana Rajma with Plain Rice</h2>

                        <div>
                            <span>₹150.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h5.png" alt="Product 2">
                        <h2>Minute Khana Dilli Style Choley</h2>

                        <div>
                            <span>₹80.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h6.png" alt="Product 2">
                        <h2>Minute Khana Pao Bhaji</h2>

                        <div>
                            <span>₹150.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h7.png" alt="Product 2">
                        <h2>Minute Khana Paneer Makhani</h2>

                        <div>
                            <span>₹165.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h8.png" alt="Product 2">
                        <h2>Minute Khana Mutter Paneer with Plain Rice</h2>

                        <div>
                            <span>₹180.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h9.png" alt="Product 2">
                        <h2>Minute Khana Mutter Paneer</h2>

                        <div>
                            <span>₹185.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h10.png" alt="Product 2">
                        <h2>Minute Khana Kadhi Pakoda</h2>

                        <div>
                            <span>₹85.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h11.png" alt="Product 2">
                        <h2>Minute Khana Hyderabadi Biryani</h2>

                        <div>
                            <span>₹85.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h12.png" alt="Product 2">
                        <h2>Minute Khana Dal Tadka</h2>

                        <div>
                            <span>₹90.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h13.png" alt="Product 2">
                        <h2>Minute Khana Dal Palak</h2>

                        <div>
                            <span>₹90.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h14.png" alt="Product 2">
                        <h2>Minute Khana Dal Makhani</h2>

                        <div>
                            <span>₹100.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h15.png" alt="Product 2">
                        <h2>Minute Khana Choley with Plain Rice</h2>

                        <div>
                            <span>₹150.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h16.png" alt="Product 2">
                        <h2>Minute Khana Home Style Paratha with Jeera Aloo</h2>

                        <div>
                            <span>₹175.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h17.png" alt="Product 2">
                        <h2>Minute Khana Dal Makhani with Peas Pulao</h2>

                        <div>
                            <span>₹160.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/h18.png" alt="Product 2">
                        <h2>Minute Khana Dal Makhani with Peas Pulao</h2>

                        <div>
                            <span>₹160.00</span>
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
                <span><strong>Relish Delicious Heat and Eat Meals from Haldiram’s</strong></span>
            </h2>
            
            <p>
                <span>Are you looking for an easy-to-prepare, tasty meal option?</span>
            </p>

            <p>
                <span>If yes, then explore our selection of heat-and-eat meals at Haldiram’s.</span>
            </p>

            <p>
                <span>For anyone who’s short on time or is simply looking for a convenient meal,
                     our range of instant meals has something for everyone. To prepare these 
                     pre-cooked meals, you need to heat them.</span>
            </p>

            <p>
                <span>Our heat-and-serve food options include popular Indian dishes like Minute
                     Khana Dal Tadka with Plai Rice, Minute Khana Veg Pulao, Minute Khana Shahi
                      Paneer, and more. Now you can savor the authentic taste of India without
                       the effort of cooking.</span>
            </p>

            <h2>
                <span><strong>Why Choose Haldiram’s Heat & Eat Meals?</strong></span>
            </h2>
            
            <p>
                <span>Whether you are at home or work, Haldiram’s heat and eat Indian food 
                    makes meal preparation a breeze. Here’s why our meals stand out:</span>
            </p>

            <ul>
                <li>
                    <strong>Authentic Flavors:  </strong>
                    <span> Enjoy the rich, traditional flavors of Indian food without 
                        compromising on freshness or quality.
                    </span>
                </li>

                <li>
                    <strong>Convenience: </strong>
                    <span> Since our instant meals are pre-cooked, you won’t need to spend 
                        hours in the kitchen. All you need to do is, heat and enjoy. 
                        These quick meal solutions are perfect for busy days or travel.
                    </span>
                </li>

                <li>
                    <strong>Quality Ingredients:</strong>
                    <span>  We use the best ingredients to prepare our heat-and-eat meals, 
                        ensuring that you get a wholesome, delicious experience. 
                    </span>
                </li>

                <li>
                    <strong>Variety of Options:</strong>
                    <span>  From a spicy curry to a light snack, Haldiram’s has an array of 
                        pre-cooked meals for every palate.
                    </span>
                </li>

                <li>
                    <strong>Trusted Brand: </strong>
                    <span> With decades of options, Haldiram’s is known for delivering quality 
                        food products. By choosing us, you would choose a brand known for 
                        reliability, taste, and excellence.
                    </span>
                </li>
            </ul>

            <p>
            <span >Browse through our selection of the best heat and eat meals at Haldiram’s 
                and enjoy quick, tasty, and satisfying meals.</span>
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