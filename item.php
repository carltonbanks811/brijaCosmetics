<html>
<head>
	<link rel="stylesheet" type="text/css" href="BrijaMain.css">
	<title>title</title>
</head>

<div class="mainpage">
	<header class="header link"><a href="index.html"> [title] </a></header>
	<div class="everything">
	<div class="menu">
		<ul>
			<li><a href="index.html">home</a></li>
			<li><a href="about.html">about</a></li>
			<li><a href="shop.php">shop</a></li>
			<li><a href="faq.html">faq</a></li>
			<li><a href="contact.html">contact</a></li>
			<li><a href="press.html">press</a></li>
		</ul>
	</div>
	<br><br><br>
	<div id = "content">
	<?php
		$p = $_SERVER['QUERY_STRING'];
		if($p=="vilcol"){
			
		}

		
	?>
	<div class="table" >
		<table>
			<tr>
				<td><div class="background" class="resize"><div class="US">$2.75 to US</div></div><!--<img class="img resize" src="usps.jpeg">--></td>
				<td><div class="link"><a href="http://www.etsy.com/shop/BrijaCosmetics?ref=shop_sugg"><img class="img resize"  src="images/etsysquare.png"></a></div></td>
				<td><div><img class="img resize" src="images/vegan.gif"></div></td>
				<td><div><img class="img resize" src="images/crueltyfree.png"></div></td>

			</tr>

		</table>

	</div>
</div>
</div>
</body>
</html>
<?php
require("itemTPL.php");

$temp = new Template('item.tpl');
$temp->set('title','BLAH');
$temp->set('page','Home');
$temp->set('content','This is where the content will go!');

echo $temp->output();

?>