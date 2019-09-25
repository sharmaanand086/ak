<?php
session_start();

if(!isset($_SESSION["products"]))
{
	header("Location: https://arfeenkhan.com/mainweb/transformation.php");
}

/*if(isset($_SESSION["products"]))
{
    
    $total = 0;
    foreach ($_SESSION["products"] as $cart_itm)
    {
    
  //  echo $cart_itm["name"];
   // echo $cart_itm["code"];
    //echo $cart_itm["qty"]; 
    
    
    $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
        }
        $_SESSION['total']=$total;
?>
*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form</title>
<link rel="shortcut icon" href="Images/Title.png" />
<link href="Fonts_Optimize/font.css" rel="stylesheet" type="text/css" />
<!-- Facebook Pixel Code General Retargeting Pixel -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '363160880504868');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=363160880504868&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<style type="text/css">
@font-face {
    font-family: 'CircularStdBold';
       src: url("https://arfeenkhan.com/mainweb/fonts/CircularStdBold.ttf");
  }
  @font-face {
    font-family: 'CircularStdBlack';
    src: url("https://arfeenkhan.com/mainweb/fonts/CircularStdBlack.ttf");
  }
  @font-face {
    font-family: 'CircularStd-Book';
    src: url("https://arfeenkhan.com/mainweb/fonts/CircularStd-Book.otf");
  }
  @font-face {
    font-family: 'signature';
    src: url("https://arfeenkhan.com/mainweb/fonts/signature.ttf");
  }
@font-face {
    font-family: 'Barlow-Medium';
    src: url("https://arfeenkhan.com/mainweb/fonts/Barlow-Medium.otf");
  }


body{
	font-family: "Myraid Pro";
	margin: 0;
	padding: 0;
	background:#000;
}

div, h1, form, fieldset, input, textarea {
	margin: 0; padding: 0; border: 0; outline: none;
}

fieldset{
	text-align:center;
}

html {
	height: 100%;
}

.absdefg{
    display:flex;
    width:100%;
    background: #000;
    margin-bottom: 5%;
}
.logo-akimg button {
    border: none;
    /* float: right; */
    color: #fff;
    padding: 0% 3%;
    font-size: 16px;
    background: #000;
    outline:none;
}
.logo-akimg button a{
    color:#fff !important;
    text-decoration:none;
}
.logo-akimg{
    padding: 2% 3% 1%;
    display:flex;
    justify-content:space-between;
    /*width: 100%;*/
}
.logo-akimg img{
    max-width: 100%;
    width: 18%;
}
#contact {
	float:right;
	width: 40%;
	margin:20px 20px 0 0;
	padding: 20px 30px;
	border:1px solid #CCC;
	background: #fff;
	border-radius:5px;
}

h1 {
	font-size: 22px;
	color: #000;
	text-transform: uppercase;
	text-align: center;
	margin: 0 0 25px 0;
	padding-bottom:10px;
	border-bottom:1px solid #ccc;
	 font-family: 'CircularStdBold';
}

input {
    width: 80%;
    height: 32px;
    padding: 0px 20px 0px 10px;
    margin: 0 0 12px 0;
    border: 1px solid #CCC;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    font-size: 13px;
    color: #000;
}
input::-webkit-input-placeholder  {
    color: #868686;
}

input:-moz-placeholder {
	color: #868686;
}

textarea {
	width: 80%;
	height: 170px;
	padding: 12px 20px 0px 20px;
	margin: 0 0 20px 0;
	border:1px solid #CCC;
	border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
	font-size: 15px;
	color: #000; 
}

textarea::-webkit-input-placeholder  {
    color: #868686;
}

textarea:-moz-placeholder {
	color: #868686;
}
	
input:focus, textarea:focus {
	background: #fff;
}

input[type=submit] {
	display:block;
	outline:0;
	border:0;
	width:150px;
	height: 40px;
	margin:0 auto;
	padding: 5px 10px;
	background:#000cff; 
	cursor: pointer;
	color:#fff;
}

.clear {
  clear: both;
  display: block;
  overflow: hidden;
  visibility: hidden;
  width: 0;
  height: 0;
}

#footer{
    width: 100%;
    background: #000;
    margin: 3% auto 0;
    text-align: center;
}

#footer img{
    width: 100%;
    height: auto;
    /* margin: auto; */
}

