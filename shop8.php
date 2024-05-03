<?php
require "connect.php";
session_start();
// echo $_SESSION['name'];
// echo  $_SESSION['logged_in'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body> 
    <div class="main">
<div id="cart">
    <i class="fa-solid fa-x"></i>
    
    <h2 class="cart-title" style="color: black;">YOUR CART</h2> 
<div class="cart-content">

 
</div>    
<!-- total -->
<div class="cart-total">
    <div class="total-title">Total</div>
    <div class="total-price"></div>
</div>
    <!--buy  -->
<div class="fromdiv">

    </div>
</div>
      
        <div class="nav">
            <div class="uppernav">
                <h4 class="left">Email us : helloworld@gamil.com</h4>
                <h4>FREE WORLDWIDE SHIPPING ON ALL ORDERS OVER $50</h4>
                <h4 class="right">CALL US: 977 9801556487</h4>
            </div>
        <div class="lowernav">
            <div class="social">
               <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
            <img src="mylogo.jpg" alt="">
            <div class="icon">
                <input type="text" class="search">
                <button class="serch-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
               <button class="search-close"><i class="fa-solid fa-x"></i></button>
           
               <?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
    
    echo '
    <p id="log" onclick="logout()" style="display:inline; font-size: 25px; font-weight: bold">' . $_SESSION["name"] . '</p>
    ';
    // echo '<p id="username"> sophan </p>';
    // echo '<p id="username" style="display:inline; font-size: 25px; font-weight: bold" > $_SESSION["name"]</p>';
    // echo '<a href="logout.php"><i class="fa-solid fa-user" id="log" style="color: red;"></i></a>';
} else {
    echo '<a href="login.php"><i class="fa-solid fa-user" id="log"></i></a>';
}
        ?>   
    <!-- <p id="log" onclick="logout()" style="display:inline; font-size: 15px; font-weight:bold;">SOPHAN SHREATHA</p> -->
        
    <i class="fa-solid fa-cart-shopping" id="sc">
        <div class="cartno">3</div>
       </i>
              <!-- <i class="fa-solid fa-cart-shopping" id="sc"> -->
         
          </div>
        </div>
        <div class="lownav">
            <div class="shopitem">
                <h3 class="male">male</h3>
                <h3 class="female">female</h3>
              </div>         
                <li><a  href="index.php">Home</a></li>
                <li><a class="home" href="shop.html">Shop </a><i class="fa-solid fa-angle-down" id="down"></i>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a  href="contact.php">Contact</a></li>
        </div>
        </div>
        <div class="malecontain">
        <div class="shophead" id="male">
            <h1>MEN/BOYS SECTION</h1>
            <p>please click on the arrow left to the shop to see women sectiom</p>
        </div>
 
        <div id="newin">
            <h1>New <samp>IN</samp></h1>
            <div class="ontrendmain">
                <div class="ontrendpdt">
                    <p class="new">New</p>
                    <div class="pdtimg">
                        <!-- <img src="https://static.nike.com/a/images/t_default/d2722bf6-fbb1-4912-ab05-3f75db8c7c9a/air-force-1-07-shoes-KMT0fF.png" alt=""> -->
                        <img class="pdt-img" src="data:image/jpeg;base64,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"" alt="">
                        <img  class="top-img" src="https://cdna.lystit.com/520/650/n/photos/towerlondon/41352cea/new-balance-Grey-327-Kodachrome-Brighton-Mens-Trainer.jpeg">
                    </div>
                    <h3>New balance</h3>
                    <h3 class="title">327 Trainers</h3>
                    <p>Brighton Grey Grey</p>
                    <p class="price">6500 NRS</p>
                    <button class="addto-cart">
                        <span class="IconContainer"> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                          </span>
                          add to cart
                    </button>
                </div>
                <div class="ontrendpdt">
                    <p class="new">New</p>
                    <div class="pdtimg">
                        <img class="pdt-img" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a3e7dead-1ad2-4c40-996d-93ebc9df0fca/dunk-low-retro-mens-shoes-5FQWGR.png">
                 
                        <img  class="top-img" src="https://i.ebayimg.com/images/g/N2sAAOSwfjxksFhi/s-l1200.webp">
                    </div>
                    <h3>Nike</h3>
                    <h3 class="title">Dunk Low Trainers</h3>
                    <p>White Light Carbon Platinum Tint</p>
                    <p class="price">7500 NRS</p>
                    <button class="addto-cart">
                        <span class="IconContainer"> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                          </span>
                          add to cart
                    </button>
                </div>
                <div class="ontrendpdt">
                    <p class="new">New</p>
                    <div class="pdtimg">
                        <img class="pdt-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOqYzzhBETzd46qN2omW_dDGa52xb9zOHT8nVAdSbWu665Fo3-xDWd2ylFcyiDy0957pE&usqp=CAU" alt="">
                        <img  class="top-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc1aXsclusiLCbEemlIQiXz5OUJmcu3WM6bQ&usqp=CAU">
                     </div>
                    <h3>Converse </h3>
                    <h3 class="title">low hike</h3>
                    <p>black</p>
                    <p class="price">2800 NRS</p>
                    <button class="addto-cart">
                        <span class="IconContainer"> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                          </span>
                          add to cart
                    </button>
        </div>
                <div class="ontrendpdt">
                    <p class="new">New</p>
                    <div class="pdtimg">
