<?php
error_reporting(~E_NOTICE);

$page= @$_REQUEST['page'];
if ($page=="transaksi") {
	if(file_exists ("transaksi.php")) {
		include "transaksi.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="suratmasuk") {
	if(file_exists ("suratmasuk.php")) {
		include "suratmasuk.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="suratkeluar") {
	if(file_exists ("suratkeluar.php")) {
		include "suratkeluar.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="hasilpemeriksaan") {
	if(file_exists ("hasilpemeriksaan.php")) {
		include "hasilpemeriksaan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="cariarsip") {
	if(file_exists ("cariarsip.php")) {
		include "cariarsip.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="editsurat") {
	if(file_exists ("editsurat.php")) {
		include "editsurat.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="ubahpassword") {
	if(file_exists ("ubahpassword.php")) {
		include "ubahpassword.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="laporan") {
	if(file_exists ("laporan.php")) {
		include "laporan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="lapharian") {
	if(file_exists ("lapharian.php")) {
		include "lapharian.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="lapbulanan") {
	if(file_exists ("lapbulanan.php")) {
		include "lapbulanan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="laptahunan") {
	if(file_exists ("laptahunan.php")) {
		include "laptahunan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="grafik") {
	if(file_exists ("grafik.php")) {
		include "grafik.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}

elseif ($page=="graf_harian") {
	if(file_exists ("graf_harian.php")) {
		include "graf_harian.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="graf_bulanan") {
	if(file_exists ("graf_bulanan.php")) {
		include "graf_bulanan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="graf_tahunan") {
	if(file_exists ("graf_tahunan.php")) {
		include "graf_tahunan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="dokumentasi") {
	if(file_exists ("dokumentasi.php")) {
		include "dokumentasi.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="dok_suratmasuk") {
	if(file_exists ("dok_suratmasuk.php")) {
		include "dok_suratmasuk.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="dok_suratkeluar") {
	if(file_exists ("dok_suratkeluar.php")) {
		include "dok_suratkeluar.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="dok_hasilpemeriksaan") {
	if(file_exists ("dok_hasilpemeriksaan.php")) {
		include "dok_hasilpemeriksaan.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="dashboard") {
	if(file_exists ("dashboard.php")) {
		include "dashboard.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="jenis_surat") {
	if(file_exists ("jenis_surat.php")) {
		include "jenis_surat.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
elseif ($page=="detail_file_surat") {
	if(file_exists ("detail_file_surat.php")) {
		include "detail_file_surat.php";
	}
	else {
		echo "FILE HALAMAN UTAMA ADA";
	}
}
?>