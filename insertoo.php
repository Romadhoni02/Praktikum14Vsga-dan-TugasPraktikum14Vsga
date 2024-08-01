<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dboo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo"koneksi berhasil<br>";

// Insert data
$sql = "INSERT INTO peserta (nama, email) VALUES
('Ali', 'ali@gmail.com'),
('Budi', 'budi@gmail.com'),
('Citra', 'citra@gmail.com'),
('Dian', 'dian@gmail.com'),
('Eko', 'eko@gmail.com'),
('Gilang', 'gilang@gmail.com'),
('Hana', 'hana@gmail.com'),
('Indra', 'indra@gmail.com'),
('Joko', 'joko@gmail.com'),
('Kiki', 'kiki@gmail.com'),
('Lina', 'lina@gmail.com'),
('Mira', 'mira@gmail.com'),
('Nina', 'nina@gmail.com'),
('Omar', 'omar@gmail.com'),
('Putu', 'putu@gmail.com'),
('Qori', 'qori@gmail.com'),
('Rian', 'rian@gmail.com'),
('Sari', 'sari@gmail.com'),
('Umar', 'umar@gmail.com'),
('Vera', 'vera@gmail.com'),
('Wulan', 'wulan@gmail.com'),
('Xena', 'xena@gmail.com'),
('Yusuf', 'yusuf@gmail.com'),
('Zara', 'zara@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>