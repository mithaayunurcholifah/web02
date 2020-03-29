<!DOCTYPE html>
<html>
<head>
	<title>Contoh Counter</title>
</head>
<body>
<?php
$nama_file="counter.dat";
if(file_exists($nama_file))
{
	$berkas=fopen($nama_file, "r");
	$pencacah=(integer)trim(fgets($berkas,225));
	$pencacah++;
	Fclose($berkas);
}
Else
$pencacah=1;
//simpan pencacah
$berkas=fopen($nama_file,"w");
Fputs($berkas, $pencacah);
Fclose($berkas);

//tulis ke halaman web
print("Anda Pengunjung ke- $pencacah <br>\n");
?>
</body>
</html>