<img class="pdt-img" src="data:image/jpeg;base64,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">
                        <img  class="top-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSr5X0gaUph6iGVzcYtTN6-TQyoqTy3Spr-Q&usqp=CAU">
                    </div>
                    <h3>Nike </h3>
                    <h3 class="title">Air Max 1 Trainers</h3>
                    <p>light Green</p>
                    <p class="price">6700 NRS</p>
                    <button class="addto-cart">
                        <span class="IconContainer"> 
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                          </span>
                          add to cart
                    </button>
        </div>
                </div>
            






<!-- feature product -->
    
       <div id="ontrend">
        <h1><samp>On</samp> Trend</h1>
       <div class="ontrendmain">
        <div class="ontrendpdt">
            <div class="pdtimg">
                <!-- <img src="https://static.nike.com/a/images/t_default/d2722bf6-fbb1-4912-ab05-3f75db8c7c9a/air-force-1-07-shoes-KMT0fF.png" alt=""> -->
                <img class="pdt-img" src="https://images.stockx.com/360/Nike-Air-Force-1-Low-Double-Nike-Air-Low-White-Black/Images/Nike-Air-Force-1-Low-Double-Nike-Air-Low-White-Black/Lv2/img01.jpg?fm=webp&auto=compress&w=480&dpr=2&updated_at=1634924429&h=320&q=60" alt="">
                <img src="https://cf.shopee.co.id/file/id-11134207-7qukw-lj63hmfrks47a8" class="top-img">
            </div>
            <h3>Nike</h3>
            <h3 class="title">Air force 1</h3>
            <p>White</p>
            <p class="price">5000 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img  class="pdt-img" src="https://www.bfgcdn.com/1500_1500_90/024-1090-0111/vans-old-skool-vr3-sneakers.jpg" alt="" style="mix-blend-mode: darken;">
                <img src="https://img01.ztat.net/article/spp-media-p1/e4d0124bef88484fa9bcac07bbabf051/e3310d4483864689802172783014c7df.jpg?imwidth=762&filter=packshot" class="top-img">
            </div>
            <h3>VANS</h3>
            <h3 class="title">OLD SCHOOL</h3>
            <p>Black</p>
            <p class="price">2500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://images.ctfassets.net/hnk2vsx53n6l/6O5QLhyjBkvl14xoqoY4kv/74bf765f843c376c51dae5e292301514/w0abdibjzb3ymiikmpti.png?fm=webp" alt="" style="mix-blend-mode: darken;">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEm-3YkSp2JhUC-ytXNVDlaRwf-dXIgYzJzg&usqp=CAU" class="top-img">
            </div>
            <h3>on running </h3>
            <h3 class="title">Cloudmonster</h3>
            <p>whitw</p>
            <p class="price">3400 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>

        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4c70105150234ac4b948a8bf01187e0c_9366/Samba_OG_Shoes_Black_B75807_01_standard.jpg" alt="" style="mix-blend-mode: darken;">
    <img src="https://i.insider.com/640b508708f27b001848a8f2?width=1136&format=jpeg" class="top-img">
            </div>
            <h3>Adidas </h3>
            <h3 class="title">adidas samba</h3>
            <p>Black</p>
            <p class="price">2700 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt" >
            <div class="pdtimg">
    <img class="pdt-img" src="https://cdn.media.amplience.net/i/office/5016250000_sd1.jpg?$newhighres$&fmt=auto&qlt=default&fmt.jpeg.interlaced=true" alt="" style="mix-blend-mode: darken;">
    <img src="https://slimages.macysassets.com/is/image/MCY/products/0/optimized/24105830_fpx.tif?wid=1200&fmt=jpeg&qlt=100" class="top-img">
            </div>
            <h3>Office </h3>
            <h3 class="title"> Casey Perforated</h3>
            <p>maroon</p>
            <p class="price">5700</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://s.yimg.com/ny/api/res/1.2/CwmhXtK1sXJWNtakyOgxYw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyOA--/https://media.zenfs.com/en/footwear_news_642/9148b26a9f09a98114ebec4f0777c437" alt="" style="mix-blend-mode: darken;">
    <img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/2eb2f929-1034-4251-b3b2-e0a23e50a4f0/blazer-mid-pro-club-shoes-xCk8SQ.png" class="top-img">
            </div>
            <h3>Nike </h3>
            <h3 class="title">blazer mid 77  </h3>
            <p>white</p>
            <p class="price">5000 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://nb.scene7.com/is/image/NB/mr530sg_nb_02_i?$dw_detail_main_lg$&bgc=f1f1f1&layer=1&bgcolor=f1f1f1&blendMode=mult&scale=10&wid=1600&hei=1600" alt="" style="mix-blend-mode: darken;">
    <img src="https://d2ob0iztsaxy5v.cloudfront.net/product/340381/3403811060m1_zm.jpg" class="top-img">
            </div>
            <h3>new balance </h3>
            <h3 class="title"> 530 men's  </h3>
            <p>white</p>
            <p class="price">4500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt" >
            <div class="pdtimg">
    <img  class="pdt-img" src="https://static.nike.com/a/images/t_prod_ss/w_960,c_limit,f_auto/5597ad5b-b653-4508-8b04-f70dac68fbed/air-jordan-1-dark-mocha-release-date.jpg"  style="mix-blend-mode: darken;">
    <img src="https://i.ebayimg.com/images/g/8h0AAOSwU~tjQqY7/s-l1200.webp" class="top-img">
            </div>
            <h3>Nike </h3>
            <h3 class="title">jordan 1 </h3>
            <p>mocha</p>
            <p class="price">6700 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
       </div>
       </div> 


       <!-- feature product -->
       <div id="ontrend">
        <h1><samp>Feature</samp> Product</h1>
       <div class="ontrendmain">
        <div class="ontrendpdt">
            <div class="pdtimg">
                <!-- <img src="https://static.nike.com/a/images/t_default/d2722bf6-fbb1-4912-ab05-3f75db8c7c9a/air-force-1-07-shoes-KMT0fF.png" alt=""> -->
                <img class="pdt-img" src="https://nb.scene7.com/is/image/NB/gsb550ca_nb_02_i?$dw_detail_main_lg$&bgc=f1f1f1&layer=1&bgcolor=f1f1f1&blendMode=mult&scale=10&wid=1600&hei=1600" alt="">
                <img src="https://i.ebayimg.com/images/g/nzsAAOSw9stiDuPn/s-l1200.webp" class="top-img">
            </div>
            <h3>New Balance</h3>
            <h3 class="title" name="new balace 550">new balance 550</h3>
            <p>black and white</p>
            <p class="price" name="6500">6500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img  class="pdt-img" src="https://cdn.webshopapp.com/shops/350311/files/434398000/1652x2313x1/adidas-yeezy-adidas-yeezy-slide-onyx.jpg" alt="" style="mix-blend-mode: darken;">
                <img src="https://www.originalfook.com/cdn/shop/products/YEEZY-ONYX-SLIDE_grande.jpg?v=1658994581" class="top-img">
            </div>
            <h3>yeezy</h3>
            <h3 class="title" name="yeezy slides" >yeezy slides</h3>
            <p>Black</p>
            <p class="price" name = "2500">2500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://assets.solesense.com/en/images/products/500/balenciaga-speed-trainer-graffiti-black-white-605972w05ge1015_1.jpg" alt="" style="mix-blend-mode: darken;">
    <img src="https://i.pinimg.com/originals/2a/a3/e1/2aa3e12583102dc105cf4c3a6831acb7.jpg" class="top-img">
            </div>
            <h3> balenciaga</h3>
            <h3 class="title" name = "speed trainer"> speed trainer</h3>
            <p>black</p>
            <p class="price" name ="4500">4500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>

        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/e8c121f8-4184-46dc-8fdd-b508f0c6b205/air-jordan-1-university-blue-release-date.jpg" alt="" style="mix-blend-mode: darken;">
    <img src="https://i.pinimg.com/736x/a1/bf/64/a1bf64c5192368da42829716df5dcb6e.jpg" class="top-img">
            </div>
            <h3>Nike</h3>
            <h3 class="title" name ="air jordan 1 ">air jordan 1</h3>
            <p>university blue </p>
            <p class="price" name = "6000">6000 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt" >
            <div class="pdtimg">
    <img class="pdt-img" src="https://www.goldstarshoes.com/MediaThumb/medium/Media/g1305_white-1.jpg" alt="" style="mix-blend-mode: darken;">
    <img src="https://www.goldstarshoes.com/MediaThumb/medium/Media/dash-10-web-2160x1080_(1).png" class="top-img">
            </div>
            <h3>Gold star </h3>
            <h3 class="title" name ="gold star">gold star  </h3>
            <p>white</p>
            <p class="price" name ="1700">1700</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://cdna.lystit.com/photos/yoox/965e2884/fear-of-god-Midnight-blue-Loafers.jpeg" alt="" style="mix-blend-mode: darken; transform: translateY(-40px);">
    <img src="https://slman.com/sites/slman/files/styles/social/public/articles/2022/04/spring-loaders.png?itok=Lebh6OvO" class="top-img">
            </div>
            <h3>H&M</h3>
            <h3 class="title" name ="sporty loafers">sporty loafers </h3>
            <p>black</p>
            <p class="price" name = "3500">3500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt">
            <div class="pdtimg">
    <img class="pdt-img" src="https://nb.scene7.com/is/image/NB/mr530sg_nb_02_i?$dw_detail_main_lg$&bgc=f1f1f1&layer=1&bgcolor=f1f1f1&blendMode=mult&scale=10&wid=1600&hei=1600" alt="" style="mix-blend-mode: darken;">
    <img src="https://d2ob0iztsaxy5v.cloudfront.net/product/340381/3403811060m1_zm.jpg" class="top-img">
            </div>
            <h3>new balance </h3>
            <h3 class="title"> 530 men's  </h3>
            <p>white</p>
            <p class="price">4500 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>
        <div class="ontrendpdt" >
            <div class="pdtimg">
    <img  class="pdt-img" src="data:image/jpeg;base64,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"  style="mix-blend-mode: darken; transform: translateY(15px);">
    <img src="https://i.pinimg.com/736x/70/a2/98/70a298bc769d7f09a7ea249468f44019.jpg" class="top-img">
            </div>
            <h3>vans </h3>
            <h3 class="title" name = "checked">Checkend </h3>
            <p>black&white</p>
            <p class="price" name="3200">3200 NRS</p>
            <button class="addto-cart">
                <span class="IconContainer"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  add to cart
            </button>
        </div>

       </div>
       </div> 
       </div>  
    </div>
    <!-- female section -->
