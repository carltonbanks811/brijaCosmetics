<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Image Rotator w/ Desc - CSS &amp; jQuery Tutorial</title>
  <link rel="shortcut icon" href="http://designm.ag/favicon.ico">
  <link rel="icon" href="http://designm.ag/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
</head>

<body>
<div class="container">
	<h1>Image Gallery w/ Teaser - CSS &amp; jQuery Tutorial</h1>
</div>
<div id="main" class="container">
	<div class="main_image">
		<a href="collections.php"><img src="images/collection2.jpeg" alt="- banner1" /></a>
		<div class="desc">
			<a href="#" class="collapse">Close Me!</a>
			<div class="block">
				<a href="collections.php"><h2>Collections</h2></a>
				
				<p>Click Here to go to Collections!</a> </p>
			</div>
		</div>
	</div>
	<div class="image_thumb">
		<ul>
			<li>
				<a href="images/collection2.jpeg"></a>
				<div class="block">
					<a href="collections.php"><h2>Collections</h2>
					</a>
					<p>Click Here to go to Collections!<br /></a> </p>
				</div>
			</li>
			<li>
				<a href="images/banner02.png"><img src="images/banner02_thumb.png" alt="The Outichoke Lantern" /></a>
				<div class="block">
					<h2>The Outichoke Lantern</h2>
					<small>08/21/2013</small>
					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.</p>
					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1205317-The-Outichoke-Lantern" target="_blank">Artwork by Steve Lowtwait</a></p>
				</div>
			</li>
			<li>
				<a href="images/banner03.png"><img src="images/banner03_thumb.png" alt="waiter illustration" /></a>
				<div class="block">
					<h2>Waiter</h2>
					<small>08/27/2013</small>
					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1212154-Waiter" target="_blank">Artwork by CROP</a></p>
				</div>
			</li>
			<li>
				<a href="images/banner04.png"><img src="images/banner04_thumb.png" alt="magic rabbit in the hat" /></a>
				<div class="block">
					<h2>Rabbit in the Hat</h2>
					<small>08/29/2013</small>
					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et.<br /><a href="http://dribbble.com/shots/1214764-Rabbit-In-The-Hat" target="_blank">Artwork by Fabricio Rosa Marques</a></p>
				</div>
			</li>
			<li>
				<a href="images/banner05.png"><img src="images/banner05_thumb.png" alt="Puzzled Putter" /></a>
				<div class="block">
					<h2>Wafer</h2>
					<small>08/28/2013</small>
					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem. Neo nostrud letatio aliquam validus eum quadrum, volutpat et. <br /><a href="http://dribbble.com/shots/1214342-wafer" target="_blank">Artwork by Gunay</a></p>
				</div>
			</li>
			<li>
				<a href="images/banner06.png"><img src="images/banner06_thumb.png" alt="laboratory background night" /></a>
				<div class="block">
					<h2>Laboratory</h2>
					<small>06/07/2013</small>
					<p>Autem conventio nimis quis ad, nisl secundum sed, facilisi, vicis augue regula, ratis, autem.<br /><a href="http://dribbble.com/shots/1104743-Laboratory-background" target="_blank">Artwork By Ricardo</a></p>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="container">
	<p style="color: #fff; font-size: 1.2em; padding: 10px 0; float: right;">Tutorial by <a href="http://www.sohtanaka.com/" style="color: #fff;">Soh Tanaka</a> - Updated by <a href="http://byjakewithlove.com/" style="color: #fff;">Jake Rocheleau</a><br />
</p>
</div>

<script type="text/javascript">
var intervalId;
var slidetime = 2500; // milliseconds between automatic transitions

$(document).ready(function() {	

  // Comment out this line to disable auto-play
	intervalID = setInterval(cycleImage, slidetime);

	$(".main_image .desc").show(); // Show Banner
	$(".main_image .block").animate({ opacity: 0.85 }, 1 ); // Set Opacity

	// Click and Hover events for thumbnail list
	$(".image_thumb ul li:first").addClass('active'); 
	$(".image_thumb ul li").click(function(){ 
		// Set Variables
		var imgAlt = $(this).find('img').attr("alt"); //  Get Alt Tag of Image
		var imgTitle = $(this).find('a').attr("href"); // Get Main Image URL
		var imgDesc = $(this).find('.block').html(); 	//  Get HTML of block
		var imgDescHeight = $(".main_image").find('.block').height();	// Calculate height of block	
		
		if ($(this).is(".active")) {  // If it's already active, then...
			return false; // Don't click through
		} else {
			// Animate the Teaser				
			$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				$(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
				$(".main_image img").attr({ src: imgTitle , alt: imgAlt});
			});
		}
		
		$(".image_thumb ul li").removeClass('active'); // Remove class of 'active' on all lists
		$(this).addClass('active');  // add class of 'active' on this list only
		return false;
		
	}) .hover(function(){
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});
			
	// Toggle Teaser
	$("a.collapse").click(function(){
		$(".main_image .block").slideToggle();
		$("a.collapse").toggleClass("show");
	});
	
	// Function to autoplay cycling of images
	// Source: http://stackoverflow.com/a/9259171/477958
	function cycleImage(){
    var onLastLi = $(".image_thumb ul li:last").hasClass("active");       
    var currentImage = $(".image_thumb ul li.active");
    
    
    if(onLastLi){
      var nextImage = $(".image_thumb ul li:first");
    } else {
      var nextImage = $(".image_thumb ul li.active").next();
    }
    
    $(currentImage).removeClass("active");
    $(nextImage).addClass("active");
    
		// Duplicate code for animation
		var imgAlt = $(nextImage).find('img').attr("alt");
		var imgTitle = $(nextImage).find('a').attr("href");
		var imgDesc = $(nextImage).find('.block').html();
		var imgDescHeight = $(".main_image").find('.block').height();
					
		$(".main_image .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
      $(".main_image .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
      $(".main_image img").attr({ src: imgTitle , alt: imgAlt});
		});
  };
	
});// Close Function
</script>
</body>
</html>