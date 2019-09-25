<?php
session_start();
include_once("config.php");
$current_url = base64_encode($url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


  <div class="modal " id="myModal" role="dialog">
      
    <div class="modal-dialog">
    <?php
if(isset($_SESSION["products"]))
{
 $total = 0;
?>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button style="color: #fff;opacity: 1;" type="button" class="close" onclick="newclose()" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Check Out</h4> -->
          <img src="img/logo.png" alt="" class="">
        </div>
        <div class="mod-pro-info">
           <?php   $total = 0;
    foreach ($_SESSION["products"] as $cart_itm)
    { ?>
    
        <div class="modal-body cart-content">
          <button type="button" class="close1" data-dismiss="modal"><a href="cart_update.php?removep=<?php echo $cart_itm['code']; ?>&return_url=<?php echo $current_url; ?>">&times;</a></button>
          <div class="col-sm-5 col-xs-6 img-div">
          	<div class="mod-img">
          	<img src="View Cart/<?php echo $cart_itm['image']; ?>">
          </div>
          </div>
       
          <div class="col-sm-7 col-xs-6 " style="padding:4%">
          	<p class="mod-protitle" style="margin:0"><?php echo $cart_itm["name"]; ?></p>
          	<label for="quantity" class="mod-quan">Quantity:</label>
          	<input type="number" id="quantity" value="<?php echo $cart_itm["qty"]; ?>">
          	<p class="mod-price">Rs. <span><?php echo number_format((float)$currency.$cart_itm["price"], 2, '.', '') ; ?><i style="font-size: 14px;font-family: 'CircularStd-Book';">Only</i></span></p>
          </div>
        </div>
      <?php 
      
      $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
        }
        
         $_SESSION['total']=$total;
         
         ?>
         </div>
        <div class="modal-footer" style="border:none">
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
          <div class="endit">
          	<p class="mod-total">Total amount: <span>Rs.<?php echo number_format((float)$currency.$total, 2, '.', ''); ?><sub style="font-size: 12px;"><i>(+GST)</i></sub></span></p>
          	<button class="mod-checkout"><a href="Form.php">PLACE ORDER</a></button>
          </div>
        </div>
      </div>
      
    </div>
  </div>
<?php
}
?>
</body>
</html>