<div class="femalecontain activeshop">
    <div class="shophead " id="female">
        <h1>WOMEN SECTION</h1>
        <p>please click on the arrow left to the shop to see men sectiom</p>
    </div>
     
    <div id="newin">
        <h1>New <samp>IN</samp></h1>
        <div class="ontrendmain">
            <div class="ontrendpdt">
                <p class="new">New</p>
                <div class="pdtimg">
                    <!-- <img src="https://static.nike.com/a/images/t_default/d2722bf6-fbb1-4912-ab05-3f75db8c7c9a/air-force-1-07-shoes-KMT0fF.png" alt=""> -->
                    <img class="pdt-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRry6ikC3up9A8e4GPXGBeaeZPsf7e7NrQXqikKLxkIrA&s">
                    <img  class="top-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5ZcWqXyuwB0SeWVl9nxO5KwPEYaECIsxDNBmK7_sSdA&s">
                </div>
                <h3>ALOHAS</h3>
                <h3 class="title"> Buckle Sandals</h3>
                <p>black white</p>
                <p class="price">6500 NRS</p>
                <button class="addto-cart">
                    <span class="IconContainer"> 
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                      </span>
                      add to cart
                </button>
            </div>
            <div class="ontrendpdt">
                <p class="new">New</p>
                <div class="pdtimg">
                    <img class="pdt-img" src="https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/a3e7dead-1ad2-4c40-996d-93ebc9df0fca/dunk-low-retro-mens-shoes-5FQWGR.png">
             
                    <img  class="top-img" src="https://i.ebayimg.com/images/g/N2sAAOSwfjxksFhi/s-l1200.webp">
                </div>
                <h3>Nike</h3>
                <h3 class="title">Dunk Low Trainers</h3>
                <p>White Light Carbon Platinum Tint</p>
                <p class="price">7500 NRS</p>
                <button class="addto-cart">
                    <span class="IconContainer"> 
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                      </span>
                      add to cart
                </button>
            </div>
            <div class="ontrendpdt">
                <p class="new">New</p>
                <div class="pdtimg">
                    <img class="pdt-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOqYzzhBETzd46qN2omW_dDGa52xb9zOHT8nVAdSbWu665Fo3-xDWd2ylFcyiDy0957pE&usqp=CAU" alt="">
                    <img  class="top-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc1aXsclusiLCbEemlIQiXz5OUJmcu3WM6bQ&usqp=CAU">
                 </div>
                <h3>Converse </h3>
                <h3 class="title">low hike</h3>
                <p>black</p>
                <p class="price">2800 NRS</p>
                <button class="addto-cart">
                    <span class="IconContainer"> 
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                      </span>
                      add to cart
                </button>
    </div>
            <div class="ontrendpdt">
                <p class="new">New</p>
                <div class="pdtimg">
