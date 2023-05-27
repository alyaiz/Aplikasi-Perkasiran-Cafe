<?php
include 'koneksi.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kasir</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="../css/kasir.css" />
</head>

<body>
  <div class="container">
    <div class="kotak1">
      <h1>KASIR</h1>
      <img src="img/logokopi.png" />
      <h2>CAFE CASH</h2>
      <p>Wake up happy with our coffee</p>
    </div>
    <div class="kotak2">
      <div class="login-box">
        <form action="" method="POST">
          <div class="user-box">
            <input type="text" name="username" required="" />
            <label>username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="" />
            <label>password</label>
          </div>
          <button type="submit" value="Login" name="login">Login</button>
          <div class="coba">
            <?php
            if (isset($_POST['login'])) {
              $sql = mysqli_query($conn, "SELECT * FROM kasir WHERE username='$_POST[username]' AND password='$_POST[password]'");

              $cek = mysqli_num_rows($sql);
              if ($cek > 0) {
                $_SESSION['username'] = $_POST['username'];
                echo "<meta http-equiv=refresh content=0;URL='menuCof.php'>";
              } else {
                echo "<p aglin=center><b> username dan password salah! </b></p>";
                echo "<meta http-equiv=refresh content=2;URL='kasir.php'>";
              }
            }
            ?>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="back">
    <a href="index.html">back</a>
  </div>
</body>

</html>