
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

<style>

/* Main Card Styling */

.add-card-details {
    background-color: white;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.4);
    margin-top: 250px; 
    height: 600px;

   
}

   .col-12 {
    width: 100%;
    height: auto;
}

.col-12 img {
    display: block; 
    margin-bottom: 10px; 
}

.disclaimer{
    display: flex;
    margin-top: 110px;
    text-align: start;
}

.disclaimer p span {

    color: red;
}

.col-md-4 {
    width: 33.33%;
    flex: none;
    margin-top: 100px;
    
}

 .col-md-8 {
    width: 66.66%;
}

.col-md-4 .image {
    margin-left: 100px;
    width: 500px !important;
    height: 300px !important;
    /* margin-top: 20%; */
    /* position: relative; */
    object-fit: cover;
    text-align: center;
    
}


.breadcrumb {
    font-size: 14px;
    margin-bottom: 8px;
    text-align: start;
}

.breadcrumb a {
    color: black;
    text-decoration: none;
}
.add {
    display: flex;
    align-items: center; 
    gap: 10px;
    justify-content: space-between;
}

.add h1 {
    /* margin-right: 20px; */
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 8px;
    display: flex;
    gap: 5px;
    align-items: center;
    margin-top: 2px;
    text-align: start ;
    margin-top: 10px;
    color: red;
}
.icon{
    margin-right: 40px;
}
.icon i{
    font-size: 30px;
    width: 50px;
    cursor: pointer;
    color: blue; 
}

.rate{
    margin-right: 150px;
    text-align: start;
    
}

/* Parent container styling - Keep everything in one line */
.product-info {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-wrap: nowrap; 
    margin-bottom: 10px;
    background: white !important;
}

/* Input Group Styling */
.input-group {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: black;
    align-items: start;
}

/* Label Styling */
.input-group label {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 8px;
}

/* Select & Input Fields - Smaller size */
.input-group select,
.input-group input {
    padding: 10px;
    border: 1px solid #ccc;
    /* border-radius: 5px; */
    font-size: 15px;
    width: 150px; 
    text-align: center;
}

/* Quantity Box */
.quantity-box {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    /* border-radius: 5px; */
    width: 80px; 
    overflow: hidden;
}

.qty-btn {
    width: 40px;
    height: 40px;
    border: none;
    background: #ddd;
    cursor: pointer;
    font-size: 20px;
}

.quantity-box input {
    width: 40px;
    text-align: center;
    border: none;
    font-size: 14px;
}

/* Selected Weight */
.selected-weight {
    font-weight: bold;
    margin-top: 5px;
    font-size: 19px;
    text-align: start;
}

/* Buttons */
.buttons {
    display: flex;
    gap: 10px;
    margin-top: 30px;
    align-items: center; 
    justify-content: space-between;
    margin-left: 200px;
    margin-right: 200px;
    
}

.btn {
    padding: 8px 15px;
    font-size: 15px;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    min-width: 300px; 
    height: 40px;
}

.add-btn {
    background-color: #6a0dad;
    color: white;
    border: none;
}

.continue-btn {
    border: 2px solid #6a0dad;
    color: #6a0dad;
    background: white;
}

.add-btn:hover {
    background-color: red;
}

.continue-btn:hover {
    background-color: red;
}

.product-description {
    margin-top:  20px ;
    margin-bottom: 15px;
    text-align: start;
}

.product-description h2 {
    display: inline-block; 
    font-size: 25px; 
    font-weight: bold;
    margin-right: 20px; 
}

.product-description p {
    margin-top: 5px; 
    font-size: 15px;
    line-height: 1.6;
}



.container-11{
    background-color: lightpink ;
    width: 100%;
    margin-top: 20px ;
    margin-bottom: 40px ;
}

.card-container{
    margin-top: -50px ;
}
</style>