<img class="pdt-img" src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/dc469f6b-b184-4a9f-a415-9e0436a6cff1/air-max-1-lx-shoes-8mc40q.png"> 
                    <img  class="top-img" src="https://static.nike.com/a/videos/t_PDP_1280_v1/f_auto,q_auto:eco,so_2.92/e9655b93-9933-441f-ae12-3ac7d3d7320e/air-max-1-womens-shoes-0vW0ds.jpg"> 
                </div>
                <h3>Nike </h3>
                <h3 class="title">Air Max 1 Trainers</h3>
                <p>pink</p>
                <p class="price">6700 NRS</p>
                <button class="addto-cart">
                    <span class="IconContainer"> 
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                      </span>
                      add to cart
                </button>
    </div>
            </div>
        
<!-- feature product -->

   <div id="ontrend">
    <h1><samp>On</samp> Trend</h1>
   <div class="ontrendmain">
    <div class="ontrendpdt">
        <div class="pdtimg">
            <!-- <img src="https://static.nike.com/a/images/t_default/d2722bf6-fbb1-4912-ab05-3f75db8c7c9a/air-force-1-07-shoes-KMT0fF.png" alt=""> -->
            <img class="pdt-img" src="https://images.stockx.com/360/Nike-Air-Force-1-Low-Double-Nike-Air-Low-White-Black/Images/Nike-Air-Force-1-Low-Double-Nike-Air-Low-White-Black/Lv2/img01.jpg?fm=webp&auto=compress&w=480&dpr=2&updated_at=1634924429&h=320&q=60" alt="">
            <img src="https://cf.shopee.co.id/file/id-11134207-7qukw-lj63hmfrks47a8" class="top-img">
        </div>
        <h3>Nike</h3>
        <h3 class="title">Air force 1</h3>
        <p>White</p>
        <p class="price">5000 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img  class="pdt-img" src="https://img2.ans-media.com/i/840x1260/SS23-OBD3J8-99X_F1.jpg@webp?v=1702385656" alt="" style="mix-blend-mode: darken;">
