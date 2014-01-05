<?php

echo "
<!DOCTYPE html>
<html>
<head>
<!--meta Tags-->
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<link rel='shortcut icon' href='images/favicon.ico'>
<!--End of SEO meta Tags-->
<title>BigRock - #1 platform for Domain name &amp; Websites </title>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/icheck.js'></script>
<script type='text/javascript' src='js/tips.js'></script>
<script type='text/javascript' src='js/colorbox.js'></script>
<script type='text/javascript' src='js/cycle.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/placeholder.js'></script>
<script type='text/javascript' src='js/ajax.js'></script>
<link type='text/css' rel='stylesheet' href='css/style.css'/>
</head>
<body>
<div id='mobile_header' class='mob'>
<b>Login to Account</b>
<div id='cart'><img src='media/cart.png' alt='cart'></div>
<div id='menu'><img src='media/menu.png' alt='menu'></div>
</div>
<div id='checkout' class='desk'>
<p>☎ 1-800-200-7625 (TollFree) or  <b>Chat Us</b>
<p><img src='media/cart.gif' alt='cart'/> <a title='4 items in your cart' class='tip'>4</a> items in cart <button onClick='load_cart();'>Checkout</button></p>
</div>
<div id='main'>
<div id='header'><div id='logo'></div><span id='text'>Trusted Over 6 Million Webmasters<br>India's #1 Destination for Websites<br/>Lowest Price Guaranteed</span></div>
<!--Menu Bar-->
<div class='divide'></div>
	<div class='navbar' id='skip'>
	<ul class='dropdown'>
	<li><a href='index.html'>Home</a></li>
	<li><a href='#'>Get Domain</a>
	<ul class='sub_menu'>
	<li><a href='/1#'>Register Single Domain</a></li>
	<li><a href='/2#'>Bulk Registration</a></li>
	<li><a href='/3#'>Transfer a Domain</a></li>
	<li><a href='/4#'>Bulk Transfer</a></li>
	<li><a href='/4#'>TLD Pricing</a></li>
	<li><a href='/4#'>Whois Search</a></li>
	</ul></li>
	<li><a href='#'>Get Hosting</a>
	<ul class='sub_menu'>
	<li><a href='#'>Shared Windows</a></li>
	<li><a href='#'>Shared Linux</a></li>
	<li><a href='#'>Wordpress Hosting</a></li>
	<li><a href='#'>Email Hosting</a></li>
	<li><a href='#'>CMS Hosting</a></li>
	<li><a href='#'>Reseller Hosting</a></li>
	</ul></li>
	<li><a href='#'>Get VPS</a></li>
	<li><a href='#'>Get Email</a>
	<li><a href='#'>Our Products</a>
	<ul class='sub_menu'>
	<li><a href='#'>Get Email</a></li>
	<li><a href='#'>Get DigiCert & SSL</a></li>
	<li><a href='#'>Get Web Designers</a></li>
	</ul></li>
	<li><a href='#'>Be a Partner</a>
	<ul class='sub_menu'>
	<li><a href='#'>Affilite Program</a></li>
	<li><a href='#'>DesignXChange Program</a></li>
	<li><a href='#'>Refer a Friend Program</a></li>
	<li><a href='#'>Reseller Program</a></li>
	</ul></li>
	<li><a href='#'>Contact Us</a></li>
	</ul>
	</div>
<!--End of Menu Bar-->
<div id='content'>";
echo "<h1 class=\"center\">Review Your Cart </h1>";
$size=$_GET['size']-1;
//php contents starts here
echo "<center><table id=\"final\"  style=\"width:60%\">";
echo "<tr><td>Sr</td><td>Items</td><td>Price</td>";
	for($i=1;$i<=$size;$i++)
	{
		$item["$i"]=@$_GET["d$i"];
		$price["$i"]=@$_GET["p$i"];
		echo "<tr><td>".$i."</td><td>".$item["$i"]."</td><td>".$price["$i"]."</td></tr>";
	}
