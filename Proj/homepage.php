<!DOCTYPE html>
<html>
<head>
	<title>SACCHARO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
	background-image: url("Homepage.jpg");
	background-position: center;
	background-repeat: no-repeat;
    background-color: #cccccc;
	margin:0;
	padding:0;
	color:#fff;
}
.main{
	position: relative;
	height:100vh;
	width:100%;
	top:0;
	left:0;
	right:0;
}
.main .overlay{
	position: absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:rgba(0, 0, 0, 0.5);
	z-index: 0;
}
.main .navbar .logo{
	position: relative;
	height:auto;
	width:20%;
	left:10%;
	float:left;
	font-family:'Lato',sans-serif;
	font-size:35px;
	font-weight:600;
	cursor: pointer;
	text-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
	transition: 0.1s ease-in-out;
}
.main .navbar .logo:hover{
	color:rgba(0, 0, 0, 0.4);
}
.main .navbar  ul{
	position: relative;
	float:right;
	width:50%;
	right:-14%;
	height:auto;
	margin:auto;
}
.main .navbar ul li{
	list-style-type: none;
	display: inline-block;
	height:100%;
	width:auto;
	border:1px solid rgba(255, 255, 255, 0.88);
	border-radius:2px ;
	cursor: pointer;
	padding:10px;
	box-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
	transition: 0.1s ease-in-out;
	box-sizing: border-box;
}
.main .navbar ul li a{
	color:#fff;
	text-align: center;
	text-decoration: none;
	font-family:'cinzel',sans-serif;
	font-size:15px;
	font-weight:300;
	display: block;
}
.main .navbar ul li:hover{
	background:rgba(0, 0, 0, 0.4);
}
.main .heading{
	position: absolute;
	height:auto;
	width:100%;
	top:50%;
	transform: translateY(-50%);
	text-align: center;
	text-shadow:0px 0.5px 5px rgba(0, 0, 0, 0.2);
}
.main .heading .head{
	position: relative;
	font-family: 'RacingSansOne',sans-serif;
	font-size:48px;
	font-weight: 600; 
	color:#fff;
}
.main .heading .head span{
	color:#09f111;
}
.main .heading  .sub{
	position: relative;
	font-family: 'cinzel',sans-serif;
	font-size:22px;
	font-weight: 300; 
	color:#fff;
	margin:-2% 0 2% 0;
}
.main .heading .btns{
	height:auto;
	width:100%;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: center;
	position: relative;
}
.main .heading .btns a{
	color:#fff;
	text-align: center;
	text-decoration: none;
	font-family:'cinzel',sans-serif;
	font-size:15px;
	font-weight:300;
	display:block;
	border:1px solid rgba(255, 255, 255, 0.5);
	height:auto;
	width:150px;
	padding:10px;
	display: flex;
	text-align: center;
	align-items: center;
	justify-content: center;
	margin-left:1%;
	border-radius: 2px;
	transition: 0.5s ease-in-out;
}
.main .heading .btns a:hover{
	background:#017fb5;
	border:1px solid #017fb5;
}
.main .heading .btns .btn1{
	background:#017fb5;
	border:1px solid #017fb5;
}
.main .heading .btns .btn1:hover{
	background:#017fb5;
	border:1px solid #017fb5 ;
	color:rgba(255, 255, 255, 0.95);
}
.main .heading .btns .btn2{
	background:#017fb5;
	border:1px solid #017fb5;
}
.main .heading .btns .btn2:hover{
	background:#017fb5;
	border:1px solid #017fb5 ;
	color:rgba(255, 255, 255, 0.95);
}
.main .heading .btns .btn3{
	background:#017fb5;
	border:1px solid #017fb5;
}
.main .heading .btns .btn3:hover{
	background:#017fb5;
	border:1px solid #017fb5 ;
	color:rgba(255, 255, 255, 0.95);
}
</style>
</head>
<body>
	<div class="main">
		<div class="overlay"></div>
		<div class="navbar">
			<div class="logo">Saccharo</div>
		</div>
		<div class="heading">
				<h1 class="head">WELCOME TO <span>SACCHARO</span></h1>	
				<div class="btns">
					<a class="btn1" href="login_donor.php">LOGIN / SIGNUP AS DONOR</a>
					<a class="btn2" href="login_ngo.php">LOGIN / SIGNUP AS NGO</a>
                    <a class="btn3" href="about.php">ABOUT US</a>
				</div>	
		</div>
	</div>	
</body>
</html>