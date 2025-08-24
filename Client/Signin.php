<!DOCTYPE html>
<html lang="en">
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
        .container h2 {
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
        #close {
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
        input {
            padding: 10px 20px;
            border-radius: 5px;
            text-align: center;
        }
        .submit_btn {
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
        .submit_btn:hover {
            transition-duration: 0.2s;
            background: green;
            color: white;
        }
        #loginbtn {
            background: blue;
            color: white;
            font-weight: 200;
            padding: 2px 10px;
            border: none;
            cursor: pointer;
        }
        #loginbtn:hover {
            font-size: 20px;
            border-radius: 5px;
        }
        .Login {
            font-size: 20px;
            font-weight: 200;
        }
        .msgbox {
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
        <!-- form start -->
        <form class="frm" method="post" id="signup-form" action="../php/signdata.php">
            <h2>Sign in Here.</h2>
            <button id="close"><img src="../img/x.svg" class="close"></button>
            <img src="../img/person.svg" class="icon">
            <input type="text" placeholder="Enter Name" class="fname" name="name" required><br><br>

            <img src="../img/lock.svg" class="icon">
            <input type="password" placeholder="Enter Password" class="password" name="password" required><br><br>

            <img src="../img/geo-alt.svg" class="icon">
            <input type="text" placeholder="Enter Address" class="address" name="address" required><br><br>

            <img src="../img/phone-fill.svg" class="icon">
            <input type="number" placeholder="Enter Mobile Number" class="mob" name="mobileno" required><p class="inputmsg"></p><br><br>

            <img src="../img/envelope.svg" class="icon">
            <input type="email" placeholder="Enter Email Address" class="email" name="email" required><br><br>

            <img src="../img/gender-female.svg" class="icon">&nbsp;&nbsp;Female&nbsp;<input type="radio" value="female" name="gender" required>&nbsp;&nbsp;&nbsp;
            <img src="../img/gender-male.svg" class="icon">&nbsp;&nbsp;Male&nbsp;&nbsp;<input type="radio" value="male" name="gender" required><br><br>

            <input type="submit" class="submit_btn" name="submit" value="SUBMIT"><br><br>
        </form>
        <div class="msgbox">
            <h3>Thank You For Sign In!!🎉</h3>
        </div>
    </div>

    <script type="text/javascript">
        const closebtn = document.querySelector("#close");
        const submitbtn = document.querySelector(".submit_btn");
        const msgbox = document.querySelector(".msgbox");
        const inputmsg = document.querySelector(".inputmsg");
        const form = document.querySelector("#signup-form");

     
        const mobileInput = document.querySelector(".mob");

        mobileInput.addEventListener("blur", function () {
            if (mobileInput.value.length !== 10) {
         				alert("Enter 10 digit");
            }
        });

     
        closebtn.addEventListener("click", function () {
            window.location.href = "../Client/test.php";
        });

        
        // form.addEventListener("submit", function (e) {
        //     e.preventDefault();

           
        //     if (!form.checkValidity()) {
        //         return;
        //     }

           
        //     msgbox.style.display = "block";

       
        //     setTimeout(function () {
        //         window.location.href = "../Client/test.php"; 
        //     }, 1000); 
        // });
    </script>
</body>
</html>