echo "<tr><td></td><td>Total</td><td>".@$_GET["total"]."</td></tr>";
echo "<tr><td colspan=\"3\"><input type=\"text\" id=\"coupon\" class=\"input\" style=\"width:90%;margin-bottom:10px\" placeholder=\"Have a Discount Coupon\"/></td></tr>";
echo "</center></table>";
echo "<i>Before Final Step of Payment...Either you need to Logged in or Register to BigRock<br/><hr/></i>";
echo "<span class=\"final\"><a href='#login' class='inline'>Login</a> | <a href='#join' class='inline'>Register</a></span>";
echo "<form action=\"pay.html\"><input type=\"submit\" id=\"payment\" class=\"send\" value=\"Make a Payment to Confirm your Order\" style=\"display:none\"></form>";
//php content ends here
echo "</div>
<div class='divide'></div>
		<div id='footer'>
		<a href='#show' class='left'>▼MORE</a> About | Support | Legal | Privacy | Docs | Partner with us| Careers | Sitemap |
		<select><option>Country</option><option>India</option><option>Global</option></select><a class='right desk'>&copy; 2014 by BigRock</a><a class='right mob' href='/#'>▲TOP</a></div>
		<a id='show'></a>
		<div id='more'>
		<span class='left' style='width:63%;font-size:14px;'>BigRock is one of  ICANN accredited Registar.BigRock awarded as Best Hosting Provider for 2012 & 2013 Respectively by Web Hosting Search &trade; .Meet our <u>Management</u> <u>Team</u>.If you have any problem regarding website , check it our <u>FAQ</u> section.Want something to say BigRock , mail us at <b>care@bigrock.in</b> Thanks for selecting us.
	    </span>
		<span class='right'>
		<img src='media/vs.png' class='payment' alt='Visa'/>
		<img src='media/mc.png' class='payment' alt='MasterCard'/>
		<img src='media/ae.png' class='payment' alt='American Express'/>
		<img src='media/dc.png' class='payment' alt='Discover'/>
		<img src='media/pp.png' class='payment' alt='PayPal'/>
		<img src='media/pay.png' class='payment' alt='Payment'/>
		</span>
		</div>
		<div id='mobile_footer' class='mob'>
		<a href=''><img src='share/m_fb.png' alt='Facebook'/></a>
		<a href=''><img src='share/m_tw.png' alt='Twitter'/></a>
		<a href=''><img src='share/m_wp.png' alt='Blog'/></a>
		<a href=''><img src='share/m_yt.png' alt='Youtube'/></a>
		<a href=''><img src='share/m_g+.png' alt='Google +'/></a>
		<a href=''><img src='share/m_rss.png' alt='Rss'/></a>
		</div>
</div>
<!--## Scroll Section ##-->
<div id='scroll_right'>
	<img src='media/process.png' class='load' id='load' alt='Loading..'/>
	<span><a href='#cart' class='inline'><img src='media/kart.png' alt='Shopping Cart' title='Shopping Cart'/></a></span>
	<span><a href='#login' class='inline'><img src='media/join.png' alt='Login' title='Login' class='inline'/></a></span>
	<span><a href='#join' class='inline'><img src='media/add.png' alt='Register' title='Open An Account'/></a></span>
	<span><a href='#slide' class='coupon'><img src='media/cp.png' alt='Latest Deal' title='Big Discount Coupon'/></a></span>
	<span><a href='#top'><img src='media/up.png' alt='Go Top' title='Go Top'/></a></span>
</div>
<div id='scroll_left'>
	<span><a href='fb.html' class='iframe'><img src='media/fb.png' alt='Our Facebook' title='We are on Facebook'/></a></span>
	<span><a href='#tw' class='inline'><img src='media/tw.png' alt='Our Twitter' title='Follow us  on Twitter'/></a></span>
	<span><a href='yt.html' class='iframe'><img src='media/yt.png' alt='Our YouTube' title='Watch Xclusive Ads'/></a></span>
	<span><a href='#feed' class='blog'><img src='media/wp.png' alt='Our Blog' title='Read Our Official Blog'/></a></span>
	<span><a href='#chat' class='inline'><img src='media/ch.png' alt='Chat With Us' title='Chat Us'/></a></span>
	<span><a href='#share' class='inline'><img src='media/sh.png' alt='Share Us' title='Share Us with your Friends'/></a></span>
