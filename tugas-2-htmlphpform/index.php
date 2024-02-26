<?php
session_start();

if (count($_POST) > 0) {
  if (
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['whatsappNumber']) &&
    isset($_POST['address'])
  ) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['whatsappNumber'] = $_POST['whatsappNumber'];
    $_SESSION['address'] = $_POST['address'];
    echo "Data berhasil disimpan di dalam session! <br><br>";

    $cookie_name = 'user_info';
    $cookie_value = json_encode(array(
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'whatsappNumber' => $_POST['whatsappNumber'],
      'address' => $_POST['address'],
    ));
    setcookie($cookie_name, $cookie_value, time() + 60);
    echo "Data berhasil disimpan di dalam cookie! <br><br>";
  } else {
    echo "Data tidak lengkap! <br>";
  }
}

if (
  isset($_SESSION['name']) &&
  isset($_SESSION['email']) &&
  isset($_SESSION['whatsappNumber']) &&
  isset($_SESSION['address'])
) {
  echo "Data yang tersimpan di dalam session: <br>";
  echo "Nama: " . $_SESSION['name'] . "<br>";
  echo "Email: " . $_SESSION['email'] . "<br>";
  echo "Nomor WhatsApp: " . $_SESSION['whatsappNumber'] . "<br>";
  echo "Alamat: " . $_SESSION['address'] . "<br><br>";
} else {
  echo "Tidak ada data di dalam Session!<br><br>";
}

if (
  isset($_COOKIE['user_info'])
) {
  echo "Data yang tersimpan di dalam cookie: <br>";
  echo $_COOKIE['user_info'] . "<br><br>";
} else {
  echo "Tidak ada data di dalam Cookie!<br><br>";
}


?>

<html>

<body>
  <form action="" method="post">
    <input type="text" placeholder="Nama" name="name">
    <input type="email" placeholder="Email" name="email">
    <input type="tel" placeholder="WhatsApp Number" name="whatsappNumber">
    <input type="text" placeholder="Alamat" name="address">
    <button type="submit">Submit</button>
  </form>
</body>
<style>
  form {
    display: flex;
    flex-direction: column;
    align-items: start;
    gap: 10px;
  }
</style>

</html>