<?php
//memasukkan file config.php
    include('../config.php');
    if(isset($_POST['submit'])){
        $nama			    = @$_POST['nama'];
        $kelas			    = @$_POST['kelas'];
        $telp	            = @$_POST['telp'];
        $username	        = @$_POST['username'];
        $password	        = @$_POST['password'];
        $pass               = md5($password);
        $id_level	        = @$_POST['id_level'];

        $cek = mysqli_query($koneksi, "SELECT * FROM t_anggota WHERE nama='$nama'") or die(mysqli_error($koneksi));

        if(mysqli_num_rows($cek) == 0){
            $sql = mysqli_query($koneksi, "INSERT INTO t_anggota (nama, kelas, telp, username, password, id_level) VALUES('$nama', '$kelas', '$telp', '$username', '$pass', '$id_level')") or die(mysqli_error($koneksi));

            if($sql){
                echo '<script>alert("Berhasil menambahkan data."); document.location="edit_user.php";</script>';
            }else{
                echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
            }
        }else{
            echo '<div class="alert alert-warning">Gagal, Judul sudah terdaftar.</div>';
        }
    }
?>  