<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haldiram's Clone</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/index.css">
    
<style>

/* menu css*/
.menu-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    margin-top: 125px;
    background-color: white; 
    padding: 8px 0;
    text-align: center;
    border-bottom: 1px solid #ddd; 
    z-index: 9999;
    text-align: center; 
    
}

.menu-items {
    display: flex;
    justify-content: center;
    gap: 20px;
    list-style-type: none;
    padding: 0;
    margin: 0;
}

</style>

</head>
<body class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-white  fixed-navbar fixed-top">
    <div class=" container-fluid w-200">
        <div class=" d-flex align-items-center w-100 py-2">
            <!-- Logo -->
            <a class="navbar-brand me-2" href="index.php">
                <img src="images/haldiram.png" alt="Haldiram's" >
            </a>

            <!-- Mode (Delivery) -->
            <div class="me-4">
                <h6>Mode:</h6>
                <h5>Delivery</h5>
            </div>

            <!-- Location Dropdown -->
            <div class="me-2 ml-80">
                <button class="custom-location-btn border-1 border-danger rounded-pill  dropdown-toggle" type="button">
                    <i class="fas fa-map-marker-alt"></i> Noida, Uttar Pradesh
                </button>
            </div>

            <!-- Search Bar -->
            <!-- <form class="d-flex flex-grow-0  ">
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
                <a href="user.php" class="me-3"><i class="fas fa-user" ></i></a>
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


    

 
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/web_banner.png" class="d-block w-100" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="images/web_banner1.png" class="d-block w-100" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="images/web_banner2.png" class="d-block w-100" alt="Image 3">
        </div>
    </div>

    <!-- Navigation Arrows -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>


<div class="container-fluid-1 mt-5">
    <div class="p-8">
        <div class="flex justify-between items-center">
            <h2 class="text-start text-4xl font-bold">India's Favourites</h2>

            <div class="view flex items-center space-x-2">
                <a href="#" class="font-bold">View All</a>
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="22" fill="#CD9951"></circle>
                    <path d="M17 24H31.5M31.5 24L25.5 18M31.5 24L25.5 30" stroke="white" stroke-width="1.5"></path>
                </svg>
            </div>

        </div>

        <p class="text-start text-red-600 text-lg">Serving India Its Favourites In Every Way Possible.</p>
    </div>
    <div class="card-container">
        <div class="card">
            <img src="images/kaju.png" alt="Kaju Katli">
            <h3>Kaju Katli</h3>
            
            <div class="price-container">
                <p>₹1,750.00</p>
                <button class="btn"> + </button>
            </div>
        </div>

        <div class="card">
            <img src="images/kaju-roll.png" alt="Kaju Roll">
            <h3>Kaju Roll</h3>
           
            <div class="price-container">
                <p>₹909.00</p>
                <button class="btn"> + </button>
            </div>
        </div>

        <div class="card">
            <img src="images/ladoo.png" alt="Coconut Ladoo">
            <h3>Coconut Dry Fruit Ladoo</h3>
            <div class="price-container">
                <p>₹524.00</p>
                <button class="btn"> + </button>
            </div>
        </div>

        <div class="card">
            <img src="images/download.png" alt="dry furit">
            <h3>Chana Dry Fruit Ladoo</h3>
            <div class="price-container">
                <p>₹350.00</p>
                <button class="btn"> + </button>
            </div>
        </div>

        <div class="card">
            <img src="images/download (2).png" alt="Patisa">
            <h3>Patisa</h3>
            <div class="price-container">
                <p>₹230.00</p>
                <button class="btn">+</button>
            </div>
        </div>
    </div>    
</div>

<!-- -->  
<div class="container-fluid mx-auto flex justify-center">
    <div class="w-full text-center">
        <img src="images/festive-banner_2.png" alt="festive-banner" class="mx-auto w-auto">
    </div>
</div>


<!-- --> 
<div class="flex items-center justify-between border-1 border-warning rounded-lg p-8 max-w-7xl mx-auto mt-10">
        <!-- Left Image -->
        <div class="w-1/4">
            <img src="images/Mask_group_4.png" alt="Mobile App" class="rounded-lg shadow-lg">
        </div>

        <!-- Middle Content -->
        <div class="w-2/4 text-center">
            <h2 class="text-3xl font-semibold text-[#b8860b]">Haldiram's Mobile App Coming Soon!</h2>
            <div class="flex justify-center gap-6 mt-4 text-[#b8860b]">
                <div class="flex items-center">
                    <span class="text-2xl">✔</span>
                    <p class="ml-2 text-sm">Easy delivery, dine-in & takeaway</p>
                </div>
                <div class="flex items-center">
                    <span class="text-2xl">✔</span>
                    <p class="ml-2 text-sm">Access to the complete range of Haldiram's</p>
                </div>
                <div class="flex items-center">
                    <span class="text-2xl">✔</span>
                    <p class="ml-2 text-sm ">Exclusive offers & rewards</p>
                </div>
            </div>
        </div>

        <!-- Right Button -->
        <div class="w-1/4 flex justify-center ml-9">
            <div class="bg-[#b8860b] text-white py-6 px-8  rounded-lg text-2xl border-3 border-warning  ">
                Coming Soon
            </div>
        </div>
</div>



