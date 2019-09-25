<?php
session_start();
if(!$_SESSION["email"])
{
header('Location: index.php');
} 

session_destroy();
?>
<!doctype html>
<html>
<head>
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
<meta charset="utf-8">
<title>Payment Failed</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>


<style>
*
{
	padding:0px;
	margin:0px;
}
#wrapper{
    

	height:500px;
	margin:10px auto;
}
h1{
	
	
	text-align: center;
	font-family: 'Open Sans',sans-serif;
	margin-bottom: 20px;
	margin-top: 10px;
	font-weight: 400;
	color:black;


}
</style>
<body>

 <div id="wrapper">
	 <p style="color:#e63535;font-family:'Open Sans',sans-serif;font-weight:600;text-align:center;font-size:35px;margin:0px auto;">PAYMENT FAIL!</p>
	 <br><br>
	 <p style="color:#3f3f3f;font-family:'Open Sans',sans-serif;font-weight:200;text-align:center;font-size:23px;margin:0px auto;width:70%;"> The payment could not be successful, please try again.</p><br>
	 <a href="http://arfeenkhan.com/"> Go back to the site </a>
	 <br><br>
	 
	 
	         <!--<h1>Event Details</h1>
		<p style="text-align:center; font-family:'Open Sans',sans-serif;font-size:20px;"><span style="font-weight:700;font-size:25px;">Event Details:</span><span style="font-weight:700;margin-left:50px;font-size:20px;">Date :</span> 23<sup>rd</sup>-24<sup>th</sup> August, 2014<span style="font-weight:700;margin-left:50px;font-size:25px;">Time:</span> <span style="text-decoration:underline;">9:00am to 7pm</span><br><br> <span style="font-weight:700">Venue</span>: Hall No.2A,Western Express Highway, NESCO, Goregaon East,<br>
Mumbai, Maharashtra 400063.</p>-->
			   	   <br><br>
			   	   
				   
			   	   
			   	   
 </div>
</body>
</html>