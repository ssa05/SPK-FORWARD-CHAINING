<?php
switch($page){
	case 'proses_konsultasi':
		include "konsultasi_proses.php";
		break;
	case 'konsultasi':
		include "konsultasi.php";
		break;
	case 'riwayat':
		include "riwayat.php";
		break;
	case 'update_riwayat':
		include "riwayat_update.php";
		break;
	case 'user':
		include "user.php";
		break;
	case 'update_user':
		include "user_update.php";
		break;
	case 'perusahaan':
		include "perusahaan.php";
		break;
	case 'update_perusahaan':
		include "perusahaan_update.php";
		break;
	case 'admin':
		include "admin.php";
		break;
	case 'update_admin':
		include "admin_update.php";
		break;
	case 'kualifikasi':
		include "kualifikasi.php";
		break;
	case 'update_kualifikasi':
		include "kualifikasi_update.php";
		break;
	case 'magang':
		include "magang.php";
		break;
	case 'update_magang':
		include "magang_update.php";
		break;
	case 'rule':
		include "rule.php";
		break;
	case 'update_rule':
		include "rule_update.php";
		break;
	case 'password':
		include "password.php";
		break;
	default:
		include "beranda.php";
		break;
}
