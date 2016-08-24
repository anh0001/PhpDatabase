<?php
/**
 * Aplikasi Sederhana Akses database
 *
 * @file config.php
 * @author XXX
 * @date 17 Aug 2016 23:40
 */

/**
 * Koneksi ke server dan memilih database
 */
mysql_connect( 'localhost', 'root', '77777' );
mysql_select_db( 'pegawai' );

/**
 * Fungsi sederhana untuk mempersingkat penulisan kdoe program
 * Bersifat opsional, tetap bisa menggunakan fungsi PHP pada umumnya
 */
function itung_jumlahnya( $query ) { return mysql_num_rows( $query ); }
function uraikan( $query ) { return mysql_fetch_array( $query ); }
function bersihkan( $query ) { return mysql_real_escape_string( $query ); }

define( 'URL', 'http://localhost' );
define( 'NAME', 'Aplikasi Sederhana Akses database' );
$option = isset( $_GET['option'] ) ? $_GET['option'] : '';
$action = isset( $_POST['action'] ) ? $_POST['action'] : '';

?>