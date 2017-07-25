<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html>
<head>
<title>PHP Giriş & Kayıt Sistemi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="logout.php">Çıkış Yap</a>
        <div style="width: 500px; margin: 50px auto;">
           <h3>Hoşgeldin <?php echo $_SESSION['username']; ?></h3
        </div>
    </div>
</body>
</html>