<img src="https://d2ob0iztsaxy5v.cloudfront.net/product/134982/1349827020m8_zm.jpg" alt="" class="top-img">
        </div>
        <h3>dr martens </h3>
        <h3 class="title"> adrian loafers</h3>
        <p>Black</p>
        <p class="price">4500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://images.fashiola.co.uk/product-list/300x450/miinto/795577166/gabbi2-heels.webp" style="padding: 20px; mix-blend-mode: darken;">
<img src="https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/84ca6c35f3c8cec359293f3d31c84265.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" class="top-img">
        </div>
        <h3>Dior </h3>
        <h3 class="title">high hills</h3>
        <p>sliver</p>
        <p class="price">3400 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>

    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://www.crocs.in/media/catalog/product/2/0/207988_2ds_alt100.jpg?optimize=medium&bg-color=255%2C255%2C255&fit=cover&height=375&width=840&auto=webp&format=pjpg" style="mix-blend-mode: darken; padding: 5px;">
<img src="https://reviewed-com-res.cloudinary.com/image/fetch/s--gfgCfX1u--/b_white,c_fill,cs_srgb,f_auto,fl_progressive.strip_profile,g_auto,h_729,q_auto,w_972/https://reviewed-production.s3.amazonaws.com/1599776140047/crocshero.png" class="top-img">
        </div>
        <h3>crocs </h3>
        <h3 class="title">crocs</h3>
        <p>Cream</p>
        <p class="price">2700 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt" >
        <div class="pdtimg">