<body class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-white  fixed-navbar fixed-top">
    <div class=" container-fluid w-200">
        <div class=" d-flex align-items-center w-100 py-2">
           
            <a class="navbar-brand me-3" href="index.php">
                <img src="images/haldiram.png" alt="Haldiram's" >
            </a>

          
            <div class="me-4">
                <h6>Mode:</h6>
                <h5>Delivery</h5>
            </div>

            
            <div class="me-3 ml-80">
                <button class="custom-location-btn border-1 border-danger rounded-pill dropdown-toggle" type="button">
                    <i class="fas fa-map-marker-alt"></i> Noida, Uttar Pradesh
                </button>
            </div>

         
            <!-- <form class="d-flex flex-grow-0  ml-10">
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

           
            <div class="d-flex align-items-center ms-3 font-size-20"> 
                <a href="snacks-add-details.php" class="me-3"><i class="fas fa-shopping-cart"></i></a>
                <a href="user.php" class="me-3"><i class="fas fa-user"></i></a>
                <a href="heart.php" class="me-3"><i class="fas fa-heart"></i></a>
                <button id="menu-btn"><i class="fas fa-bars"></i></button>
            </div>

           
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


        <div class="add-card-details">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img src="images/webp.png" alt="Product Image" class="image">

                    <div class="disclaimer">
                        <p>
                            <span>Disclaimer:</span>
                            Images are for reference purpose only and Haldiram’s reserved the rights for product 
                            packaging/size/name change without prior notice.
                        </p>
                    </div>
                </div>
                
                <div class="col-12 col-md-8">
                    <nav class="breadcrumb">
                        <a href="index.php"> Home </a> > 
                        <a href="healthy-snacking.php"> Savouries </a> > 
                        <span>Mint Makhana</span>
                    </nav>
                    <div class="add">
                        <h1>Mint Makhana</h1>
                        <div class="icon">
                        <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                        <span><i class="fa fa-share" aria-hidden="true"></i></span>  
                        </div>
                    </div>
                    <div class="rate">
                        ₹109.00 (Inclusive of all taxes)
                    </div>

                    <div class="product-info">
                        
                        <div class="input-group">
                            <label>Net Weight:</label>
                            <select>
                                <option>400 gms</option>
                            </select>
                        </div>

                        <div class="input-group">
                            <label>Quantity:</label>
                            <div class="quantity-box">
                                <button class="qty-btn">−</button>
                                <input type="text" value="1">
                                <button class="qty-btn">+</button>
                            </div>
                        </div>

                        <div class="input-group">
                            <label>Delivery By:</label>
                            <input type="text" value="27th Feb" readonly>
                        </div>
                    </div>
                    
                    <p class="selected-weight">Selected Net Weight: <span>400 gms</span></p>

                    <div class="buttons">
                        <button class="btn add-btn">ADD</button>
                        <button class="btn continue-btn">CONTINUE SHOPPING</button>
                    </div>

                    <div class="product-description">
                        <h2>Ingredients</h2> <h2>Specification</h2>
                        <p>Haldiram's Nut Cracker is a premium snack that brings together the goodness of assorted nuts and a flavorful blend of spices. The snack typically includes a variety of nuts such as almonds, cashews, peanuts, and sometimes other nuts like pistachios or walnuts. These nuts are carefully selected for their quality, taste, and crunch.</p>
                        
                        <p>These nuts are seasoned with a perfect mix of spices, ensuring a unique and delicious flavor.</p>
                    </div>
                </div>
        
            </div>
        </div>
    



<div class="container-11">
    <div class="row">
        <div class="col-12">
            <div class="card-container">
                <h1>Related Products</h1>

                <div class="card-row">  
                    <div class="card-1">
                        <img src="images/c1.png" alt="Product 1">
                        <h2>Ratlami Mixture</h2>
                        <div>
                            <span>₹89.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/c2.png" alt="Product 2">
                        <h2>Aloo Bhujia</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹152.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/c3.png" alt="Product 2">
                        <h2>Bhujia</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹160.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/c4.png" alt="Product 2">
                        <h2>Peanut Salted</h2>

                        <div class="text-start">
                            <h3>Starts from</h3>
                        </div>
                        <div>
                            <span>₹95.00</span>
                            <span><i class="fa fa-heart" aria-hidden="true"></i></span> 
                            <span><i class="fa fa-plus-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="card-1">
                        <img src="images/c5.png" alt="Product 2">
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
                        <img src="images/c6.png" alt="Product 2">
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
                    
                </div>
            </div>
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