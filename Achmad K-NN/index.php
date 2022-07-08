		<?php require_once('assets/koneksi.php'); ?>
		<!DOCTYPE html>
		<html lang="en">

		<head>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Achmad Zainur Rahman-Metode K-NN</title>
			<!-- CSS only -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
			<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		</head>

		<body style="background-color:#F4F9F4">
			<div id="wrapper" ">
				
				<div class=" container">
				<div class="row d-flex justify-content-center">
					<!-- kiri -->
					<!-- data awal -->
					<div class="kiri col-sm-12 col-lg-10 mb-3">
						<div class="wrap table-responsive  p-4 mt-4 mx-4" style=" background-color:white;  box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px; border-radius: 20px; margin-bottom: 30px;">
							<h2 class="text-center mt-2 fw-boldclasser "> Pengukuran kualitas produknya makanan ringan(Metode K-NN)</h2>
							<p class="text-center"> kualitas makanan ringian apakah BAIK dan BURUK. Untuk menilai kualitas tersebut digunakan 2 variabel, yaitu: kenaikan derajat keasaman (C1) dan penyusutan volume (C2).</p>
							<div class="row">
								<div class="d-flex justify-content-between">
									<h4 class="mb-4 fw-bolder">Sempel Data</h4>
									<?php require('assets/page/tambah.php'); ?>
								</div>
							</div>
							<table class="table table-hover table-bordered responsive-utilities text-center">
								<thead>
									<tr class="bg-success text-white">
										<th scope="col">No</th>
										<th scope="col" class="col-4">C1</th>
										<th scope="col" class="col-4">C2</th>
										<th scope="col" class="col-4">Kategori</th>
										<th scope="col" style="min-width: 100px !important;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php

									$query = "SELECT * FROM dataknn";
									$result = mysqli_query($db, $query);
									$i = 1;
									// foreach
									foreach ($result as $data) { ?>
										<tr>
											<td><b><?php echo $i++ ?></b></td>
											<td><?php echo $data['c1'] ?></td>
											<td><?php echo $data['c2'] ?></td>
											<td <?php echo ($data['kategori'] == "Baik") ? "style='background-color: #8AF7AD; color: #098038;'" : "style='background-color: #F1C785; color: #C85E10;'" ?>><?php echo $data['kategori'] ?></td>
											<td class="aksi">
												<!-- Button trigger modal -->
												<a class="text-decoration-none text-success pe-2" data-bs-toggle="modal" data-target="#EditData<?php echo $data['no'] ?>" href="#EditData<?php echo $data['no'] ?>"><i class="bi bi-pencil-square" style="font-size:20px ;"></i></a>
												|<a class="text-decoration-none text-danger ps-2" data-bs-toggle="modal" data-target="#HapusData<?php echo $data['no'] ?>" href="#HapusData<?php echo $data['no'] ?>"><i class="bi bi-trash3-fill" style="font-size:20px ;"></i></a>
											</td>
											<?php require('assets/page/edit.php'); ?>
											<?php require('assets/page/hapus.php'); ?>
										</tr>

									<?php } ?>
								</tbody>
							</table>
							<div class="d-flex justify-content-center">
								<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#HitungData" style="font-size: 14px;"><i class="bi bi-calculator" style="font-size:15px ;"></i> Hitung</button>
								<div class="col-1"></div>
								<a class="btn btn-outline-success" style="font-size: 14px;" href="index.php"><i class="bi bi-arrow-clockwise" style="font-size:15px ;"></i> Reset</a>
							</div>
						</div>
					</div>
					<!-- end kiri -->

					<div class="col-12"></div>

					<!-- data olahan -->
					<!-- kanan -->
					<?php require('assets/page/data.php'); ?>

					<?php
					if (isset($_GET['opsi'])) :

						if ($_GET['opsi'] == "hitung") : ?>
							<div class="wrap table-responsive p-3 mt-3 mx-4" style="background: #4b866a; box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px; border-radius: 20px; margin-bottom: 30px;">
								<div class="row">
									<div class="col">
										<div class="kanan col-sm-12 col-lg-12 mb-3">
											<div class="wrap table-responsive p-3 mt-3 mx-3 " style="background: #ffffff;	box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px; border-radius: 5px 5px 5px 5px;">
												<h4 class="mb-4 fw-bolder " style="text-align:center ;">Evaluasi data</h4>
												<div class="kiri col-sm-12 col-lg-6 mb-3"></div>
												<p>Nilai d1 = <b><?php echo $_POST['d1'] ?></b> &nbsp&nbsp&nbsp&nbsp Nilai d2 = <b><?php echo $_POST['d2'] ?></b> &nbsp&nbsp&nbsp&nbsp Nilai K = <b><?php echo $_POST['K'] ?></b> </p>
												<table class="table table-hover table-bordered responsive-utilities text-center">
													<thead>
														<tr class="bg-success text-white">
															<th scope="col">C1</th>
															<th scope="col">C2</th>
															<th scope="col">Nilai Jarak</th>
														</tr>
													</thead>
													<tbody>
														<?php
														$query = "SELECT * FROM dataknn";
														$result = mysqli_query($db, $query);
														$i = 1;
														// foreach
														foreach ($result as $dataOlah) { ?>
															<tr>
																<td><?php echo $dataOlah['c1'] ?></td>
																<td><?php echo $dataOlah['c2'] ?></td>
																<?php
																$jarak = sqrt(pow($dataOlah['c1'] - $_POST['d1'], 2) + pow($dataOlah['c2'] - $_POST['d2'], 2));
																$query = "UPDATE dataknn SET hitung = '$jarak' WHERE no = $i";
																$update = mysqli_query($db, $query);
																$i++;
																?>
																<td><?php echo $jarak ?></td>
															</tr>

														<?php } ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="col">
										<div class="wrap table-responsive p-3 mt-3 mx-3" style="background: #ffffff;	box-shadow: rgba(0, 0, 0, 0.18) 0px 2px 4px; border-radius: 5px 5px 5px 5px;">
											<h4 class="mb-4 fw-bolder " style="text-align:center ;">
												Hasil Evaluasi Data K= <?php echo $_POST['K'] ?></h4>

											<table class="table table-hover table-bordered responsive-utilities text-center">
												<thead>
													<tr class="bg-success text-white">
														<th scope="col">C1</th>
														<th scope="col">C2</th>
														<th scope="col">Nilai Jarak</th>
														<th scope="col" class="col-4">Kategori</th>
													</tr>
												</thead>
												<tbody>
													<?php
													// array kategori
													$arraykategoriBaik = array();
													$arraykategoriBuruk = array();

													$K = (int)$_POST['K'];
													$query = "SELECT * FROM dataknn ORDER BY hitung ASC LIMIT 0,$K";
													$k = mysqli_query($db, $query);
													// foreach
													foreach ($k as $batasK) { ?>
														<tr>
															<td><?php echo $batasK['c1'] ?></td>
															<td><?php echo $batasK['c2'] ?></td>
															<td><?php echo $batasK['hitung'] ?></td>
															<td <?php echo ($batasK['kategori'] == "Baik") ? "style='background-color: #8AF7AD; color: #098038;'" : "style='background-color: #F1C785; color: #C85E10;'" ?>> <?php echo $batasK['kategori'] ?></td>
														</tr>

													<?php
														// tambah isi array
														if ($batasK['kategori'] == "Baik") :
															array_push($arraykategoriBaik, $batasK['kategori']);
														endif;
														if ($batasK['kategori'] == "Buruk") :
															array_push($arraykategoriBuruk, $batasK['kategori']);
														endif;
													} ?>
												</tbody>
											</table>

											<?php

											// hasil final
											$jumlahBaik = count($arraykategoriBaik);
											$jumlahBuruk = count($arraykategoriBuruk);
											$kategori_kategori = ($jumlahBaik > $jumlahBuruk) ? "Baik" : "Buruk";
											?>
											<div style="text-align:center ;">
												<h4 class="fw-bolder" style="margin-top: 60px;">Hasil Kategori</h4>
											</div>

											<table class="table table-hover table-bordered responsive-utilities text-center">
												<thead>
													<tr class="bg-success text-white">
														<th scope="col">D1</th>
														<th scope="col">D2</th>
														<th scope="col" class="col-4">Kategori</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><?php echo $_POST['d1'] ?></td>
														<td><?php echo $_POST['d2'] ?></td>
														<td <?php echo ($kategori_kategori == "Baik") ? "style='background-color: #8AF7AD; color: #098038;'" : "style='background-color: #F1C785; color: #C85E10;'" ?>><?php echo $kategori_kategori ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="d-flex justify-content-center">

										...</div>
								</div>

								<!-- end kanan -->


							</div>

					<?php endif;
					endif;

					// jika selesai aksi hitung, atur nilai setiap baris pada kolom hitung jadi 0
					$query = "SELECT * FROM dataknn";
					$reset_hitung = mysqli_query($db, $query);
					$i = 1;
					// foreach
					foreach ($reset_hitung as $reset) {
						$query = "UPDATE dataknn SET hitung = '0' WHERE no = $i";
						$update = mysqli_query($db, $query);
						$i++;
					}
					?>
				</div>
			</div>
			</div>
			<footer class="page-footer font-small blue">
				<div class="footer-copyright text-center py-3">© 2022 Copyright:
					<a href="#" style="color:black ;"> Achmad Zainur Rahman | 2019503076</a>
				</div>
			</footer>
		</body>

		</html>

		<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.js"></script>
		<script type="text/javascript" src="assets/js/jquery.min.js"></script>

		<?php
		// controller
		if (isset($_GET['opsi'])) :

			$opsi = $_GET['opsi'];

			if ($opsi == "input") { //opsi input

				if (isset($_POST['c1'])) {
					$c1 = $_POST['c1'];
				} else {
					echo "c1 tidak ditemukan";
				}
				if (isset($_POST['c2'])) {
					$c2 = $_POST['c2'];
				} else {
					echo "c2 tidak ditemukan";
				}
				if (isset($_POST['kategori'])) {
					$kategori = $_POST['kategori'];
				} else {
					echo "kategori tidak ditemukan";
				}

				$query = "INSERT INTO dataknn (c1, c2, kategori) VALUES ('$c1', '$c2', '$kategori')";
				$insert = mysqli_query($db, $query);

				if ($insert == false) {
		?>
					<script type='text/javascript'>
						alert('Gagal Menambah Data');
						window.location.href = "index.php";
					</script>
				<?php
				} else {
				?>
					<script type='text/javascript'>
						alert('Sukses Menambah Data');
						window.location.href = "index.php";
					</script>
				<?php
				}
			} elseif ($opsi == "edit") { //opsi update

				if (isset($_POST['no'])) {
					$no = $_POST['no'];
				} else {
					echo "No tidak ditemukan";
				}
				if (isset($_POST['c1'])) {
					$c1 = $_POST['c1'];
				} else {
					echo "c1 tnoak ditemukan";
				}
				if (isset($_POST['c2'])) {
					$c2 = $_POST['c2'];
				} else {
					echo "c2 tnoak ditemukan";
				}
				if (isset($_POST['kategori'])) {
					$kategori = $_POST['kategori'];
				} else {
					echo "kategori tnoak ditemukan";
				}
				$query = "UPDATE dataknn SET c1='$c1', c2='$c2', kategori='$kategori' WHERE no= '$no'";
				$update = mysqli_query($db, $query);

				if ($update == false) {
				?>
					<script type='text/javascript'>
						alert('Gagal Mengubah Data');
						window.location.href = "index.php";
					</script>
				<?php
				} else {
				?>
					<script type='text/javascript'>
						alert('Sukses Mengubah Data');
						window.location.href = "index.php";
					</script>
				<?php
				}
			} elseif ($opsi == "delete") { //opsi delete
				if (isset($_GET['no'])) {
					$no = $_GET['no'];
				} else {
					echo "No tidak ditemukan";
				}

				// hapus data
				$query = "DELETE FROM dataknn WHERE no = $no";
				$delete = mysqli_query($db, $query);

				// panggil data no paling terakhir
				$query = "SELECT no FROM dataknn ORDER BY no DESC";
				$result = mysqli_query($db, $query);
				$no_desc = mysqli_fetch_assoc($result);
				// jumlahkan data no terakhir
				$ai = $no_desc['no'] + 1;

				// tetapkan auto incremet baru agar kembali terurut dari data sembelumnya
				$query = "ALTER TABLE dataknn auto_increment=$ai";
				$alter = mysqli_query($db, $query);

				if ($delete == false) {
				?>
					<script type='text/javascript'>
						alert('Gagal Menghapus Data');
						window.location.href = "index.php";
					</script>
				<?php
				} else {
				?>
					<script type='text/javascript'>
						alert('Sukses Menghapus Data');
						window.location.href = "index.php";
					</script>
		<?php
				}
			}

		endif;
		// end controller
		?>
