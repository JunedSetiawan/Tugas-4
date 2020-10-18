<?php
if (isset($_POST["kirim"])){
	$nama=$_POST["nama"];
	$email=$_POST["email"];
	$umur=$_POST["umur"];
	$kategori=$_POST["kategori"];
	$pesan=$_POST["pesan"];
	echo "<center><h4 style=font-family:helvetica; >Terima kasih telah menghubungi kami !</h4></center><br>";
	echo "<center><h2>Terkirim</h2></center><br>";
}
?>
<ul type="square" >
	<id="div">
	<?php
	echo "<strong><li> Nama </strong><br/>$nama<p>";  
    echo "<strong><li> Email </strong><br>$email<p>";  
    echo "<strong><li> Umur </strong><br>$umur<p>";  
    echo "<strong><li> Kategori </strong><br>$kategori<p>";  
    echo "<strong><li> Pesan </strong><br>$pesan";  
?></ul>

