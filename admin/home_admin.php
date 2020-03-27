<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: masuk_admin.php?acces_denied");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
    <style>
        .welcome{
            color: #fff;
            font-size: 35pt;
            font-weight: 900;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../admin/home_admin.php" class="navbar-brand">Beranda</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../admin/home_admin.php" class="nav-item nav-link active">Home</a>
                <a href="../admin/buku_admin.php" class="nav-item nav-link">Buku</a>
                <a href="../admin/edit_user.php" class="nav-item nav-link">User</a>
            </div>
            <form class="form-inline ml-auto">
                <div class="navbar-nav">
                    <a href="../logout.php" class="nav-item nav-link active">Logout</a>
                </div>
            </form>
        </div>
    </nav>
    <header>
        <h1 class="welcome">Selamat Datang <?php echo $_SESSION['username'];?></h1>
    </header>
</body>
</html>