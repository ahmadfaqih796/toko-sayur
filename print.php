<?php
@ob_start();
session_start();
if (!empty($_SESSION['admin'])) {
} else {
	echo '<script>window.location="login.php";</script>';
	exit;
}
require 'config.php';
include $view;
$lihat = new view($config);
$toko = $lihat->toko();
$hsl = $lihat->penjualan();
$hasil = $lihat->jumlah();
?>
<html>

<head>
	<title>print</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<style>
		@media print {
			table {
				margin-left: -45%;
			}
		}
	</style>
</head>

<body>
	<script>
		window.print();
	</script>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<center>
					<p><?php echo $toko['nama_toko']; ?></p>
					<p><?php echo $toko['alamat_toko']; ?></p>
					<p>Tanggal : <br /> <?php echo date("j F Y, G:i"); ?></p>
					<p>Kasir : <br /> <?php echo htmlentities($_GET['nm_member']); ?></p>
				</center>
				<table class="table table-bordered" style="width:100%;">
					<tr>
						<th>No.</th>
						<th>Barang</th>
						<th>Jumlah</th>
						<th>Total</th>
					</tr>
					<?php $no = 1;
					foreach ($hsl as $isi) { ?>
						<tr>
							<td><?php echo $no; ?></td>
							<td class="barang"><?php echo $isi['nama_barang']; ?></td>
							<td><?php echo $isi['jumlah']; ?></td>
							<td>Rp.<?php echo number_format($isi['total']); ?>,-</td>
						</tr>
					<?php $no++;
					} ?>
					<tr>
						<td class="text-end" colspan="3">Total Harga</td>
						<td>
							Rp.<?php echo number_format($hasil['bayar']); ?>,-
						</td>
					</tr>
					<tr>
						<td class="text-end" colspan="3">Bayar</td>
						<td>
							Rp.<?php echo number_format(htmlentities($_GET['bayar'])); ?>,-
						</td>
					</tr>
					<tr>
						<td class="text-end" colspan="3">Kembali</td>
						<td>
							Rp.<?php echo number_format(htmlentities($_GET['kembali'])); ?>,-
						</td>
					</tr>
				</table>
				<div class="clearfix"></div>
				<center>
					<p>Terima Kasih Telah berbelanja di toko kami !</p>
				</center>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>

</html>