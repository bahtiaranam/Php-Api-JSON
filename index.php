<?php
	require_once'koneksi.php';
	$query='SELECT*FROM siswa WHERE id = 1';
	$sql=mysqli_query($koneksi,$query);
	$siswa=array();

	while ($row = mysqli_fetch_array($sql)) {
		array_push($siswa,array(
			'<br>id siswa' => $row ['id'],
			'nama siswa' => $row ['nama'],
			'kelas siswa' => $row ['kelas']
		));
	}
	echo json_encode($siswa);

	mysqli_close($koneksi);
 ?>
