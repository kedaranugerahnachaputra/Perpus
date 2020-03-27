<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .g{
            background: linear-gradient(-90deg,#093779,#097954,#097910);
            background-size:2000px 2000px;
            animation: Gradient 10s ease infinite;
        }
        @-webkit-keyframes Gradient{
            0%{
                background-position: 0% 50%
            }
            50%{
                background-position: 100% 50%
            }
            100%{
                background-position: 0% 50%
            }
        }
        .form{
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 24px;
            transform: translate(-50%,-50%);
            background: #06c985;
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
            width: 200px;
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
<body class="g">
        <form action="" class="form" method="post">
            <span class="welcome">Buat Akun</span>
            <input type="text" name="name2" placeholder="Nama">
            <input type="text" name="telp2" placeholder="Telepon">
            <input type="text" name="username2" placeholder="Username">
            <input type="password" name="password2" placeholder="Password">
            <input type="submit" name="simpan2" value="Daftar"><br>
        </form>
</body>
</html>

<?php
    include 'config.php';
    if(@$_POST['simpan2']){
        $name2 = @$_POST['name2'];
        $t2 = @$_POST['telp2'];
        $username2 = @$_POST['username2'];
        $Password2 = @$_POST['password2'];
        $pass2 = md5($Password2);

        $querys = mysqli_query($koneksi, "INSERT INTO `t_petugas` (nama,telp,username,password) 
                    VALUES ('$name2', '$t2', '$username2', '$pass2')");
        if($querys){
            echo "<div class='form'>
                <h3> Berhasil Registrasi Akun<h3>
                <br>Klik untuk <a href='../admin/masuk_admin.php'>Login</a>
                </div>";
        }
        else{
            echo "Data gagal di inputkan";
        }
    }
?>

