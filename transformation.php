<?php
session_start();
include_once("config.php");
$current_url = base64_encode($url="https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);$abc = $_SESSION["products"];$cartid;
foreach($abc as $row){
    $cartid = $row['cat'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Arfeen Khan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
  function utf8_strlen($string){
    return strlen(utf8_decode($str));
}

</script>
<script src="https://arfeenkhan.com/Js/jquery-1.9.1.min.js"></script>
<script src="https://arfeenkhan.com/Js/modernizr.js"></script>
 
 <link rel="canonical" href="https://www.arfeenkhan.com/mainwebsite/transformation.php" />
<style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
  opacity:1;
    z-index: 1070;
    display: block;
    font-style: normal;
    text-align: left;
    text-decoration: none;
    text-shadow: none;
    text-transform: none;
    letter-spacing: normal;
    word-break: normal;
    word-spacing: normal;
    word-wrap: normal;
    white-space: normal;
}

.tooltip .tooltiptext {
    display: flex;
    align-items: center;
    font-weight: bold;
    height: 65px;
    visibility: hidden;
    width: 140px;
    background-color: #fff;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 5px 0px;
    position: absolute;
    z-index: 1;
    top: 10%;
    right: 130%;
    border-bottom: 5px solid #0c1fff;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 50%;
    left: 100%;
    margin-top: -5px;
    border-width: 6px;
    border-style: solid;
    border-color: transparent transparent transparent #fff;
}
.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
</head>
<body>
<session>
	<div class="transformation-container">
		<div class="fixedheader">
	        <div class="container-fluid">
                <div class="logo-akimg">
                    <img src="img/logo.png" alt="" class="mainlogo" />
                </div>
	            <div class="col-md-4 cart-bg">
		            <div class="cart tooltip">
		                <div class="cart-inner">
		                    <img id="cart-image" src="img/cart.png">
		                  <?php 
$size=sizeof(@$_SESSION["products"]);
   ?>
		                    <p class="cart-amount"><span><?php echo $size; ?></span></p>
		                    <input type="hidden" id="myid" name="hidden_id" value="7823">
		                </div>
		                 <span id="tooltip" class="tooltiptext">Your product Added Successfully.</span>
		            </div>
	            </div>
	            <div class="col-md-12">
		            <div class="transformation-text">
			            <h1>The Tools of Transformation</h1>
			            <p>Browse through various products and tools that Arfeen has created over many years. Whether you want to work on your health, or relationships or if you’re looking to create a financial legacy, this is the place for you!</p>
		        	</div>
		        </div>
	        </div>
    	</div>
	</div>
</session>
<session>
	<div class="container-fluid">
		<div class="books-section" style="display:flex;justify-content: space-between;">
			<div class="options">
				<p class="abc addclass" onclick="myBook()" style="cursor:pointer;">Books</p>
				<p class="abc " onclick="myProgram()" id="productid" style="cursor:pointer" >Products</p>
				<p class="abc dis"  style="cursor:pointer;">Programs & Live Events <sup style="font-size:10px; color:red">(Coming Soon)</sup></p>
			</div>
			<div class="pro-search options" style="width:unset">
				<div class="ser-int" style="display:flex">
				  <!-- <label>Search all Products</label> -->
			      <input class="search-int" id="myInput" type="text" onkeyup="myFunction()" placeholder="Search all Products" name="search">
			      <button type="submit"><i class="fa fa-search"></i></button>
			    </div>
			</div>
		</div>
	</div>
</session>
<session id="myTable">
    <div id="books">	
	<div class="container-fluid">
		<div class="book-grp br-bt">
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/smb.png">
					</div>
						<p class="book-title testfile">The secret millionaire blueprint</p>
						<p class="book-subtitle">If you want to know how your next 5 years will be like, financially, just look back at your previous 5 years, unless you use the Secret Millionaire Blueprint formula for just 7 days</p>
						<p class="book-desc">This book is so powerful - it will change your financial future even before you finish reading it!! Most people struggle in life, especially when it comes to money and finances. They keep looking for ways to become rich but inevitably fail. What people fail to realize is that everyone is equipped with a unique monetary blueprint which is responsible for financial success or failure.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1001" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                    <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/five.png">
					</div>
						<p class="book-title testfile">Where will you be in five years?</p>
						<p class="book-subtitle">What if you were told 5 years is the maximum time you need to fulfil your goals in life?</p>
						<p class="book-desc">We all have dreams of the future. However, these dreams have no chance of becoming a reality unless we act on them in a systematic manner. Peak Performance coach, Arfeen Khan, who has been long associated with Bollywood gives you not only the mantra for success, he even puts deadline on it.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1003" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                    <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-12 br-bt">
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/youcan.png">
					</div>
						<p class="book-title testfile">You can, you will, it’s your choice</p>
						<p class="book-sub">A no nonsense approach to transforming your life</p>
						<p class="book-desc">Do you want to be rich and successful-commercially, emotionally, spiritually? Do you want to be happy? Do you want to strengthen your relationships? All this and more can be achieved by a simple altering of your perspective. You can have what you want. Choose emotional well-being, choose spiritual depth, choose commercial success.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1002" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                    <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/stf.png">
					</div>
						<p class="book-title testfile">Speak to a <br>fortune</p>
						<p class="book-sub">A Step by step system to become a world class speaker</p>
						<p class="book-desc">Speak to a Fortune is Arfeen Khan’s system that teaches you through this book, step-by-step how to become a highly-paid expert with books, blogs, speaking, seminars, coaching, and training. If you really wish to learn how to start, choose your topic, create your own transformational content, sell programs and finally earn the income you've always wanted, you will discover that system in this book.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1013" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                    <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-12 br-bt">
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/berich.png">
					</div>
						<p class="book-title testfile">Become rich now</p>
						<p class="book-subtitle">If You are serious about changing your life and are determined to achieve true success in Network Marketing, you must read this book!</p>
						<p class="book-desc">For the first time ever the biggest secrets of Network Marketing are revealed in this step by step system that could help you make millions. Arfeen Khan, the world’s pre-eminent expert on Network Marketing, reveals his secrets for massive wealth. He will share almost two decades of knowledge to take your Network Marketing business to the top</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1019" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                    <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/tab.png">
					</div>
						<p class="book-title testfile">The secrets to becoming a milllionaire<sup style="color:red;">(Ebook)</sup></p>
						<p class="book-subtitle xyz" style="">A 5 steap system to becoming wealthy</p>
						<p class="book-desc">Want To Know What It Takes To Become A Successful Millionaire?  Discover the shocking truth behind what it takes to become a self-made millionaire. The simple, yet powerful shift that occurs when you open your world to new opportunities. How fear can hold you back from realizing your wealth potential.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                    <input type="hidden" name="product_code" value="PD1014" />
                    <input type="hidden" name="type" value="add" />
                    <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                    <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                    <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                    <input name="product_qty" type="hidden" value="1">
					<button>Buy now for Rs. 800 Only</button>
					</form>
				</div>
			</div>
		</div>

		<div class="col-md-12 br-bt">
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/togrow.png">
					</div>
						<p class="book-title testfile">The secret formula to grow your business<sup style="color:red;">(Ebook)</sup></p>
						<p class="book-sub" style="">Through digital marketing</p>
						<p class="book-desc">If you are currently struggling with getting traffic to your website, or converting that traffic when it shows up, you may think you've got a traffic or conversion problem, but that's rarely the case. Low traffic and weak conversion numbers are just symptoms of a much greater problem. This Ebook will give you the strategies you need to be able to turn on a flood of new leads into your business.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1015" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart">Buy now for Rs. 800 Only</button>
					  </form>
				</div>
			</div>
			
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/relationship.png">
					</div>
						<p class="book-title testfile">The Ultimate Relationship Blueprint<sup style="color:red;">(Ebook)</sup></p>
						<p class="book-sub" style="">The ultimate manual to an everlasting relationship</p>
						<p class="book-desc">Are you ready to turn the spotlight on your love life and move to the next level—something more fulfilling than you’ve had before? This Ebook takes a truly fresh look at relationships, showing you how to build them better from the ground up—or perform some skillful renovations.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1016" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart">Buy now for Rs. 800 Only</button>
					  </form>
				</div>
			</div>
		</div>

		<div class="col-md-12 br-bt">
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/pageplan.png">
					</div>
						<p class="book-title testfile">One page business plan<sup style="color:red;">(Ebook)</sup></p>
						<p class="book-sub" style="">Blueprint for starting your online <br> business</p>
						<p class="book-describ">Most of the successful businesses you see these days employ these EXACT steps. If you want to generate revenue, increase profits, and build wealth, use these steps to catapult your business. Use these steps to train your customers to spend money with you and form a lifetime commitment cycle with them. Get your business set up properly to help generate increased profits, prosperity, and success for your business by mastering these steps. Hint: It all starts with the oldest trick in the book, the word “FREE.”</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1017" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart">Buy now for Rs. 800 Only</button>
					  </form>
				</div>
			</div>
			<div class="col-md-6 mainbox">
				<div class="book">
					<div class="book-img">
						<img src="img/7day.png">
					</div>
						<p class="book-title testfile">Seven Day Series<sup style="color:red;">(Ebook)</sup></p>
						<p class="book-sub" style="">7 simple steps to crafting your career blueprint based on Arfeen’s years of experience</p>
						<p class="book-describ">I’ve designed a FREE “Seven-Day-Series” for Authors, Speakers, Seminar Leaders, Coaches & Trainers. This 7 day series teaches you step-by-step how to become a highly-paid expert through books, blogs, speaking, seminars, coaching, and training. It's a program for people who want to make a difference (and a fortune) sharing their advice, expertise, and inspiration with the world.</p>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1018" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "Books"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart">Buy now for Rs. 800 Only</button>
					  </form>
				</div>
			</div>
		</div>
	</div>
	</div>
	
<div class="event-details" style="display: none;">
<session>
	<div class="container">
		<div class="dvd">
			<div class="col-md-6 col-md-push-6">
				<div class="produvct-dvd">
					<img src="img/dvd.png" alt="Arfeen-Dvd">
				</div>
			</div>
			<div class="col-md-6 dvd-details col-md-pull-6">
				<div class="dvd-title"><p>Life. Find your purpose</p></div>
				<div class="book-subtitle" style="text-align: left;padding:0;min-height: unset;font-size: 10px"><p>Ultimate audio programs on health, wealth & relationships</p><br></div>
				<div class="product-description">
					<p style="opacity: 0.9;">In this program you will learn the secrets for producing immediate results in the areas that matter most to you—whether it be your body, relationships or finances. Start your journey now to create the specific results you desire and deserve in your life. Ultimately, this will affect the level of excitement, joy, happiness, and fulfillment you have in your life. </p><br>
					<p style="opacity: 0.8;">Here’s what you will learn in this program.</p>
				</div>
				<div class="dvd-steps">
					<ul>
						<li>How to empower your relationships.</li>
						<li>How to achieve health & vitality in your life.</li>
						<li>How to achieve abundance of wealth & financial freedom.</li>
					</ul>
				</div>
				<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1019" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "DVD"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart dvd-butn">Buy now for Rs. 800 Only</button>
					  </form>
			</div>
			
		</div>

		<div class="gold-pass">
			<div class="product-title" style="text-align: center"><p>The all access gold pass</p></div>
			<div class="pass-details wd">
				<p style="margin:0;">
					If you’re serious about making 2018 your best and most successful year ever, then I’ve got something unique for you! I’m giving you all of my All Access Gold Passes at an incredible deal. You don’t have any excuse now, so go through all the passes and select the one that suits you the best! Make this year the best year of your life!
				</p>
			</div>
			<img src="img/all-access.png">
		</div>
	</div>
</session>
<session>
	<div class="product-title wd">Here’s what we have for you in this<br> ultimate learning package</div>
	<div class="pass-img">
		<img src="img/package.png">
	</div>


	<div class="container">
	<div class="group-img">
		<div class="speaker-session">
			<div class="col-md-6">
				<div class="session-img">
					<img src="img/tv.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="session-content">
					<p class="grp-title">Path breaking expert speaker sessions</p>
					<p class="grp-desc">Learn from Arfeen Khan  expert, entrepreneur, award winning author and influencer.  150 video sessions (40+ already uploaded) are your unique opportunity to acquire step-by-step strategies and blueprints from Arfeen Khan himself. </p>
				</div>
			</div>
		</div>

		<div class="speaker-session">
			<div class="col-md-6 col-md-push-6">
				<div class="session-img">
					<img src="img/pnq.png">
				</div>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<div class="session-content">
					<p class="grp-title">Private Q & A</p>
					<p class="grp-desc">As an All-Access Member, you will get complimentary entry to our Private Group. Ask any question to any challenge you have and accelerate your progress together with hundreds of likeminded individuals. Ask questions, share your best take-aways, discuss and network. Interact with like minded people, share ideas, achieve breakthroughs in this private members only section. This is a game changer.</p>
				</div>
			</div>
		</div>

		<div class="speaker-session">
			<div class="col-md-6 ">
				<div class="session-img">
					<img src="img/action-guide.png">
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="session-content">
					<p class="grp-title">Action Guides</p>
					<p class="grp-desc">Want to get to the KEY STEPS and STRATEGIES without watching 150 videos hours?  No problem. With Action Guides(10 already uploaded)  summarizing the most important productivity tips and strategies from Arfeen Khan, you’ll be implementing in no time.</p>
				</div>
			</div>
		</div>

		<div class="speaker-session">
			<div class="col-md-6 col-md-push-6">
				<div class="session-img">
					<img src="img/mob.png">
				</div>
			</div>
			<div class="col-md-6 col-md-pull-6">
				<div class="session-content">
					<p class="grp-title">Downloadable Audios</p>
					<p class="grp-desc">Want to learn on the move? Download and listen to Arfeen Khan from anywhere, on any device: your phone, tablet or computer. With the 30+(12 already uploaded) audio material, you can turn your daily commute into an opportunity for personal development! Listen in your car, on the train, when cooking, jogging or doing anything. With this resource, you’ve got no excuses to miss out on valuable content. </p>
				</div>
			</div>
		</div>
	</div>	
	</div>





	<div class="all-access gold-pass">
		<div class="product-title wd">Get your all access gold pass today</div>
			<div class="pass-details wd">
				<p style="margin:0;">
					Whether you want to up your money game or you want to work on your relationships or even wish to become a world<br> class speaker, you can choose All Access Gold Pass for various topics. Get yours below!
				</p>
			</div>

		<div class="container">
			<div class="gold-passdetails">
				<div class="col-md-6">
					<div class="gold-title">The secret millionaire blueprint</div>
					<div class="gold-desc">All access gold pass</div>
					<div class="pass-steps">
						<ul class="gold-step">
							<li>Overcome resistance to form new financial habits.</li>
							<li>Reprogram your mindset for an abundant life.</li>
							<li>Learn how to recognise, release & replace the habitual emotions that hold you back.</li>
							<li>Easy to learn financial skills that will insure your financial success.</li>
							<li>And much more..</li>
						</ul>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1020" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "DVD"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart dvd-butn">Buy now for Rs. 7500 Only</button>
					  </form>
					</div>
				</div>
			
			
				<div class="col-md-6">
					<div class="gold-title">Speak to a fortune</div>
					<div class="gold-desc">All access gold pass</div>
					<div class="pass-steps">
						<ul class="gold-step">
							<li>Learn the hacks on how to become highly-paid author, speaker, coach or a trainer.</li>
							<li>Discover essential steps to start from scratch and go on to making a fortune with your advice, knowledge and content.</li>
							<li>Discover the influence strategies that all the top speakers use..</li>
							<li>Learn the art of selling without selling.</li>
					
						</ul>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1021" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "DVD"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart dvd-butn">Buy now for Rs. 7500 Only</button>
					  </form>
					</div>
				</div>
			</div>

			<div class="gold-passdetails">
				<div class="col-md-6">
					<div class="gold-title">Business mastermind</div>
					<div class="gold-desc">All access gold pass</div>
					<div class="pass-steps">
						<ul class="gold-step">
							<li>Learn the transformational mindset, which will help you take your business and its success to a whole new level!</li>
							<li>Discover the six step system to build and impact with your business using the right strategies!</li>
							<li>Learn how to use the mindset and abundance of possibilities to grow your business and make a fortune!</li>
							<li>And a lot more..</li>
					
						</ul>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1022" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "DVD"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart dvd-butn">Buy now for Rs. 7500 Only</button>
					  </form>
					</div>
				</div>

				<div class="col-md-6">
					<div class="gold-title">Instant millionaire blueprint</div>
					<div class="gold-desc">All access gold pass</div>
					<div class="pass-steps">
						<ul class="gold-step">
							<li>Learn the most effective ways to find lucrative niches on the Internet.</li>
							<li>I’ll share the strategies I use online to capture hundreds and thousands of leads.</li>
							<li>Learn how to create a bestselling product in a ready buyers market and have people thank you for it.</li>
							<li>Discover the steps to automate your entire online business.</li>
						</ul>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1023" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "DVD"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart dvd-butn">Buy now for Rs. 7500 Only</button>
					  </form>
					</div>
				</div>
			</div>

			<div class="gold-passdetails">
				<div class="col-md-7">
					<div class="gold-title">The ultimate relationship blueprint</div>
					<div class="gold-desc">All access gold pass</div>
					<div class="pass-steps">
						<ul class="gold-step">
							<li>Revisiting the 6 important Needs and understanding your primary need in detail that can benefit you and your relationship.</li>
							<li>How can you change your state and make your relationship happier.</li>
							<li>How communication and connection between you and your partner can build a stronger relationship.</li>
							<li>How important is it to be happy in your relationship.</li>
						</ul>
					<form name="form1" id="form1" action="cart_update.php" method="POST">
                <input type="hidden" name="product_code" value="PD1024" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url; ?>" />
                <input type="hidden" name="product_id" value="<?php echo base64_encode(57); ?>" />
                <input type="hidden" name="cat" value="<?php echo "DVD"; ?>" />
                <input name="product_qty" type="hidden" value="1">
					<button  class="add_to_cart dvd-butn">Buy now for Rs. 7500 Only</button>
					  </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</session>
</div>	
	
</session>


<link href="Fonts/fonts/font.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://arfeenkhan.com/jquery-ui.css">
<link href="https://arfeenkhan.com/CSS/PopUp.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<?php if(isset($_SESSION["products"]))
{
    
?>
<script>
$( document ).ready(function() {
    $('#tooltip').css('visibility','inherit');
    
    var catid = "<?php echo $cartid ?>";
    if(catid == 'DVD'){
        $("#books").hide();
  $(".event-details").show();
  $(".abc").removeClass("addclass");
  $('#productid').addClass("addclass");
    }
    
    
});
setTimeout(function() { $('#tooltip').css('visibility','hidden'); }, 2000);



 </script>
<?php }?>
<!-- Modal -->

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
}else{
    //echo 'Your Cart is empty';
}
?>
  <!-- end modal-->
<script>
$(".options p").click(function(){
	$(".abc").removeClass("addclass");
  	$(this).addClass("addclass");
});
$(".dis").unbind("click");
$(".dis").css("cursor","not-allowed");

</script>
<script>
function myProgram() {
	$("#books").hide();
  $(".event-details").show();
}
function myBook(){
  $("#books").show();
  $(".event-details").hide();
}
function newclose()
{
    	$("#myModal").hide();
}
$(".cart-bg").click(function(){
    window.location.href="Form.php"
});

</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  newinput =document.getElementById("myInput").value;
  console.log(newinput);
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByClassName("mainbox");
  if(newinput == ""){
      $('.br-bt').css('border-bottom','1px solid #d4d2d2');
  }else{
      $('.br-bt').css('border-bottom','none');
          for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByClassName("testfile")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
    }
  }
  
  
}
</script>

</body>
</html>