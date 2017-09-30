<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Book store </title>
    <meta charset="utf-8">

    <!-- Linking styles -->
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">

    <!-- Linking scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>   
    <script src="js/main.js"></script>

    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

        <header><!-- Defining the header section of the page -->

            <nav><!-- Defining the navigation menu -->
                <ul>
                    <li class="selected"><a href="index.php">Home</a></li>
					<li><a href="index.php">All Books</a></li>
                    <li><a href="about.php">About</a></li>
					<li><a href="contact.php">Contact us</a></li>
                </ul>
            </nav>


            <div class="top_head"><!--  top head element -->
                <div class="logo"><!-- logo element -->
                        <a href="index.php"><img src="images/logo.jpg" title="BOOK" alt="BOOK " height= "80" width = "100" />
                    </a>
                </div>
				
                    <ul id="social"><!-- Social profiles links -->
                        <li><a href="#" title="facebook" rel="external nofollow"><img alt="" src="images/facebook.png"></a></li>
                        <li><a href="#" title="twitter" rel="external nofollow"><img alt="" src="images/twitter.png"></a></li>
                        <li><a href="#" title="linkedin" rel="external nofollow"><img alt="" src="images/linkedin.png"></a></li>
                        <li><a href="#" title="rss" rel="external nofollow"><img alt="" src="images/rss.png"></a></li>
                    </ul>
				
                </section>
            </div>
			<div class='cartstatus'>

				
				
					
					Your Cart : <span id='cart_total'><?php echo $_SESSION['cart_num'];?></span> Products 
					<a href='checkout.php' class='checkout'>CHECKOUT</a>&nbsp;&nbsp;
					<?php 
					
					if(!isset($_SESSION['login']))
					{ ?>
					<a href='register.php' class='link'>Register</a> / <a href='login.php'  class='link'>Login</a>
					<?php } else { ?> <a href='logout.php' class='link'>Logout</a> <?php } ?>
				</div>
            <section id="submenu">
                <ul>
				<li><a href='index.php'>HOME</a></li>
				<?php			
				$result_catrel=mysql_query("select * from `category_relation` WHERE prnt_id='0' order by `c_order`");

				while($row = mysql_fetch_object($result_catrel))
				{
					$result_catdet=mysql_query("select `id`, `category_name`,`status` FROM `category_details` WHERE id='$row->id' and status='yes'");
					
					while($row22=mysql_fetch_array($result_catdet)) 
					{	
						echo " <li><a href='index.php?id=".$row22['id']."'>".$row22['category_name']."</a></li>";
					}
				}
				?>
                </ul>
            </section>

        </header>

        <div id="slider"><!-- Defining the main content section -->

        <!-- Promo slider -->
            <section id="slider-wrapper">
                <div id="slider" class="nivoSlider">
                    <img style="display: none;" src="images/promo1.jpg" alt="" title="FICTION PROMO">
                    <img style="display: none;" src="images/promo2.jpg" alt="" title="#CRIME AND MYSTERY">
                    <img style="display: none;" src="images/promo3.jpg" alt="" title="NON FICTION">
                </div>

            </section>
        </div>