#shopping-cart{
	float:left;
	width: 46%;
	margin:20px 30px 0;
	padding: 20px 10px 20px 30px;
	border:1px solid #CCC;
	background: #fff;
	border-radius:5px;
}

#cart_name{
    height: 450px;
    padding-right: 10px;
    overflow-y: scroll;
}

.abc-shop{
    border-bottom: 1px solid #cfcfcf;
    padding-top: 10px;
    padding-bottom: 10px;
}

#shop{
    display: flex;
    width: 100%;
    border: 1px solid #ddd;
}

#shop_img{
    text-align: center;
    float: left;
    width: 38%;
    height: 138px;
    margin: 0;
    background: #ddd;
    padding: 3% 0;
}

#content{
    width: 54%;
    padding-left: 4%;
    position:relative;
}

#content p {
   font-family: 'CircularStd-Book';
    font-size: 18px;
    margin-bottom: 0;
    line-height: 1;
}

#content > h2{	
	font-family: "Myriad Pro Semi-Bold";
	font-size:15px;
	padding:0px;
}

#content > h4{
	display:none;
	font-family: "Myriad Pro Semi-Bold";
	font-size:15px;
	padding:0px;
}

#rupees{
	float:left;
}

#rupees h4{
    display: block;
    font-family: "Myriad Pro light";
    font-weight: bold;
    font-size: 26px;
    color: red;
    margin: 0;
    position: absolute;
    bottom: 4%;
}

#rupees p{
	font-family: "Myriad Pro light";
	font-weight:normal;
	font-size:22px;
	color:#676767;
	margin:0;
	padding-top:10px;
}

#close{
	outline:0px;
	border:0px;
	position:relative;
	float:right;
	top:0;
	border:none;
	outline:none;
}

#close:hover{
	background:url(Images/CloseHover.png) no-repeat;
}

#close:focus{
	background:url(Images/CloseActive.png) no-repeat;
}

#total{
	/*float:left;*/
	margin-top:20px;
    width:100%;
}
#total p span{
    float: right;
    color: #0c1fff;
    text-transform: capitalize;
    font-size:19px;
}
#total p{
    margin-top: 6px;
    font-family: "Myriad Pro Semi-Bold";
    font-size: 18px;
    color: #000;
    margin-bottom: 0px;
    padding: 0px;
    font-weight: bold;
    width: 75%;
    text-transform: uppercase;
      font-family: 'CircularStdBold';
}
#amount p{
	float:left;
	text-align:right;
	font-family: "Myraid Pro";
	font-size:15px;
	width:50px;
	padding:10px 10px 0 0;
	margin:0px;
}

@media only screen and (max-width: 1024px){

#contact {
	text-align:center;
	float:none;
	width: 88%;
	margin:10px 1%;
	padding: 20px 20px;
}

#shopping-cart{
	float:none;
	width: 88%;
	margin:10px 1%;
}
	
}
@media only screen and (max-width: 767px){
    .absdefg{
    display:unset;
}
#shopping-cart{
	width: 90%;
	margin:20px auto;
}
 #contact {

	width: 90%;
	margin:10px auto;
}   
#shop_img {
    height: 175px;
}
}

@media only screen and (max-width: 640px){
.logo-akimg img {
    width: 38%;
}
#shop_img {
    height: 145px;
}
h1 {
	font-size: 18px;
	margin: 0 0 8px 0;
	padding-bottom:10px;
}
#shop_img{
	float:none;
}
#rupees{
	text-align:center;
	float:none;
}
#rupees h4{
	text-align:center;
	padding:0;
}
#total{
	float:none;
	margin-top:20px;
}

}

@media only screen and (max-width: 480px){
#shop_img {
    height: 100px;
}
#content p {
    margin-top: 5px;
    font-size: 16px;
}
#rupees h4 {
    font-size: 18px;
    bottom: 12%;
}
h1 {
	font-size: 16px;
	margin: 8px 0 8px 0;
}

#contact {
	width: 90%;
	margin:10px auto;
	padding:5px;
}

#shopping-cart{
	width: 90%;
	margin:10px auto;
	padding:5px;
}

#cart_name{
	padding-right:5px;
}
}
@media only screen and (max-width: 380px){
   #content p {
    font-size: 15px;
} 
 #rupees h4 {
    bottom: 4%;
}  
#total p {
    font-size: 15px;
}
#total p span {
   
    font-size: 17px;
}
.logo-akimg button {
    font-size: 14px;
}
}

