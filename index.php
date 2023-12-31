<?php
session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else{
    header("location:/signin.php");
}
?>




<?php

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <link href="jquery-ui-1.13.2\jquery-ui-1.13.2\jquery-ui.css"  rel="stylesheet">
    <script src="jquery-ui-1.13.2\jquery-ui-1.13.2\jquery-ui.js"></script>
</head>
<style>

/* CAROUSEL */

.bg-image {
  
  /* Add the blur effect */
  filter: blur(5px);
  -webkit-filter: blur(4px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}



  .card{
    border: none;
    transition: all 0.3s;
    border-radius: 50%;
  }

  .card:hover{
    background-color: rgba(128, 126, 125, 0.292);
    transform: scale(1.15);
  
  }


  .wrapper{
    max-height: 300px;
    /* border: 1px solid #ddd; */
    display: flex;
    overflow-x: auto;
  }

  .wrapper::-webkit-scrollbar{
    width: 0;
    display: none;

  }

  .wrapper .item{
    min-width: 300px;
    height: 300px;
    /* line-height: 300px; */
    text-align: center;
    background-color: rgba(13, 12, 12, 0.601);
    margin-right: 10px;
   

  }
 
  
</style>

<body>

    <!-- Nav Bar  -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" style="height: auto;">
        <div class="container-fluid">
          <img src="img1\PIZZA MANIA-logos_transparent.png" alt="Los Angeles" class="logo" height="90px" width="150px" >
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="review.php">Reviews</a>
                  <li class="nav-item">
                  <h4><a href="logout.php" style="float:right; color:violet; margin-right:20px; margin-bottom:20px;">Logout</a></h4>
                  </li>
            </ul>
          </div>
        </div>
      </nav>






      <!-- Carousel -->
<div id="demo" class="carousel slide " data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner mt-5 w-100% " style=" opacity: 0.7;">
      <div class="carousel-item active" >
        <div class="bg-image" style="height: 650px; width: 100%;"><img src="img1\carousel 1.jpg"></div>

          <div class="bg-text">
            <h2>PIZZA MANIA</h2>
            <h1 style="font-size:50px">Enjoy Your Pizza In Town</h1>
            <p>CHOOSE YOUR IDEAL PORTION OR SIZE</p>
          </div>
      </div>
      <div class="carousel-item" >
        <img src="img1\carousel 2.jpg" alt="Chicago" class="d-block" style="width:100%;  height: 650px;">
        <div class="carousel-caption" style="font-size: 50px; color: white;">
          <h3>PIZZA MANIA</h3>
          <p>The Best Place To Satisfy Your Tummy</p>
        </div> 
      </div>
      <div class="carousel-item" >
        <div class="bg-image" style="height:  650px; "><img src="img1\carousel 3.jpg" style="width: 100%; height: 650px;"></div>

          <div class="bg-text">
            <h2>PIZZA MANIA</h2>
            <h1 style="font-size:50px">Stay Home We Deliver</h1>
            <p>QUALITY FOOD</p>
          </div>
      </div>
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>




  <!-- <div class="menu mt-5" style="display: flex; justify-content: center;">
    <h1 style="font-size: 50px; font-family: Verdana, Geneva, Tahoma, sans-serif;">OUR MENU</h1>
  </div> -->


  <!-- <div class="container mt-5">
    <div class="row">
    <div class="col-md-2" style="align-items: center;">          
    <img src="pizza-png-19324.png" class="rounded" alt="Cinque Terre" width="100" height="50"> 
    <h3 >PIZZA</h3>
    </div>
     
    <div class="col-md-2"> 
    <img src="img\category2.png" class="rounded" alt="Cinque Terre" width="100" height="50"> 
    <h3 >PIZZA</h3>
    </div>
     
    <div class="col-md-2">
    <img src="img\category3.png" class="rounded" alt="Cinque Terre" width="100" height="50"> 
    <h3 >PIZZA</h3>
    </div>
     
    <div class="col-md-2">
    <img src="img\category4.png" class="rounded" alt="Cinque Terre" width="100" height="50"> 
    <h3 >PIZZA</h3>
  </div>

    <div class="col-md-2">
      <img src="img\category5.png" class="rounded" alt="Cinque Terre" width="100" height="50"> 
      <h3 >PIZZA</h3>
    </div>

    <div class="col-md-2">
      <img src="img\category6.png" class="rounded" alt="Cinque Terre" width="100" height="50"> 
      <h3 >PIZZA</h3>
    </div>


</div>

  </div> -->




 <!-- FULL MENU -->


  <section class="our-menu p-4">
    <div class="container text-center">
      <h2 class="pb-4 mt-4" style="font-size: 50px;">Our Menu</h2>
      <div class="row">

    

  <div class="col-6 col-sm-2 mb-4 mb-lg-0 ">
    <div class="card" id="pizzaid">
      <div class="cat-imgage" style="border: 5px; ">
          <img src="img1\category1.png" class="img-fluid">
      </div>
      <div class="cat-title">
        <a href="#"  style="text-decoration: none; color: aliceblue;">Pizza</a>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-2 mb-4 mb-lg-0">
    <div class="card" id="saucesid">
      <div class="cat-imgage">
          <img src="img1\category2.png" class="img-fluid">
      </div>
      <div class="cat-title">
        <a href="#" style="text-decoration: none; color: aliceblue;">Sauces</a>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-2 mb-4 mb-lg-0">
    <div class="card" id="comboid">
      <div class="cat-imgage">
          <img src="img1\category3.png" class="img-fluid">
      </div>
      <div class="cat-title">
        <a href="#" style="text-decoration: none; color: aliceblue;">Combo</a>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-2 mb-4 mb-lg-0">
    <div class="card" id="kidsid">
      <div class="cat-imgage">
          <img src="img1\category4.png" class="img-fluid">
      </div>
      <div class="cat-title">
        <a href="#" style="text-decoration: none; color: aliceblue;">Kids menus</a>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-2 mb-4 mb-lg-0">
    <div class="card">
      <div class="cat-imgage">
          <img src="img1\category5.png" class="img-fluid">
      </div>
      <div class="cat-title">
        <a href="#" style="text-decoration: none; color: aliceblue;">Chicken</a>
      </div>
    </div>
  </div>

  <div class="col-6 col-sm-2 mb-4 mb-lg-0">
    <div class="card" id="boxid">
      <div class="cat-imgage">
          <img src="img1\category6.png" class="img-fluid">
      </div>
      <div class="cat-title">
        <a href="#" style="text-decoration: none; color: aliceblue;">Box meal</a>
      </div>
    </div>
  </div>


</div>
</div>
</section>





<!-- PIZZA MENU -->
<div class="container" id="pizzamenu" style="display: none;">
  <div class="wrapper span-12">
    <div class="item">
      <img src="img1\sausage-pizza-margherita-hamburger-calzone-sausage-pizza-b506827d6e06138c09b01ef59720d945.png" class="img-fluid"  style="height: 195px; width: 210px;">
      <h5 style="color: yellow;">MARGITA PIZZA</h5>
      <h6>&#8377;300</h6>
      <a href="#" class="btn btn-primary">Order Now </a>
  </div>
    <div class="item">
        <img src="img1\pizza-png-19310.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">CHEESE PIZZA</h5>
        <h6>&#8377;300</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\fresh veggie.png" class="img-fluid "  style="height: 194px; width: 210px;">
        <h5 style="color: yellow;">FRESH VEGGIE PIZZA</h5>
        <h6>&#8377;300</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\pngegg.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">PEPPERONI PIZZA</h5>
        <h6>&#8377;300</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\pizza-paneer-tikka-vegetarian-cuisine-paratha-pizza-5e2c2d184ae1a3be212ae15f56f266af.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">SPICY PANEER PIZZA</h5>
        <h6>&#8377;300</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\303-3035788_hawaiian-bbq-chicken-bbq-chicken-pizza-png.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">BBQ CHICKEN PIZZA</h5>
        <h6>&#8377;300</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
      <img src="img1\pngkit_veg-pizza-png_2542315.png" class="img-fluid"  style="height: 195px; width: 210px;">
      <h5 style="color: yellow;">VEG MEXICAN PIZZA</h5>
      <h6>&#8377;300</h6>
      <a href="#" class="btn btn-primary">Order Now </a>
    </div>
  </div>
  
</div>



<!-- COMBO MENU -->

<div class="container mt-3" id="combomenu" style="display: none;">
  <div class="wrapper span-12">
    <div class="item">
      <img src="img1\pngkit_hamburger-png_355622.png" class="img-fluid"  style="height: 195px; width: 210px;">
      <h5 style="color: yellow;">VEG SURPRISE</h5>
      <h6>&#8377;159</h6>
      <a href="#" class="btn btn-primary">Order Now </a>
  </div>
    <div class="item">
        <img src="img1\new b.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">GRILL CHICKEN</h5>
        <h6>&#8377;169</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\burger king.png" class="img-fluid "  style="height: 194px; width: 210px;">
        <h5 style="color: yellow;">CRISPY VEG</h5>
        <h6>&#8377;149</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\VEGGIE-FILET-BURGER-L-MEAL.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">CHICKEN CHILLI CHEESE</h5>
        <h6>&#8377;199</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\Combo-Box-copy-768x768.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">CHICKEN TANDOOR GRILL</h5>
        <h6>&#8377;229</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\special combo.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">DOUBLE CHEESE COMBO</h5>
        <h6>&#8377;329</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    
  </div>
  
</div>




<!-- kids meni -->

<div class="container mt-3" id="kidsmenu" style="display: none;">
  <div class="wrapper span-12">
    <div class="item">
      <img src="img1\kids pizza.png" class="img-fluid"  style="height: 195px; width: 210px;">
      <h5 style="color: yellow;">PIZZA</h5>
      <h6>&#8377;139</h6>
      <a href="#" class="btn btn-primary">Order Now </a>
  </div>
    <div class="item">
        <img src="img1\spaghetti.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">SPAGHETTI AND MEATBALLS</h5>
        <h6>&#8377;149</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\french-fries-buffalo-wing-thai-cuisine-fast-food-tornado-potato-hd-fries-aa7886bd447ed271ca110f0da0b98560.png" class="img-fluid "  style="height: 194px; width: 210px;">
        <h5 style="color: yellow;">FRENCH FRIES</h5>
        <h6>&#8377;99</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\—Pngtree—breakfast snack barbecue chicken nuggets_5813853.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">CHICKEN NUGGETS</h5>
        <h6>&#8377;189</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\015g1hqrgnmgva2u9889r4381m.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">Alfredo PASTA</h5>
        <h6>&#8377;169</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    <div class="item">
        <img src="img1\sandwich.png" class="img-fluid"  style="height: 195px; width: 210px;">
        <h5 style="color: yellow;">SANDWICH</h5>
        <h6>&#8377;129</h6>
        <a href="#" class="btn btn-primary">Order Now </a>
    </div>
    
  </div>
  
</div>



<!-- sauces -->
<div class="container mt-3" id="saucesmenu" style="display: none;">
  <div class="wrapper span-12">
    <h1 style="text-align: center;">CURRENTLY UNAVAILABLE</h1>
  </div>
</div>


<!-- BOX MEAL -->
<div class="container mt-3" id="boxmenu" style="display: none;">
  <div class="wrapper span-12">
    <h1 style="text-align: center;">CURRENTLY UNAVAILABLE</h1>
  </div>
</div>






<!-- WE PRIDE OURSELVES -->

<div class="container mt-4">
  <div class="row">
  <div class="col-lg-6">
    <img src="img1\img-1.png" class="img-fluid" height="300px" width="600px">
  </div>
  <div class="col-lg-6 mt-4">
    <h3 style="color: rgb(45, 169, 45); font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">We Pride Ourselves On Making<br> Real Food From The Best<br> Ingredients.</h3>

    <br>
    <p style="font-family: cursive; font-size: 18px;">Pizza Restaurant is more than just a place to eat. It’s where you can enjoy the best pizza made from scratch with the finest ingredients. We make our dough daily, hand-toss it to order, and bake it in our stone oven for a perfect crust. We use 100% real cheese, premium meats, and fresh veggies to top our pizzas with delicious flavors. Whether you want a classic or something new, we have a pizza for you. And don’t forget our sauces, salads, and desserts to complete your meal. Come to Pizza Restaurant and taste the love in every slice </p>
  </div>
</div>
</div>






<div class="container mt-4 ">
  <div class="row">
    <div class="col-lg-8">
      <h3 style="color: orange; margin-top: 50px;">30 minutes, or pizza for free</h3>
      <p>If we can't deliver a pizza to you within 30 minutes we will give away one<br>pizza from your order for free.</p>
      <br>
      <h3 style="color: orange;">Delivery is valid for orders<br> starting from &#8377;200</h3>
      <p>we can deliver your pizza, provided that the cost of the ordered<br> pizzas is atleast &#8377;200.</p>
      <br>
      <h3 style="color: orange;">&#8377;2000 maximum amount<br> when paying in cash</h3>
      <p>we will be able to accept your order, provided that when paying in cash<br> the amount will not exceed &#8377;2000.</p>

    </div>
  <div class="col-lg-4">
    <img src="img1\deliverey_boy852.png" class="img-fluid" height="300px" style="filter: drop-shadow(2px 2px 20px rgb(212, 255, 0));">
  </div>
</div>
</div>






<div class="container mt-4">
  <div class="row">
    <div class="col-md-6" style="text-align: center;">
      <h1 style="background-color: orange; color: #ddd; border-radius: 8px;">RESERVATION</h1>
      <br>
      <h3>Opening Times</h3>
      <h6>Open 7 Days a Week</h6>
      <br>

      <img src="img1\time table.png" class="img-fluid" height="150px">
      <br><br>
      <div class="container mt-3">

  
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
          Book Now
        </button>
      </div>

    </div>
    <div class="col-md-6">
      <img src="img1\new pizza.png" class="img-fluid" height="300px">
    </div>
  </div>
</div>




























<!-- FOOTER -->

<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5" style="height: 250px;">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #3f51b5">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">About us</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Products</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Awards</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Help</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="#!" class="text-white">Contact</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
              distinctio earum repellat quaerat voluptatibus placeat nam,
              commodi optio pariatur est quia magnam eum harum corrupti
              dicta, aliquam sequi voluptate quas.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </section>
      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         >MDBootstrap.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->








<!-- FORM -->

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">BOOK YOUR TABLE NOW</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <!-- FORM -->
        <div class="container mt-4">
        <div class="row">
        <div class="col-md-6">
            <form action="index.php" method="POST">
                <div class="mb-3 mt-3">
                  <label for="name">NAME:</label>
                  <input type="first name" class="form-control" id="name" placeholder="NAME" name="name">
                </div>


                <div class="mb-3">
                    <label for="text">EMAIL ADDRESS:</label>
                    <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email">
                  </div>

                  <div class="mb-3">
                    <label for="text">PHONE NUMBER:</label>
                    <input type="number" class="form-control" id="numb" placeholder="PHONE NUMBER" name="phone">
                  </div>
                  
                  <div class="mb-3">
                    <label for="text">SELECT DATE AND TIME:</label>
                    <input type="datetime-local" class="form-control" id="cal" placeholder="Date and Time" name="date">
                  </div>

                  

                <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
            </form>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


  
  
    
</body>
<script type="text/javascript">
  document.getElementById("pizzaid").onclick=function(){

      document.getElementById("pizzamenu").style.display="block";
      document.getElementById("combomenu").style.display="none";
      document.getElementById("kidsmenu").style.display="none";
      document.getElementById("saucesmenu").style.display="none";
      document.getElementById("boxmenu").style.display="none";
     
     
  }

  


  $("#pizzaid").click(function() {
    $('html,body').animate({
        scrollTop: $("#pizzamenu").offset().top},
        'fast');
});
  


document.getElementById("comboid").onclick=function(){

document.getElementById("combomenu").style.display="block";
document.getElementById("pizzamenu").style.display="none";
document.getElementById("kidsmenu").style.display="none";
document.getElementById("saucesmenu").style.display="none";
document.getElementById("boxmenu").style.display="none";


}



document.getElementById("kidsid").onclick=function(){

document.getElementById("kidsmenu").style.display="block";
document.getElementById("combomenu").style.display="none";
document.getElementById("pizzamenu").style.display="none";
document.getElementById("saucesmenu").style.display="none";
document.getElementById("boxmenu").style.display="none";


}

document.getElementById("saucesid").onclick=function(){

document.getElementById("saucesmenu").style.display="block";
document.getElementById("combomenu").style.display="none";
document.getElementById("pizzamenu").style.display="none";
document.getElementById("kidsmenu").style.display="none";
document.getElementById("boxmenu").style.display="none";



}


document.getElementById("boxid").onclick=function(){

document.getElementById("boxmenu").style.display="block";
document.getElementById("combomenu").style.display="none";
document.getElementById("pizzamenu").style.display="none";
document.getElementById("kidsmenu").style.display="none";
document.getElementById("saucesmenu").style.display="none";


}



</script>
</html>


<?php

if(isset($_POST['submit'])){

  include ('dbcon.php');
  
  $name= $_POST['name'];
  
  $email= $_POST['email'];
  
  $phone= $_POST['phone'];
  
  $date= $_POST['date'];
  
  
  $qry="INSERT INTO `book`(`id`, `name`, `email`, `phone`, `date`) VALUES (NULL,'$name','$email','$phone','$date')";
  
  $run= mysqli_query($conn,$qry); 
  
  if($run == true){
  
       ?>
  
     <script>
        alert('Data Inserted Successfully');
  
  
        </script>
        <?php
  }
}
?>
