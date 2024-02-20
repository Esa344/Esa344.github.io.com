<?php
$server = "localhost";
$username = "root";
$password = "root"; 
$database = "web1"; 

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION["username"] = $user_data["username"];
            $_SESSION["nama"] = $user_data["nama"];
            header("location:");
        } else {
            $error = "Email atau Password salah";
        }
    } elseif (isset($_POST["register"])) {
        $email = $_POST["emails"];
        $password = $_POST["passwords"];
        $username = $_POST["names"];

        $query = "INSERT INTO user (email, password, username) VALUES ('$email', '$password', '$username')";
        
        if (mysqli_query($conn, $query)) {
            echo "Pendaftaran berhasil!";
        } else {
            echo "Error: " . $query . "<br> error men anjay" . mysqli_error($conn);
        }
    }
}
?>