<img class="pdt-img" src="https://cdn.media.amplience.net/i/office/4985600000_sd1.jpg?$newhighres$&fmt=auto&qlt=default&fmt.jpeg.interlaced=true" alt="" style="mix-blend-mode: darken;">
<img src="https://ik.imagekit.io/sqhmihmlh/https:/cdn.media.amplience.net/i/office/4985602514_pr1.jpg?ik-sdk-version=javascript-1.3.6&tr=c-limit%2Cw-500%2Ch-%2Cdefault+image-https%3A%2F%2Fik.imagekit.io%2Fsqhmihmlh%2Fmissing_image.jpg" class="top-img">
        </div>
        <h3>Office </h3>
        <h3 class="title">Frenchkiss Two</h3>
        <p>Blak</p>
        <p class="price">5700</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://s.yimg.com/ny/api/res/1.2/CwmhXtK1sXJWNtakyOgxYw--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MDtoPTQyOA--/https://media.zenfs.com/en/footwear_news_642/9148b26a9f09a98114ebec4f0777c437" alt="" style="mix-blend-mode: darken;">
<img src="https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/2eb2f929-1034-4251-b3b2-e0a23e50a4f0/blazer-mid-pro-club-shoes-xCk8SQ.png" class="top-img">
        </div>
        <h3>Nike </h3>
        <h3 class="title">blazer mid 77  </h3>
        <p>white</p>
        <p class="price">5000 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://nb.scene7.com/is/image/NB/mr530sg_nb_02_i?$dw_detail_main_lg$&bgc=f1f1f1&layer=1&bgcolor=f1f1f1&blendMode=mult&scale=10&wid=1600&hei=1600" alt="" style="mix-blend-mode: darken;">
