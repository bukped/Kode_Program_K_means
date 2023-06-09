<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['admin'])){ }else{ header('location:login.php'); }
    // panggil file
    require 'proses/panggil.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Daftarkan Member</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body style="background:#fdb35a;">
		<div class="container">
			<br/>
            <span style="color:#fff";>Selamat Datang, <?php echo $sesi['user'];?></span>
			<div class="float-right">	
				<a href="index.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a> 
				<a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
			</div>		
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Tambah Pengguna</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud.php?aksi=tambah_member" method="POST">
								<div class="form-group">
									<label>Nama Member</label>
									<input type="text" value="" class="form-control" name="nm_member">
								</div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" value="" class="form-control" name="alamat_member">
								</div>
								<div class="form-group">
									<label>Telp</label>
									<input type="text" value="" class="form-control" name="telepon">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" value="" class="form-control" name="email">
								</div>
								<div class="form-group">
									wajib
									<input type="text" value="unnamed.jpg" class="form-control" hidden name="gambar">
								</div>
								<div class="form-group">
									<label>NIK</label>
									<input type="text" value="" class="form-control" name="nik">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>