
body {
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-color: white;
}
header{
  background-color: black;
  position: fixed;
  top: 0;
  width: 100%;
  height: 10vh;
  color: white;
}
marquee{
  padding: 0px;
  margin: 0px;
  height: 10px;
  font-size: 10px;
  direction: right;
  font-weight: bold;
}
header div#nav{
  padding: 0px 15px;
  top: 0;
  height: auto;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-items: space-evenly;
  transition: 800ms;
}
header div.down{
  border: none;
  padding-top: 0px;
  background-color: black;
  width: 100vw;
  height: auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: flex-end;
  padding-bottom: 0px;
  margin-top: -40px;
  margin-left: auto;
  margin-right: 0px;
  transition: 800ms;
  
}
div.down input.src{
  background-color: rgba(138, 138, 138, 0.55);
  height: 0px;
  width: 96vw;
  border-radius: 10px;
  border: none;
  color: rgba(255, 255, 255, 0.7);
  padding-left: 10px;
  opacity: 0;
  transition: 1s;
  margin-bottom: 5px;
}
div.down input.src::placeholder{
  color:white;
  opacity: 0.6;
}
div.down div.item{
  background-color:rgba(138, 138, 138, 0.55);
  height: 0px;
  width: 95vw;
  border-radius: 10px;
  border: none;
  color: rgba(255, 255, 255, 0.7);
  padding-left: 7px;
  padding-right: 7px;
  margin-bottom: 5px;
  display: flex;
  align-items: center;
  opacity: 0;
  transition: 1s;
}
div.accr{
  height: 25px;
  width: 5px;
  background-color:white;
  border-radius: 10px;
  margin-right: 5px;
}
div.sdbutton{
  transform: rotate(45deg);
  height: 6px;
  width: 6px;
  border: solid;
  border-left: none;
  border-bottom: none;
  border-width: 3px;
  margin-left: auto;
  transition: 300ms;
}
div.subdrop{
  height: auto;
  width: 89vw;
  background-color: rgba(138, 138, 138, 0.55);
  border-radius: 5px;
  border-top-right-radius: 0px;
  padding-left: 10px;
  opacity: 0;
  transition: 1s;
  display: none;
  margin-bottom: 5px;
}
div.subdrop h6{
  margin: 10px;
}
div.boxbuble{
  width: 100vw;
  height: 0px;
  display: flex;
  justify-content: center;
  margin-top: auto;
  z-index: -1;
}
header div.buble{
  background-color: black;
  border-radius: 100%;
  height: 50px;
  width: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  transition: 800ms;
}
header div.buble .dbutton{
  transform: rotate(135deg);
  height: 6px;
  width: 6px;
  border: solid;
  border-left: none;
  border-bottom: none;
  border-width: 3px;
  margin: auto;
  background-color: transparent;
  transition: 1s;
  display: none;
}
header h1{
  margin: 0px;
}
header h4{
  font-size: 20px;
  display: flex;
  justify-content: center;
  width: 65px;
  color: black;
  background-color: white;
  border-radius: 20px;
  margin-left: auto;
  margin-right: 30px;
  margin-top: 0px;
  margin-bottom: 0px;
}
.boxSwich{
  padding: 1px;
  width: 30px;
  height: auto;
  background-color: white;
  display: flex;
  align-items: center; 
  border-radius: 15px;
  margin-left: auto;
}
.swichBall{
  background-color: red;
  margin: 0px;
  padding: 0px;
  margin-right: 15px;
  margin-left: 0px;
  height: 15px;
  width: 15px;
  border-radius: 15px;
  transition: 500ms;
}
main {
  flex: 1;
  padding: 60px 5px 5px 5px;
  margin-bottom: 10vh;
}

footer {
  text-align: center;
  position: fixed;
  bottom: 0;
  width: 100%;
  display: flex;
  justify-content: center;
}
nav {
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  background-color: black;
  margin-top: -10vh;
  border-radius: 20px;
  width: auto;
  height: 65px;
  transition: 800ms;
}
nav img{
  background-color: black;
  width: 30px;
  padding: 15px 15px 10px 15px;
  border-radius: 25px;
  transition: 800ms;
}
h3{
  margin-top: -5px;
  color: White;
  display: none;
}
nav ul {
  display: flex;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}
.float{
  position: fixed;
  height: 100vh;
  width: 100vw;
  background-color: rgba(0, 0, 0, 0.25);
  display: none;
  align-items: center;
 justify-content: center;
}
.float form{
  background-color: black;
  display: flex;
  flex-direction: column;
  height: 300px;
  width: 300px;
  align-items: center;
  justify-content: center;
  border-radius: 50px;
}
form h1{
  color: white;
  margin-top: -20px;
  margin-bottom: 20px;
}
form h1.x{
  position: absolute;
  margin-left: 50%;
  margin-top: -50%;
}
form input{
  margin: 7px;
  padding-left: 10px;
  height: 20px;
  width: 200px;
  border-radius: 20px;
  border: solid;
  border-color: black
  
}
input.submit{
  background-color: transparent;
  color: white;
  border: solid;
  height: auto;
  width: auto;
  font-size: 18px;
  font-weight: bolder;
  margin-top: 15px;
  padding: 0px 20px;
}
form a{
  color: white;
  font-size: 15px;
  margin-top: 10px;
  margin-bottom: -10px;
  text-decoration: underline;
}
form.login{
  display: none;
}
form.register{
  display: none;
}
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
