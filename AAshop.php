<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html">
<title>Brija Cosmetics - Shop</title>
<link rel="icon" href="http://designm.ag/favicon.ico">
<!<link rel="stylesheet" type="text/css" media="all" href="BrijaMain.css">
<link rel="stylesheet" type="text/css" media="all" href="JqueryImages.css">
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
</head>
<div id"main" class="container">
	<div class="mainImage">
		<img src="images/collection1.jpeg">
		<div class="desc">
			<a href="#" class="collapse"> Close Me!</a>
			<div class="block">
				<a href="collections.php"><h2>Themed Collections!</h2></a>
				<p>Click Here to Go to Themed Collections!
				</p>
			</div>
		</div>
		<img src="images/singles1.jpeg">
		<div class="desc">
			<a href="#" class="collapse"> Close Me!</a>
			<div class="block">
				<a href="singles.php"><h2>Singles!</h2></a>
				<p>Click Here to Go to Singles!
				</p>
			</div>
		</div>
		<img src="images/lips1.jpeg">
		<div class="desc">
			<a href="#" class="collapse"> Close Me!</a>
			<div class="block">
				<a href="lips.php"><h2>Lips!</h2></a>
				<p>Click Here to Go to Lips!
				</p>
			</div>
		</div>
		<img src="images/face1.jpeg">
		<div class="desc">
			<a href="#" class="collapse"> Close Me!</a>
			<div class="block">
				<a href="face.php"><h2>Face!</h2></a>
				<p>Click Here to Go to Face Products!
				</p>
			</div>
		</div>
	</div>
	<!//THIS IS FOR THE SIDEBAR
	<div class="imageThumb resize">
		<ul>
			<li>
				<a href="images/collection1.jpeg"><img class="resize" src="images/collection1.jpeg"></a>
			
			<div class="block">
				<h2>Collections!</h2>
				<p>Check Out the Collections!</p>
			</div>
			</li>
			<li>
				<a href="images/single1.jpg"><img class="resize" src="images/single1.jpg"/></a>
				<div class="block">
					<h2>Single Shadows</h2>
					<p>These are single shadows</p>
				</div>
			</li>
			<li>
				<a href="images/lips1.jpeg"><img class="resize" src="images/lips1.jpeg"/></a>
				<div class="block">
					<h2>Lips</h2>
					<p>These are Lip products!</p>
				</div>
			</li>
			<li>
				<a href="images/face1.jpeg"><img class="resize" src="images/face1.jpeg"/></a>
				<div class="block">
					<h2>Face Products!</h2>
					<p>These are Face Products!</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<script type="text/javascript">
var intervalID;
var slidetime = 2500; //milliseconds between automatic transitions
$(document).ready(function(){
	//this disables autoplay
	intervalID=setInterval(cycleImage,slidetime);

	$(".mainImage .desc").show();//show banner
	$(".mainImage .block").animate({opacity: 0.75}, 1);//this sets opacity

	//click and hover events for thmbnail list
	$(".imageThumb ul li:first").addClass('active');
	$(".imageThumb ul li").click(function(){}
		//Set Variables
		var imgAlt = $(this).find('img').attr("alt");//get alt tag of IMG
		var imgTitle = $(this).find('a').attr("href");//get main image URL
		var imgDesc = $(this).find('.block').html();//get HTML of block
		var imgDescHeight = $(".mainImage").find('.block').height(); //calc height of block

		if ($(this).is(".active")) {
			return false;//don't click through
		} else{
			//animate the teaser
			$(".mainImage .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
				$(".mainImage .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
				$(".mainImage img").attr({ src: imgTitle , alt: imgAlt});
			});
		}
		$(".imageThumb ul li").removeClass('active'); // Remove class of 'active' on all lists
		$(this).addClass('active');  // add class of 'active' on this list only
		return false;
		
	}) .hover(function(){
		$(this).addClass('hover');
		}, function() {
		$(this).removeClass('hover');
	});
			
	// Toggle Teaser
	$("a.collapse").click(function(){
		$(".mainImage .block").slideToggle();
		$("a.collapse").toggleClass("show");
	});
	
	// Function to autoplay cycling of images
	// Source: http://stackoverflow.com/a/9259171/477958
	function cycleImage(){
    var onLastLi = $(".imageThumb ul li:last").hasClass("active");       
    var currentImage = $(".imageThumb ul li.active");
    
    
    if(onLastLi){
      var nextImage = $(".imageThumb ul li:first");
    } else {
      var nextImage = $(".imageThumb ul li.active").next();
    }
    
    $(currentImage).removeClass("active");
    $(nextImage).addClass("active");
    
		// Duplicate code for animation
		var imgAlt = $(nextImage).find('img').attr("alt");
		var imgTitle = $(nextImage).find('a').attr("href");
		var imgDesc = $(nextImage).find('.block').html();
		var imgDescHeight = $(".mainImage").find('.block').height();
					
		$(".mainImage .block").animate({ opacity: 0, marginBottom: -imgDescHeight }, 250 , function() {
      $(".mainImage .block").html(imgDesc).animate({ opacity: 0.85,	marginBottom: "0" }, 250 );
      $(".mainImage img").attr({ src: imgTitle , alt: imgAlt});
		});
  };
	
});// Close Function
}
</script>