</div>
<!--## COLORBOX  Section ##-->
<div style='display:none'>
	<div id='tw' class='model'>
		<a href='https://twitter.com/BigRock'><img src='media/dummy_tw.png' alt='Twitter' style='width:100%'/></a>
    </div>
   	<div id='login' class='model'>
		<h2 style='text-align:center;'>Login</h2>
		<hr/>
		<form action='/login' method='post'>
		<table class='model_login'>
		<tr><td>Email <br/><input type='email' name='mail' class='input' placeholder='Email' required='required'/></td></tr>
	    <tr><td>Password <br/><input type='password' name='pwd' class='input' placeholder='Password' required='required'/></td></tr>
	    <tr><td><button class='send'>Let me In</button></td></tr>
	    </table>
		</form>
		<table>
		<tr><td style='text-align:left'>Or Login Using</td></tr>
		<tr><td style='padding-left:20px'><img src='media/fb_sign.png' alt='fb Login'/></td></tr>
		<tr><td style='padding-left:20px'><img src='media/tw_sign.png' alt='fb Login'/></td></tr>
		</table>
		<hr style='clear:both;visibility:hidden'/>
		<form action='/forgot' method='post' id='forgot'>
		<h4 style='text-align:center;margin:-5px 0 -5px 0'>Forgot Password</h4>
		<table class='model_forgot'>
		<tr>
		<td><input type='email' name='mail'  class='input' placeholder='Email' required='required' style='border-radius:0px;width:130%;'/></td>
		<td><input type='submit' class='forgot' value='Reset It'/></td>
	    </tr>
	    </table>
		</form>
	</div>
	<div id='join' class='model'>
		<h2 style='text-align:center;'>Register</h2>
		<hr/>
		<form action='/register' method='post'>
		<table class='model_join'>
		<tr><td>Name:</td><td><input type='text' name='name'  class='input' placeholder='Name' required='required'/></td></tr>
		<tr><td>Email:</td><td><input type='email' name='mail'  class='input' placeholder='Email' required='required'/></td></tr>
	    <tr><td>Password:</td><td><input type='password' name='pwd'  class='input' placeholder='Password' required=\'required'/></td></tr>
	    <tr><td>Re-Password:</td><td><input type='password' name='repwd'  class='input' placeholder='Password' required='required'/></td></tr>
		</table>
		<button class='send'>Create my Account</button>
		</form>
	</div>
	<div id='slide' class='model'>
		<a href='#1'><img src='media/bigrock1.jpg' alt='Slide 1' width='315' /></a>
		<a href='#2'><img src='media/bigrock2.jpg' alt='Slide 2' width='315' /></a>
		<a href='#3'><img src='media/bigrock3.gif' alt='Slide 3' width='315' /></a>
		<a href='#4'><img src='media/bigrock4.jpg' alt='Slide 4' width='315' /></a>
	</div>
	<div id='feed' class='model'>
	<h2 style='text-align:center;'>Latest Post from BigRock Blog</h2>
		<hr/>
	<script src='http://feed2js.org//feed2js.php?src=http%3A%2F%2Ffeeds.feedburner.com%2FBigRockBlog&amp;utf=y&amp;css=rss-box&amp;html=p'  charset='UTF-8' type='text/javascript'></script>
	</div>
	<div id='chat' class='model'>
	<h2 style='text-align:center;'>Live Chat</h2>	
	<hr/>
	<form action='#chat' method='POST'>
	<table class='model_chat'>
		<tr><td colspan='2'><select><option>Select Department</option><option>Sales</option><option>Customer Support</option></select></td></tr>
		<tr><td>Full Name:</td><td><input type='text' name='name' id='name' class='input' placeholder='Full Name' required='required'/></td></tr>
		<tr><td>Email:</td><td><input type='email' name='mail' id='mail' class='input' placeholder='Email' required='required'/></td></tr>
	</table>
	<button class='send'>Start Chat</button>
	</form>
	</div>
	<div id='share' class='model'>
	<h2 style='text-align:center;'>Spread Us With your Friends</h2>	
	<hr/>
	<table>
		<tr>
        <td><img src='share/fb.png' alt='via Facebook'/></td>
        <td><img src='share/tw.png' alt='via Twitter'/></td>
        <td><img src='share/li.png' alt='via LinkedIn'/></td>
    	</tr>
    	<tr>
        <td><img src='share/rss.png' alt='via RSS'/></td>
        <td><img src='share/pin.png' alt='via Pinterest'/></td>
        <td><img src='share/tum.png' alt='via Tumbblr'/></td>
    	</tr>
    	<tr>
        <td><img src='share/yt.png' alt='via YouTube'/></td>
        <td><img src='share/vim.png' alt='via Vimio'/></td>
        <td><img src='share/flk.png' alt='via Flicker'/></td>
    	</tr>
    	<tr>
        <td><img src='share/g+.png' alt='via Google+'/></td>
        <td><img src='share/drb.png' alt='via Dribble'/></td>
        <td><img src='share/mail.png' alt='via Email'/></td>
    	</tr>
	</table>
	</div>
</div>
</body>
</html>";
?>