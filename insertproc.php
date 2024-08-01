<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbpro";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data
$sql = "INSERT INTO participants (nama, email) VALUES
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
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>