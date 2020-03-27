<?php
    include '../config.php';

    $username = ($_POST ['username']);
    $password = (md5($_POST ['password']));

    $query = "SELECT * FROM t_anggota WHERE username = '$username' AND password = '$password' ";
    $sql = mysqli_query ($koneksi,$query);

    if($sql->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username;
        header("Location: home_user.php");
    }else{
        echo "<h1> Username atau Password anda salah </h1>";
        echo "<div class='form'>
                <h3>
                    <br/>Klik untuk <a href='../user/masuk_user.php'>Login ulang</a>
                </h3>
            </div>";
    }
?>