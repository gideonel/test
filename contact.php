<?php
    // message vars
    $msg = '';
    $msgClass = '';

    //check for submit

    if(filter_has_var(INPUT_POST, 'submit')){
        //get form data
        $name =htmlspecialchars($_POST['name']);
        $email =htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        ini_set("sendmail_from", ".$email");

        //check required fields

        if(!empty($email) && !empty($name) && !empty($message)){
            // passed
            //check email

            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                //failed
                $msg = 'please use a valid email';
            } else {
                //passed
               $to = 'lordgideonel@gmail.com';
               $subject = 'contact requet from'.$name;
               $body = '<h2>contact request</h2>
                    <h>name</h4><p>'.$name.'</p>
                    <h>name</h4><p>'.$email.'</p>
                    <h>name</h4><p>'.$message.'</p>
                    ';

                    //email header
                   $headers = "MIME-Version: 1.0" . "\r\n"; 
                   $headers .= "From :" .$name."<".$email.">"."\r\n";
                   $headers .="Content-Type:text/html; charset=UTF-8" . "\r\n";
                   
                   mail($to, $subject, $body, $headers);
                   if(mail($to, $subject, $body, $headers)){
                       //email sent
                       $msg = 'email has been sent'; 
                   } else{
                    $msg = 'email was not sent';
                   }
            }

        } else {
            //failed
            $msg = 'please fill in all fields';

        } 
        
    }

?>


<!DOCTYPE html><html dir="ltr" lang="en">

    <!-- Mirrored from www.provisorsecurityservices.com/about-us.htm by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 10:38:52 GMT -->
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script type="" src="application/layouts/scripts/logistics_default/vendor/scripts/jquery/jquery-1-9-1/jquery.js"></script><script type="" src="application/layouts/scripts/logistics_default/vendor/scripts/jui/jui-1-10-2/red/jquery-ui.custom.js"></script><link href="application/layouts/scripts/logistics_default/vendor/scripts/jui/jui-1-10-2/red/jquery-ui.custom.css" media="screen" rel="stylesheet" type="text/css" /><script type="" src="application/layouts/scripts/logistics_default/vendor/scripts/js/jquery.idTabs.min.js"></script><script type="" src="vendor/scripts/js/slicker.js"></script><script type="" src="vendor/scripts/js/common.js"></script><script type="" src="vendor/scripts/js/jquery.hoverpulse.js"></script><link href="application/layouts/scripts/logistics_default/css/template.css" media="screen" rel="stylesheet" type="text/css" /><link href="application/layouts/scripts/logistics_default/css/general.css" media="screen" rel="stylesheet" type="text/css" /><script type="" src="vendor/scripts/kendo/js/kendo.web.min.js"></script><script type="" src="vendor/scripts/kendo/js/cultures/kendo.culture.en.min.js"></script><script type="" src="vendor/scripts/kendo/js/cultures/kendo.culture.en-US.min.js"></script><script type="" src="http://connectcourcoltd.com/application/modules/Portfolio/js/uploader.html"></script><link href="vendor/scripts/kendo/src/styles/kendo.common.css" media="screen" rel="stylesheet" type="text/css" /><link href="vendor/scripts/kendo/src/styles/kendo.uniform.css" media="screen" rel="stylesheet" type="text/css" /><link href="application/layouts/scripts/logistics_default/css/pagination.css" media="screen" rel="stylesheet" type="text/css" />
<link href="images/favicon.png" rel="icon" type="image/png" />



<style type="text/css">
.auto-style1 {
	font-family: Tahoma;
}
.auto-style2 {
	font-family: Tahoma;
	font-size: x-small;
}
</style>
</head>
<body>
<div id="wrapper">
	<!-- Header Start -->

<header id="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="Air shipment tracking system, Sea shipment tracking system, Cargo tracking system" title="Provisor Security Services" height="61" border="0" /></a>
            <!--<h1></h1>-->
        </div>

        <div class="quick-access">
            <div class="top-links">
            </div>


        </div>

        <div class="support">


	        </div>

        <div class="user-link">
            <span class="welcome">Welcome To Provisor Securiy Services</span>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>

</header>
    <!-- Top Navigation Start-->
    <nav class="top-nav">
        <div class="container"><link href="application/layouts/scripts/logistics_default/css/pagination.css" media="screen" rel="stylesheet" type="text/css" />
