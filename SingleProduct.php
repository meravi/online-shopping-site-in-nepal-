
<!DOCTYPE html><html lang='en' class=''>
<head>
       
    <link rel="stylesheet" href="css/pygments.css" />
	<link rel="stylesheet" href="css/easyzoom.css" />
    <script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/ArnoldsK/pen/vXYGap?depth=everything&order=popularity&page=9&q=product&show_forks=false" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<style class="cp-pen-styles">@import "https://fonts.googleapis.com/css?family=Open+Sans&subset=latin-ext";
* {
  box-sizing: border-box;
}

body {
  font-family: 'Open Sans', sans-serif;
  font-size: 14px;
}

a {
  color: #666;
  text-decoration: none;
}
a:hover {
  color: gray;
  text-decoration: underline;
}

b, strong, h1, h2, h3, h4, h5, h6 {
  font-weight: bold;
}

.hidden {
  display: none;
}

.icon {
  width: 18px;
  height: 18px;
}

small {
  font-size: 10px;
  color: #666;
}

p {
  margin: 0.5em 0;
}

img {
  max-width: 100%;
  height: auto;
}

header {
  background: #eee;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
header #brand a, header #menu a, header #cart a {
  display: block;
  padding: 10px;
  margin: 10px;
}
header #brand {
  font-weight: bold;
  font-size: 18px;
}
header #brand a {
  text-decoration: none;
}
header #menu {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
header #menu .trigger {
  display: none;
}
@media only screen and (max-width: 959px) {
  header #menu .trigger {
    display: block;
  }
}
header #menu .links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}
@media only screen and (max-width: 959px) {
  header #menu .links {
    display: none;
  }
}
header #menu.open {
  background: #fff;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
  border-bottom: 10px solid #000;
  padding-bottom: 20px;
}
header #menu.open .links {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  margin-left: 58px;
}
header #menu.open .trigger {
  display: table;
}
header #cart a {
  text-decoration: none;
  position: relative;
}
header #cart a:hover .cart-item-count {
  background: #c4c4c4;
}
header #cart .cart-item-count {
  position: absolute;
  top: 50%;
  margin-top: -8px;
  left: -16px;
  width: 16px;
  height: 16px;
  line-height: 16px;
  border-radius: 50%;
  background: #aaa;
  font-size: 10px;
  color: #fff;
  text-align: center;
}

main .section {
  padding: 40px 0;
}
main .section.section-gray {
  background: #eee;
}
main .section .section-title {
  text-align: center;
  font-size: 20px;
  margin-bottom: 25px;
}
main .section .section-content {
  width: 70%;
  max-width: 1024px;
  margin: 0 auto;
  position: relative;
}
@media only screen and (max-width: 959px) {
  main .section .section-content {
    width: calc(100% - 80px);
  }
}

/** Product details */
.product-details {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-pack: distribute;
      justify-content: space-around;
}
.product-details .product-images {
  width: 50%;
}
@media only screen and (max-width: 959px) {
  .product-details .product-images {
    width: 100%;
  }
}
.product-details .product-images > li {
  display: inline-block;
  width: 64px;
  height: product-dimenstions(64px);
  overflow: hidden;
  margin: 5px;
}
.product-details .product-images > li.preview {
  width: 100%;
  height: auto;
  margin: 0;
}
.product-details .product-images img {
  display: block;
  width: 100%;
}
.product-details .product-info {
  width: 40%;
  margin-left: 10%;
}
@media only screen and (max-width: 959px) {
  .product-details .product-info {
    width: 100%;
    margin-left: 0;
  }
}
.product-details .product-info > li {
  margin: 10px 0;
}
.product-details .product-info .product-name {
  font-size: 20px;
  font-weight: bold;
}
.product-details .product-info .product-price {
  font-size: 18px;
  color: #666;
}
.product-details .product-info .product-attributes {
  width: 66%;
  margin-top: 40px;
}
.product-details .product-info .product-addtocart {
  width: 66%;
  margin: 20px 0 40px;
}
@media only screen and (max-width: 959px) {
  .product-details .product-info .product-addtocart {
    width: 33%;
  }
}
.product-details .product-info .product-addtocart button {
  width: 100%;
  cursor: pointer;
  background: #000;
  color: #fff;
  display: block;
  border: none;
  outline: none;
  padding: 10px;
}
.product-details .product-info .product-addtocart button:hover {
  background: #1a1a1a;
}
.product-details .product-info .product-description {
  font-size: 12px;
}

