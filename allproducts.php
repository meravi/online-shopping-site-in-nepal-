<style>
.sortsel
    {
        clear: left;
        height: 50px;
    
        width: 100%;
        float: right;
        margin-top: 10px;
    }
    .sel
    {
        float: right;
        padding: 15px;
        height: auto;
    }
  .sortsel  form
    {
        float: right;
        
    }
    .prt_name
    {
        width: 100%;
        color: red;
        text-align: center;
    }

    .cartform input
    {
       
        padding: 6px 8px;
        background: #FF595E;
       border: none;
       margin-top: 70%;
        color: #fff;
        width: 100%;
    }
    .cartform input.button{
        color: #000;
    }

</style>

<?php $FrontProCatName = $_GET['Name']; ?>    

<div class="col-md-3" style=" float: left; top: 20px;">
		
			<div class="rsidebar span_1_of_left" style="width:100%;">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Home Decorates</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Lanterns</p></a>
									<a href="#"><p>Wall Lamps</p></a>
									<a href="#"><p>Table Lamps</p></a>
									<a href="#"><p>Selling Lamps</p></a>
						     </div>
					      </div>						  
						  <div class="tab2">
							 <ul class="place">								
								 <li class="sort">Festive Needs</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Lanterns</p></a>
									<a href="#"><p>Disco Lights</p></a>									
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">								
								 <li class="sort">Kitchen & Dining</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Lights & Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">								
								 <li class="sort">Books</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Standing Lamps</p></a>
									<a href="#"><p>Lamps</p></a>
									<a href="#"><p>Led Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">								
								 <li class="sort">Automotive</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="#"><p>Car Lights</p></a>
									<a href="#"><p>Stick Lights</p></a>
									<a href="#"><p>Thread Lights</p></a>
						     </div>
					      </div>
						  
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();
								
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->					 
				 </section>
				 
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section>  				 
				   
		
				   <!---->
					 <script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 100000,
								values: [ 500, 100000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]> 
					</script>
					 <!---->
  
				   
				 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lights (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Diwali Lights   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tube Lights      (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>LED Lights        (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bulbs  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ceiling Lights  (30)</label>
								</div>
							</div>
				   </section>
				   <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Everyday</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anchor</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Philips</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Wipro</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Havells</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Ferolex</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Gold Medal</label>
								</div>
							</div>
				   </section>				   
			 </div>				 
	      </div>

   
            
		 <div class="col-md-9" style="float:right;">
         <?php 
            
             $ProCatName = $FrontProCatName;
             $SuccessCatDisFont = $NepdevJDLight->NepdevAllProductFront($FrontProCatName);
             ?>
 <br>
             <div class="CatBanner">
            <span><?php echo strtoupper("Welcome To ".$ProCatName." Zone"); ?></span>
             </div>
             <div class="sorts">
                  
             <div class="sortsel">
                    <form method="POST">
                 <select name="ProFilter">
                     <option value="Select Product"><?php if(isset($_POST['ProFilter'])){ echo $_POST['ProFilter']; } else { echo "Select Products"; } ?></option>
                     <option value="All Products">All Product</option>
                     <option value="Low To High">Low To High</option>
                     <option value="High To Low"> High To Low</option>
                     <option value="Discount Item">Discount Item</option>
                     <option value="Latest Products">Latest</option>
                     <option value="Oldest Product">Oldest</option>
                    </select>
                    <input type="submit" value="Filter" name="FilterPro">
                        </form>
                <div class="sel">
                    <?php 
                    
                        if(isset($_POST['AddToCarts']))
           {
    
            $sid = session_id();
               $p_qty = $_POST['p_qty'];
               $pid = $_POST['pid'];
               $prosize = "llll";
               $singleprice = $_POST['proprice'];
                $sprice = $_POST['proprice'];
               $totalproprice = $sprice*$p_qty;
$InsCartNow = $NepdevJDLight->NepdevProCart($pid,$p_qty,$singleprice,$totalproprice,$prosize,$sid);
             
           }
                
                    
                    
                    
                    if(isset($_POST['FilterPro']))
                    {
                        $ProFilter = $_POST['ProFilter'];
                        
                        switch($ProFilter)
                        {
                            case "Select Product" :
                                echo "<script>alert('Select Any Product ');</script>";
                                break;
                            case "All Products" : 
                                /////// Display All Product
                                ?>
                    <?php 
            
             while($SuccessCatDisFontNow = $SuccessCatDisFont->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
						     
                                <div class="cartform">
                                
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
           </form>
                                </div>              
                                
                                
                                
                                
                                
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div> 	</a>	
            
					<?php } ?>
                    
              
                    <?php 
                                break;
                            case "Discount Item" :  ?>
                                        <?php 
                                $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
						  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                              </form></div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?>  
                            <?php     break;
                            case "Low To High" :
                                //////// for low to high
                                ?>
                                
                               <?php 
                                $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                  </form></div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?>  
                                <?php break;
                                ?>    
                                <?php 
                            case "High To Low" :
                              /////////// Hight To Low 
                                ?>
                                           <?php 
                                $SuccessCatDisHTL = $NepdevJDLight->NepdevProDisHTL($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisHTL->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                  </form> </div>
							</h4>
							</div>
						</div> 					
							<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
			</div> 	</a>	
            
					<?php } ?> 
                                <?php 
                                break;
                            case "Latest Products" :
                                ?>
                                               <?php 
                                $SuccessCatDisLatest = $NepdevJDLight->NepdevProDisLatest($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLatest->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							  <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                  </form> </div>
							</h4>
							</div>
						</div> 					
							<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
			</div> 	</a>	
            
					<?php } ?> 
                                
                                <?php break;
                            case "Oldest Product" : 
                        //////// display old product 
                    ?>
                                             <?php 
                                $SuccessCatDisOldest = $NepdevJDLight->NepdevProDisOldest($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisOldest->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							 <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                 </form> </div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?> 
                  
                    <?php 
                                
                                break;
                            
                                default :
                                ?>
                    
                            <?php 
                                $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							 <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                 </form>  </div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
                                
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?>  
                    <?php 
                        }
                    } else
                    {
                    ?>
                  <?php       
                          $SuccessCatDisLTH = $NepdevJDLight->NepdevProDisLTH($ProCatName);
             while($SuccessCatDisFontNow = $SuccessCatDisLTH->fetch_assoc())
             {
                 
            
             ?>
					 <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>">
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt="">
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
							 <div class="cartform">
                                <form method="post">
                                    <br><br>
                            <input type="hidden" name="p_qty" value="1">
                                    <input type="hidden" name="pid" value="<?php echo $SuccessCatDisFontNow['id']; ?>">
                                    <input type="hidden" name="singleprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                    <input type="hidden" name="proprice" value="<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>">
                                <input type="submit" name="AddToCarts" value="Add To Carts">
                                 </form>  </div>
							</h4>
							</div>
						</div> 					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>						<?php 
                                    $NewPrices = $SuccessCatDisFontNow['ProNewPrice'];
                                    $OldPrices = $SuccessCatDisFontNow['ProOldPrice'];
                 if($NewPrices<$OldPrices){
                                 
                                ?>
								<span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?></span>
                                <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p>
                                  <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 {
                     echo "Save ".$mul."%";
                     
                     
                 }
                
                                    
                                        
                                    
                                    ?>
                                <?php } 
                 elseif($NewPrices>=$OldPrices){ ?>
                                <p class="pric1">Rs <?php echo $SuccessCatDisFontNow['ProNewPrice']; ?></p>
                                
                                <?php } ?>
								<div class="ofr">
								  
						        
								</div>
								
								<input type="button" class="item_add items" value="View Product">
                                
								<div class="clearfix"> </div>
							</div>												
							
						</div>
				</div> 	</a>	
            
					<?php } ?> 
                    
                    
                    
                    <?php } ?>
                
                 </div> 
                 </div>
             </div>
             
             
             
           
         </div>
      	
				
             
		
    
    </div>