<link href="application/layouts/scripts/logistics_default/css/menu.css" media="screen" rel="stylesheet" type="text/css" /><ul class="dm-menu">
<li><a class="noTitle" href="index.html" title="Home" target="_self">Home</a></li><li><a class="noTitle" href="about-us.html" title="About Us" target="_self">About Us</a></li><li><a class="noTitle" href="contact.html#" title="Our Services" target="_self">Our Services</a><ul><li class="current"><a class="noTitle" href="air-freight.html" title="Air Freight" target="_self">Air Freight</a></li><li class="current"><a class="noTitle" href="sea-freight.html" title="Sea Freight" target="_self">Sea Freight</a></li><li class="current"><a class="noTitle" href="lcl-truck-load.html" title="LCL & Truck Load" target="_self">LCL & Truck Load</a></li><li class="current"><a class="noTitle" href="warehousing-distribution.html" title="Warehousing Distribution" target="_self">Warehousing Distribution</a></li><li class="current"><a class="noTitle" href="customs-brockerage.html" title="Customs Brockerage" target="_self">Customs Brockerage</a></li></ul></li><li></li><li><a class="noTitle" href="trace.php" title="Shipment Tracking" target="_self">Shipment Tracking</a></li><li><a class="noTitle" href="import.html" title="Import" target="_self">Import</a></li><li><a class="noTitle" href="export.html" title="Export" target="_self">Export</a></li><li class="current"><a class="noTitle" href="contact.php" title="Contact Us" target="_self">Contact Us</a>
</ul></div>
    </nav>
    <!-- Top Navigation End-->


    <!-- Banner Start -->
    <div id="banner">
        <div class="container" style="height: 291px">
            	<!-- Codrops top bar -->
            <!--/ Codrops top bar -->
			<div id="da-slider" class="da-slider" style="left: 0px; top: 0px; height: 291px">
				<div class="da-slide" style="left: 0px; top: -53px">
					<h2>International Courier</h2>
					<p>Total delivers worldwide through its network of offices and associates.-Total provides overnight deliveries to some destinations and has the fastest transit times to most destinations</p>

					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2>Diplomat Services</h2>
					<p>We can arrange to do delivery of any special, important or precious consignment worldwide by sending one of our representatives assigned specially for this purpose</p>

					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2>Logistics Solutions</h2>
					<p>Offering warehouse capacity throughout the global network of operations, We offer flexible solutions to meet the demands of our clients</p>

					<div class="da-img"></div>
				</div>
				<div class="da-slide">
					<h2>Customised Solutions</h2>
					<p>We understand that in today's fast paced lifestyle, It is important to provide each and every customer with customised solutions  which enables businesses to successfully strive</p>

					<div class="da-img"></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
		<script type="text/javascript" src="http://connectcourcoltd.com/js/jquery.min.html"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});

			});
		</script>

        </div>
    </div>
    <!-- Banner End -->

        <!-- Body Start-->
        <section id="main-container">
            <!-- Content Start -->
    <article id="content">


<div class="mod mod-article">

<div class="article-icon"><h1>Contact Us</h1></div>
<div class="clear"></div>
<div style="margin-left:50px">

<?php if ($msg != '') : ?>
    <!-- <?php echo "success"; ?> -->
    <?php echo $msg;?>

    <?php endif ;?>


    <form name="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          <input name="name" type="text" placeholder="Full Name" style="width:250px; height:30px;" size="28" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">

          <input name="email" type="text" placeholder="Email" style="width:250px; height:30px;" size="28" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">

          <div class="clear">&nbsp;</div>

          <textarea name="message" cols="72" rows="10" <?php echo isset($_POST['message']) ? $message : ''; ?>></textarea>

          <input name="submit" type="submit" class="input6" value="Send">
                               </form></div>
    <div id="article_content_area"><div style="margin-top:50px; width:700px;"></div></div>

<div>
        </div>

<div class="clear">&nbsp;</div>

<!-- Getting All Comments from Comment Module and Add Comment Form -->
    <!-- End of Getting All Comments from Comment Module Add Comment Form -->
</div>

                </article>
      <!-- Content End -->
            <!-- Right Sidebar Start -->
    <aside id="sidebar">

<div class="block block-subscribe">
<img alt="" height="423" src="images/5674731budget-couriers-delivery-man.png" width="281"></div>

    </aside>
    <!-- Right Sidebar End -->
        </section>
<!-- Body End -->

<!-- Footer Start -->

<footer id="footer">
<div class="container">
    <div class="links-container">
        <div class="links">
            <span>About Connect Courier Company Limited:</span>
            <ul>
                <li class="first"><a href="http://connectcourcoltd.com/Logistics-index.html">Home</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="trace.html">Shipment Tracking</a></li>
                <li><a href="air-freight.html">Air Freight</a></li>
                <li><a href="sea-freight.html">Ocean Freight</a></li>
                <li><a href="lcl-truck-load.html">Trucking Delivery</a></li>
            </ul>
        </div>





        <div class="copyright clear">
            Copyright &copy 2017 Connect Courier Company Limited. All Rights Reserved </div>
    </div>

</div>
</footer>    <!-- Footer End -->
</div>
<div class="go-top"><a href="http://connectcourcoltd.com/trace.htm#top" id="scroll-top">Top</a></div>
<script type="text/javascript" src="application/layouts/scripts/logistics_default/vendor/scripts/js/scroll.js"></script>
</body>

<!-- Mirrored from www.provisorsecurityservices.com/trace.htm by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jun 2021 10:38:56 GMT -->
</html>
