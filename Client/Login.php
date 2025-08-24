<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A To Z Footwear</title>
	<style type="text/css">
		 * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            width: 100%;
            height: 100%;
            background: url('../img/formbk.jfif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            position: absolute;
            justify-content: center;
            height: 100vh;
            width: 100%;
            text-align: center;
        }
        .container h3 {
            position: relative;
            top: -10px;
            text-align: center;
            color: darkmagenta;
        }
        .frm {
            position: absolute;
            top: 100px;
            left: 450px;
            width: 400px;
            height: auto;
            padding-top: 60px;
            padding: 20px 30px;
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 2px 2px 2px 4px;
            border-radius: 20px;
        }
        #closebtn
        {
            background: none;
            border: none;
            font-weight: 100;
        }
         .close {
            position: absolute;
            left: 350px;
            top: 5px;
            height: 50px;
            cursor: pointer;
        }
        .icon {
        	width: 1.4rem;
            height: 1.4rem;
            top: 6px;
            position: relative;
        }
        input 
        {
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 4px;
        }
        .loginbutton {
            background: blue;
            color: white;
            font-weight: 100;
            font-size: 1rem;
            padding: 10px 50px;
            border: none;
            border-radius: 5px;
            transition: all 0.5s ease 0.5s;
            cursor: pointer;
        }
        .loginbutton:hover {
            transition-duration: 0.2s;
            background: green;
            color: white;
        }
        #signinbtn {
            background: blue;
            color: white;
            font-weight: 200;
            padding: 2px 10px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        #signinbtn:hover {
            font-size: 20px;
            border-radius: 5px;
        }
        .msgbox 
        {
           position: absolute;
           top: 5px;
           left: 8em;
           text-align: center;
           font-weight: 200;
           font-size: 30px;
           background-color: green;
           color: white;
           padding: 0px 200px;
           display: none;
        }
	</style>
</head>
<body>
	<div class="container">
		<form class="frm" method="post" action="loginck.php">
			<h3>Login Now..</h3>

			 <button id="closebtn"><img src="../img/x.svg" class="close"></button>

			 <img src="../img/person.svg" class="icon">
			 <input type="text" placeholder="Enter Username" class="username" name="username" required><br>

			 <img src="../img/lock.svg" class="icon1">
    		<input type="password" placeholder="Enter Password" class="password" name="password" required><br>

    		<button class="loginbutton" type="submit" name="Login">Login</button><br>
		</form>
		 <div class="msgbox">
            <h3>Thank You Welcome!!🎉</h3>
        </div>
	</div>
</body>
<script type="text/javascript">
	const closebtn=document.querySelector("#closebtn").addEventListener("click",function(){
		window.location.href="../Client/test.php";
	});

</script>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A To Z Footwear</title>
    <style type="text/css">
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            width: 100%;
            height: 100%;
            background: url('../img/formbk.jfif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            position: absolute;
            justify-content: center;
            height: 100vh;
            width: 100%;
            text-align: center;
        }
        .container h3 {
            position: relative;
            top: -10px;
            text-align: center;
            color: darkmagenta;
        }
        .frm {
            position: absolute;
            top: 100px;
            left: 450px;
            width: 400px;
            height: auto;
            padding-top: 60px;
            padding: 20px 30px;
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 2px 2px 2px 4px;
            border-radius: 20px;
        }
        #closebtn
        {
            background: none;
            border: none;
            font-weight: 100;
        }
         .close {
            position: absolute;
            left: 350px;
            top: 5px;
            height: 50px;
            cursor: pointer;
        }
        .icon {
            width: 1.4rem;
            height: 1.4rem;
            top: 6px;
            position: relative;
        }
        input 
        {
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 4px;
        }
        .loginbutton {
            background: blue;
            color: white;
            font-weight: 100;
            font-size: 1rem;
            padding: 10px 50px;
            border: none;
            border-radius: 5px;
            transition: all 0.5s ease 0.5s;
            cursor: pointer;
        }
        .loginbutton:hover {
            transition-duration: 0.2s;
            background: green;
            color: white;
        }
        #signinbtn {
            background: blue;
            color: white;
            font-weight: 200;
            padding: 2px 10px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }
        #signinbtn:hover {
            font-size: 20px;
            border-radius: 5px;
        }
        .msgbox 
        {
           position: absolute;
           top: 5px;
           left: 8em;
           text-align: center;
           font-weight: 200;
           font-size: 30px;
           background-color: green;
           color: white;
           padding: 0px 200px;
           display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="frm" method="post" action="loginck.php">
            <h3>Login Now..</h3>

             <button id="closebtn"><img src="../img/x.svg" class="close"></button>

             <img src="../img/person.svg" class="icon">
             <input type="text" placeholder="Enter Username" class="username" name="username" required><br>

             <img src="../img/lock.svg" class="icon1">
            <input type="password" placeholder="Enter Password" class="password" name="password" required><br>

            <button class="loginbutton" type="submit" name="Login" id="logbtn">Login</button><br>
        </form>
         <div class="msgbox">
            <h3>Thank You Welcome!!🎉</h3>
        </div>
    </div>
</body>
<script type="text/javascript">
    const closebtn=document.querySelector("#closebtn").addEventListener("click",function(){
        window.location.href="../Client/test.php";
    });

</script>
</html>

</html>
