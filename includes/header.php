<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">


<!--Remy Sharp Shim -->
<!--[if lte IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script>
<![endif]-->
<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href='css/flipping_gallery.css' rel='stylesheet' type='text/css'>
<link href="css/styles.css" type="text/css" rel="stylesheet">

<link href="jquery-ui/jquery-ui.css" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script src="jquery-ui/jquery-ui.js"></script>

<script src="js/script.js"></script>

<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>

<!-- flipping gallery -->
<script src="js/jquery.flipping_gallery.js"></script>

<!--map-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcxhnHTgLqIoiXXbDclKq_gtaFcORxzzc"> </script>
<script type="text/javascript" src="js/jquery.googlemap.js"> </script>



<script type="text/javascript">
	$(function(){
		//SyntaxHighlighter.all();
		$( document ).ready(function() {
		$('.cssmenu > ul > li > a').click(function() {
		  $('.cssmenu li').removeClass('active');
		  $(this).closest('li').addClass('active');
		  var checkElement = $(this).next();
		  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
		    $(this).closest('li').removeClass('active');
		    checkElement.slideUp('normal');
		  }
		  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
		    $('.cssmenu ul ul:visible').slideUp('normal');
		    checkElement.slideDown('normal');
		  }
		  if($(this).closest('li').find('ul').children().length == 0) {
		    return true;
		  } else {
		    return false;
		  }
		});
		});
	});
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
				$('body').removeClass('loading');
			}
		});

		$( "#button" ).button();


		$( "#tabs" ).tabs();

		$( "#accordion" ).accordion();

		var $map = $("#map").googleMap({
			zoom: 17
		});
    	$map.addMarker({
      		coords: [47.708961, -122.332647], // GPS coords
			url: 'https://goo.gl/maps/EdawNvnnwKt'
    	});

		$(".gallery").flipping_gallery({
	      enableScroll: true,
	      autoplay: 2000
	    });

	    $(".next").click(function() {
	      $(".gallery").flipForward();
	      return false;
	    });
	    $(".prev").click(function() {
	      $(".gallery").flipBackward();
	      return false;
	    });

		$(".nav-button").click(function () {
	 $(".nav-button,.primary-nav").toggleClass("open");
	 });

	});






















</script>


<title>Saffron Grill</title>
</head>
<body>
<div id="wrapper">
	<header>
	  <img id="logo" src="images/logo.jpg" alt="logo">
	  <div id="info">
		  <p><strong> Hours Everyday </strong> </p>
		  <p> Lunch: 12pm-3pm </p>
		   <p> Dinner: 7pm-11pm </p>
		   <p> # 206-417-0707 </p>
	  </div> <!--end info-->

	</header>
<nav>
    <ul>
	<?=makeLinks($nav1)?>
		<!--
        <li><a href="index.html">HOME </a></li>
        <li><a href="about.html"> ABOUT </a></li>
        <li><a href="menu.html"> MENU </a></li>
        <li><a href="catering.html"> CATERING </a></li>
        <li><a href="contact.html"> CONTACT </a></li>
	-->
    </ul>
</nav>

<!-- start mobile navigation -->
<button class="nav-button">Toggle Navigation</button>
<div class="mobile-logo">

</div>
<ul class="primary-nav">
  <li><a href="index.php">Home</a></li>
  <li class="parent"><a href="about.php">About</a>
    <ul>
      <li><a href="aboutmobile.php">About</a></li>
      <li><a href="ownermobile.php">Owner</a></li>
	  <li><a href="awardmobile.php">Awards</a></li>
      </ul>
  </li>


<li><a href="menu.php">Menu</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>


</ul>
<!-- end mobile navigation -->
