
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <script src="script.js"></script>
    <section id="header">
        <a style="text-decoration:none;" href="#"><h2 style="color:rgb(8, 148, 20);display:inline-block">e</h2><h2 style="display:inline-block;">PASA</h2><h1 style="color:rgb(50, 7, 193);display:inline-block">L</h1></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </section>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/products/f1.jpg" alt="" width="100%" id="mainimg">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/products/f1.jpg" alt="" width="100%" class="small_img">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f2.jpg" alt="" width="100%" class="small_img">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f3.jpg" alt="" width="100%" class="small_img">
                </div>
                <div class="small-img-col">
                    <img src="img/products/f4.jpg" alt="" width="100%" class="small_img">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home/Tshirt</h6>
            <h4>Men's Fashion T-shirt</h4>
            <h2>NRS 780</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal" onclick="window.location.href='ca.html'">Add to cart</button>
    <form action="https://uat.esewa.com.np/epay/main" method="POST" style="display:inline-block">
    <input value="780" name="tAmt" type="hidden">
    <input value="750" name="amt" type="hidden">
    <input value="10" name="txAmt" type="hidden">
    <input value="10" name="psc" type="hidden">
    <input value="10" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php echo $pid?>" name="pid" type="hidden">
    <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <button class="normal" >Buy Now</button>
    </form>
            <h4>Product Details</h4>
            <span>Whether wearing it for work or play, the Gildan Ultra Cotton Adult
                 T-Shirt is a wardrobe basic that works for just about any occasion. It features a classic fit and a heavyweight fabric with taped neck and shoulders for comfort and durability. You can decorate using screen printing, DTG, heat transfers, dye sublimation or discharge, and companion styles for youth and 
                toddlers make it easy to create matching outfits for the whole family.</span>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Feature Product</h2>
        <p>summer collection new modern design</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct.php'">
                <img src="img/products/f1.jpg" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>cartoon astronaut T-shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>NRS 780
                </h4>
                </div>
            
            <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro" onclick="window.location.href='sproduct1.php'">
            <img src="img/products/f2.jpg" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>cartoon astronaut T-shirts</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>NRS 780
            </h4>
            </div>
        
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
    </div>
    <div class="pro" onclick="window.location.href='sproduct2.php'">
        <img src="img/products/f3.jpg" alt="">
    <div class="des">
        <span>Adidas</span>
        <h5>cartoon astronaut T-shirts</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h4>NRS 780
        </h4>
        </div>
    
    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
</div>
<div class="pro" onclick="window.location.href='sproduct3.php'">
    <img src="img/products/f4.jpg" alt="">
<div class="des">
    <span>Adidas</span>
    <h5>cartoon astronaut T-shirts</h5>
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <h4>NRS 780
    </h4>
    </div>

<a href="#"><i class="fas fa-shopping-cart cart"></i></a>
</div>
    </div>

        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct_c.php'">
                <img src="img/products/n1.jpg" alt="">
            <div class="des">
                <span>Adidas</span>
                <h5>cartoon astronaut T-shirts</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>NRS 1390
                </h4>
                </div>
            
            <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
        </div>
        <div class="pro" onclick="window.location.href='sproduct_c1.php'">
            <img src="img/products/n2.jpg" alt="">
        <div class="des">
            <span>Adidas</span>
            <h5>cartoon astronaut T-shirts</h5>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>NRS 1390
            </h4>
            </div>
        
        <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
    </div>
    <div class="pro" onclick="window.location.href='sproduct_c2.php'">
        <img src="img/products/n3.jpg" alt="">
    <div class="des">
        <span>Adidas</span>
        <h5>cartoon astronaut T-shirts</h5>
        <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <h4>NRS 1390
        </h4>
        </div>
    
    <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
</div>
<div class="pro" onclick="window.location.href='sproduct_c3.php'">
    <img src="img/products/n4.jpg" alt="">
<div class="des">
    <span>Adidas</span>
    <h5>cartoon astronaut T-shirts</h5>
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <h4>NRS 1390
    </h4>
    </div>

<a href="#"><i class="fas fa-shopping-cart cart"></i></a>
</div>
    </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get email updates about our latest shop and <span>special offer</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your Email Address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
   <footer class="section-p1">
    <div class="col">
    <a  class="logo"style="text-decoration:none;" href="#"><h2 style="color:rgb(8, 148, 20);display:inline-block">e</h2><h2 style="display:inline-block;">PASA</h2><h1 style="color:rgb(50, 7, 193);display:inline-block">L</h1></a>
<img src="img/e.PNG" alt="" height="100" width="200">
</div>
    <div class="col">
    <h4>contact</h4>
    <p><strong>Address</strong>:Lagankhel,Kathmandu</p>
    <p><strong>Phone</strong>:01-5534567,9823608732</p>
    <p><strong>Hours</strong>:6 AM-8 PM,sun-sat</p>
    <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us </a>
        <a href="#">Delivery Information </a>
        <a href="#">Privacy Policy</a>
        <a href="#">terms and Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#">View Cart</a>
        <a href="#">Wish List</a>
        <a href="#">Track My order</a>
        <a href="#">Help</a>
    </div>
   </footer>
   <script>
    var MainImg=document.getElementById('mainimg');
    var smallimg=document.getElementsByClassName('small_img');
    smallimg[0].onclick=function(){
        MainImg.src=smallimg[0].src;
    }
    smallimg[1].onclick=function(){
        MainImg.src=smallimg[1].src;
    }
    smallimg[2].onclick=function(){
        MainImg.src=smallimg[2].src;
    }
    smallimg[3].onclick=function(){
        MainImg.src=smallimg[3].src;
    }
   </script>
</body>
</html>