/** Product list */
.product-list {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

/** Product */
.product {
  display: block;
  width: 150px;
  height: calc($value + $value * 0.1);
  margin: 5px;
  overflow: hidden;
  text-align: center;
}
@media only screen and (max-width: 767px) {
  .product {
    width: 280px;
    height: calc($value + $value * 0.1);
  }
}
@media only screen and (min-width: 1359px) {
  .product {
    width: 210px;
    height: calc($value + $value * 0.1);
  }
}
.product .product-image {
  background: #eee;
}
.product .product-image img {
  display: block;
  width: 100%;
}
.product .product-name {
  font-weight: bold;
  margin: 10px 0 5px;
}

a.product {
  color: #000;
  text-decoration: none;
}

/** Fields and forms */
.fields > li {
  margin-bottom: 10px;
}
.fields .field-name {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

label {
  cursor: pointer;
  white-space: nowrap;
}
</style>
 
    <style>
    .easyzoom {
    float: left;
}
.easyzoom img {
    display: block;
}


/* Shrink wrap strategy 2 */
.easyzoom {
    display: inline-block;
}
.easyzoom img {
    vertical-align: bottom;
}
    </style>
  
    </head>
    <body>
<header>
    <div id="brand"><a href="javascript:void(0)">Brand</a></div>
    <nav id="menu">
        <ul class="links">
            <li><a href="javascript:void(0)">Store</a></li>
            <li><a href="javascript:void(0)">Collections</a></li>
            <li><a href="javascript:void(0)">About</a></li>
            <li><a href="javascript:void(0)">Contact</a></li>
        </ul>
        <a href="javascript:void(0)" class="trigger">
            <img class="icon" src="http://image.flaticon.com/icons/svg/121/121077.svg" alt="Open menu">
            <img class="icon hidden" src="http://image.flaticon.com/icons/svg/149/149701.svg" alt="Close menu">
        </a>
    </nav>
    <div id="cart">
        <a href="javascript:void(0)">
            <img class="icon" src="http://image.flaticon.com/icons/svg/79/79785.svg" alt="Cart">
            <span class="cart-item-count">4</span><!-- Limit display to 99 -->
        </a>
    </div>
</header>

<main>
    <div class="section section-gray">
        <?php include "NepdevSetting/Config.php";
        $NepdevPid = $_GET['id'];
        $NepdevFrontDis = $NepdevJDLight->NepdevSingleProduct($NepdevPid);
        $NepdevFrontFetch = $NepdevFrontDis->fetch_assoc();
        
        if(isset($_POST['AddToCart']))
        {
          
            @session_start();
            $_SESSION['user_cart'] = "On";
             $sid = session_id();
            $ProQty= $_POST['ProQty'];
            $ProSize = $_POST['ProSize'];
            $NepdevSuccessCart =  $NepdevJDLight->NepdevCart($NepdevPid,$ProQty,$ProSize,$sid);
            if($NepdevSuccessCart==true)
            {
                echo "<script>alert('Success Added To Your cart'); window.location='Index.php';</script>";
            }
            
        }
        ?>
        <div class="section-content">
            <form method="post">
            <div class="product-details">
                <ul class="product-images">
                    <li class="preview"><img src="meadmin/pro_img/<?php echo $NepdevFrontFetch['ProImage']; ?>" alt=""></li>
                    <!-- Don't show small pictures if there's only 1 -->
                    <li> 
                        <a href="javascript:void(0)"><img src="meadmin/pro_img/<?php echo $NepdevFrontFetch['ProImage']; ?>" alt=""></a>
                    </li>
       </ul>
                <ul class="product-info">
                    <li class="product-name"><?php echo $NepdevFrontFetch['ProName']; ?></li>
                    <li class="product-price"><span>Rs </span><span><?php echo $NepdevFrontFetch['ProNewPrice']; ?></span></li>
                    <li class="product-price"><del><span>Rs </span><span><?php echo $NepdevFrontFetch['ProOldPrice']; ?></span></del></li>
                    
                     <li class="product-price"><span>Brand: </span><span><?php echo $NepdevFrontFetch['ProBrand']; ?></span></li>
                     <li class="product-price"><span>Category: </span><span><?php echo $NepdevFrontFetch['ProCat']; ?></span></li>
        
<!--
                    <li class="product-price"><span>QTY </span><span><input type="number" name="ProQty" value="1"></span></li>
                    <li class="product-addtocart">
                       <input type="submit" name="AddToCart" value="Add To Cart">
                    </li>
-->
                    <li class="product-description">
                        <h2>Product Overview</h2>
                        <p><?php echo $NepdevFrontFetch['ProOverview']; ?></p>
                    </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    
    <div class="section">
        <div class="section-title"><h2>Check Out More Hats</h2></div>
        <div class="section-content">
            <ul class="product-list">
                <li>
                    <a href="javascript:void(0)" class="product">
                        <div class="product-image"><img src="http://static.zara.net/photos///2016/I/0/1/p/6756/201/800/2/w/1024/6756201800_2_6_1.jpg?ts=1472203990151" alt=""></div>
                        <div class="product-name">Knit Beanie</div>
                        <div class="product-price"><span>€</span><span>20.00</span></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</main>

    
     
    <script src="js/jquery.elevatezoom.js"></script>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script >var Chef = {
    init: function() {
        this.productImagePreview();
        this.menuToggle();
        this.misc();
    },
    
    productImagePreview: function() {
        $(document).on('click', '.product-images li', function() {
            if (!$(this).hasClass('preview')) {
                var src = $(this).find('img').attr('src');
                $('.product-images .preview img').attr('src', src);
            }
        });
    },
    
    menuToggle: function() {
        $(document).on('click', '#menu .trigger', function() {
            // Toggle open and close icons
            $(this).find('img').each(function() {
                if ($(this).hasClass('hidden')) {
                    $(this).removeClass('hidden');
                } else {
                    $(this).addClass('hidden');
                }
            });
            
            // Toggle menu links
            $(this).siblings('.links').stop(true, true).slideToggle(200);
            
            // Toggle open class
            $('#menu').toggleClass('open');
       });
    },
    
    misc: function() {
        // Misc stuff
        
        for (var i = 1; i <= 3; i++) {if (window.CP.shouldStopExecution(1)){break;}
            $('.product').parent().eq(0).clone().appendTo('.product-list');
        }
window.CP.exitedLoop(1);

    }
};

$(function() {
    Chef.init();
});
//# sourceURL=pen.js
</script>
        
  
    </body></html>