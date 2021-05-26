
<?php
include '.env';
$limit = 5 * 1024 * 1024;
$ekstensi =  array('png','pdf');

		if(!in_array($tipe_file, $ekstensi)){
			header("location:index.php?alert=ekstensi salah");			
		}else{		
			move_uploaded_file($tmp, 'file/'.date('d-m-Y').'-'.$namafile);
			$x = date('d-m-Y').'-'.$namafile;
			mysqli_query($koneksi,"INSERT INTO dokumen VALUES(NULL, '$x')");
			header("location:index.php?alert=simpan");
		}
	

?>
