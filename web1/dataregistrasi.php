Script dataregistrasi.php :
<html>
<head>
            <title>TUGAS 06</title>
</head>
<body >
<tr>
    <h1>Data Registrasi<h1></td>
</tr>
<table width="500" border="2">
<?php
error_reporting(0);
$name=$_POST['name'];
$addr=$_POST['addr'];
$pob=$_POST['pob'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$edu=$_POST['edu'];
?>
    <td>Nama</td><td><?php echo $name; ?></td>
</tr>
    <td>Alamat</td><td><?php echo $addr; ?></td>
</tr>
    <td>Tempat Lahir</td><td><?php echo $pob; ?></td>
</tr>
    <td>Tanggal Lahir</td><td><?php echo $dob; ?></td>
</tr>
    <td>Jenis Kelamin</td><td><?php echo $gender; ?></td></tr>
    <td>Pendidikan</td><td><?php echo $edu; ?></td>
</table>
</h1>
<a href="formregistrasi.php">Back to Home</a>
</body>
</html> 