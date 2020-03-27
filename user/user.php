<?php
//memasukkan file config.php
include('../config.php');
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tampil Data Anggota</title>

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">

     <script>
       $(document).ready(function(){
         $("#myModal").on("show.bs.modal", function(event){
           var button = $(event.relatedTarget);

           var tittleData = button.data("title");
           $(this).find(".modal-title").text(titleData);
         });
       });
     </script>

     <style>
        .bs-example{
            margin: 20px;
        }
    </style>

   </head>
   <body class="background">

   <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../user/home_user.php" class="navbar-brand">Beranda</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../user/home_user.php" class="nav-item nav-link active">Home</a>
                <a href="../user/buku_user.php" class="nav-item nav-link">Buku</a>
                <a href="../user/user.php" class="nav-item nav-link">User</a>
            </div>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="../logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>

<div class="container" style="margin-top:20px">
<h2>Daftar Buku</h2>
<hr>
<table class="table table-striped table-hover table-sm table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>NO.</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>NO TELPON</th>
      <th>USERNAME</th>
      <th>ID LEVEL</th>
    </tr>
  </thead>
  <tbody>
    <?php
    //query ke database SELECT tabel t_anggota urut berdasarkan id yang paling besar
    $sql = mysqli_query($koneksi, "SELECT * FROM t_anggota ORDER BY id_anggota DESC") or die(mysqli_error($koneksi));
    //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
    if(mysqli_num_rows($sql) > 0){
      //membuat variabel $no untuk menyimpan nomor urut
      $no = 1;
      //melakukan perulangan while dengan dari dari query $sql
      while($data = mysqli_fetch_array($sql)){
        ?>
        <!-- menampilkan data perulangan -->
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['kelas']; ?></td>
          <td><?php echo $data['telp']; ?></td>
          <td><?php echo $data['username']; ?></td>
          <td><?php echo $data['id_level']; ?></td>
        </tr>
        <?php
        $no++;
      }
    //jika query menghasilkan nilai 0
    }else{
      echo '
      <tr>
        <td colspan="6">Tidak ada data.</td>
      </tr>
      ';
    }
    ?>
  <tbody>
</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

   </body>
 </html>