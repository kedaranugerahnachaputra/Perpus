<?php
    include '../config.php';

    $username2 = ($_POST ['username2']);
    $password2 = (md5($_POST ['password2']));

    $query = "SELECT * FROM t_petugas WHERE username = '$username2' AND password = '$password2' ";
    $sql = mysqli_query ($koneksi,$query);

    if($sql->num_rows > 0){
        session_start();
        $_SESSION['username'] = $username2;
        header("Location: home_admin.php");
    }else{
        echo "<h1> Username atau Password anda salah </h1>";
        echo "<div class='form'>
                <h3>
                    <br/>Klik untuk <a href='../admin/masuk_admin.php'>Login ulang</a>
                </h3>
            </div>";
    }
?>