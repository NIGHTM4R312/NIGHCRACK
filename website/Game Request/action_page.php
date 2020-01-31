<?php

if (isset($_POST['submit'])) {
    $E_mail = $_POST['mail'];
    $Game_name = $_POST['Game_name'];

$mailto ="nightcrack12@yahoo.com";
$headers = "From: ".$E_mail;


mail($mailto, $Game_name);
header("Location: index.php?mailsend");
}

?>

<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" />
        <link href="https://fonts.googleapis.com/css?family=Solway&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/favicon_io/site.webmanifest">
        <link rel="icon" type="image/png" href="/favicon_io/android-chrome-192x192.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/android-chrome-512x512.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon.ico">
    <title>Thank You | NIGHTCRACK</title>
    <style>
    * {
	padding: 0px;
	margin: 0px;
	overflow: hidden;
}
body {
	background-image: url(background.mp4);
	background-size: cover;
	background-attachment: fixed;
	font-family: 'Solway', serif;
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
	transition: 0.5s ease;
	
}

#posts {
	text-align: center;
    background-color: white;
    width: 855px;
    padding: 200px;
    margin: 100px;
    font-family: 'Solway', serif;
	display: block;
	margin-left: auto;
	margin-right: auto;
	box-shadow: 0 0 8px rgba(35, 173, 278, 1);
	
}

a {
    color: black;
    transition: 0.5s ease;
	opacity: 1;
	text-decoration: none;
	
}

a:hover {
	opacity: 0.5;
	text-decoration: underline white;
	color: black;
}

nav {
	list-style: none;
	text-align: center;
	text-shadow: 0 0 8px #4d4d4d;
	font-family: 'Solway', serif;
	display: flex;
	justify-content: space-around;
	min-height: 8vh;
	align-items: center;
	background-color: white;
	text-transform: capitalize;
	letter-spacing: 3px;
	font-weight: bold;
	box-shadow: 0 0 8px rgba(35, 173, 278, 1);
	position: sticky;
	top: 0px;
  }

  .tran1 {
	font-size: 20px;
	justify-content: space-around;
	display: inline;
	position: relative;
	text-align: left;
	padding-right: 100px;
}
  
.tran {
	font-size: 20px;
	justify-content: space-around;
	position: relative;
	text-align: left;
	padding-right: 150px;
	color: black;
}

.logo {
	margin-left: 10px;
	width: 150px;
	height: 150px;
	left: 0px;
}

.nav-links {
	display:flex;
	justify-content: space-around;
	width: 30%;

}

.title {
	letter-spacing: 3px;
	padding-right: 500px;
}

.navlogo {
	padding: 0px;
	margin: 0px;
}

.bg {
	position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.video {
	position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

@media (min-aspect-ratio: 16/9) {
	.video {
	  width: 100%;
	  height: auto;
	}
  }
  
  @media (max-aspect-ratio: 16/9) {
	.video {
	  width: auto;
	  height: 100%;
	}
  }

  .submit {
    background-color: white;
    width: 150px;
    height: 25px;
    box-shadow: 0 0 8px rgba(35, 173, 278, 1);
    border: 1px solid black;
    border-radius: 2px;
    transition: 0.5s ease;
	opacity: 1;
}
.submit:hover {
    opacity: 0.5;
    color: white;
    background-color: black;
}
    </style>
</head>
<body>
    
<nav>
    <a href="/index.html"> <img src="/logo nc png.png" width="80px" height="70px" > </a>

    <ul class="nav-links">
            <li style="list-style: none; color:black;"><a href="/about/index.html" class="tran">about</a></li>
			<li style="list-style: none; color: black;"><a href="/Contact/index.html" class="tran">Contact</a></li>
			<li style="list-style: none;"><a href="/Game Request/index.php" class="tran">Request</a></li>
        </ul>
</nav>

<article id="posts">
<h2>Thank You For Your Request.</h2>
<br>
<br>
<p>We Will Try Our Best To Release The Game That You Requested As Fast As Possible.</p>
<br>
<br>
<input type="submit" value="Home Page" class="submit"><a href="/index.html"></a>  

</article>

<div class="bg">
<video autoplay loop muted class="video">

    <source src="background.mp4" type="video/mp4">

</video>
</div>

</body>
</html>