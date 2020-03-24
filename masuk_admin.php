<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .form{
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 24px;
            transform: translate(-50%,-50%);
            background: none;
            text-align: center;
        }
        .form input[type = "text"],.form input[type = "password"]{
            border: 0;
            background: #000;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
        }
        .form input[type = "submit"]{
            border: 0;
            background: #000;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            width: 150px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .submit{
            border: 0;
            background: #000;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 40px;
            width: 60px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;
        }
        .welcome{
            color: #000;
            font-size: 40pt;
            font-weight: 900;
        }
    </style>
</head>
<body>
        <form action="login.php" class="form" method="post">
            <span class="welcome">Login</span>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
            <a href="register.php" class="submit" >Daftar ?</a>
        </form>
</body>
</html>