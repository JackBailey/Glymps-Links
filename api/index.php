<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glymps</title>
    <link rel="shortcut icon" type="image/jpg" href="/images/jb.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');

        body{
            background: #ef32d9;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #89fffd, #ef32d9);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #89fffd, #ef32d9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            margin: 3%;
            font-family: 'Open Sans', sans-serif;
            color: white; 
        }

        .pfp img{
            box-shadow: inset 0px 0px 0px 0px rgb(41, 41, 41);
            width: 120px;
            align-self: center;
            margin: 0 auto;
        }

        .pfp{
            width: 100%;
            display: flex;
        }

        h1{
            width: 100%;
            text-align: center;
            font-size: larger;
        }

        .socialIcons{
            width: 100%;
            text-align: center;
        }

        .socialIcons a{
            text-decoration: none;
            text-align: center;
            font-size: 24px;
            transition: 250ms;
            color: white;
            padding: 3px;
        }


        .socialIcons a:hover{
            transform: scale(1.3);
        }

        .buttonPanel{
            margin-top: 40px;
            width: 100%;
            align-items: center;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        .button{
            text-decoration: none;
            color: white;
            display: block;
            width: 30%;
            background: rgb(58, 58, 61);
            border: 1px solid rgb(68, 68, 71);
            padding: 20px;
            border-radius: 5px;
            box-shadow: 3px 3px 2px black;
            margin: 5px;
            transition: 250ms;
        }

        .button:hover{
            transform: scale(1.05);
        }

        @media screen and (max-width: 1000px){
            .button{
                width: 85%;
            }
        }

        .footer{
            margin: -3%;
            position: absolute;
            bottom: 0;
            text-align: center;
            width: 100%;
            overflow: hidden;
            margin-bottom: 10px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: 500ms;
        
        }

        .footer:hover{
            color: rgb(0, 110, 255);
        }

    </style>
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