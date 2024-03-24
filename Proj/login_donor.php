<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, 
                         initial-scale=1.0">
    <title>Login</title>
    <!--<link rel="stylesheet" 
          href="login.css">-->
    <style>
        
* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family:sans-serif;
}

body {
    background-image: url("Homepage.jpg");
	height: 100vh;
	width: 100vw;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	gap: 30px;

}

header {
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	gap: 8px;
}

.heading {
	color: rgb(255, 255, 255);
}

.title {
	font-weight: 400;
	letter-spacing: 1.5px;
    color: rgb(255, 255, 255);
}

.container {
	height: 700px;
	width: 500px;
	background-color: rgb(255, 255, 255, 0.475);
	box-shadow: 8px 8px 20px rgb(0, 0, 0);
	position: relative;
	overflow: hidden;
}

.btn {
	height: 60px;
	width: 300px;
	margin: 20px auto;
	box-shadow: 10px 10px 30px rgb(16, 66, 1);
	border-radius: 50px;
	display: flex;
	justify-content: space-around;
	align-items: center;
}

.login,
.signup {
	font-size: 22px;
	border: none;
	outline: none;
	background-color: transparent;
	position: relative;
	cursor: pointer;
}

.slider {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	background-image: linear-gradient(to right,
            rgb(98, 255, 0, 0.568),
			rgb(98, 255, 0, 0.568));
	position: absolute;
	top: 20px;
	left: 100px;
	transition: all 0.5s ease-in-out;
}

.moveslider {
	left: 250px;
}


.form-section {
	height: 550px;
	width: 1000px;
	padding: 20px 0;
	display: flex;
	position: relative;
	transition: all 0.5s ease-in-out;
	left: 0px;
}

.form-section-move {
	left: -500px;
}

.login-box,
.signup-box {
	height: 100%;
	width: 500px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	padding: 0px 40px;
}

.login-box {
	gap: 50px;
}

.signup-box {
	gap: 20px;
}

.ele {
	height: 60px;
	width: 400px;
	outline: none;
	border: none;
	color: rgb(0, 0, 0);
	background-color: rgb(196, 185, 185);
	border-radius: 50px;
	padding-left: 30px;
	font-size: 18px;
}

.clkbtn {
	height: 60px;
	width: 150px;
	border-radius: 50px;
	background-image: linear-gradient(to right,
			rgb(3, 182, 0),
			rgb(3, 182, 0));
	font-size: 22px;
	border: none;
	cursor: pointer;
}

/* For Responsiveness of the page */

@media screen and (max-width: 650px) {
	.container {
		height: 600px;
		width: 300px;
	}

	.title {
		font-size: 15px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 50px;
	}

	.moveslider {
		left: 150px;
	}

	.form-section {
		height: 500px;
		width: 600px;
	}

	.form-section-move {
		left: -300px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 300px;
	}

	.ele {
		height: 50px;
		width: 250px;
		font-size: 15px;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}

@media screen and (max-width: 320px) {
	.container {
		height: 600px;
		width: 250px;
	}

	.heading {
		font-size: 30px;
	}

	.title {
		font-size: 10px;
	}

	.btn {
		height: 50px;
		width: 200px;
		margin: 20px auto;
	}

	.login,
	.signup {
		font-size: 19px;
	}

	.slider {
		height: 50px;
		width: 100px;
		left: 27px;
	}

	.moveslider {
		left: 127px;
	}

	.form-section {
		height: 500px;
		width: 500px;
	}

	.form-section-move {
		left: -250px;
	}

	.login-box,
	.signup-box {
		height: 100%;
		width: 250px;
	}

	.ele {
		height: 50px;
		width: 220px;
		font-size: 15px;
	}

	.clkbtn {
		height: 50px;
		width: 130px;
		font-size: 19px;
	}
}

        </style>
</head>
  
<body>
	
    <header>
	<div class="heading">
		<h1><a class="heading" href="homepage.php" style="text-decoration:none">Saccharo</a> </h1></div> 
        <h3 class="title">Login or Signup</h3>
    </header>
  
    <!-- container div -->
    <div class="container">
  
        <!-- upper button section to select
             the login or signup form -->
        <div class="slider"></div>
        <div class="btn">
            <button class="login">Login</button>
            <button class="signup">Signup</button>
        </div>
  
        <!-- Form section that contains the
             login and the signup form -->
        <div class="form-section">
            <FORM action = "connect_login_donor.php" name="login" method="POST">
                <!-- login form -->
                <div class="login-box">
                    <input type="email" 
                        name="email"
                        class="email ele" 
                        placeholder="Email"
						maxlength = "35"
						autocomplete="off">
                    <input type="password"
                        name="password"
                        class="password ele" 
                        placeholder="Password"
						maxlength = "35"
						autocomplete="off">
                    <button class="clkbtn">Login</button>
                </div>
            </FORM>
            <FORM action = "connect_signup_donor.php" name="signup" method="POST">
                <!-- signup form -->
                <div class="signup-box">
                    <input type="text" 
                        name="name"
                        class="name ele" 
                        placeholder="Name (Least 6 Characters, Max 35)"
						maxlength = "35"
						minlength = "6"
						autocomplete="off"
						required>
                    <input type="text" 
                        name="location"
                        class="location ele" 
                        placeholder="Location (Least 3 Characters, Max 35)"
						maxlength = "35"
						minlength= "3"
						autocomplete="off"
						required>
					<input type="text"
                        name="id" 
                        class="id ele" 
                        placeholder="AdhaarNo"
						minlength = "12"
						maxlength = "12"
						autocomplete="off"
						required>
                    <input type="email" 
                        name="email"
                        class="email ele" 
                        placeholder="Email"
						maxlength = "35"
						autocomplete="off"
						required>
					<input type="phoneno" 
                        name="phoneno"
                        class="phoneno ele" 
                        placeholder="Phone No"
						minlength = "10"
						maxlength="10"
						autocomplete="off"
						required>
					<input type="address" 
                        name="address"
                        class="address ele" 
                        placeholder="Address (Least 10 Characters, Max 100)"
						maxlength = "100"
						minlength= "10"
						autocomplete="off"
						required>
                    <input type="password"
                        name="password" 
                        class="password ele" 
                        placeholder="Password (Least 6 Characters, Max 35)"
						maxlength = "35"
						minlength= "6"
						autocomplete="off"
						required>
                    <input type="password" 
                        name="cpassword"
                        class="password ele" 
                        placeholder="Confirm password"
						maxlength = "35"
						minlength = "6"
						autocomplete="off"
						required>
                    <button name="sbutton" class="clkbtn">Sign up</button>
                </div>
            </FORM>
        </div>
    </div>
    <script src="login_donor.js"></script>
</body>
  
</html>