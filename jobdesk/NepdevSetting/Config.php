<?php 

 class NepdevJD
 {
     public $Server ="localhost";
     public $User = "root";
     public $Pass = "";
     public $Dbname = "NepdevJD_Light";
     public $NepdevConnect;
     public function __construct()
     {
         $this->NepdevConnect = new mysqli($this->Server,$this->User,$this->Pass,$this->Dbname);
         if($this->NepdevConnect->connect_error)
         {
             die('cant connect database ');
         }
     }
     
     public function Protects()
     {
         $connect = new mysqli($this->Server,$this->User,$this->Pass,$this->Dbname);
         return $connect;
     }
     /////////////\\\\\\\\\\Admin Login Check /////////////////////\\\\\\\\\\\\\\
    public function NepdevAdminCheck($Email,$Password)
    {
        $NepdevCheckLogin = "SELECT * FROM admin_login where email='$Email' AND password='$Password'";
        $NepdevCheckLoginRun = $this->NepdevConnect->query($NepdevCheckLogin);
        $NepdevCheckLoginCount = $NepdevCheckLoginRun->num_rows;
        return $NepdevCheckLoginCount;
        
        
    }
     
     /////////////\\\\\\\\\\ End Admin Login Check /////////////////////\\\\\\\\\\\\\\
     
     /////////////////\\\\\\\\\\\Add Product Category ////////////////////\\\\\\\\\\\\\\\\\\\\\\\
     public function NepdevAddCat($CatName)
     {
         $NepdevCheckCat = "SELECT * FROM pro_cat where category='$CatName'";
         $NepdevCheckCatRun = $this->NepdevConnect->query($NepdevCheckCat);
         $NepdevCheckCatCount = $NepdevCheckCatRun->num_rows;
         if($NepdevCheckCatCount<1){
             $NepdevAddCat = "INSERT INTO pro_cat(category) VALUES('$CatName')";
             $NepdevAddCatRun = $this->NepdevConnect->query($NepdevAddCat);
             if($NepdevAddCatRun==true)
             {
                 echo "<script>alert('Success Added Category $CatName');</script>";
             }
             else
             {
                 echo "<script>alert('Already Added Category Try New One');</script>";
             }
             return $NepdevAddCatRun;
         }
     }
     
     /////////////////\\\\\\\\\\\End Add Product Category ////////////////////\\\\\\\\\\\\\\\\\\\\\\\
     
     ///////////////////\\\\\\\\\\\Display Category ///////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
     public function NepdevDisplayCat()
     {
         $NepdevDisplayCats = "SELECT * FROM pro_cat";
         $NepdevDisplayCatsRun = $this->NepdevConnect->query($NepdevDisplayCats);
         return $NepdevDisplayCatsRun;
     }
     ///////////////////\\\\\\\\\\\End Display Category ///////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\     
//////////////////////////\\\\\\\\\\\\\\\\Add Product Brand ////////////////////////\\\\\\\\\\\\\\\\\\\\\\\
     
     public function NepdevAddBrand($BrandName)
     {
       $NepdevCheckBrand = "SELECT * FROM pro_brand where brand='$BrandName'";
       $NepdevCheckBrandRun = $this->NepdevConnect->query($NepdevCheckBrand);
          $NepdevCheckBrandCount = $NepdevCheckBrandRun->num_rows;
         if($NepdevCheckBrandCount<1)
         {
             $NepdevAddBrand = "INSERT INTO pro_brand(brand) values('$BrandName')";
             $NepdevAddBrandRun = $this->NepdevConnect->query($NepdevAddBrand);
             if($NepdevAddBrandRun==true)
             {
                 echo "<script>alert('Success Added $BrandName Brand.');</script>";
             }
             else
             {
                 echo "<script>alert('You Have Already Added $BrandName Brand');</script>";
             }
             return $NepdevAddBrandRun;
         }
     }
     //////////////////////////\\\\\\\\\\\\\\\\End Product Brand ////////////////////////\\\\\\\\\\\\\\\\\\\\\\\
 ///////////////////////\\\\\\\\\\\ Display Product Brand ////////////////////\\\\\\\\\\\\\\\\\\\\\\
     public function NepdevDisplayBrand()
     {
         $NepdevDisBrands = "SELECT * FROM pro_brand";
         $NepdevDisBrandsRun = $this->NepdevConnect->query($NepdevDisBrands);
         return $NepdevDisBrandsRun;
     }
     //////////////////////////\\\\\\\\\\\\\\ End Display Product Brand //////////\\\\\\\\\\\\\\\
     
////////////////////////\\\\\\\\\\\\\\Add New Product /////////////////////////\\\\\\\\\\\\\\\\\\\\\\\
     public function NepdevAddnewProduct($ProductName,$ProductNewPrice,$ProductOldPrice,$ProductCategory,$ProductBrands,$ProductDescription,$ProductImg)
         
     {
         $NepdevAddProduct = "INSERT INTO add_product(ProName,ProNewPrice,ProOldPrice,ProCat,ProBrand,ProOverview,ProImage) values('$ProductName','$ProductNewPrice','$ProductOldPrice','$ProductCategory','$ProductBrands','$ProductDescription','$ProductImg')";
         $NepdevAddProductRun = $this->NepdevConnect->query($NepdevAddProduct);
         return $NepdevAddProductRun;
     }
 ////////////////////////\\\\\\\\\\\\\\End Add New Product /////////////////////////\\\\\\\\\\\\\\\\\\\\\\\
  ////////////////////\\\\\\\\\\\\\ Display Product ///////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function NepdevDisplayProducts()
    {
        $NepdevDisPro = "SELECT * FROM add_product order by id desc";
        $NepdevDisProRun = $this->NepdevConnect->query($NepdevDisPro);
        return $NepdevDisProRun;
    }
   ////////////////////\\\\\\\\\\\\\ End Display Product ///////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
     
     /////////////////////\\\\\\\\\\\ Display Single Product By Id ////////////////////\\\\\\\\\\\\\\\\\\\\\
     public function NepdevSingleProduct($NepdevPid)
     {
         $NepdevSingleProSel = "SELECT * FROM add_product  WHERE id='$NepdevPid'";
         $NepdevSingleProRun = $this->NepdevConnect->query($NepdevSingleProSel);
         return $NepdevSingleProRun;
     }
     /////////////////////\\\\\\\\\\\ End Display Single Product By Id ////////////////////\\\\\\\\\\\\\\\\\\\\\
     
     ////////////////////////////////////// Update Products By Admin ///////////////////////////////////////////
     public function NepdevUpdatePro($UpProName,$UpPrice,$UpOldPrice,$UpProCat,$UpProductBrands,$UpProDes,$UpImage,$NepdevPid)
     {
         $NepdevUpPro = "update add_product set ProName='$UpProName', ProNewPrice='$UpPrice',ProOldPrice='$UpOldPrice',ProCat='$UpProCat',ProBrand='$UpProductBrands',ProOverview='$UpProDes',ProImage='$UpImage' where id='$NepdevPid'";
         $NepdevUpProRun =  $this->NepdevConnect->query($NepdevUpPro);
         return $NepdevUpProRun;
         
     }
     
     ///////////////////////////// End Update Product By Admin ////////////////////////////////\\\\\\\\\\\\\
     
     ////////////////////////////  Delete Product By Admin /////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\
     public function NepdevDelPro($NepdevDelId)
     {
         $NepdevDel = "delete from add_product where id='$NepdevDelId'";
         $NepdevDelRun = $this->NepdevConnect->query($NepdevDel);
         return $NepdevDelRun;
     }
     
    ////////////////////////////  End Delete Product By Admin /////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\
     
  
     
     //////////////////\\\\\\\\ Display Product By Category ////////////////////////\\\\\\\\\\\\\
     public function NepdevDisByCat($ProCatName)
     {
         $NepdevDisCatFront = "SELECT * from add_product where ProCat='$ProCatName' order by ProNewPrice desc limit 0,6";
         $NepdevDisCatFrontRun = $this->NepdevConnect->query($NepdevDisCatFront);
         return $NepdevDisCatFrontRun;
     }
     
     public function NepdevDisCat()
     {
          
         $NepdevDisCats = "SELECT category from pro_cat";
         $NepdevDisCatsRun = $this->NepdevConnect->query($NepdevDisCats);
         return $NepdevDisCatsRun;
     }
     
     public function NepdevAllProductFront($FrontProCatName)
     {
         $NepdevDisAllProduct = "SELECT * FROM add_product where ProCat='$FrontProCatName'";
         $NepdevDisAllProductRun = $this->NepdevConnect->query($NepdevDisAllProduct);
         return $NepdevDisAllProductRun;
     }
     
     public function NepdevProDisLTH($ProCatName)
     {
         $NepdevLTHDisSel = "SELECT * from add_product where ProCat='$ProCatName' order by ProNewPrice asc";
         $NepdevLTHDisSelRun = $this->NepdevConnect->query($NepdevLTHDisSel);
         return $NepdevLTHDisSelRun;
     }
     
        public function NepdevProDisHTL($ProCatName)
     {
         $NepdevLTHDisSel = "SELECT * from add_product where ProCat='$ProCatName' order by ProNewPrice desc";
         $NepdevLTHDisSelRun = $this->NepdevConnect->query($NepdevLTHDisSel);
         return $NepdevLTHDisSelRun;
     }
     
     
     public function NepdevProDisLatest($ProCatName)
     {
         $NepdevLatestDisSel = "SELECT * FROM add_product where ProCat='$ProCatName' order by id desc";
         $NepdevLatestDisRun = $this->NepdevConnect->query($NepdevLatestDisSel);
         return $NepdevLatestDisRun;
     }
     
      public function NepdevProDisOldest($ProCatName)
     {
         $NepdevLatestDisSel = "SELECT * FROM add_product where ProCat='$ProCatName' order by id asc";
         $NepdevLatestDisRun = $this->NepdevConnect->query($NepdevLatestDisSel);
         return $NepdevLatestDisRun;
     }
      //////////////////\\\\\\\\ End Display Product By Category ////////////////////////\\\\\\\\\\\\\
 
     
     ////////// add to cart  ///////////////////////
      public function NepdevProCart($pid,$p_qty,$singleprice,$totalproprice,$prosize,$sid)
      {
          $NepdevProCartCheck = "SELECT * FROM user_cart where pid='$pid' and sid='$sid'";
          $NepdevProCartCheckRun = $this->NepdevConnect->query($NepdevProCartCheck);
          $NepdevProCartCheckCount = $NepdevProCartCheckRun->num_rows;
          if($NepdevProCartCheckCount<1)
          {
             
                $NepdevProCartIns = "INSERT INTO user_cart(pid,p_qty,Price,TotalPrice,ProSize,sid) values('$pid','$p_qty','$singleprice','$totalproprice','$prosize','$sid')";
              $NepdevProCartInsRun = $this->NepdevConnect->query($NepdevProCartIns);
                if($NepdevProCartInsRun==true)
                {
                    
                    echo "<script>alert('success added product'); window.location='index.php?Products=cart';</script>";
                }
              return $NepdevProCartInsRun;
              
              
          }
          
          elseif($p_qty<0)
          {
              echo "<script>alert('You cannot Order in negative value -');</script>";
          }
          else
          {
            echo "<script>alert('You Have Already Added This Product In Your Cart'); window.location='index.php?Products=cart';</script>";
          }
          return $NepdevProCartCheckCount;
      }
     /////// end add cart 
     
     /////// display cart 
     public function NepdevDisCarts($sid)
     {
         $NepdevSelSess = "SELECT * FROM user_cart where sid='$sid'";
         $NepdevSelSessRun = $this->NepdevConnect->query($NepdevSelSess);
         return $NepdevSelSessRun;
         
     }
     public function NepdevDisCartsById($pid)
     {
         $NepdevDisCartDetail = "SELECT * from add_product where id='$pid'";
         $NepdevDisCartDetailRun = $this->NepdevConnect->query($NepdevDisCartDetail);
         return $NepdevDisCartDetailRun;
     }
     
     
     
     
     /////// end display cart
     //////////// display cart in cart page
     
          public function NepdevDisCartsPage($cid,$sid)
     {
         $NepdevSelSess = "SELECT * FROM user_cart where id='$cid' and sid='$sid'";
         $NepdevSelSessRun = $this->NepdevConnect->query($NepdevSelSess);
         return $NepdevSelSessRun;
         
     }
     public function NepdevDisCartsByIdPage($pid)
     {
         $NepdevDisCartDetail = "SELECT * from add_product where id='$pid'";
         $NepdevDisCartDetailRun = $this->NepdevConnect->query($NepdevDisCartDetail);
         return $NepdevDisCartDetailRun;
     }
  ////////  update cart item qty  ///////////
     public function NepdevUpdateProCartQty($cartkoid,$Totalprice,$upcartqty)
     {
         $NepdevUpProCartQty = "UPDATE  user_cart set p_qty='$upcartqty',TotalPrice='$Totalprice' where id= $cartkoid";
         $NepdevUpProCartQtyRun = $this->NepdevConnect->query($NepdevUpProCartQty);
         return $NepdevUpProCartQtyRun;
     }
     
     ///////// end update cart item qty //////////
     
     ///////// remove from cart ///////////
     
      public function NepdevRemoveCart($pid,$sid)
      {
          $NepdevRemoveCartSel = "delete from user_cart where id='$pid' AND sid='$sid'";
          $NepdevRemoveCartRun = $this->NepdevConnect->query($NepdevRemoveCartSel);
          return $NepdevRemoveCartRun;
      }
     
     ////////// end remove from cart //////////
     ////////// total cost of product ///////
     
     public function NepdevTotalPrices($sid)
     {
         $NepdevTotalPriceSel = "SELECT SUM(TotalPrice) as total_paisa from user_cart where sid='$sid'";
         $NepdevTotalPriceRun = $this->NepdevConnect->query($NepdevTotalPriceSel);
         return $NepdevTotalPriceRun;
     }
     
     
     public function NepdevProCatRename()
     {
         $NepdevProCatRenameUp = "UPDATE pro_cat,add_product set category='' ProCat='' where " ;
     }
     
     
 }


$NepdevJDLight = new NepdevJD;
