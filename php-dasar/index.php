<!-- Pertemuan Senin, 26 Februari 2024 (sesi mentoring malam)-->

<?php
// SESSION
session_start();

$_SESSION['color'] = 'green';
echo $_SESSION['color'];
echo "<br/>";
echo "<br/>";

// COOKIE
$warna = 'hijau';
echo $warna;
echo "<br/>";
echo "<br/>";
setcookie('color', 'hijau', time() + 86400 * 30, '/');

$cookie_name = 'user';
$cookie_value = json_encode(array(
  'nama' => 'rifqi',
  'umur' => '20',
));

echo $cookie_value;
setcookie($cookie_name, $cookie_value, time() + 86400 * 30, '/');
echo $_COOKIE[$cookie_name];
echo "<br/>";
echo "<br/>";


if (count($_POST) > 0) {
  print_r($_POST);

  // verifikasi data login
  $username = 'admin';
  $password = '123456';

  if ($_POST['username'] == $username && $_POST['password'] == $password) {
    echo "Login berhasil!";
    $_SESSION['username'] = $username;
  } else {
    echo "Login gagal!";
  }
}

if (isset($_SESSION['username'])) {
  echo 'Selamat datang, ' . $_SESSION['username'];
} else {
  echo 'Silahkan login terlebih dahulu';
}
?>

<!DOCTYPE html>
<html>

<body>
  <form action="" method="post">
    <input type="text" placeholder="username" name="username" />
    <input type="password" placeholder="password" name="password" />
    <button type="submit">Login</button>
  </form>
</body>

</html>