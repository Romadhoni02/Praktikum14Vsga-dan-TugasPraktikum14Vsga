<?php
include_once 'database.php';
include_once 'config.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);

if($_POST) {
    $user->nim = $_POST['nim'];
    $user->nama = $_POST['nama'];
    $user->tempat_lahir = $_POST['tempat_lahir'];
    $user->tanggal_lahir = $_POST['tanggal_lahir'];
    $user->jurusan = $_POST['jurusan'];
    $user->program_studi = $_POST['program_studi'];
    $user->ipk = $_POST['ipk'];

    if($user->create()) {
        echo "User was created.";
    } else {
        echo "Unable to create user.";
    }
}
?>
