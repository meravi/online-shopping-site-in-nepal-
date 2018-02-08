<style>
.cartform
    {
        color: #000;
    }
    .cartform input
    {
        margin-top: 50%;
        padding: 8px 10px;
        background: #FF595E;
       border: none;
        border-radius: 8px;
        color: #fff;
        text-transform: capitalize;
        width: 100%;
    }
    .cartform input.button{
        color: #000;
    }
    

</style>    

<div class="col-md-3" style=" float: left; top: 20px;">
		
			<div class="rsidebar span_1_of_left" style="width:100%;">
			
				 
						 
				   
		
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
    
    
    
          $prodi= $NepdevJDLight->NepdevDisCat();
    
                while($prodis = $prodi->fetch_assoc())
                {
         ?>
            
		 <div class="col-md-9" style="float:right;">
         <?php 
            
             $ProCatName = $prodis['category'];
             $SuccessCatDisFont = $NepdevJDLight->NepdevDisByCat($ProCatName);
             ?>
 <br><a href="index.php?Products=allproducts&Name=<?php echo $prodis['category']; ?>">
             <div class="CatBanner">
                 <span><?php echo strtoupper($prodis['category']); ?></span>
             </div></a>
             <?php 
             
             while($SuccessCatDisFontNow = $SuccessCatDisFont->fetch_assoc())
             {
                 
            
             ?>
					
                         <div class="product-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go thickbox">
                            <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>"><img src="meadmin/pro_img/<?php echo $SuccessCatDisFontNow['ProImage']; ?>" class="img-responsive" alt=""></a>
							<div class="b-wrapper">
							<h4 class="b-animate b-from-left  b-delay03">							
                             
                                <br>
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
								<h4><?php echo $SuccessCatDisFontNow['ProName']; ?></h4>							<?php
                                $NewP = $SuccessCatDisFontNow['ProNewPrice'];
                                $OldP = $SuccessCatDisFontNow['ProOldPrice'];
                        if($NewP>=$OldP)
                        {
                            
                       
                                ?>	
								 <span class="item_price">Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>
                                </span>
                                
                                <?php } else
                        {
                                ?> <p class="pric1"><del>Rs <?php echo $SuccessCatDisFontNow['ProOldPrice']; ?></del></p><?php } ?>
								<div class="ofr">
								 
						          <?php 
                                    $sub = $SuccessCatDisFontNow['ProOldPrice']-$SuccessCatDisFontNow['ProNewPrice'];
                                    $div = $sub/$SuccessCatDisFontNow['ProOldPrice'];
                                    $mul = ceil($div*100);
                 if($mul>0)
                 { ?>
                                    Rs.<?php echo $SuccessCatDisFontNow['ProNewPrice'] ?>
                                    <?php 
                       echo "Save ".$mul."%";
                 }
              
                                    
                                        
                                    
                                    ?>
								</div>
								
                                <a href="SingleProduct.php?id=<?php echo $SuccessCatDisFontNow['id']; ?>"><input type="button" class="item_add items" value="View Product"></a>
								<div class="clearfix"> </div>
							</div>												
							
						</div>
					</div> 
            
					<?php } ?>
            <div class="viewall">
             <a href="index.php?Products=allproducts&Name=<?php echo $prodis['category']; ?>">View All</a>
                 </div>
         </div>
      	
			<?php } ?>		
             
		
    
    </div>