<img src="https://d2ob0iztsaxy5v.cloudfront.net/product/340381/3403811060m1_zm.jpg" class="top-img">
        </div>
        <h3>new balance </h3>
        <h3 class="title"> 530 men's  </h3>
        <p>white</p>
        <p class="price">4500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt" >
        <div class="pdtimg">
<img  class="pdt-img" src="https://cdn.media.amplience.net/i/office/2251252927_sd1.jpg?$newhighres$&fmt=auto&qlt=default&fmt.jpeg.interlaced=true"  style="mix-blend-mode: darken;">
<img src="https://images.asos-media.com/products/air-jordan-1-mid-trainers-in-legend-brown/205243983-3?$n_640w$&wid=513&fit=constrain" class="top-img">
        </div>
        <h3>Nike </h3>
        <h3 class="title">jordan 1 </h3>
        <p>Light Brown</p>
        <p class="price">6700 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
   </div>
   </div> 


   <!-- feature product -->
   <div id="ontrend">
    <h1><samp>Feature</samp> Product</h1>
   <div class="ontrendmain">
    <div class="ontrendpdt">
        <div class="pdtimg">
            <!-- <img src="https://static.nike.com/a/images/t_default/d2722bf6-fbb1-4912-ab05-3f75db8c7c9a/air-force-1-07-shoes-KMT0fF.png" alt=""> -->
            <img class="pdt-img" src="https://nb.scene7.com/is/image/NB/gsb550ca_nb_02_i?$dw_detail_main_lg$&bgc=f1f1f1&layer=1&bgcolor=f1f1f1&blendMode=mult&scale=10&wid=1600&hei=1600" alt="">
            <img src="https://i.ebayimg.com/images/g/nzsAAOSw9stiDuPn/s-l1200.webp" class="top-img">
        </div>
        <h3>New Balance</h3>
        <h3 class="title" name="new balace 550">new balance 550</h3>
        <p>black and white</p>
        <p class="price" name="6500">6500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img  class="pdt-img" src="https://cdn.webshopapp.com/shops/350311/files/434398000/1652x2313x1/adidas-yeezy-adidas-yeezy-slide-onyx.jpg" alt="" style="mix-blend-mode: darken;">
            <img src="https://www.originalfook.com/cdn/shop/products/YEEZY-ONYX-SLIDE_grande.jpg?v=1658994581" class="top-img">
        </div>
        <h3>yeezy</h3>
        <h3 class="title" name="yeezy slides" >yeezy slides</h3>
        <p>Black</p>
        <p class="price" name = "2500">2500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://cdn.media.amplience.net/v/office/4887600000_vd1" alt="" style="mix-blend-mode: darken;">
<img src="https://cdn.media.amplience.net/i/office/4887600000_md1.jpg?$newhighres$&fmt=auto&qlt=default&fmt.jpeg.interlaced=true" class="top-img">
        </div>
        <h3> Office</h3>
        <h3 class="title" name = "speed trainer"> Moon Strappy 2 </h3>
        <p>black</p>
        <p class="price" name ="4500">4500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>

    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://static.nike.com/a/images/t_prod_ss/w_640,c_limit,f_auto/e8c121f8-4184-46dc-8fdd-b508f0c6b205/air-jordan-1-university-blue-release-date.jpg" alt="" style="mix-blend-mode: darken;">
<img src="https://i.pinimg.com/736x/a1/bf/64/a1bf64c5192368da42829716df5dcb6e.jpg" class="top-img">
        </div>
        <h3>Nike</h3>
        <h3 class="title" name ="air jordan 1 ">air jordan 1</h3>
        <p>university blue </p>
        <p class="price" name = "6000">6000 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt" >
        <div class="pdtimg">
