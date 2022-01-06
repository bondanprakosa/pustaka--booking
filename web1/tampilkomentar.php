<html>
<head>
                 <title color="black"> Data Komentar </title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
?>
<h1><font color="black"> DATA KOMENTAR ANDA </font></h1>
<hr>
Nama anda : <?php echo $nama;?><br>
Email anda : <?php echo $email;?><br>
Komentar : <?php echo $komentar;?><br>
<a href="forminputkomentar.php">INPUT DATA LAGI</a>
</body>
</html>