<!-- --> 
<div class="container-fluid">
    <div class="p-8">
        <!-- Bigger Heading -->
        <div class="flex justify-between items-center">
            <!-- Bigger Heading -->
            <h1 class="text-start mt-5 text-4xl font-extrabold text-red-600 ml-5">
                SPECIAL COMBOS CURATED JUST FOR YOU
            </h1>
            
            <!-- View All Button & Icon -->
            <div class="view flex items-center space-x-2">
                <a href="#" class="font-bold">View All</a>
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="22" fill="#CD9951"></circle>
                    <path d="M17 24H31.5M31.5 24L25.5 18M31.5 24L25.5 30" stroke="white" stroke-width="1.5"></path>
                </svg>
            </div>
        </div>
        <p class="text-start text-xl text-yellow-500 ml-5">
            You don't need an occasion to enjoy Haldirams
        </p>

    </div>
</div>
    <!-- Centered Image -->
    <div class="flex justify-center mt-8">
        <img src="images/combo1_4.png" alt="festive-banner" class="w-auto max-w-full h-auto">
    </div>


<!-- --> 
<div class="container-fluid-1">
    <div class="card-container-1">
        <div class="card">
            <img src="images/BAKERIES.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/MITHAI_1.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/PANTRY-_-KITCHEN_7.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/READY-TO-EAT-_-FROZEN_1.png" alt="Kaju Katli">
        </div>
        <div class="card">
            <img src="images/SAVORIES_6.png" alt="Kaju Katli">
        </div>
    </div>
</div>


    <!-- Video Section -->
    <!-- <div class="video-container">
        <iframe width="80%" height="100%" src=<iframe width="80%" height="100%" src="blob:https://player.vimeo.com/d1aeeb17-8547-4522-af51-32b9cd67cbf2" frameborder="0" allowfullscreen></iframe> frameborder="0" allowfullscreen></iframe>
    </div> -->


    <!-- Recipes Section -->
<div class="container-fluid mt-5">
    <div class="p-8">
        <div class="flex justify-between items-center">
            <h2 class="text-start text-4xl font-bold">RECIPES WITH A TWIST</h2>
            <div class="view flex items-center space-x-2">
                <a href="#" class="font-bold">View All</a>
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="24" cy="24" r="22" fill="#CD9951"></circle>
                    <path d="M17 24H31.5M31.5 24L25.5 18M31.5 24L25.5 30" stroke="white" stroke-width="1.5"></path>
                </svg>
            </div>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <img src="images/Punjabi_Tadka_wrap_3.png" alt="Punjabi Tadka Wrap">
            <div class="product-info">
                <span>Easy</span>
                <i class="fa fa-heart" aria-hidden="true"></i>
            </div>
            
            <h3>Punjabi Tadka Wrap</h3>
            
            <span class="time-label"><i class="fa fa-clock"></i> 00:15 mins</span>
            <span class="status">PRODUCTS USED</span>
            
            <div class="product-image">
                <img src="images/Punjabi.png" alt="Punjabi">
                <span>Punjabi Tadka</span> 
            </div>
        </div>


        <div class="card">
            <img src="images/PunjabiPakodaToasty.png" alt="Kaju Roll">
            <div class="product-info">
                <span>Maderate</span>
                <i class="fa fa-heart" aria-hidden="true"></i> 
            </div>
    
            <h3>Bhujia Sandwich</h3>

            <span class="time-label"><i class="fa fa-clock"></i> 00:05 mins</span> 
            <span class="status">PRODUCTS USED</span> 

            <div class="product-image">
                <img src="images/Plain.png" alt="Plain" >
                <span>Plain Bhujia</span>
            </div>
        </div>

        <div class="card">
            <img src="images/Bhujia-Sandwich.png" alt="Coconut Ladoo">
            <div class="product-info">
                <span>Easy</span>
                <i class="fa fa-heart" aria-hidden="true"></i> 
            </div>
            
            <h3>Mini Aloo Masala Toast</h3>

            <span class="time-label"><i class="fa fa-clock"></i> 00:05 mins</span> 
        </div>
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

            <p><span>
            B-1 / F-12, Mohan Co-Operative Industrial Estate, Main Mathura Road, Badarpur, South Delhi, Delhi, 110044
            </span></p>
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

<div class="floating-button " onclick="toggleChat()">
    <img src="images/logoside.png" alt="logoside">
</div>

<!-- Hidden Chat Box -->
<div class="chat-box" id="chatBox">
    <div class="chat-header">
        <span>Let's Chat!</span>
        <p>🟢 We’ll reply as soon as we can</p>
        <button class="close-btn" onclick="toggleChat()">✖</button>
    </div>
    <div class="chat-body">
        <!-- <p>🟢 We’ll reply as soon as we can</p> -->
        <div class="messages" id="messages"></div>
    </div>
    <div class="chat-footer">
        <button class="emoji-btn">😊</button>
        <input type="text" id="messageInput" placeholder="Write your message...">
        <button onclick="sendMessage()">➤</button>
    </div>
    <div class="emoji-picker" id="emojiPicker"></div>
</div>


    <!-- Cookie Consent -->
    <div class="cookie-consent">
        By continuing to use our website, you agree to our <a href="condition/discription.php"> Privacy Policy </a> and <a href="condition/term-condition.php"> Terms & Conditions </a>.
        <button class="btn-primary btn-sm ms-3 text-end">ACCEPT</button>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="script/index.js"></script>
 
   
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" crossorigin="anonymous"></script> -->

   
</body>
</html>
