<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Bebas+Neue&family=Lobster&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Bebas+Neue&family=Lobster&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sigmar&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Atkinson Hyperlegible Next", serif;
            font-optical-sizing: auto;
            font-style: normal;
            
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('vector.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        .container {
            border: 1px solid white;
            width: 420px;
            padding: 50px 30px;
            /* background-color: transparent; */

            border-radius: 10px;

            background: rgba(255, 255, 255, 0.2); /* Semi-transparent background */
            backdrop-filter: blur(10px); /* Blurs the background behind it */
            -webkit-backdrop-filter: blur(10px); /* Safari support */

            border-radius: 10px;
            color: white;
        }
        .container h2{
            border-radius: 10px;
            background-color: rgb(255, 255, 255);
            text-align: center;
            /* padding: 20px; */
            font-size: 55px;
            color: rgb(8, 135, 255) ;
            font-family: "Sigmar", serif;
            font-weight: 400;
            font-style: normal; 
            text-transform: uppercase;
            margin-bottom: 10px;
        }
        .container .input-group {
            width: 100%;
            height: 50px;
            margin-bottom: 10px;
            position: relative;
        }
        .container .input-group input {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 20px;
            padding: 20px 45px 20px 20px;
            outline-color: blue;
            font-size: 16px;
        }
        .input-group input::placeholder {
            color: gray;

        }
        .input-group i {
            color: gray;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);

        }

        .container .btn {
            border: none;
            width: 100%;
            padding: 10px 0;
            border-radius: 20px;
            background-color: rgb(8, 135, 255);
            font-size: 1rem;
            color: white;
            font-weight: 600;
        }
        .btn:hover {
            /* text-decoration: underline; */
            background-color: rgb(9, 110, 205);
            cursor: pointer;
        }

        .remember-me {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px;
        }
        .remember-me span a{
            text-decoration: none;
        }

        .remember-me label {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);

        }
        .remember-me input {
            margin-right: 5px;
            
            
        }

        .remember-me span a {
            color: rgb(255, 255, 255);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);

        }

        .remember-me span a:hover {
            color: rgb(0, 145, 255);
            text-decoration: underline;
        }
        .dont-account {
            margin-top: 30px;
            text-align: center;
            color: white;
        }

        .dont-account a{
            text-decoration: none;
            color: rgb(253, 254, 255);
        }

        .dont-account a:hover{
            text-decoration: underline;
            color: rgb(8, 135, 255);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Stockify</h2>
        <form action="">
            <div class="input-group">
                <input type="text" name="email" placeholder="Email Address" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-group">
                <input type="text" name="password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>
            

            <!-- Remember checkbox -->
             <div class="remember-me">
                <label><input type="checkbox">Remember me</label>
                <span><a href="#">Forgot Password?</a></span>
             </div>

             <button type="submit" class="btn">Login</button>

             <div class="dont-account">
                <p>Don't have an <a href="">Account?</a></p>
             </div>
        </form>
    </div>
</body>
</html>
