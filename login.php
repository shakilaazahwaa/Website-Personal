<?php
session_start();
include "setting/koneksi.php";

?>
<!doctype html>
<html lang="en">
  <head>

    <link rel="stylesheet" href="css/login.css">

    <title>KILASERV - Login</title>
  </head>
  <body>

  <?php include 'menu.php'; ?>


			<form action="#" method="post">
				<div class="login">
					<h2> Login </h2>
					<br>
					<div class="input-group">
						<input type="email" name="email" required="">
						<span>Email</span>
					</div>
					<div class="input-group">
						<input type="password" name="password" required="">
						<span>Password</span>
					</div>
					<div class="input-group">
						<input type="submit" name="submit" value="Login">
					</div>
					<h5>Belum ada akun? <a class="daftar" href="daftar.php"> Daftar</a> </h5>
				</div>
			</form>
		<?php

			if (isset($_POST["submit"]))
			{

				$email = $_POST["email"];
				$password = $_POST["password"];
				$ambil = $koneksi->query("SELECT * FROM login WHERE email_pemesan='$email' AND password_pemesan='$password'");

				$akunterdaftar = $ambil->num_rows;

				if ($akunterdaftar==1)
				{
					$akun = $ambil->fetch_assoc();
					$_SESSION["login"] = $akun;
					echo "<script>location='index.php';</script>";

				}
				else
				{
					echo "<script>alert('login gagal');</script>";
					echo "<script>location='login.php';</script>";
				}
			}

			?>
  </body>
</html>