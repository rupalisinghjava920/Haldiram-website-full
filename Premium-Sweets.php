
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
                <button class="custom-location-btn border-1 border-danger rounded-pill dropdown-toggle" type="button">
                    <i class="fas fa-map-marker-alt"></i> Noida, Uttar Pradesh
                </button>
            </div>

            <!-- Search Bar -->
            <!-- <form class="d-flex flex-grow-0 mx-10 ml-10">
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
                <a href="snacks-add-snacks.php" class="me-3"><i class="fas fa-shopping-cart"></i></a>
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
        <img src="images/Mithai.png" class="d-block w-100 mt-10" alt="Image 1" >
        
        <div class="savouries-consent">
            <div class="title-container">
                <i class="fas fa-star"></i>
                <h1>MITHAI</h1>
                <p>Experience the nostalgia and rich flavours of India with our scrumptious range of sweets, handcrafted to perfection and delivered straight to your doorstep.</p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="breadcrumb">
                    <a href="index.php"> Home </a> > 
                    <a href="healthy-snacking.php"> Mithai </a> > 
                    <span> Premium Sweets </span>

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
                    <li><a href="Mithai.php">Ladoo</a></li>
                    <li><a href="Premium-Sweets.php">Premium Sweets</a></li>
                    <li><a href="Ghee-Sweets.php">Ghee Sweets</a></li>
                    <li><a href="Khoya-and-Milk-Sweets.php">Khoya and Milk Sweets</a></li>
                    <li><a href="Packed-Sweets.php">Packed Sweets</a></li>
                    <li><a href="Tin-Sweets.php">Tin Sweets</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content (col-md-8) -->

        <div class="col-12 col-md-8">
            <div class="card-container">
                <h1>Premium Sweets </h1>

                
                <div class="card-row">  
                    <div class="card-1">
                        <img src="images/b1.png" alt="Product 1">
                        <h2>Pista Burfi</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹350.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/b2.png" alt="Product 2">
                        <h2>Kaju Katlio</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹400.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/b3.png" alt="Product 2">
                        <h2>Khajoor Dry Fruit Burfi</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹949.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/b4.png" alt="Product 2">
                        <h2>Kaju Roll</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹909.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="card-1">
                        <img src="images/b5.png" alt="Product 2">
                        <h2>Coconut Burfi</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹524.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/b6.png" alt="Product 2">
                        <h2>Anjeer Dry Fruit Barfi</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹940.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/b7.png" alt="Product 2">
                        <h2>Aam Papad Burfi</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹524.00</span>
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
                <span><strong>Delicious Ladoos from Haldiram’s: The Perfect Treat for Every Occasion</strong></span>
            </h2>
            
            <p>
                <span>Ladoos are not just sweets; they signify festivals, joy, and attachment. At Haldiram's, we have 
                    an array of delicious ladoos for you to celebrate any occasion or to indulge in the desire to have 
                    something sweet. Made from the finest ingredients and recipes passed down through generations, our 
                    ladoos will treat your taste buds to a delicious explosion with every bite. From classic versions to
                     modern innovations, Haldiram's has something for everyone.</span>
            </p>
            <h2>
                <span><strong>Popular Ladoos from Haldiram's</strong></span>
            </h2>
            
            <ul>
                <li>
                    <strong>Moti Choor Ladoo:</strong>
                    <span> Our signature moti choor ladoo is an all-time  favorite option prepared with fine gram flour 
                        pearls, ghee, and aromatic spices. Soft and melt-in-your-mouth, this ladoo is a must-have for 
                        every celebration.
                    </span>
                </li>

                <li>
                    <strong>Dry Fruit Besan Ladoo: </strong>
                    <span> Dry fruit besan ladoo is a healthier version of the basic besan ladoo packed with almonds, 
                        cashews, and pistachios. Rich and heavy, this ladoo has crunch in every bite.
                    </span>
                </li>

                <li>
                    <strong>Dry Fruit Atta Ladoo: </strong>
                    <span> Dry Fruit atta ladoo is the ideal option for those who look for healthy indulgence. Whole wheat
                         flour used along with the rich content of dry fruits provides delicious and nutritious value.
                    </span>
                </li>

                <li>
                    <strong>Jodhpuri Ladoo: </strong>
                    <span> An exclusive creation of the royal kitchens of Rajasthan, jodhpuri ladoo presents traditional 
                        ingredients in a rich nutty flavor. This is the ultimate treat for those who like authentic 
                        Indian sweets.
                    </span>
                </li>

                <li>
                    <strong>Coconut Dry Fruit Ladoo: </strong>
                    <span> If you like coconut, our coconut dry fruit ladoo will surely be your weakness. Made fresh with 
                        coconut and a mix of dry fruits, this ladoo is soft, chewy, and irresistibly delicious.
                    </span>
                </li>
            </ul>
            
            <h2>
                <span><strong>Why Buy Ladoos from Haldiram's?</strong></span>
            </h2>

            <p>
                <span>
                At Haldiram's, we pride ourselves in making sweets that combine tradition, quality, and taste unbeatable 
                by any other brand. 
                </span>
            </p>

            <p>
                <span>
                Here is why buying ladoos from Haldiram is your best bet:
                </span>
            </p>

            <ul>
                <li>
                    <strong>Premium Ingredients:</strong>
                    <span> At Haldiram’s, only the best ingredients are used to make each ladoo fresh, full of flavor, 
                        and taste so genuine.
                    </span>
                </li>

                <li>
                    <strong>Traditional Recipes: </strong>
                    <span> Our ladoos are prepared with treasured traditional recipes that bring in the real essence 
                        of Indian sweets.
                    </span>
                </li>

                <li>
                    <strong>Variety:</strong>
                    <span>  From classic besan ladoos to modern innovations such as dry fruit ladoos, there is 
                        something for each taste bud's liking.
                    </span>
                </li>

                <li>
                    <strong>Nationwide Delivery: </strong>
                    <span> If you do not wish to visit a store near you, you can try tasting our exotic ladoos from 
                        any part of the country through our speedy and reliable delivery services.

                    </span>
                </li>

                <li>
                    <strong>Trusted Brand: </strong>
                    <span> Years of experience in making sweets have made Haldiram's a name one could trust for quality 
                        and taste.
                    </span>
                </li>
            </ul>
            <p>
            <span >Festive Occasion or a moment to indulge - whatever the reason, let Haldiram ladoos add sweetness to 
                each moment. Browse through our range today and experience the rich heritage of Indian sweets with each 
                bite!!</span>
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