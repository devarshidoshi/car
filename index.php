<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
    <style>
        body {

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
            background: linear-gradient(90deg, #FF7585, #FFBBBA);
        }

        * {
            box-sizing: border-box;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button,
        #add , #login {
            border-radius: 20px;
            border: 1px solid #FF7585;
            background-color: #ff7585;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active,
        #add:active,
        #login:active {
            transform: scale(0.95);
        }

        button:focus,
        #add:focus,
        #login:focus {
            outline: none;
        }

        button.ghost,
        #add.ghost,
        #login.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 580px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: url(https://img2.goodfon.com/wallpaper/nbig/3/c9/beautiful-scenery-tree-sea.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
    </style>
</head>

<body>




    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="register.php" method="post">
                <h1>Create Account</h1>
                <input type="text" placeholder="Name" name="name" />
                <input type="date" name="DOB" />
                <input type="textarea" placeholder="Address" name="address" />
                <input type="text" placeholder="Name of car" name="carname" />
                <input type="text" placeholder="Company of car" name="companyname" />
                <input type="text" placeholder="Car Number" name="carnumber" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input name="add" type="submit" id="add" value="Submit">
            </form>

        </div>
        <div class="form-container sign-in-container">
            <form action="login.php" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class=""><img src="https://i.ibb.co/5LdP2GW/fb.png" height="30px" width="30px" /></i></a>
                    <a href="#" class="social"><i class=""><img src="https://i.ibb.co/5Ww6T5p/g.png" height="30px" width="30px" /></i></a>
                    <a href="#" class="social"><i class=""><img src="https://i.ibb.co/17P4PLV/l.jpg" height="30px" width="30px" /></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" name="user"/>
                <input type="password" placeholder="Password" name="pass"/>
                <a href="#">Forgot your password?</a>
                <input name="login" type="submit" id="login" value="Sign In">
                <!-- <button><a href="index.html">Sign In</a></button> -->
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <br>
                    <h1> Welcome Back!</h1>
                    <p>
                        To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn" onClick="signin()">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right"><br>
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp" onClick="signup()">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function signin() {
            container.classList.remove('right-panel-active');
        }

        function signup() {
            container.classList.add('right-panel-active');
        }
    </script>
    <script>
        $(document).ready(function() {
            $("#from-datepicker").datepicker({
                format: 'yyyy-mm-dd' //can also use format: 'dd-mm-yyyy'     
            });
        });
    </script>
</body>

</html>