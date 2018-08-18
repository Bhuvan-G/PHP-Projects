<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>	
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page1">
<?php include('db.php');?>
<?php $username= $_COOKIE['username'];?>
<div class="body3"></div>
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div id="logo_box">
				<h1><a href="index.html" id="logo">Leave Management System For MNC<span></span></a></h1>
			</div>
			<nav>
				<ul id="menu">
					<li id="menu_active"><a href="adminhome.php">Home</a></li>
					<li><a href="employees.php">Employees</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Contacts</a></li>
					<li class="bg_none"><a href="SiteMap.html">SiteMap</a></li>
				</ul>
			</nav>
			<div class="wrapper">
				<div class="text1">Leave management System for</div>
				<div class="text2">Multi national company</div>
				<ul id="icons">
					<li><span>Follow Us!</span></li>
					<li><a href="#"><img src="images/icon1.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/icon2.jpg" alt=""></a></li>
					<li><a href="#"><img src="images/icon3.jpg" alt=""></a></li>
				</ul>
			</div>
		</header>
<!-- / header -->
	</div>
</div>
<div class="body2">
	<div class="main">
<!-- content -->
		<section id="content">
			<div class="marg_top wrapper">
				<article class="col1">
					<div class="box1_out">
						<div class="box1">
							<h2>Welcome-<?php echo htmlentities($_COOKIE['username'], ENT_QUOTES, 'UTF-8'); ?></h2>
							<p class="pad_bot1">
								This is a adminitrator area<br>Admin can monitor all the<br> employees.
							</p>
							<!--<a href="#" class="button"><span><span></span></span></a>-->
							<img src="images/img1.png" class="img" alt="">
						</div>
					</div>
					<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
				</article>
				<article class="col1 pad_left1">
					<div class="box1_out">
						<div class="box1">
							<h2>manager</h2>
							<p class="pad_bot1">
								The manager can allow<br>the employees leave <br>.
							</p>
							<!--<a href="#" class="button"><span><span></span></span></a>-->
							<img src="images/img2.png" class="img" alt="">
						</div>
					</div>
					<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
				</article>
				<article class="col1 pad_left1">
					<div class="box1_out">
						<div class="box1">
							<h2>Employee</h2>
							<p class="pad_bot1">
								The employee will contact the manager only.
							</p>
							<a href="logout.php" class="button"><span><span>SignOut</span></span></a>
							<img src="images/img3.png" class="img" alt="">
						</div>
					</div>
					<div class="box1_bot"><div class="box1_bot_left"><div class="box1_bot_right"></div></div></div>
				</article>
			</div>
			
		</section>
<!-- / content -->
	</div>
</div>
<div class="main">
<!-- footer -->
	<footer>
		<div class="wrapper">
			<article class="col1">
				<div class="pad">
					<h2>Protecting Your Info</h2>
					<p>The latest on keeping your personal info safe and secure.</p>
					<ul class="list1">
						<li><a href="#">Security Alerts</a></li>
						<li><a href="#">Avoiding Scams</a></li>
					</ul>
				</div>
			</article>
			<article class="col2 pad_left1">
				<div class="pad">
					<div class="wrapper">
						<article class="cols">
							<h2>Newsletter</h2>
							<form id="form_1" action="" method="post">
								<div>
									<div class="bg"><input class="input" type="text" value="Enter email here" onblur="if(this.value=='') this.value='Enter email here'" onFocus="if(this.value =='Enter email here' ) this.value=''" /></div>
									<a href="#" class="submit" onClick="document.getElementById('form_1').submit()"><span><span>Submit</span></span></a>
									<a href="#">Unsucscribe</a>
								</div>
							</form>
						</article>
						<article class="cols pad_left1">
							<h2>Customer Log In</h2>
							<form id="form_2" action="" method="post">
								<div>
									<div class="bg left"><input class="input input1" type="text" value="Enter user ID here"	onblur="if(this.value=='') this.value='Enter user ID here'" onFocus="if(this.value =='Enter user ID here' ) this.value=''" /></div>
									<div class="bg right"><input class="input input2" type="password" value="����������" onblur="if(this.value=='') this.value='����������'" onFocus="if(this.value =='����������' ) this.value=''"	 /></div>
									<a href="#" class="submit" onClick="document.getElementById('form_2').submit()"><span><span>login</span></span></a>
									<a href="#">Forgot password?</a> &nbsp;	<a href="#">Sign up</a>
								</div>
							</form>
						</article>
					</div>
				</div>	
			</article>
		</div>
		<div class="under2"></div>
		<div class="wrapper font_size">
			<div class="pad">
				<a href="#" target="_blank">Website template</a> designed by TemplateMonster.com<br>
				<a href="#" target="_blank">3D Models</a> provided by Templates.com
			</div>
		</div>
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>