<img class="pdt-img" src="https://cdn.media.amplience.net/i/office/5153700371_sd1.jpg?$newhighres$&fmt=auto&qlt=default&fmt.jpeg.interlaced=true" alt="" style="mix-blend-mode: darken;">
<img src="https://di2ponv0v5otw.cloudfront.net/posts/2024/01/19/65aaf650c5df6c5fb2b4cccd/m_wp_65aaf660932a8a74d2e8d7c2.webp" class="top-img">
        </div>
        <h3>Dior </h3>
        <h3 class="title" name ="gold star">Fiesta Bow  </h3>
        <p>black</p>
        <p class="price" name ="1700">1700</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFusIrjJ8pNLE7jrHKnpNzjbKM4AV2iYopmNBrKB11xQ&s" alt="" style="mix-blend-mode: darken;">
<img src="https://lp2.hm.com/hmgoepprod?set=format%5Bwebp%5D%2Cquality%5B79%5D%2Csource%5B%2Fb4%2F39%2Fb4398fa6627a7965fcf67a49cb5f586d8d26202c.jpg%5D%2Corigin%5Bdam%5D%2Ccategory%5B%5D%2Ctype%5BDESCRIPTIVESTILLLIFE%5D%2Cres%5Bm%5D%2Chmver%5B2%5D&call=url%5Bfile%3A%2Fproduct%2Fmobilemain%5D" class="top-img">
        </div>
        <h3>H&M</h3>
        <h3 class="title" name ="sporty loafers">sporty loafers </h3>
        <p>black</p>
        <p class="price" name = "3500">3500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt">
        <div class="pdtimg">
<img class="pdt-img" src="https://nb.scene7.com/is/image/NB/mr530sg_nb_02_i?$dw_detail_main_lg$&bgc=f1f1f1&layer=1&bgcolor=f1f1f1&blendMode=mult&scale=10&wid=1600&hei=1600" alt="" style="mix-blend-mode: darken;">
<img src="https://d2ob0iztsaxy5v.cloudfront.net/product/340381/3403811060m1_zm.jpg" class="top-img">
        </div>
        <h3>new balance </h3>
        <h3 class="title"> 530 men's  </h3>
        <p>white</p>
        <p class="price">4500 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>
    <div class="ontrendpdt" >
        <div class="pdtimg">
<img  class="pdt-img" src="data:image/jpeg;base64,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"  style="mix-blend-mode: darken; transform: translateY(15px);">
<img src="https://i.pinimg.com/736x/70/a2/98/70a298bc769d7f09a7ea249468f44019.jpg" class="top-img">
        </div>
        <h3>vans </h3>
        <h3 class="title" name = "checked">Checkend </h3>
        <p>black&white</p>
        <p class="price" name="3200">3200 NRS</p>
        <button class="addto-cart">
            <span class="IconContainer"> 
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
              </span>
              add to cart
        </button>
    </div>

   </div>
   </div> 
   </div>  

</div>
<!-- part 9 -->
<div id="footer">
<div class="footerdiv">
  <img src="mylogo.jpg" >
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, libero. Non eveniet aspernatur dolorum dignissimos?</p>
  <div class="soc">
    <a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-pinterest"></i>
    <i class="fa-brands fa-twitter"></i>
  </div>

</div>
<div class="footerdiv">
  <h2>Home</h2>
  <h2>Shop</h2>
  <h2>Categories</h2>
  <h2>Blogs</h2>
  <h2>About</h2>
  <h2>Contact us</h2>
</div>
<div class="footerdiv">
  <h2>Terms & Conditions </h2>
  <h2>Refund policy</h2>
  <h2>privacy policy</h2>
  <h2>Shopping policy</h2>
  <h2>Affilate</h2>
  <h2>partner us</h2>
</div>
<div class=" infro">
  <h1>Payment Servie</h1>
  <div class="pay">
  <a href=""><img src="data:image/jpeg;base64,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" alt=""></a>
  <a href=""><img src="data:image/png;base64,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" alt=""></a>
  <a href=""><img src="data:image/png;base64,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" alt=""></a>
</div>
</div>
</div>

    </div>
       <script src="shop1.js"> 
          </script>
          <script src="cart.js"></script>
</body>
</html>