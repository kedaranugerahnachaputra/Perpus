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
        .welcome{
            color: #000;
            font-size: 40pt;
            font-weight: 900;
        }
    </style>
</head>
<body>
        <form class="form" method="post">
            <span class="welcome">Login</span>
            <form action="masuk_admin.php" class="form" method="post">
                <input type="submit" name="User" value="User">
            </form>
            <form action="masuk_admin.php" class="form" method="post">
                <input type="submit" name="Admin" value="Admin">
            </form>
        </form>
</body>
</html>