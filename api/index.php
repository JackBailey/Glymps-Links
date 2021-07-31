<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glymps</title>
    <link rel="shortcut icon" type="image/jpg" href="/images/jb.png"/>
    <link rel="stylesheet" type="text/css"  href = "/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php
		$path = $_SERVER['REQUEST_URI'];
		if ($path != "/"){
			header("Location: https://jackb.link/glymps{$path}");
		}
	?> 
    <div class = "pfp">
        <img src = "/img/logo.png"></div>
    </div>
    <h1>Glymps</h1>
    <div class = "socialIcons">
        <a href = "/youtube" class = "fa fa-youtube-play"></a>
        <a href = "/steam" class = "fa fa-steam"></a>
        <a href = "/twitter" class = "fa fa-twitter"></a>
        <a href = "/twitch" class = "fa fa-twitch"></a>

    </div>
    <div class = "buttonPanel">
        <a href = "/insta" class = "button">Instagram</a>
        <a href = "/tiktok" class = "button">TikTok</a>
        <a href = "/vpn" class = "button">VPN</a>
        <a href = "/discord" class = "button">Discord</a>
    </div>
    <a href = "https://github.com/jack-bailey/Simple-Links" class = "footer">Source Code</a>
    
</body>
</html>