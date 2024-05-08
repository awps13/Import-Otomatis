<?php
// Pastikan Anda mengganti nilai ini sesuai dengan informasi koneksi PHPMyAdmin Anda
$servername = "localhost";
$username = "root";
$password = "";
$database = "";

// Koneksi ke PHPMyAdmin
$conn = new mysqli($servername, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Path relatif ke file SQL dari folder import.php
$sql_file = 'aplikasi.sql';

// Baca isi file SQL
$sql_query = file_get_contents($sql_file);

// Jalankan kueri SQL
if ($conn->multi_query($sql_query) === TRUE) {
    echo "Database berhasil diimpor.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
