<html>
	<head>
	
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83019108-2"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-83019108-2');
		</script>

		<meta charset="utf-8" />
		<title>Konkur98 | روزشمار کنکور ۹۸</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="روزشمار کنکور ریاضی ۱۳۹۸" />
		<meta name="generator" content="Konkur 98" />
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<meta property="og:description" content="روزشمار کنکور ریاضی ۱۳۹۸" />
		<meta property="og:generator" content="AppleTimer Persian Team | appletimer.ir" />
		<meta keywords="کنکور,ریاضی,1398">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="icon" type="image/png" href="img/favicon.jpg">
		<!-- CSS 
		================================================== -->
		<!-- Bootstrap 3-->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- Template Styles -->
		<link href="css/style.css" rel="stylesheet" media="screen">
		<!-- Responsive CSS -->
    		<link href="css/responsive.css" rel="stylesheet">
		<script src="time_js/jquery.js"></script>
		<script src="time_js/moment.js"></script>
		<script src="time_js/moment2.js"></script>
		<script src="time_js/countdown.js"></script>
		<script src="time_js/event.js"></script>
		
		<link rel="apple-touch-icon" href="img/favicon.jpg="/>
	</head>
	
<body id="body-fa">
	<!-- PRELOADER -->
		<div class="spn_hol">
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

	<!-- END PRELOADER -->
 
	<!-- HEADER ================================================= -->	  
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>شمارش معکوس آزمون سراسری 
					<a href="#" id="major" onclick="major_change(); "> ریاضی </a>
					سال ۱۳۹۸</h1><br>
					<p class="lead" style="font-size:20px"></p>

	<!--CREATED BY: Appletimer persian team - copy karo sag ... :))) pas copy nakon-->
	<div id="clock" class="clock clock-fa">
		<script type="text/javascript">
			document.getElementById("major").onclick = function() {major_change()};

			function major_change() {
				// window.location = "http://www.google.com";
				var tajrobi = moment.tz("2019-07-05 08:00", "Asia/Tehran");
				$('#clock').countdown(tajrobi.toDate(), clock_event);
			}

			var riazi = moment.tz("2019-07-04 08:00", "Asia/Tehran");

			$('#clock').countdown(riazi.toDate(), clock_event);
		</script>
	</div>
			</div></div></div>
			<br> <div class="footer"> چه قدر دیر میفهمیم که زندگی، همین روزهاییست که منتظر گذشتنش هستیم... </div>
	</header>

	 <!-- JAVASCRIPT ================================================== -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/retina.min.js"></script>

</body>  	
</html>