</style>


<script>
function validateForm() {
    var x = document.forms["form1"]["Name"].value;
    var x1 = document.forms["form1"]["Contact"].value;
    if (x==null || x=="" || x=="Name") {
        alert("Name must be filled out");
        return false;
    }
    else if(x1==null || x1=="" || x1=="Contact No" || isNaN(x1))
    {
    
    alert("Contact Number must be filled out");
        return false;
        }
}
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>


</head>

<body>
    <div class="logo-akimg" style="display:flex">
                <img src="img/logo.png" alt="" class="mainlogo" onclick="location='index.html'">
                <button> <a href="https://arfeenkhan.com/mainweb/transformation.php">Continue Shopping</a></button>
            </div>
<div class="absdefg" style="">
<div id="shopping-cart" title="">
<?php         
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>

<?php


$a ="";
if(count($_SESSION["products"]) > 3 )
{
	 $a =' style="overflow:auto; height:480px;"';
}


?>
<h1>My Cart</h1>
<div id="cart_name" <?php echo $a; ?> >



<?php


if(isset($_SESSION["products"]))
{
    
    $total = 0;
    foreach ($_SESSION["products"] as $cart_itm)
    {
?>


<div class="abc-shop">
    <div id="shop">
        <div id="shop_img">
            <img src="View Cart/<?php echo $cart_itm['image']; ?>" style="width:50%;" />
        </div>
    
        <div id="content">
            <p><?php echo $cart_itm["name"]; ?></p>
            <h4>Product Code :<?php echo $cart_itm["code"]; ?></h4>
            <h2>Qty:<?php echo $cart_itm["qty"]; ?></h2>
            <div id="rupees">
                <h4>Rs <?php echo $currency.$cart_itm["price"]; ?></h4>
            </div>
        </div>
    
        <div id="close">
            <a href="cart_update.php?removep=<?php echo $cart_itm['code']; ?>&return_url=<?php echo $current_url; ?>"><img src="Images/Close.png" style="    width: 20px;"/></a>
        </div>
    </div>
         
        <div class="clear"></div>
</div>


<?php 
	

$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
        $total = ($total + $subtotal);
        }
        $_SESSION['total']=$total;
        $gst =  $total*18/100;
        $gstamt = $gst;
        $maintotal = $total+$gstamt;
 ?>


</div>


<div id="total">
    <p>Total :<span color="#151515">Rs. <?php echo $currency.$total; ?></span></p>
    <p>GST :<span color="#151515">Rs. <?php echo $currency.$gstamt; ?></span></p>
    <p>Total Amount :<span color="#151515">Rs. <?php echo $currency.$maintotal; ?></span></p>
</div>
<div class="clear"></div>

<?php
}else{
    echo 'Your Cart is empty';

}
?>
</div>

<div id="contact">
	<h1>Please Enter Your Details</h1>
	<form id="form1" name="form1" action="addcontact.php" method="post" onsubmit="return validateForm()">
		<fieldset>
			
			<input type="text" name="Name" id="name" placeholder="Name" />
			
			
			<textarea id="address" name="Address" placeholder="Address"></textarea>
            
         
			<input type="text"  name="Contact" id="contact_no" placeholder="Contact No" />
            
            
		  <input type="email" name="email" id="email_id" placeholder="Email" />
            
         
			<input type="text" name="City" id="city" placeholder="City" />
            
         
			<input type="text" name="Pincode" id="pincode" placeholder="Pincode" />
            
         
			<input type="text" name="State" id="state" placeholder="State" />
            
          
			<input type="text" name="Country" id="country" placeholder="Country" />
			<input type="hidden" name="amount" value="<?php echo$maintotal; ?>" >
			
			<input name="submit" type="submit" onclick="MM_validateForm('name','','R','contact_no','','RisNum','email_id','','R','city','','R','pincode','','RisNum','state','','R','country','','R','address','','R');return document.MM_returnValue" value="SUBMIT" />
			
		</fieldset>
	</form>
</div>
</div>
<div id="footer">
<!--<img src="https://arfeenkhan.com/Image_Optimize/Form_BG.jpg" title="Form Bg" alt="Form Bg" width="1338" height="220" />-->
</div>


</body>
</html>